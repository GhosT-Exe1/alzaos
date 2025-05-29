<?php
// painel/apis/emitir_nfce.php

require_once("../config/conexao.php");
require_once("../config/config.php");
require_once("../inc/NuvemFiscalSDKService.php");

@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'admin'){
    echo json_encode(['success' => false, 'message' => 'Acesso não autorizado.']);
    exit();
}

$id_empresa = @$_POST['id_empresa'];
$id_venda = @$_POST['id_venda']; // ID da venda no seu sistema

if (empty($id_empresa) || empty($id_venda)) {
    echo json_encode(['success' => false, 'message' => 'ID da empresa ou venda não fornecido.']);
    exit();
}

// BUSCAR DADOS DA EMPRESA EMITENTE NO SEU BANCO DE DADOS
$query_empresa = $pdo->prepare("SELECT * FROM empresas WHERE id = :id_empresa");
$query_empresa->bindValue(":id_empresa", $id_empresa);
$query_empresa->execute();
$empresa = $query_empresa->fetch(PDO::FETCH_ASSOC);

if (!$empresa) {
    echo json_encode(['success' => false, 'message' => 'Empresa emitente não encontrada no sistema.']);
    exit();
}

// BUSCAR DADOS DA VENDA E ITENS NO SEU BANCO DE DADOS
$query_venda = $pdo->prepare("SELECT * FROM vendas WHERE id = :id_venda");
$query_venda->bindValue(":id_venda", $id_venda);
$query_venda->execute();
$venda = $query_venda->fetch(PDO::FETCH_ASSOC);

if (!$venda) {
    echo json_encode(['success' => false, 'message' => 'Venda não encontrada no sistema.']);
    exit();
}

$query_itens = $pdo->prepare("SELECT * FROM itens_venda WHERE id_venda = :id_venda");
$query_itens->bindValue(":id_venda", $id_venda);
$query_itens->execute();
$itens_venda = $query_itens->fetchAll(PDO::FETCH_ASSOC);

if (empty($itens_venda)) {
    echo json_encode(['success' => false, 'message' => 'Nenhum item encontrado para esta venda.']);
    exit();
}

// --- CONSTRUÇÃO DO PAYLOAD DA NFC-E (CONSULTE A DOCUMENTAÇÃO DA NUVEM FISCAL/NFE.IO!) ---
// A estrutura da NFC-e é similar à NF-e, mas com algumas particularidades (ex: sem transportador, campos simplificados).
$nfceData = [
    "cnpj" => preg_replace('/[^0-9]/', '', $empresa['cnpj']),
    "ambiente" => NUVEM_FISCAL_AMBIENTE,
    "finalidade" => "normal",
    "naturezaOperacao" => "Venda de Mercadoria",
    "consumidorFinal" => true, // NFC-e é sempre para consumidor final
    "indicadorPresenca" => "operacao_presencial", // NFC-e geralmente é presencial
    "modalidadeFrete" => "sem_frete", // NFC-e não tem transporte
    "informacoesAdicionais" => "Documento emitido por software: Alzaos SaaS. Ref. Venda ID: " . $id_venda,
    "emitente" => [
        "nomeRazaoSocial" => $empresa['nome_razao_social'],
        "nomeFantasia" => $empresa['nome_fantasia'],
        "endereco" => [
            "logradouro" => $empresa['endereco'],
            "numero" => $empresa['numero_endereco'],
            "bairro" => $empresa['bairro'],
            "codigoMunicipio" => (int) $empresa['codigo_municipio_ibge'],
            "nomeMunicipio" => $empresa['cidade'],
            "uf" => $empresa['estado'],
            "cep" => preg_replace('/[^0-9]/', '', $empresa['cep']),
            "codigoPais" => 1058,
            "nomePais" => "Brasil"
        ],
        "inscricaoEstadual" => preg_replace('/[^0-9]/', '', $empresa['inscricao_estadual']),
        "regimeTributario" => $empresa['regime_tributario'],
    ],
    // Destinatário pode ser omitido na NFC-e para vendas no balcão
    "destinatario" => [
        "tipoPessoa" => ($venda['tipo_cliente'] == 'fisica' ? 'fisica' : 'juridica'),
        "cpfCnpj" => preg_replace('/[^0-9]/', '', $venda['cpf_cnpj_cliente']),
        "nomeRazaoSocial" => $venda['nome_cliente'],
        // Endereço do destinatário não é obrigatório na NFC-e se não identificado.
    ],
    "itens" => [],
    "total" => [
        "icms" => 0.00, "baseCalculoIcms" => 0.00, "icmsDesonerado" => 0.00, "icmsSt" => 0.00,
        "baseCalculoIcmsSt" => 0.00, "ipi" => 0.00, "pis" => 0.00, "cofins" => 0.00,
        "outrasDespesas" => 0.00, "valorTotalProdutos" => 0.00, "valorTotalServicos" => 0.00,
        "valorTotal" => 0.00
    ],
    "pagamento" => [
        "indicadorPagamento" => ($venda['forma_pagamento'] == 'a_vista' ? 'a_vista' : 'a_prazo'),
        "detalhes" => []
    ]
];

