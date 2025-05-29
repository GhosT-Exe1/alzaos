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

    // --- 4. Gerar DANFE na API ---
    $danfe_ch = curl_init(NFE_URL . '/' . $chave_acesso . '/danfe');
    curl_setopt($danfe_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($danfe_ch, CURLOPT_HTTPHEADER, [
        'Accept: application/pdf',
        'Authorization: Bearer ' . $access_token
    ]);
    curl_setopt($danfe_ch, CURLOPT_SSL_VERIFYPEER, false);

    $danfe_response = curl_exec($danfe_ch);
    $danfe_http_code = curl_getinfo($danfe_ch, CURLINFO_HTTP_CODE);
    $danfe_curl_error = curl_error($danfe_ch);

    curl_close($danfe_ch);

    if ($danfe_http_code === 200) {
        // Criar diretório para DANFEs se não existir
        $danfe_dir = __DIR__ . '/../../danfes';
        if (!file_exists($danfe_dir)) {
            mkdir($danfe_dir, 0777, true);
        }

        // Salvar o PDF
        $pdf_path = $danfe_dir . '/' . $chave_acesso . '.pdf';
        file_put_contents($pdf_path, $danfe_response);

        $response_data = [
            'status' => 'success',
            'message' => 'DANFE gerado com sucesso!',
            'pdf_url' => '/danfes/' . $chave_acesso . '.pdf'
        ];
    } else {
        $response_data = [
            'status' => 'error',
            'message' => 'Erro ao gerar DANFE: ' . ($danfe_curl_error ?? 'Erro desconhecido')
        ];
    }

} else {
    $response_data['message'] = 'Requisição inválida.';
}

echo json_encode($response_data);
exit;
?> 