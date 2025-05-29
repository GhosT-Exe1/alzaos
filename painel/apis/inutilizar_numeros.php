<?php
require_once("../../conexao.php");
require_once __DIR__ . '/../config/api_config.php';

// Definir headers para resposta JSON
header('Content-Type: application/json');

// Array para resposta ao frontend
$response_data = ['status' => 'error', 'message' => 'Erro desconhecido'];

// Verificar se a requisição é POST e se recebeu os dados necessários
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero_inicial']) && isset($_POST['numero_final']) && isset($_POST['justificativa'])) {
    
    $numero_inicial = $_POST['numero_inicial'];
    $numero_final = $_POST['numero_final'];
    $justificativa = $_POST['justificativa'];

    // --- 1. Buscar dados da Empresa ---
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

    // --- 2. Obter Token de Acesso ---
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

    // --- 3. Montar Payload da Inutilização ---
    $inutilizacao_payload = [
        'ano' => date('Y'),
        'serie' => $empresa['serie_nfe'],
        'numero_inicial' => $numero_inicial,
        'numero_final' => $numero_final,
        'justificativa' => $justificativa
    ];

    // --- 4. Enviar Inutilização para a API ---
    $inutilizacao_ch = curl_init(NFE_URL . '/inutilizacao');
    curl_setopt($inutilizacao_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($inutilizacao_ch, CURLOPT_POST, true);
    curl_setopt($inutilizacao_ch, CURLOPT_POSTFIELDS, json_encode($inutilizacao_payload));
    curl_setopt($inutilizacao_ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'Authorization: Bearer ' . $access_token
    ]);
    curl_setopt($inutilizacao_ch, CURLOPT_SSL_VERIFYPEER, false);

    $inutilizacao_response = curl_exec($inutilizacao_ch);
    $inutilizacao_http_code = curl_getinfo($inutilizacao_ch, CURLINFO_HTTP_CODE);
    $inutilizacao_curl_error = curl_error($inutilizacao_ch);

    curl_close($inutilizacao_ch);

    $inutilizacao_response_data = json_decode($inutilizacao_response, true);

    if ($inutilizacao_http_code === 200 || $inutilizacao_http_code === 201) {
        // Inutilização realizada com sucesso
        $query_registrar = $pdo->prepare("INSERT INTO nuvem_fiscal_inutilizacoes 
            (empresa_id, ano, serie, numero_inicial, numero_final, justificativa, protocolo, data_protocolo) 
            VALUES 
            (:empresa_id, :ano, :serie, :numero_inicial, :numero_final, :justificativa, :protocolo, NOW())");

        $query_registrar->bindValue(":empresa_id", $id_empresa);
        $query_registrar->bindValue(":ano", date('Y'));
        $query_registrar->bindValue(":serie", $empresa['serie_nfe']);
        $query_registrar->bindValue(":numero_inicial", $numero_inicial);
        $query_registrar->bindValue(":numero_final", $numero_final);
        $query_registrar->bindValue(":justificativa", $justificativa);
        $query_registrar->bindValue(":protocolo", $inutilizacao_response_data['protocolo'] ?? null);

        if ($query_registrar->execute()) {
            $response_data = [
                'status' => 'success',
                'message' => 'Números inutilizados com sucesso!',
                'protocolo' => $inutilizacao_response_data['protocolo'] ?? null
            ];
        } else {
            $response_data = [
                'status' => 'error',
                'message' => 'Inutilização realizada na SEFAZ, mas houve erro ao registrar no banco local.'
            ];
        }
    } else {
        // Erro na Inutilização
        $response_data = [
            'status' => 'error',
            'message' => 'Erro ao inutilizar números: ' . ($inutilizacao_response_data['error'] ?? $inutilizacao_curl_error ?? $inutilizacao_response)
        ];
    }

} else {
    $response_data['message'] = 'Requisição inválida.';
}

echo json_encode($response_data);
exit;
?> 