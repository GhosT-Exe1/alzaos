<?php
// painel/apis/consultar_nfe.php

require_once("../config/conexao.php");
require_once("../config/config.php");
require_once("../inc/NuvemFiscalSDKService.php");

@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'admin'){
    echo json_encode(['success' => false, 'message' => 'Acesso não autorizado.']);
    exit();
}

$id_nfe_sistema = @$_POST['id_nfe_sistema'];
$tipo_nota = @$_POST['tipo_nota']; // 'NFE' ou 'NFCE'

if (empty($id_nfe_sistema) || empty($tipo_nota)) {
    echo json_encode(['success' => false, 'message' => 'ID da Nota Fiscal do sistema ou tipo não fornecido.']);
    exit();
}

$query = $pdo->prepare("SELECT id_nuvem_fiscal FROM notas_fiscais WHERE id = :id_nfe_sistema AND tipo_nota = :tipo_nota");
$query->bindValue(":id_nfe_sistema", $id_nfe_sistema);
$query->bindValue(":tipo_nota", $tipo_nota);
$query->execute();
$nfe_db = $query->fetch(PDO::FETCH_ASSOC);

if (!$nfe_db || empty($nfe_db['id_nuvem_fiscal'])) {
    echo json_encode(['success' => false, 'message' => 'Nota fiscal não encontrada ou não emitida na Nuvem Fiscal.']);
    exit();
}

$nfeIdNuvemFiscal = $nfe_db['id_nuvem_fiscal'];

$nuvemFiscalService = new NuvemFiscalSDKService();
$response = [];

if ($tipo_nota == 'NFE') {
    $response = $nuvemFiscalService->consultarNfe($nfeIdNuvemFiscal);
} elseif ($tipo_nota == 'NFCE') {
    $response = $nuvemFiscalService->consultarNfce($nfeIdNuvemFiscal);
} else {
    echo json_encode(['success' => false, 'message' => 'Tipo de nota inválido.']);
    exit();
}


header('Content-Type: application/json');

if ($response['success']) {
    $nfeStatus = $response['data'];
    $status_atualizado = $nfeStatus->status ?? 'desconhecido';
    $chave_acesso_atualizada = $nfeStatus->chaveAcesso ?? null;
    $xml_url_atualizado = $nfeStatus->links->xml ?? null;
    $danfe_url_atualizado = $nfeStatus->links->danfe ?? null;
    $numero_nota_atualizado = $nfeStatus->numero ?? null;
    $serie_nota_atualizado = $nfeStatus->serie ?? null;

    $queryUpdate = $pdo->prepare("UPDATE notas_fiscais SET status = :status, chave_acesso = :chave_acesso, xml_url = :xml_url, danfe_url = :danfe_url, numero_nfe = :numero_nfe, serie_nfe = :serie_nfe, data_atualizacao = NOW() WHERE id = :id_nfe_sistema");
    $queryUpdate->bindValue(":status", $status_atualizado);
    $queryUpdate->bindValue(":chave_acesso", $chave_acesso_atualizada);
    $queryUpdate->bindValue(":xml_url", $xml_url_atualizado);
    $queryUpdate->bindValue(":danfe_url", $danfe_url_atualizado);
    $queryUpdate->bindValue(":numero_nfe", $numero_nota_atualizado);
    $queryUpdate->bindValue(":serie_nfe", $serie_nota_atualizado);
    $queryUpdate->bindValue(":id_nfe_sistema", $id_nfe_sistema);
    $queryUpdate->execute();

    echo json_encode([
        'success' => true,
        'message' => 'Status da Nota Fiscal consultado com sucesso!',
        'status' => $status_atualizado,
        'chave_acesso' => $chave_acesso_atualizada,
        'danfe_url' => $danfe_url_atualizado,
        'numero_nfe' => $numero_nota_atualizado,
        'serie_nfe' => $serie_nota_atualizado
    ]);
} else {
    echo json_encode(['success' => false, 'message' => 'Erro ao consultar Nota Fiscal: ' . $response['message'], 'details' => $response['details']]);
}
?>