$total_produtos_nfce = 0;
$total_nfce_final = 0;
$total_icms_nfce = 0;
$total_ipi_nfce = 0;
$total_pis_nfce = 0;
$total_cofins_nfce = 0;

foreach ($itens_venda as $item) {
    $query_produto = $pdo->prepare("SELECT * FROM produtos WHERE id = :id_produto");
    $query_produto->bindValue(":id_produto", $item['id_produto']);
    $query_produto->execute();
    $produto = $query_produto->fetch(PDO::FETCH_ASSOC);

    if (!$produto) {
        echo json_encode(['success' => false, 'message' => 'Produto não encontrado para o item ' . $item['id']]);
        exit();
    }

    $valor_total_item = $item['quantidade'] * $item['valor_unitario'];
    $total_produtos_nfce += $valor_total_item;

    // LÓGICA DE IMPOSTOS NFC-E (EXEMPLO SIMPLIFICADO - REQUER AJUSTES COM SEU CONTADOR!)
    // A tributação na NFC-e para o Simples Nacional é comum.
    $icms_valor = 0; $ipi_valor = 0; $pis_valor = 0; $cofins_valor = 0;
    $cst_icms = "00"; $cst_pis = "01"; $cst_cofins = "01"; $cst_ipi = "50";

    if ($empresa['regime_tributario'] == 'simples_nacional') {
        $cst_icms = "102"; // CSOSN para Simples Nacional
        $cst_pis = "49";
        $cst_cofins = "49";
        $cst_ipi = "99";
        // NFC-e para Simples Nacional também precisa de campos específicos.
    } else {
        $aliquota_icms = 0.18;
        $aliquota_ipi = 0.05;
        $aliquota_pis = 0.0065;
        $aliquota_cofins = 0.03;

        $icms_valor = round($valor_total_item * $aliquota_icms, 2);
        $ipi_valor = round($valor_total_item * $aliquota_ipi, 2);
        $pis_valor = round($valor_total_item * $aliquota_pis, 2);
        $cofins_valor = round($valor_total_item * $aliquota_cofins, 2);
    }

    $total_icms_nfce += $icms_valor;
    $total_ipi_nfce += $ipi_valor;
    $total_pis_nfce += $pis_valor;
    $total_cofins_nfce += $cofins_valor;

    $nfceData['itens'][] = [
        "numeroItem" => (int) $item['id'],
        "codigoProduto" => $produto['codigo'],
        "descricao" => $produto['nome'],
        "ncm" => preg_replace('/[^0-9]/', '', $produto['ncm']),
        "cfop" => "5102", // Adapte o CFOP!
        "unidadeComercial" => $produto['unidade'],
        "quantidadeComercial" => (float) $item['quantidade'],
        "valorUnitarioComercial" => (float) $item['valor_unitario'],
        "unidadeTributavel" => $produto['unidade'],
        "quantidadeTributavel" => (float) $item['quantidade'],
        "valorUnitarioTributavel" => (float) $item['valor_unitario'],
        "valorTotal" => (float) $valor_total_item,
        "impostos" => [
            "icms" => [
                "origem" => 0,
                "cst" => $cst_icms, // ou csosn
                "baseCalculo" => (float) $valor_total_item,
                "aliquota" => (float) ($aliquota_icms * 100),
                "valor" => (float) $icms_valor,
            ],
            "ipi" => [
                "cst" => $cst_ipi,
                "baseCalculo" => (float) $valor_total_item,
                "aliquota" => (float) ($aliquota_ipi * 100),
                "valor" => (float) $ipi_valor
            ],
            "pis" => [
                "cst" => $cst_pis,
                "baseCalculo" => (float) $valor_total_item,
                "aliquota" => (float) ($aliquota_pis * 100),
                "valor" => (float) $pis_valor
            ],
            "cofins" => [
                "cst" => $cst_cofins,
                "baseCalculo" => (float) $valor_total_item,
                "aliquota" => (float) ($aliquota_cofins * 100),
                "valor" => (float) $cofins_valor
            ]
        ]
    ];
}

