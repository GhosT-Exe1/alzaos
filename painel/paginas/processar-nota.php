<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../conexao.php");

// Define o modo de teste para a emissão (true para simular, false para usar a API real)
$modo_teste_emissao = false; // Defina como true para testar sem a API

// Recebe os dados do formulário
$cliente_id = $_POST['cliente_id'];
$data_emissao = $_POST['data_emissao'];
$valor_servico = str_replace(['.', ','], ['', '.'], $_POST['valor_servico']);
$descricao_servico = $_POST['descricao_servico'];
$observacoes = $_POST['observacoes'];

// Busca os dados da empresa
$query = $pdo->prepare("SELECT * FROM empresas WHERE id = :id");
$query->bindValue(":id", $id_empresa);
$query->execute();
$empresa = $query->fetch(PDO::FETCH_ASSOC);

// Em modo de teste, não precisa da configuração da Nuvem Fiscal nem do ID da Nuvem Fiscal na empresa
if (!$modo_teste_emissao && (!$empresa || !$empresa['id_nuvem_fiscal'])) {
    echo json_encode(['status' => 'error', 'message' => 'Empresa não configurada na Nuvem Fiscal']);
    exit();
}

// Busca os dados do cliente
$query = $pdo->prepare("SELECT * FROM clientes WHERE id = :id AND empresa = :empresa");
$query->bindValue(":id", $cliente_id);
$query->bindValue(":empresa", $id_empresa);
$query->execute();
$cliente = $query->fetch(PDO::FETCH_ASSOC);

if (!$cliente) {
    echo json_encode(['status' => 'error', 'message' => 'Cliente não encontrado']);
    exit();
}

// Busca as configurações da Nuvem Fiscal (ainda buscamos para ter os dados de alíquota no modo de teste)
$query = $pdo->prepare("SELECT * FROM nuvem_fiscal_config WHERE empresa_id = :id");
$query->bindValue(":id", $id_empresa);
$query->execute();
$config = $query->fetch(PDO::FETCH_ASSOC);

// Prepara os dados para a API da Nuvem Fiscal (mesmo no modo de teste, para simular o envio)
$data = [
    'empresa_id' => $empresa['id_nuvem_fiscal'] ?? 'TESTE123', // ID de teste no modo de teste
    'data_emissao' => $data_emissao,
    'tomador' => [
        'nome' => $cliente['nome'],
        'cpf_cnpj' => $cliente['cpf'],
        'email' => $cliente['email'],
        'telefone' => $cliente['telefone'],
        'endereco' => [
            'cep' => $cliente['cep'],
            'logradouro' => $cliente['endereco'],
            'numero' => $cliente['numero'],
            'complemento' => $cliente['complemento'],
            'bairro' => $cliente['bairro'],
            'cidade' => $cliente['cidade'],
            'estado' => $cliente['estado']
        ]
    ],
    'servicos' => [
        [
            'descricao' => $descricao_servico,
            'valor' => $valor_servico,
            'aliquota_iss' => $config['aliquota_iss'] ?? 0 // Usa alíquota da config ou 0 no modo de teste
        ]
    ],
    'observacoes' => $observacoes
];

// --- Lógica de Emissão --- //

$httpCode = 0;
$response = '';

