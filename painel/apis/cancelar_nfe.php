<?php
// painel/apis/cancelar_nfe.php (agora para NF-e e NFC-e)

require_once("../config/conexao.php");
require_once("../config/config.php");
require_once("../inc/NuvemFiscalSDKService.php");

@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'admin'){
    echo json_encode(['success' => false, 'message' => 'Acesso não autorizado.']);
    exit();
}

$id_nfe_sistema = @$_POST['id_nfe_sistema'];
$justificativa = @$_POST['justificativa'];
$tipo_nota = @$_POST['tipo_nota']; // 'NFE' ou 'NFCE'

if (empty($id_nfe_sistema) || empty($justificativa) || strlen($justificativa) < 15 || empty($tipo_nota)) {
    echo json_encode(['success' => false, 'message' => 'ID da Nota Fiscal, tipo e justificativa (mínimo 15 caracteres) são obrigatórios.']);
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

$nuvemFiscalSDKService = new NuvemFiscalSDKService();
$response = [];

if ($tipo_nota == 'NFE') {
    $response = $nuvemFiscalSDKService->cancelarNfe($nfeIdNuvemFiscal, $justificativa);
} elseif ($tipo_nota == 'NFCE') {
    $response = $nuvemFiscalSDKService->cancelarNfce($nfeIdNuvemFiscal, $justificativa);
} else {
    echo json_encode(['success' => false, 'message' => 'Tipo de nota inválido.']);
    exit();
}

header('Content-Type: application/json');

if ($response['success']) {
    $queryUpdate = $pdo->prepare("UPDATE notas_fiscais SET status = 'cancelada', justificativa_cancelamento = :justificativa, data_atualizacao = NOW() WHERE id = :id_nfe_sistema AND tipo_nota = :tipo_nota");
    $queryUpdate->bindValue(":justificativa", $justificativa);
    $queryUpdate->bindValue(":id_nfe_sistema", $id_nfe_sistema);
    $queryUpdate->bindValue(":tipo_nota", $tipo_nota);
    $queryUpdate->execute();

    echo json_encode(['success' => true, 'message' => 'Nota Fiscal cancelada com sucesso!']);
} else {
    echo json_encode(['success' => false, 'message' => 'Erro ao cancelar Nota Fiscal: ' . $response['message'], 'details' => $response['details']]);
}
?>