<?php
require_once("../../conexao.php");
require_once __DIR__ . '/../config/api_config.php';

// Definir headers para resposta JSON
header('Content-Type: application/json');

// Array para resposta ao frontend
$response_data = ['status' => 'error', 'message' => 'Erro desconhecido'];

// Verificar se a requisição é POST e se recebeu a chave de acesso
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['chave_acesso'])) {
    
    $chave_acesso = $_POST['chave_acesso'];

    // --- 1. Buscar dados da NF-e no banco local ---
    $query_nfe = $pdo->prepare("SELECT * FROM nuvem_fiscal_notas WHERE chave_acesso = :chave_acesso");
    $query_nfe->bindValue(":chave_acesso", $chave_acesso);
    $query_nfe->execute();
    $nfe = $query_nfe->fetch(PDO::FETCH_ASSOC);

    if (!$nfe) {
        $response_data['message'] = 'NF-e não encontrada.';
        echo json_encode($response_data);
        exit;
    }

    // --- 2. Buscar dados da Empresa ---
    @session_start();
    $id_empresa = @$_SESSION['empresa'];

    if (!$id_empresa) {
        $response_data['message'] = 'ID da empresa não encontrado na sessão.';
        echo json_encode($response_data);
        exit;
    }

    $query_empresa = $pdo->prepare("SELECT e.*, nfc.* FROM empresas e LEFT JOIN nuvem_fiscal_config nfc ON e.id = nfc.empresa_id WHERE e.id = :id");
    $query_empresa->bindValue(":id", $id_empresa);
    $query_empresa->execute();
    $empresa = $query_empresa->fetch(PDO::FETCH_ASSOC);

    if (!$empresa) {
        $response_data['message'] = 'Configurações da empresa não encontradas.';
        echo json_encode($response_data);
        exit;
    }

    // --- 3. Obter Token de Acesso ---
    $auth_ch = curl_init(AUTH_URL);
    curl_setopt($auth_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($auth_ch, CURLOPT_POST, true);
    curl_setopt($auth_ch, CURLOPT_POSTFIELDS, http_build_query([
        'grant_type' => 'client_credentials',
        'client_id' => CLIENT_ID,
        'client_secret' => CLIENT_SECRET,
        'scope' => 'nfe'
    ]));
    curl_setopt($auth_ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded',
        'Accept: application/json'
    ]);
    curl_setopt($auth_ch, CURLOPT_SSL_VERIFYPEER, false);

    $auth_response = curl_exec($auth_ch);
    $auth_http_code = curl_getinfo($auth_ch, CURLINFO_HTTP_CODE);
    $auth_curl_error = curl_error($auth_ch);

    curl_close($auth_ch);

    $auth_response_data = json_decode($auth_response, true);

    if ($auth_http_code !== 200 || !isset($auth_response_data['access_token'])) {
        $response_data['message'] = 'Falha ao obter o token de acesso: ' . ($auth_response_data['error_description'] ?? $auth_curl_error ?? $auth_response);
        echo json_encode($response_data);
        exit;
    }

    $access_token = $auth_response_data['access_token'];

    // --- 4. Consultar Status na API ---
    $consulta_ch = curl_init(NFE_URL . '/' . $chave_acesso . '/status');
    curl_setopt($consulta_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($consulta_ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json',
        'Authorization: Bearer ' . $access_token
    ]);
    curl_setopt($consulta_ch, CURLOPT_SSL_VERIFYPEER, false);

    $consulta_response = curl_exec($consulta_ch);
    $consulta_http_code = curl_getinfo($consulta_ch, CURLINFO_HTTP_CODE);
    $consulta_curl_error = curl_error($consulta_ch);

    curl_close($consulta_ch);

    $consulta_response_data = json_decode($consulta_response, true);

    if ($consulta_http_code === 200) {
        // Atualizar status no banco local
        $query_atualizar = $pdo->prepare("UPDATE nuvem_fiscal_notas SET 
            status = :status,
            protocolo = :protocolo,
            data_protocolo = :data_protocolo
            WHERE chave_acesso = :chave_acesso");

        $query_atualizar->bindValue(":status", $consulta_response_data['status'] ?? $nfe['status']);
        $query_atualizar->bindValue(":protocolo", $consulta_response_data['protocolo'] ?? $nfe['protocolo']);
        $query_atualizar->bindValue(":data_protocolo", $consulta_response_data['data_protocolo'] ?? $nfe['data_protocolo']);
        $query_atualizar->bindValue(":chave_acesso", $chave_acesso);

        $query_atualizar->execute();

        $response_data = [
            'status' => 'success',
            'message' => 'Status da NF-e consultado com sucesso!',
            'dados' => [
                'chave_acesso' => $chave_acesso,
                'status' => $consulta_response_data['status'] ?? $nfe['status'],
                'protocolo' => $consulta_response_data['protocolo'] ?? $nfe['protocolo'],
                'data_protocolo' => $consulta_response_data['data_protocolo'] ?? $nfe['data_protocolo'],
                'motivo' => $consulta_response_data['motivo'] ?? null
            ]
        ];
    } else {
        $response_data = [
            'status' => 'error',
            'message' => 'Erro ao consultar status da NF-e: ' . ($consulta_response_data['error'] ?? $consulta_curl_error ?? $consulta_response)
        ];
    }

} else {
    $response_data['message'] = 'Requisição inválida.';
}

echo json_encode($response_data);
exit;
?> 