if ($modo_teste_emissao) {
    // --- Modo de Teste: Simula a resposta da API ---
    $responseData = [
        'numero' => rand(1000, 9999), // Número de nota fiscal aleatório para teste
        'status' => 'autorizada', // Simula status autorizado
        'id' => 'mock-id-' . uniqid(), // ID simulado da Nuvem Fiscal
        'data_emissao' => $data_emissao, // Mantém a data original
        'valor_total' => $valor_servico, // Mantém o valor original
        'tomador' => $data['tomador'], // Inclui dados do tomador
        'servicos' => $data['servicos'] // Inclui dados dos serviços
    ];
    $httpCode = 200; // Simula um status HTTP de sucesso
    $response = json_encode($responseData); // Resposta simulada em JSON
    
    // No modo de teste, o log verbose da API real não existe, podemos adicionar um log simples
    $debug_content = "=== MODO DE TESTE - EMISSÃO SIMULADA ===\n";
    $debug_content .= "Data/Hora: " . date('Y-m-d H:i:s') . "\n";
    $debug_content .= "Dados enviados (simulados): " . json_encode($data) . "\n";
    $debug_content .= "Resposta simulada: " . $response . "\n";
    $debug_content .= "=== FIM DO MODO DE TESTE ===\n\n";
    file_put_contents('debug_nf.txt', $debug_content, FILE_APPEND);
    
} else {
    // --- Modo Real: Faz a requisição para a API da Nuvem Fiscal ---
    // Note: Esta parte ainda precisa da autenticação OAuth2 implementada
    
    // Obter o token de acesso (esta lógica precisaria ser integrada aqui ou em um local centralizado)
    // Por enquanto, ainda usaremos o token estático ou a lógica de autenticação anterior
    // ... código para obter o access_token ...
    
    $ch = curl_init('https://api.nuvemfiscal.com.br/v1/nfse');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    
    // Adiciona o header de autorização com o token (se obtido)
    $api_headers_nfse = [
        'Content-Type: application/json',
        // 'Authorization: Bearer ' . $access_token // Adicionar o token real aqui
        'Authorization: Bearer B19tlAZtFsYPH2hba2FMsESq141qkPdm4K4ePWkM' // Exemplo com chave antiga, precisa ser atualizado
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $api_headers_nfse);
    
    // Configurações de debug para a API real (opcional, mas útil)
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
    
    // Log de debug para o modo real (adapte conforme necessário)
    $debug_content = "=== MODO REAL - REQUISIÇÃO API NFSE ===\n";
    $debug_content .= "Data/Hora: " . date('Y-m-d H:i:s') . "\n";
    $debug_content .= "Dados enviados: " . json_encode($data) . "\n";
    $debug_content .= "Status HTTP: " . $httpCode . "\n";
    $debug_content .= "Resposta da API: " . $response . "\n";
    $debug_content .= "Erro CURL: " . $curl_error . "\n";
    // $debug_content .= "Log Detalhado: " . $verboseLog . "\n";
    $debug_content .= "=== FIM DO MODO REAL ===\n\n";
    file_put_contents('debug_nf.txt', $debug_content, FILE_APPEND);
}

// --- Fim da Lógica de Emissão ---

// Processa a resposta (seja simulada ou real)
$responseData = json_decode($response, true);

// Adaptação para salvar no banco no modo de teste ou real
// No modo de teste, $responseData já contém os dados necessários
// No modo real, $responseData é a resposta da API

if ($httpCode >= 200 && $httpCode < 300) {

    error_log("ID da Empresa: " . $id_empresa);
    error_log("ID do Cliente recebido: " . $cliente_id);
    error_log("Dados do Cliente buscado: " . print_r($cliente, true));
    // Salva a nota fiscal no banco
    $query = $pdo->prepare("INSERT INTO notas_fiscais (empresa, cliente_id, numero, data_emissao, valor_total, status, id_nuvem_fiscal) VALUES (:empresa, :cliente_id, :numero, :data_emissao, :valor_total, :status, :id_nuvem_fiscal)");
    $query->bindValue(":empresa", $id_empresa);
    $query->bindValue(":cliente_id", $cliente_id);
    $query->bindValue(":numero", $responseData['numero']);
    $query->bindValue(":data_emissao", $responseData['data_emissao'] ?? $data_emissao); // Usa data da resposta se existir, senão a original
    $query->bindValue(":valor_total", $responseData['valor_total'] ?? $valor_servico); // Usa valor da resposta se existir, senão o original
    $query->bindValue(":status", $responseData['status']);
    $query->bindValue(":id_nuvem_fiscal", $responseData['id']);
    
    $query->execute();
    
    echo json_encode(['status' => 'success', 'message' => 'Nota fiscal emitida com sucesso (Modo Teste)']);
} else {
    // Adaptação da mensagem de erro para modo de teste vs real
    $error_message = 'Erro ao emitir nota fiscal: ';
    if ($modo_teste_emissao) {
        $error_message .= 'Erro simulado.'; // Mensagem genérica para erro no modo de teste
    } else {
        $error_message .= ($responseData['message'] ?? 'Erro desconhecido'); // Usa mensagem da API real
    }
    echo json_encode(['status' => 'error', 'message' => $error_message]);
}

?> 