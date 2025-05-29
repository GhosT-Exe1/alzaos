<?php
// painel/apis/inutilizar_numeros.php

require_once("../config/conexao.php");
require_once("../config/config.php");
require_once("../inc/NuvemFiscalService.php");

@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'admin'){
    echo json_encode(['success' => false, 'message' => 'Acesso não autorizado.']);
    exit();
}

// Coleta os dados do formulário de inutilização
$id_empresa = @$_POST['id_empresa']; // Para pegar o CNPJ
$serie = @$_POST['serie'];
$numero_inicial = @$_POST['numero_inicial'];
$numero_final = @$_POST['numero_final'];
$justificativa = @$_POST['justificativa'];
$ano = @$_POST['ano']; // Ano de competência

if (empty($id_empresa) || empty($serie) || empty($numero_inicial) || empty($numero_final) || empty($justificativa) || strlen($justificativa) < 15 || empty($ano)) {
    echo json_encode(['success' => false, 'message' => 'Todos os campos são obrigatórios e a justificativa deve ter no mínimo 15 caracteres.']);
    exit();
}

// Buscar o CNPJ da empresa
$query_empresa = $pdo->prepare("SELECT cnpj FROM empresas WHERE id = :id_empresa");
$query_empresa->bindValue(":id_empresa", $id_empresa);
$query_empresa->execute();
$empresa = $query_empresa->fetch(PDO::FETCH_ASSOC);

if (!$empresa) {
    echo json_encode(['success' => false, 'message' => 'Empresa não encontrada para a inutilização.']);
    exit();
}

$inutilizacaoData = [
    "cnpj" => preg_replace('/[^0-9]/', '', $empresa['cnpj']),
    "ano" => (int) $ano,
    "serie" => (int) $serie,
    "numeroInicial" => (int) $numero_inicial,
    "numeroFinal" => (int) $numero_final,
    "justificativa" => $justificativa
];

$nuvemFiscalService = new NuvemFiscalService();
$response = $nuvemFiscalService->inutilizarNumeros($inutilizacaoData);

if ($response['success']) {
    $inutilizacaoRetorno = $response['data'];
    // Salvar informações da inutilização no seu banco de dados
    // Você pode ter uma tabela 'inutilizacoes'
    $pdo->beginTransaction();
    try {
        $query_inut = $pdo->prepare("INSERT INTO inutilizacoes (id_empresa, cnpj, ano, serie, numero_inicial, numero_final, justificativa, id_nuvem_fiscal_inut, status, data_inutilizacao) VALUES (:id_empresa, :cnpj, :ano, :serie, :numero_inicial, :numero_final, :justificativa, :id_nuvem_fiscal_inut, :status, NOW())");
        $query_inut->bindValue(":id_empresa", $id_empresa);
        $query_inut->bindValue(":cnpj", preg_replace('/[^0-9]/', '', $empresa['cnpj']));
        $query_inut->bindValue(":ano", $ano);
        $query_inut->bindValue(":serie", $serie);
        $query_inut->bindValue(":numero_inicial", $numero_inicial);
        $query_inut->bindValue(":numero_final", $numero_final);
        $query_inut->bindValue(":justificativa", $justificativa);
        $query_inut->bindValue(":id_nuvem_fiscal_inut", $inutilizacaoRetorno['id'] ?? null); // ID da inutilização na Nuvem Fiscal
        $query_inut->bindValue(":status", $inutilizacaoRetorno['status'] ?? 'pendente');
        $query_inut->execute();
        $pdo->commit();

        echo json_encode(['success' => true, 'message' => 'Inutilização de números registrada com sucesso!']);
    } catch (PDOException $e) {
        $pdo->rollBack();
        error_log("Erro no DB ao salvar Inutilização: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Erro ao salvar inutilização no DB, mas pode ter sido processada na Nuvem Fiscal.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Erro ao inutilizar números: ' . $response['message'], 'http_code' => $response['http_code'], 'details' => $response['details']]);
}
?>