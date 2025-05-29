<?php
require_once("../../conexao.php");
require_once __DIR__ . '/../config/api_config.php';

// Definir headers para resposta JSON
header('Content-Type: application/json');

// Array para resposta ao frontend
$response_data = ['status' => 'error', 'message' => 'Erro desconhecido'];

// Verificar se a requisição é POST e se recebeu os dados necessários
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['chave_acesso']) && isset($_POST['correcao'])) {
    
    $chave_acesso = $_POST['chave_acesso'];
    $correcao = $_POST['correcao'];
    $grupo_alterado = $_POST['grupo_alterado'] ?? 'geral'; // geral, destinatario, itens, etc

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

    // Verificar se a NF-e pode receber carta de correção
    if ($nfe['status'] !== 'autorizada') {
        $response_data['message'] = 'NF-e não está autorizada para receber carta de correção.';
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

    // --- 4. Montar Payload da Carta de Correção ---
    $carta_payload = [
        'correcao' => $correcao,
        'grupo_alterado' => $grupo_alterado
    ];

    // --- 5. Enviar Carta de Correção para a API ---
    $carta_ch = curl_init(NFE_URL . '/' . $chave_acesso . '/carta-correcao');
    curl_setopt($carta_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($carta_ch, CURLOPT_POST, true);
    curl_setopt($carta_ch, CURLOPT_POSTFIELDS, json_encode($carta_payload));
    curl_setopt($carta_ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'Authorization: Bearer ' . $access_token
    ]);
    curl_setopt($carta_ch, CURLOPT_SSL_VERIFYPEER, false);

    $carta_response = curl_exec($carta_ch);
    $carta_http_code = curl_getinfo($carta_ch, CURLINFO_HTTP_CODE);
    $carta_curl_error = curl_error($carta_ch);

    curl_close($carta_ch);

    $carta_response_data = json_decode($carta_response, true);

    if ($carta_http_code === 200 || $carta_http_code === 201) {
        // Carta de Correção realizada com sucesso
        $query_atualizar = $pdo->prepare("UPDATE nuvem_fiscal_notas SET 
            status = 'autorizada_com_correcao',
            protocolo = :protocolo,
            data_protocolo = NOW()
            WHERE chave_acesso = :chave_acesso");

        $query_atualizar->bindValue(":protocolo", $carta_response_data['protocolo'] ?? null);
        $query_atualizar->bindValue(":chave_acesso", $chave_acesso);

        if ($query_atualizar->execute()) {
            $response_data = [
                'status' => 'success',
                'message' => 'Carta de Correção enviada com sucesso!',
                'protocolo' => $carta_response_data['protocolo'] ?? null
            ];
        } else {
            $response_data = [
                'status' => 'error',
                'message' => 'Carta de Correção enviada na SEFAZ, mas houve erro ao atualizar no banco local.'
            ];
        }
    } else {
        // Erro na Carta de Correção
        $response_data = [
            'status' => 'error',
            'message' => 'Erro ao enviar Carta de Correção: ' . ($carta_response_data['error'] ?? $carta_curl_error ?? $carta_response)
        ];
    }

} else {
    $response_data['message'] = 'Requisição inválida.';
}

echo json_encode($response_data);
exit;
?> 