$nfceData['total']['valorTotalProdutos'] = (float) $total_produtos_nfce;
$nfceData['total']['valorTotal'] = (float) ($total_produtos_nfce + $total_ipi_nfce);
$nfceData['total']['icms'] = (float) $total_icms_nfce;
$nfceData['total']['ipi'] = (float) $total_ipi_nfce;
$nfceData['total']['pis'] = (float) $total_pis_nfce;
$nfceData['total']['cofins'] = (float) $total_cofins_nfce;

// Dados de pagamento (exemplo - ajuste conforme sua forma de pagamento)
$nfceData['pagamento']['detalhes'][] = [
    "formaPagamento" => "dinheiro",
    "valor" => (float) $nfceData['total']['valorTotal']
];


// --- EMISSÃO DA NOTA FISCAL CONSUMIDOR VIA SDK ---
$nuvemFiscalService = new NuvemFiscalSDKService();
$response = $nuvemFiscalService->emitirNfce($nfceData);

header('Content-Type: application/json');

if ($response['success']) {
    $nfceRetorno = $response['data'];
    $id_nfce_nuvem_fiscal = $nfceRetorno->id;
    $chave_acesso = $nfceRetorno->chaveAcesso ?? null;
    $status = $nfceRetorno->status;
    $xml_url = $nfceRetorno->links->xml ?? null;
    $danfe_url = $nfceRetorno->links->danfe ?? null;
    $numero_nfce = $nfceRetorno->numero ?? null;
    $serie_nfce = $nfceRetorno->serie ?? null;

    // Salvar/Atualizar dados da NFCe no seu banco de dados (reutilizando a tabela notas_fiscais)
    $pdo->beginTransaction();
    try {
        $query_check = $pdo->prepare("SELECT id FROM notas_fiscais WHERE id_venda = :id_venda AND tipo_nota = 'NFCE'");
        $query_check->bindValue(":id_venda", $id_venda);
        $query_check->execute();
        $existing_nfce = $query_check->fetch(PDO::FETCH_ASSOC);

        if ($existing_nfce) {
            $query = $pdo->prepare("UPDATE notas_fiscais SET id_nuvem_fiscal = :id_nuvem_fiscal, chave_acesso = :chave_acesso, status = :status, xml_url = :xml_url, danfe_url = :danfe_url, numero_nfe = :numero_nfe, serie_nfe = :serie_nfe, data_atualizacao = NOW() WHERE id_venda = :id_venda AND tipo_nota = 'NFCE'");
            $query->bindValue(":id_venda", $id_venda);
        } else {
            $query = $pdo->prepare("INSERT INTO notas_fiscais (id_empresa, id_venda, tipo_nota, id_nuvem_fiscal, chave_acesso, status, xml_url, danfe_url, numero_nfe, serie_nfe, data_emissao, data_atualizacao) VALUES (:id_empresa, :id_venda, 'NFCE', :id_nuvem_fiscal, :chave_acesso, :status, :xml_url, :danfe_url, :numero_nfe, :serie_nfe, NOW(), NOW())");
            $query->bindValue(":id_venda", $id_venda);
        }

        $query->bindValue(":id_empresa", $id_empresa);
        $query->bindValue(":id_nuvem_fiscal", $id_nfce_nuvem_fiscal);
        $query->bindValue(":chave_acesso", $chave_acesso);
        $query->bindValue(":status", $status);
        $query->bindValue(":xml_url", $xml_url);
        $query->bindValue(":danfe_url", $danfe_url);
        $query->bindValue(":numero_nfe", $numero_nfce); // Reutiliza numero_nfe para NFC-e
        $query->bindValue(":serie_nfe", $serie_nfce); // Reutiliza serie_nfe para NFC-e
        $query->execute();

        $pdo->commit();
        echo json_encode(['success' => true, 'message' => 'NFC-e emitida com sucesso!', 'status' => $status, 'danfe_url' => $danfe_url]);

    } catch (PDOException $e) {
        $pdo->rollBack();
        error_log("Erro no DB ao salvar NFC-e: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Erro ao salvar NFC-e no banco de dados. Contate o suporte.', 'db_error' => $e->getMessage()]);
    }

} else {
    echo json_encode(['success' => false, 'message' => 'Erro na API da Nuvem Fiscal: ' . $response['message'], 'details' => $response['details']]);
}
?>