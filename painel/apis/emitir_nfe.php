<?php
// painel/apis/emitir_nfe.php

require_once("../config/conexao.php");
require_once("../config/config.php");
require_once("../inc/NuvemFiscalSDKService.php"); // Inclui a nova classe de serviço com SDK

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

// --- CONSTRUÇÃO DO PAYLOAD DA NF-E (CONSULTE A DOCUMENTAÇÃO DA NUVEM FISCAL/NFE.IO!) ---
// ESTE É UM EXEMPLO GENÉRICO. OS CAMPOS EXATOS E A ESTRUTURA DE IMPOSTOS SÃO CRÍTICAS!
// Adapte os nomes dos campos do seu DB para os esperados pela API.

$nfeData = [
    "cnpj" => preg_replace('/[^0-9]/', '', $empresa['cnpj']),
    "ambiente" => NUVEM_FISCAL_AMBIENTE, // 'sandbox' ou 'production'
    "finalidade" => "normal",
    "naturezaOperacao" => "Venda de Mercadoria",
    "consumidorFinal" => ($venda['tipo_cliente'] == 'fisica'),
    "indicadorPresenca" => "operacao_presencial",
    "modalidadeFrete" => "sem_frete",
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
            "codigoPais" => 1058, // Brasil
            "nomePais" => "Brasil"
        ],
        "inscricaoEstadual" => preg_replace('/[^0-9]/', '', $empresa['inscricao_estadual']),
        "regimeTributario" => $empresa['regime_tributario'], // 'simples_nacional' ou 'regime_normal'
    ],
    "destinatario" => [
        "tipoPessoa" => ($venda['tipo_cliente'] == 'fisica' ? 'fisica' : 'juridica'),
        "cpfCnpj" => preg_replace('/[^0-9]/', '', $venda['cpf_cnpj_cliente']),
        "nomeRazaoSocial" => $venda['nome_cliente'],
        "endereco" => [
            "logradouro" => $venda['endereco_cliente'],
            "numero" => $venda['numero_endereco_cliente'],
            "bairro" => $venda['bairro_cliente'],
            "codigoMunicipio" => (int) $venda['codigo_municipio_ibge_cliente'],
            "nomeMunicipio" => $venda['cidade_cliente'],
            "uf" => $venda['estado_cliente'],
            "cep" => preg_replace('/[^0-9]/', '', $venda['cep_cliente']),
            "codigoPais" => 1058,
            "nomePais" => "Brasil"
        ]
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

$total_produtos_nfe = 0;
$total_nfe_final = 0;
$total_icms_nfe = 0;
$total_ipi_nfe = 0;
$total_pis_nfe = 0;
$total_cofins_nfe = 0;

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
    $total_produtos_nfe += $valor_total_item;

    // LÓGICA DE IMPOSTOS (EXEMPLO SIMPLIFICADO - REQUER AJUSTES COM SEU CONTADOR!)
    $icms_valor = 0; $ipi_valor = 0; $pis_valor = 0; $cofins_valor = 0;
    $cst_icms = "00"; $cst_pis = "01"; $cst_cofins = "01"; $cst_ipi = "50";

    if ($empresa['regime_tributario'] == 'simples_nacional') {
        $cst_icms = "102"; // CSOSN para Simples Nacional (ex: Tributada sem permissão de crédito)
        $cst_pis = "49"; // Outras Operações (Simples Nacional)
        $cst_cofins = "49"; // Outras Operações (Simples Nacional)
        $cst_ipi = "99"; // Outras Saídas
        // Simples Nacional geralmente não destaca ICMS/IPI/PIS/COFINS no campo 'valor',
        // mas precisa da alíquota do Simples Nacional na NFe (campo 'pSimplesNacional')
        // Consulte a documentação da NFe.io para como passar o 'pSimplesNacional'
    } else {
        // Exemplo de cálculo para Regime Normal
        $aliquota_icms = 0.18;
        $aliquota_ipi = 0.05;
        $aliquota_pis = 0.0065;
        $aliquota_cofins = 0.03;

        $icms_valor = round($valor_total_item * $aliquota_icms, 2);
        $ipi_valor = round($valor_total_item * $aliquota_ipi, 2);
        $pis_valor = round($valor_total_item * $aliquota_pis, 2);
        $cofins_valor = round($valor_total_item * $aliquota_cofins, 2);
    }

    $total_icms_nfe += $icms_valor;
    $total_ipi_nfe += $ipi_valor;
    $total_pis_nfe += $pis_valor;
    $total_cofins_nfe += $cofins_valor;

    $nfeData['itens'][] = [
        "numeroItem" => (int) $item['id'],
        "codigoProduto" => $produto['codigo'],
        "descricao" => $produto['nome'],
        "ncm" => preg_replace('/[^0-9]/', '', $produto['ncm']),
        "cfop" => "5102", // Adapte o CFOP conforme a operação!
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
                "cst" => $cst_icms, // ou csosn para simples nacional
                "baseCalculo" => (float) $valor_total_item,
                "aliquota" => (float) ($aliquota_icms * 100),
                "valor" => (float) $icms_valor,
                // No Simples Nacional, pode ser necessário adicionar outros campos como pSimplesNacional, vCredICMSSN
                // "pSimplesNacional" => 7.00, // Exemplo de alíquota do Simples
                // "vCredICMSSN" => round($valor_total_item * 0.07, 2), // Exemplo de valor de crédito de ICMS
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

$nfeData['total']['valorTotalProdutos'] = (float) $total_produtos_nfe;
$nfeData['total']['valorTotal'] = (float) ($total_produtos_nfe + $total_ipi_nfe); // IPI geralmente soma no total da NFe
$nfeData['total']['icms'] = (float) $total_icms_nfe;
$nfeData['total']['ipi'] = (float) $total_ipi_nfe;
$nfeData['total']['pis'] = (float) $total_pis_nfe;
$nfeData['total']['cofins'] = (float) $total_cofins_nfe;

// Dados de pagamento (exemplo - ajuste conforme sua forma de pagamento)
$nfeData['pagamento']['detalhes'][] = [
    "formaPagamento" => "dinheiro", // Adapte para 'cartao_credito', 'boleto', 'pix' etc.
    "valor" => (float) $nfeData['total']['valorTotal']
];


// --- EMISSÃO DA NOTA FISCAL VIA SDK ---
$nuvemFiscalService = new NuvemFiscalSDKService();
$response = $nuvemFiscalService->emitirNfe($nfeData);

header('Content-Type: application/json'); // Garante que a resposta é JSON

if ($response['success']) {
    $nfeRetorno = $response['data'];
    $id_nfe_nuvem_fiscal = $nfeRetorno->id;
    $chave_acesso = $nfeRetorno->chaveAcesso ?? null;
    $status = $nfeRetorno->status;
    $xml_url = $nfeRetorno->links->xml ?? null;
    $danfe_url = $nfeRetorno->links->danfe ?? null;
    $numero_nfe = $nfeRetorno->numero ?? null;
    $serie_nfe = $nfeRetorno->serie ?? null;

    // Salvar/Atualizar dados da NFe no seu banco de dados
    $pdo->beginTransaction();
    try {
        $query_check = $pdo->prepare("SELECT id FROM notas_fiscais WHERE id_venda = :id_venda AND tipo_nota = 'NFE'");
        $query_check->bindValue(":id_venda", $id_venda);
        $query_check->execute();
        $existing_nfe = $query_check->fetch(PDO::FETCH_ASSOC);

        if ($existing_nfe) {
            $query = $pdo->prepare("UPDATE notas_fiscais SET id_nuvem_fiscal = :id_nuvem_fiscal, chave_acesso = :chave_acesso, status = :status, xml_url = :xml_url, danfe_url = :danfe_url, numero_nfe = :numero_nfe, serie_nfe = :serie_nfe, data_atualizacao = NOW() WHERE id_venda = :id_venda AND tipo_nota = 'NFE'");
            $query->bindValue(":id_venda", $id_venda);
        } else {
            $query = $pdo->prepare("INSERT INTO notas_fiscais (id_empresa, id_venda, tipo_nota, id_nuvem_fiscal, chave_acesso, status, xml_url, danfe_url, numero_nfe, serie_nfe, data_emissao, data_atualizacao) VALUES (:id_empresa, :id_venda, 'NFE', :id_nuvem_fiscal, :chave_acesso, :status, :xml_url, :danfe_url, :numero_nfe, :serie_nfe, NOW(), NOW())");
            $query->bindValue(":id_venda", $id_venda);
        }

        $query->bindValue(":id_empresa", $id_empresa);
        $query->bindValue(":id_nuvem_fiscal", $id_nfe_nuvem_fiscal);
        $query->bindValue(":chave_acesso", $chave_acesso);
        $query->bindValue(":status", $status);
        $query->bindValue(":xml_url", $xml_url);
        $query->bindValue(":danfe_url", $danfe_url);
        $query->bindValue(":numero_nfe", $numero_nfe);
        $query->bindValue(":serie_nfe", $serie_nfe);
        $query->execute();

        $pdo->commit();
        echo json_encode(['success' => true, 'message' => 'NF-e emitida com sucesso!', 'status' => $status, 'danfe_url' => $danfe_url]);

    } catch (PDOException $e) {
        $pdo->rollBack();
        error_log("Erro no DB ao salvar NF-e: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Erro ao salvar NF-e no banco de dados. Contate o suporte.', 'db_error' => $e->getMessage()]);
    }

} else {
    echo json_encode(['success' => false, 'message' => 'Erro na API da Nuvem Fiscal: ' . $response['message'], 'details' => $response['details']]);
}
?>