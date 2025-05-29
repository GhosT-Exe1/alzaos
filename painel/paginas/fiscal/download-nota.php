<?php
// Configurações temporárias para exibir erros (remover em produção)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../conexao.php");
require_once("../config/api_config.php");

// Define o modo de teste para o download (true para simular, false para usar a API real)
$modo_teste_download_nota = true; // Defina como true para testar sem a API

// Recebe o ID da nota fiscal da Nuvem Fiscal (usado no modo real e simulado no modo teste)
$id_nuvem_fiscal = $_GET['id_nuvem_fiscal'] ?? null;

if ($id_nuvem_fiscal === null) {
    die('Erro: ID da nota fiscal não fornecido.');
}

// Se estiver no modo de teste, simula o download
if ($modo_teste_download_nota) {
    // --- Modo de Teste: Simula um arquivo PDF --- //
    $pdf_content = "%PDF-1.0\n1 0 obj<</Type/Catalog/Pages 2 0 R>>endobj 2 0 obj<</Type/Pages/Count 1/Kids[3 0 R]>>endobj 3 0 obj<</Type/Page/MediaBox[0 0 612 792]/Contents 4 0 R/Parent 2 0 R/Resources<<>>>endobj 4 0 obj<</Length 25>>stream\nHello, this is a test PDF.\nendstream\nxref\n0 5\n0000000000 65535 f\n0000000010 00000 n\n0000000053 00000 n\n0000000101 00000 n\n0000000178 00000 n\ntrailer<</Size 5/Root 1 0 R>>\nstartxref\n203\n%%EOF";
    
    // Define headers para simular um download de PDF
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="nota_fiscal_teste_' . htmlspecialchars($id_nuvem_fiscal) . '.pdf"');
    header('Content-Length: ' . strlen($pdf_content));
    
    // Envia o conteúdo simulado do PDF
    echo $pdf_content;
    
     // Log simples no modo de teste
    $debug_content = "=== MODO DE TESTE - DOWNLOAD SIMULADO ===\n";
    $debug_content .= "Data/Hora: " . date('Y-m-d H:i:s') . "\n";
    $debug_content .= "Simulando download do PDF para ID da Nuvem Fiscal: " . htmlspecialchars($id_nuvem_fiscal) . ".\n";
    $debug_content .= "=== FIM DO MODO DE TESTE ===\n\n";
    file_put_contents('../debug_nf.txt', $debug_content, FILE_APPEND);
    
} else {
    // --- Modo Real: Busca o PDF da API da Nuvem Fiscal ---
    
    // Busca os dados da empresa (necessário para obter o token, se centralizado)
    // Note: Precisamos do id_empresa local aqui para buscar as credenciais/token
    // Assumindo que o id_empresa está na sessão, como em outros scripts
     $query = $pdo->prepare("SELECT id_nuvem_fiscal FROM empresas WHERE id = :id");
    $query->bindValue(":id", $id_empresa);
    $query->execute();
    $empresa = $query->fetch(PDO::FETCH_ASSOC);
    
    if (!$empresa || !$empresa['id_nuvem_fiscal']) {
         echo '<div class="alert alert-warning">Empresa não configurada na Nuvem Fiscal.</div>';
         // Não exit() para talvez exibir o erro antes dos headers
    } else {
        // Busca o PDF da nota fiscal na Nuvem Fiscal usando o ID da API
        $ch = curl_init(API_URL . '/v1/nfse/' . $id_nuvem_fiscal . '/pdf');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Adiciona o header de autorização com o token
        $api_headers_nfse_download = [
            'Authorization: Bearer ' . CLIENT_ID,
            'Content-Type: application/json'
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $api_headers_nfse_download);
        
        // Configurações de debug para a API real (opcional)
        // curl_setopt($ch, CURLOPT_VERBOSE, true);
        // $verbose = fopen('php://temp', 'w+');
        // curl_setopt($ch, CURLOPT_STDERR, $verbose);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_error = curl_error($ch);
        curl_close($ch);
        
         // Se tiver debug verbose na API real, obter o log aqui
        // $verboseLog = '';
        // if (isset($verbose)) { rewind($verbose); $verboseLog = stream_get_contents($verbose); }
        
        if ($httpCode >= 200 && $httpCode < 300) {
            // Define os headers para download do PDF
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="nota_fiscal_' . htmlspecialchars($id_nuvem_fiscal) . '.pdf"');
            header('Content-Length: ' . strlen($response));
            header('Cache-Control: private, max-age=0, must-revalidate');
            header('Pragma: public');
            
            // Envia o PDF
            echo $response;
            
        } else {
            // Log de erro da API no modo real
            $debug_content = "=== MODO REAL - ERRO AO BAIXAR PDF NFSE ===\n";
            $debug_content .= "Data/Hora: " . date('Y-m-d H:i:s') . "\n";
            $debug_content .= "URL: " . API_URL . '/v1/nfse/' . $id_nuvem_fiscal . '/pdf' . "\n";
            $debug_content .= "Status HTTP: " . $httpCode . "\n";
            $debug_content .= "Resposta da API: " . $response . "\n";
            $debug_content .= "Erro CURL: " . $curl_error . "\n";
            $debug_content .= "Headers: " . print_r($api_headers_nfse_download, true) . "\n";
            // $debug_content .= "Log Detalhado: " . $verboseLog . "\n";
            $debug_content .= "=== FIM DO ERRO AO BAIXAR PDF NFSE ===\n\n";
            file_put_contents('../debug_nf.txt', $debug_content, FILE_APPEND);
            
            echo '<div class="alert alert-danger">Erro ao baixar o PDF da nota fiscal da API. Verifique o arquivo de debug.</div>';
        }
    }
}

?> 