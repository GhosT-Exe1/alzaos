<?php
// painel/apis/gerar_danfe.php

require_once("../config/conexao.php");
require_once("../config/config.php");
require_once("../inc/NuvemFiscalSDKService.php");

@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'admin'){
    header("Location: ../index.php"); // Redireciona em caso de acesso não autorizado
    exit();
}

$id_nfe_sistema = @$_GET['id_nfe_sistema'];
$tipo_nota = @$_GET['tipo_nota']; // 'NFE' ou 'NFCE'

if (empty($id_nfe_sistema) || empty($tipo_nota)) {
    die('ID da Nota Fiscal do sistema ou tipo não fornecido.');
}

$query = $pdo->prepare("SELECT id_nuvem_fiscal, danfe_url FROM notas_fiscais WHERE id = :id_nfe_sistema AND tipo_nota = :tipo_nota");
$query->bindValue(":id_nfe_sistema", $id_nfe_sistema);
$query->bindValue(":tipo_nota", $tipo_nota);
$query->execute();
$nfe_db = $query->fetch(PDO::FETCH_ASSOC);

if (!$nfe_db) {
    die('Nota fiscal não encontrada no seu sistema.');
}

$nfeIdNuvemFiscal = $nfe_db['id_nuvem_fiscal'];
$danfeUrlSalva = $nfe_db['danfe_url'];

if (empty($nfeIdNuvemFiscal)) {
    die('ID da Nuvem Fiscal não encontrado para esta nota. Não é possível gerar o DANFE.');
}

// Tenta usar a URL salva primeiro, se existir
if (!empty($danfeUrlSalva)) {
    header("Location: " . $danfeUrlSalva);
    exit();
}

$nuvemFiscalService = new NuvemFiscalSDKService();
$response = [];

if ($tipo_nota == 'NFE') {
    $response = $nuvemFiscalService->getDanfeUrl($nfeIdNuvemFiscal);
} elseif ($tipo_nota == 'NFCE') {
    $response = $nuvemFiscalService->getDanfeNfceUrl($nfeIdNuvemFiscal);
} else {
    die('Tipo de nota inválido.');
}

if ($response['success'] && isset($response['data']->url)) {
    $danfe_url_gerada = $response['data']->url;

    // Salvar a nova URL do DANFE no DB para futuras requisições
    $queryUpdate = $pdo->prepare("UPDATE notas_fiscais SET danfe_url = :danfe_url, data_atualizacao = NOW() WHERE id = :id_nfe_sistema AND tipo_nota = :tipo_nota");
    $queryUpdate->bindValue(":danfe_url", $danfe_url_gerada);
    $queryUpdate->bindValue(":id_nfe_sistema", $id_nfe_sistema);
    $queryUpdate->bindValue(":tipo_nota", $tipo_nota);
    $queryUpdate->execute();

    header("Location: " . $danfe_url_gerada);
    exit();
} else {
    $errorMessage = $response['message'] ?? 'Erro desconhecido ao obter o DANFE.';
    error_log("Erro ao obter DANFE para NFe ID: $id_nfe_sistema - " . $errorMessage);
    die('Não foi possível gerar o DANFE. Erro: ' . $errorMessage);
}
?>