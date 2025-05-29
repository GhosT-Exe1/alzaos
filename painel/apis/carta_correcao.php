<?php
// painel/apis/carta_correcao.php

require_once("../config/conexao.php");
require_once("../config/config.php");
require_once("../inc/NuvemFiscalSDKService.php");

@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'admin'){
    echo json_encode(['success' => false, 'message' => 'Acesso não autorizado.']);
    exit();
}

$id_nfe_sistema = @$_POST['id_nfe_sistema'];
$texto_correcao = @$_POST['texto_correcao'];

if (empty($id_nfe_sistema) || empty($texto_correcao) || strlen($texto_correcao) < 15) {
    echo json_encode(['success' => false, 'message' => 'ID da NFe e texto da correção (mínimo 15 caracteres) são obrigatórios.']);
    exit();
}

$query = $pdo->prepare("SELECT id_nuvem_fiscal FROM notas_fiscais WHERE id = :id_nfe_sistema");
$query->bindValue(":id_nfe_sistema", $id_nfe_sistema);
$query->execute();
$nfe_db = $query->fetch(PDO::FETCH_ASSOC);

if (!$nfe_db || empty($nfe_db['id_nuvem_fiscal'])) {
    echo json_encode(['success' => false, 'message' => 'Nota fiscal não encontrada ou não emitida na Nuvem Fiscal.']);
    exit();
}

$nfeIdNuvemFiscal = $nfe_db['id_nuvem_fiscal'];

$correcaoData = [
    "textoCorrecao" => $texto_correcao // Verifique o nome correto do campo na documentação da Nuvem Fiscal
];

$nuvemFiscalSDKService = new NuvemFiscalSDKService();
$response = $nuvemFiscalSDKService->cartaCorrecao($nfeIdNuvemFiscal, $correcaoData);

if ($response['success']) {
    $cc_retorno = $response['data'];
    // Salvar informações da carta de correção no seu banco de dados
    // Você pode ter uma tabela 'cartas_correcao' ligada a 'notas_fiscais'
    $pdo->beginTransaction();
    try {
        $query_cc = $pdo->prepare("INSERT INTO cartas_correcao (id_nota_fiscal, id_nuvem_fiscal_cc, texto_correcao, data_emissao, status) VALUES (:id_nota_fiscal, :id_nuvem_fiscal_cc, :texto_correcao, NOW(), :status)");
        $query_cc->bindValue(":id_nota_fiscal", $id_nfe_sistema);
        $query_cc->bindValue(":id_nuvem_fiscal_cc", $cc_retorno['id'] ?? null); // ID da CC na Nuvem Fiscal
        $query_cc->bindValue(":texto_correcao", $texto_correcao);
        $query_cc->bindValue(":status", $cc_retorno['status'] ?? 'pendente');
        $query_cc->execute();
        $pdo->commit();

        echo json_encode(['success' => true, 'message' => 'Carta de Correção emitida com sucesso!']);
    } catch (PDOException $e) {
        $pdo->rollBack();
        error_log("Erro no DB ao salvar Carta de Correção: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Erro ao salvar Carta de Correção no DB, mas pode ter sido emitida na Nuvem Fiscal.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Erro ao emitir Carta de Correção: ' . $response['message'], 'http_code' => $response['http_code'], 'details' => $response['details']]);
}
?>