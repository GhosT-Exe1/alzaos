<?php

// ob_start(); // Comentado para remover debug

// ini_set('display_errors', 1); // Comentado para remover debug
// ini_set('display_startup_errors', 1); // Comentado para remover debug
// error_reporting(E_ALL); // Comentado para remover debug

@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../conexao.php");

// Inclui configurações da API
// require_once __DIR__ . '/../config/api_config.php'; // Verifique se este include ainda é necessário ou foi movido

// Array para acumular mensagens de debug e status
$response_data = ['status' => 'error', 'message' => 'Erro desconhecido'/*, 'debug' => []*/]; // Comentado parte do debug array

function add_debug_log($message) {
    // global $response_data; // Comentado para remover debug
    // $response_data['debug'][] = $message; // Comentado para remover debug
    // file_put_contents('debug_nf.txt', $message . "\n", FILE_APPEND); // Comentado para remover debug
}

// --- Busca os dados completos da empresa logada ---
$query = $pdo->prepare("SELECT * FROM empresas WHERE id = :id");
$query->bindValue(":id", $id_empresa);
$query->execute();
$empresa = $query->fetch(PDO::FETCH_ASSOC);

// --- Busca o ID da Nuvem Fiscal da empresa logada ---
$query_nf = $pdo->prepare("SELECT id_nuvem_fiscal FROM empresas WHERE id = :id");
$query_nf->bindValue(":id", $id_empresa);
$query_nf->execute();
$empresa_nf = $query_nf->fetch(PDO::FETCH_ASSOC);
$id_nuvem_fiscal = $empresa_nf['id_nuvem_fiscal'] ?? null;

// Remove a busca por configuracoes salvas aqui, pois este script processa o POST
// A busca por configuracoes salvas e feita apenas em config_fiscal.php para carregar o formulario.
// Remove tambem a logica de mapeamento associada, pois os valores serao lidos diretamente de $_POST mais a frente.

// --- Etapa 1: Obter o token de acesso ---
// add_debug_log("=== DEBUG ETAPA 1: AUTENTICACAO ==="); // Comentado para remover debug
$auth_ch = curl_init(AUTH_URL);
curl_setopt($auth_ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($auth_ch, CURLOPT_POST, true);
curl_setopt($auth_ch, CURLOPT_POSTFIELDS, http_build_query([
    'grant_type' => 'client_credentials',
    'client_id' => CLIENT_ID,
    'client_secret' => CLIENT_SECRET,
    'scope' => 'empresa cep'
]));
curl_setopt($auth_ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded',
    'Accept: application/json'
]);
curl_setopt($auth_ch, CURLOPT_SSL_VERIFYPEER, false); // Apenas para teste em ambiente de desenvolvimento
curl_setopt($auth_ch, CURLOPT_VERBOSE, true);
$auth_verbose = fopen('php://temp', 'w+');
curl_setopt($auth_ch, CURLOPT_STDERR, $auth_verbose);

$auth_response = curl_exec($auth_ch);
$auth_http_code = curl_getinfo($auth_ch, CURLINFO_HTTP_CODE);
$auth_curl_error = curl_error($auth_ch);

rewind($auth_verbose);
$auth_verboseLog = stream_get_contents($auth_verbose);

curl_close($auth_ch);

$access_token = null;
$auth_response_data = json_decode($auth_response, true);

// add_debug_log("URL de Autenticacao: " . AUTH_URL); // Comentado para remover debug
// add_debug_log("Status HTTP Autenticacao: " . $auth_http_code); // Comentado para remover debug
// add_debug_log("Resposta API Autenticacao: " . $auth_response); // Comentado para remover debug
// add_debug_log("Erro CURL Autenticacao: " . $auth_curl_error); // Comentado para remover debug
// add_debug_log("Log Detalhado Autenticacao:\n" . $auth_verboseLog); // Comentado para remover debug
// add_debug_log("=== FIM DEBUG ETAPA 1 ==="); // Comentado para remover debug

if ($auth_http_code === 200 && isset($auth_response_data['access_token'])) {
    $access_token = $auth_response_data['access_token'];

    // --- Etapa 2: Consultar CEP na API da Nuvem Fiscal para obter Código IBGE (CONDICIONAL) ---
    // add_debug_log("=== DEBUG ETAPA 2: CONSULTA CEP ==="); // Comentado para remover debug
    $cep_sem_mascara = str_replace(['/', '.', '-'], '', $empresa['cep']);
    $ibge_code = null;

    // Busca o IBGE localmente primeiro
    $query_ibge_local = $pdo->prepare("SELECT ibge_code FROM empresas WHERE id = :id");
    $query_ibge_local->bindValue(":id", $id_empresa);
    $query_ibge_local->execute();
    $res_ibge_local = $query_ibge_local->fetch(PDO::FETCH_ASSOC);
    $ibge_code_local = $res_ibge_local['ibge_code'] ?? null;

    if (!empty($ibge_code_local)) {
         // Log para indicar que usou o IBGE local
        // add_debug_log("USANDO IBGE LOCAL: " . $ibge_code_local); // Comentado para remover debug
        $ibge_code = $ibge_code_local;

    } else if (!empty($cep_sem_mascara)) {
        // Se não tem IBGE local, e tem CEP, consulta a API de CEP
        // add_debug_log("CONSULTANDO API CEP para: " . $cep_sem_mascara); // Comentado para remover debug
        $cep_ch = curl_init(API_URL . '/cep/' . $cep_sem_mascara);
        curl_setopt($cep_ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cep_ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $access_token,
            'Accept: application/json'
        ]);

        // Configurações de debug para a requisição GET do CEP
        // curl_setopt($cep_ch, CURLOPT_VERBOSE, true); // Comentado para remover debug
        // $verbose_cep = fopen('php://temp', 'w+'); // Comentado para remover debug
        // curl_setopt($cep_ch, CURLOPT_STDERR, $verbose_cep); // Comentado para remover debug

        $response_cep = curl_exec($cep_ch);
        $httpCode_cep = curl_getinfo($cep_ch, CURLINFO_HTTP_CODE);
        $curl_error_cep = curl_error($cep_ch);

        // Obtém informações detalhadas da requisição CEP
        // rewind($verbose_cep); // Comentado para remover debug
        // $verboseLog_cep = stream_get_contents($verbose_cep); // Comentado para remover debug

        curl_close($cep_ch);

        $responseData_cep = json_decode($response_cep, true);

        // add_debug_log("URL API CEP: " . API_URL . '/cep/' . $cep_sem_mascara); // Comentado para remover debug
        // add_debug_log("Status HTTP API CEP: " . $httpCode_cep); // Comentado para remover debug
        // add_debug_log("Resposta API CEP: " . $response_cep); // Comentado para remover debug
        // add_debug_log("Erro CURL API CEP: " . $curl_error_cep); // Comentado para remover debug
        // add_debug_log("Log Detalhado API CEP:\n" . $verboseLog_cep); // Comentado para remover debug

        if ($httpCode_cep === 200 && isset($responseData_cep['codigo_ibge'])) {
            $ibge_code = $responseData_cep['codigo_ibge'];
             // SALVAR IBGE OBTIDO DA API NO BANCO LOCAL (se não estava salvo)
            if (empty($ibge_code_local)) {
                 // add_debug_log("SALVANDO IBGE OBTIDO DA API LOCALMENTE: " . $ibge_code); // Comentado para remover debug
                 $query_save_ibge = $pdo->prepare("UPDATE empresas SET ibge_code = :codigo_ibge WHERE id = :id");
                 $query_save_ibge->bindValue(":codigo_ibge", $ibge_code);
                 $query_save_ibge->bindValue(":id", $id_empresa);
                 $query_save_ibge->execute();
             } else {
                 // add_debug_log("IBGE OBTIDO DA API (" . $ibge_code . ") MAS JA EXISTIA LOCAL (" . $ibge_code_local . "). Nao salvou novamente."); // Comentado para remover debug
             }

        } else {
            // Erro ou aviso se o IBGE não foi obtido e não havia localmente
            // add_debug_log("ERRO AO OBTER IBGE PELO CEP. Interrompendo."); // Comentado para remover debug
            // add_debug_log("=== FIM DEBUG ETAPA 2 ==="); // Comentado para remover debug
            $response_data['status'] = 'error';
            $response_data['message'] = 'Não foi possível obter o código IBGE do município pelo CEP. Por favor, verifique o CEP informado.';
            // ENVIA RESPOSTA E ENCERRA
            header('Content-Type: application/json');
            echo json_encode($response_data);
            exit;
        }
    } else { // Não tem CEP e não tem IBGE local
         $response_data['status'] = 'error';
        $response_data['message'] = 'CEP da empresa não informado ou código IBGE não salvo localmente.';
         // add_debug_log("ERRO: CEP nao informado e IBGE nao salvo localmente. Interrompendo."); // Comentado para remover debug
         // add_debug_log("=== FIM DEBUG ETAPA 2 ==="); // Comentado para remover debug
        // ENVIA RESPOSTA E ENCERRA
        header('Content-Type: application/json');
        echo json_encode($response_data);
        exit;
    }
     // add_debug_log("IBGE Final Usado: " . $ibge_code); // Comentado para remover debug
     // add_debug_log("=== FIM DEBUG ETAPA 2 ==="); // Comentado para remover debug


    // --- Etapa 3: Salvar/Atualizar Empresa na Nuvem Fiscal (POST ou PUT /empresas) ---
    // add_debug_log("=== DEBUG ETAPA 3: SALVAR/ATUALIZAR EMPRESA NA API ==="); // Comentado para remover debug
    // Recebe os dados do formulário
    $certificado = $_FILES['certificado'];
    $senha_certificado = $_POST['senha_certificado'];
    $inscricao_municipal = $_POST['inscricao_municipal'];
    $inscricao_estadual = $_POST['inscricao_estadual'];
    $cnae = $_POST['cnae'];
    $aliquota_iss = $_POST['aliquota_iss'];

    // Prepara os dados para a Nuvem Fiscal
    $dados = [
        'cpf_cnpj' => str_replace(['/', '.', '-'], '', $empresa['cpf']),
        'nome_razao_social' => $empresa['nome'],
        'nome_fantasia' => $empresa['nome_fantasia'] ?? $empresa['nome'],
        'inscricao_municipal' => $inscricao_municipal,
        'inscricao_estadual' => $inscricao_estadual,
        'email' => $empresa['email'],
        'fone' => $empresa['telefone'],
        'endereco' => [
            'cep' => str_replace(['/', '.', '-'], '', $empresa['cep']),
            'logradouro' => $empresa['endereco'],
            'numero' => $empresa['numero'],
            'complemento' => $empresa['complemento'],
            'bairro' => $empresa['bairro'],
            'uf' => $empresa['estado'],
            'cidade' => $empresa['cidade'], // Usar nome da cidade local
            'codigo_municipio' => $ibge_code ?? '', // Usar IBGE obtido/salvo
            'codigo_pais' => '1058',
            'pais' => 'Brasil'
        ]
    ];

    // Se tiver certificado E o campo for esperado AQUI, adiciona aos dados. (Verificar documentação!)
    // if ($certificado['error'] == 0) {
    //     $dados['certificado'] = [
    //         'arquivo' => base64_encode(file_get_contents($certificado['tmp_name'])),
    //         'senha' => $senha_certificado
    //     ];
    // }

    $cnpj_sem_mascara = str_replace(['/', '.', '-'], '', $empresa['cpf']); // CNPJ sem máscara será o identificador

    // --- Faz a primeira tentativa: Criar empresa (POST) ---
    $method = 'POST';
    $api_endpoint = API_URL . '/empresas';

    // add_debug_log("Tentando POST para " . $api_endpoint); // Comentado para remover debug
    $ch = curl_init($api_endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dados));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $access_token,
        'Content-Type: application/json'
    ]);

    // Configurações de debug para a requisição POST
    // curl_setopt($ch, CURLOPT_VERBOSE, true); // Comentado para remover debug
    // $verbose_post = fopen('php://temp', 'w+'); // Comentado para remover debug
    // curl_setopt($ch, CURLOPT_STDERR, $verbose_post); // Comentado para remover debug

    $response_post = curl_exec($ch);
    $httpCode_post = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_error_post = curl_error($ch);

    // Obtém informações detalhadas da requisição POST
    // rewind($verbose_post); // Comentado para remover debug
    // $verboseLog_post = stream_get_contents($verbose_post); // Comentado para remover debug

    curl_close($ch);

    // add_debug_log("Status HTTP POST: " . $httpCode_post); // Comentado para remover debug
    // add_debug_log("Resposta API POST: " . $response_post); // Comentado para remover debug
    // add_debug_log("Erro CURL POST: " . $curl_error_post); // Comentado para remover debug
    // add_debug_log("Log Detalhado POST:\n" . $verboseLog_post); // Comentado para remover debug

    $responseData = json_decode($response_post, true);
    $empresa_api_success = false;

    // Verifica o status HTTP da requisição POST
    if ($httpCode_post >= 200 && $httpCode_post < 300) {
        // add_debug_log("POST /empresas bem-sucedido."); // Comentado para remover debug
        $empresa_api_success = true;

         // O ID retornado no POST (se houver) ou o próprio CNPJ pode ser salvo localmente para referência futura, mas não é estritamente necessário para a API PUT agora.
         // Vamos salvar o CNPJ sem máscara como id_nuvem_fiscal local para consistência.
         // add_debug_log("CNPJ salvo localmente em empresas.id_nuvem_fiscal apos POST."); // Comentado para remover debug
         $query_update_id = $pdo->prepare("UPDATE empresas SET id_nuvem_fiscal = :id_nuvem_fiscal WHERE id = :id");
         $query_update_id->bindValue(":id_nuvem_fiscal", $cnpj_sem_mascara);
         $query_update_id->bindValue(":id", $id_empresa);
         $query_update_id->execute();
         // add_debug_log("CNPJ salvo localmente em empresas.id_nuvem_fiscal apos POST."); // Comentado para remover debug

    } else {
        // Log de erro da API na tentativa POST
        // add_debug_log("ERRO NA API EMPRESA (POST): " . $httpCode_post . " - " . ($responseData['error']['message'] ?? $response_post)); // Comentado para remover debug

        // ** Se o erro for EmpresaAlreadyExists em POST, tentar PUT **
        if ($httpCode_post === 400 && isset($responseData['error']['code']) && $responseData['error']['code'] === 'EmpresaAlreadyExists') {

            // add_debug_log("Tentando PUT para " . API_URL . '/empresas/' . $cnpj_sem_mascara . " apos EmpresaAlreadyExists."); // Comentado para remover debug
            // --- Fazer a requisição de atualização (PUT) ---
            $method_put = 'PUT';
            $api_endpoint_put = API_URL . '/empresas/' . $cnpj_sem_mascara; // Endpoint PUT com CNPJ

            $ch_put = curl_init($api_endpoint_put);
            curl_setopt($ch_put, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch_put, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch_put, CURLOPT_POSTFIELDS, json_encode($dados));
            curl_setopt($ch_put, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $access_token,
                'Content-Type: application/json'
            ]);
             curl_setopt($ch_put, CURLOPT_SSL_VERIFYPEER, false); // Apenas para teste
             // curl_setopt($ch_put, CURLOPT_VERBOSE, true); // Comentado para remover debug
             // $verbose_put = fopen('php://temp', 'w+'); // Comentado para remover debug
             // curl_setopt($ch_put, CURLOPT_STDERR, $verbose_put); // Comentado para remover debug

            $response_put = curl_exec($ch_put);
            $httpCode_put = curl_getinfo($ch_put, CURLINFO_HTTP_CODE);
            $curl_error_put = curl_error($ch_put);

            // rewind($verbose_put); // Comentado para remover debug
            // $verboseLog_put = stream_get_contents($verbose_put); // Comentado para remover debug

            curl_close($ch_put);

             // add_debug_log("Status HTTP PUT: " . $httpCode_put); // Comentado para remover debug
             // add_debug_log("Resposta API PUT: " . $response_put); // Comentado para remover debug
             // add_debug_log("Erro CURL PUT: " . $curl_error_put); // Comentado para remover debug
             // add_debug_log("Log Detalhado PUT:\n" . $verboseLog_put); // Comentado para remover debug

            $responseData_put = json_decode($response_put, true);

            if ($httpCode_put >= 200 && $httpCode_put < 300) {
                // Sucesso na atualização via PUT
                // add_debug_log("PUT /empresas bem-sucedido."); // Comentado para remover debug
                $empresa_api_success = true;

                 // Salvar o CNPJ sem máscara como id_nuvem_fiscal local para consistência
                 // add_debug_log("CNPJ salvo localmente em empresas.id_nuvem_fiscal apos PUT."); // Comentado para remover debug
                 $query_update_id = $pdo->prepare("UPDATE empresas SET id_nuvem_fiscal = :id_nuvem_fiscal WHERE id = :id");
                 $query_update_id->bindValue(":id_nuvem_fiscal", $cnpj_sem_mascara);
                 $query_update_id->bindValue(":id", $id_empresa);
                 $query_update_id->execute();
                 // add_debug_log("CNPJ salvo localmente em empresas.id_nuvem_fiscal apos PUT."); // Comentado para remover debug

            } else {
                // Log de erro na requisição PUT
                // add_debug_log("ERRO NA API EMPRESA (PUT): " . $httpCode_put . " - " . ($responseData_put['error']['message'] ?? $response_put)); // Comentado para remover debug
                 // Define a mensagem de erro final
                $response_data['message'] = 'Erro ao atualizar empresa na Nuvem Fiscal (PUT): ' . ($responseData_put['error']['message'] ?? 'Erro desconhecido');
            }

        } else {
             // Se for outro erro que não EmpresaAlreadyExists no POST
            // add_debug_log("ERRO NA API EMPRESA (POST) - Nao EmpresaAlreadyExists: " . $httpCode_post . " - " . ($responseData['error']['message'] ?? $response_post)); // Comentado para remover debug
             // Define a mensagem de erro final
            $response_data['message'] = 'Erro ao criar empresa na Nuvem Fiscal (POST): ' . ($responseData['error']['message'] ?? 'Erro desconhecido');
        }
    }
     // add_debug_log("=== FIM DEBUG ETAPA 3 ==="); // Comentado para remover debug


    // --- Etapa 4: Salvar Configurações no Banco de Dados Local ---
     // add_debug_log("=== DEBUG ETAPA 4: SALVAR CONFIG LOCAL ==="); // Comentado para remover debug
    if ($empresa_api_success) { // Salvar localmente apenas se a etapa da API empresa foi bem sucedida
        // Verifica se já existe uma configuração para esta empresa
        // add_debug_log("Verificando config local existente para empresa_id: " . $id_empresa); // Comentado para remover debug
        $query_check_config = $pdo->prepare("SELECT id FROM nuvem_fiscal_config WHERE empresa_id = :id");
        $query_check_config->bindValue(":id", $id_empresa);
        $query_check_config->execute();
        $config_existente = $query_check_config->fetch(PDO::FETCH_ASSOC);

        // add_debug_log("Resultado da verificacao de config existente: " . json_encode($config_existente)); // Comentado para remover debug

        if ($config_existente) {
            // Se existir, atualiza
            // add_debug_log("Tipo de Query Local: UPDATE"); // Comentado para remover debug
            // add_debug_log("Valores para UPDATE: " . json_encode([
            // 'empresa_id' => $id_empresa,
            // 'certificado_path' => $certificado_path_db,
            // 'senha_certificado' => $senha_certificado,
            // 'ambiente' => $_POST['ambiente_nf'],
            // 'regime_tributario' => $_POST['regime_tributario'],
            // 'inscricao_municipal' => $inscricao_municipal,
            // 'inscricao_estadual' => $inscricao_estadual,
            // 'cnae' => $cnae,
            // 'aliquota_iss' => $aliquota_iss
            // ])); // Comentado para remover debug
            
            $query = $pdo->prepare("UPDATE nuvem_fiscal_config SET 
                certificado_path = :certificado_path, 
                senha_certificado = :senha_certificado, 
                ambiente = :ambiente, 
                regime_tributario = :regime_tributario, 
                inscricao_municipal = :inscricao_municipal, 
                inscricao_estadual = :inscricao_estadual, 
                cnae = :cnae, 
                aliquota_iss = :aliquota_iss 
                WHERE empresa_id = :empresa_id");
        } else {
            // Se não existir, insere
            // add_debug_log("Tipo de Query Local: INSERT"); // Comentado para remover debug
            $query = $pdo->prepare("INSERT INTO nuvem_fiscal_config (empresa_id, certificado_path, senha_certificado, ambiente, regime_tributario, inscricao_municipal, inscricao_estadual, cnae, aliquota_iss) VALUES (:empresa_id, :certificado_path, :senha_certificado, :ambiente, :regime_tributario, :inscricao_municipal, :inscricao_estadual, :cnae, :aliquota_iss)");
        }

        // add_debug_log("Antes de executar a query local."); // Comentado para remover debug

        $query->bindValue(":empresa_id", $id_empresa);
        // Lidar com upload de certificado (assumindo que o arquivo já foi movido/tratado antes)
        // Por enquanto, salva apenas o nome do arquivo se houver upload bem-sucedido (verificar lógica de upload)
         $certificado_path_db = ($certificado['error'] == 0 && isset($certificado['name']) && !empty($certificado['name'])) ? $certificado['name'] : null; // Ajuste conforme sua lógica de upload real

        $query->bindValue(":certificado_path", $certificado_path_db);
        $query->bindValue(":senha_certificado", $senha_certificado);
        $query->bindValue(":ambiente", $_POST['ambiente_nf']); // Usar valor do POST
        $query->bindValue(":regime_tributario", $_POST['regime_tributario']); // Usar valor do POST
        $query->bindValue(":inscricao_municipal", $inscricao_municipal);
        $query->bindValue(":inscricao_estadual", $inscricao_estadual);
        $query->bindValue(":cnae", $cnae);
        $query->bindValue(":aliquota_iss", $aliquota_iss);

        try {
            $query->execute();
            $rowCount = $query->rowCount();
            // add_debug_log("Query local executada. rowCount: " . $rowCount); // Comentado para remover debug
            
            // Adiciona log do SQL gerado
            // add_debug_log("SQL gerado: " . $query->queryString); // Comentado para remover debug
            
            // Verifica se houve erro na execução
            // if ($query->errorCode() != '00000') { // Comentado para remover debug
                // add_debug_log("Erro na execução da query: " . json_encode($query->errorInfo())); // Comentado para remover debug
            // } // Comentado para remover debug
            
            if ($rowCount > 0) {
                // add_debug_log("Configuracao local salva/atualizada com sucesso."); // Comentado para remover debug
            } else {
                // add_debug_log("Query local executada, mas rowCount 0. Nenhum registro alterado/inserido."); // Comentado para remover debug
                // Verifica se o registro existe
                // $check = $pdo->prepare("SELECT * FROM nuvem_fiscal_config WHERE empresa_id = :id"); // Comentado para remover debug
                // $check->bindValue(":id", $id_empresa); // Comentado para remover debug
                // $check->execute(); // Comentado para remover debug
                // $exists = $check->fetch(PDO::FETCH_ASSOC); // Comentado para remover debug
                // add_debug_log("Verificação de existência do registro: " . json_encode($exists)); // Comentado para remover debug
            }
            // Manter status de sucesso se já estiver sucesso da etapa anterior
             if($response_data['status'] !== 'error') $response_data['status'] = 'success';

        } catch (PDOException $e) {
             // add_debug_log("ERRO na query local: " . $e->getMessage()); // Comentado para remover debug
            $response_data['status'] = 'error';
            $response_data['message'] = 'Erro ao salvar configuração no banco de dados local: ' . $e->getMessage();
             // Interrompe o fluxo de sucesso, mas não encerra o script ainda (para logar tudo)
             $empresa_api_success = false; // Considera falha geral se o BD local falhou
        }
    } else {
         // add_debug_log("Pulando salvamento local, pois a etapa da API empresa falhou."); // Comentado para remover debug
         // Se a API empresa falhou, a mensagem de erro já foi definida na etapa 3
    }
     // add_debug_log("=== FIM DEBUG ETAPA 4 ==="); // Comentado para remover debug

    // --- Etapa 5: Atualizar Configurações de NF-e na Nuvem Fiscal (PUT /nfe) ---
     // add_debug_log("=== DEBUG ETAPA 5: ATUALIZAR NFE NA API ==="); // Comentado para remover debug
    if ($empresa_api_success) { // Tentar atualizar NFE apenas se a etapa da API empresa E BD local foram bem sucedidas
        $api_endpoint_nfe = API_URL . '/empresas/' . $cnpj_sem_mascara . '/nfe';

        // Mapear regime_tributario DO POST para CRT da API
        $crt_api = 3; // Default para Regime Normal
        if ($_POST['regime_tributario'] == 1) { // Simples Nacional
            $crt_api = 1;
        } else if ($_POST['regime_tributario'] == 2) { // Simples Nacional - excesso de sublimite
            $crt_api = 2;
        } else if ($_POST['regime_tributario'] == 4) { // MEI
            $crt_api = 4;
        }
        // Se for 3 (Regime Normal), mantém CRT 3

        // Mapear ambiente_nf DO POST para string da API (exatamente como especificado)
        $ambiente_api = ($_POST['ambiente_nf'] == 2) ? 'producao' : 'homologacao';

        $dados_nfe = [
            'CRT' => (int)$crt_api, // CRT deve ser inteiro
            'ambiente' => $ambiente_api
        ];

         // add_debug_log("Tentando PUT para " . $api_endpoint_nfe . " com dados: " . json_encode($dados_nfe)); // Comentado para remover debug
        $ch_nfe = curl_init($api_endpoint_nfe);
        curl_setopt($ch_nfe, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch_nfe, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch_nfe, CURLOPT_POSTFIELDS, json_encode($dados_nfe));
        curl_setopt($ch_nfe, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $access_token,
            'Content-Type: application/json'
        ]);
         // curl_setopt($ch_nfe, CURLOPT_SSL_VERIFYPEER, false); // Apenas para teste
         // curl_setopt($ch_nfe, CURLOPT_VERBOSE, true); // Comentado para remover debug
         // $verbose_nfe = fopen('php://temp', 'w+'); // Comentado para remover debug
         // curl_setopt($ch_nfe, CURLOPT_STDERR, $verbose_nfe); // Comentado para remover debug

        $response_nfe = curl_exec($ch_nfe);
        $httpCode_nfe = curl_getinfo($ch_nfe, CURLINFO_HTTP_CODE);
        $curl_error_nfe = curl_error($ch_nfe);

        // rewind($verbose_nfe); // Comentado para remover debug
        // $verboseLog_nfe = stream_get_contents($verbose_nfe); // Comentado para remover debug

        curl_close($ch_nfe);

         // add_debug_log("Status HTTP NFE: " . $httpCode_nfe); // Comentado para remover debug
         // add_debug_log("Resposta API NFE: " . $response_nfe); // Comentado para remover debug
         // add_debug_log("Erro CURL NFE: " . $curl_error_nfe); // Comentado para remover debug
         // add_debug_log("Log Detalhado NFE:\n" . $verboseLog_nfe); // Comentado para remover debug

        $responseData_nfe = json_decode($response_nfe, true);

        if ($httpCode_nfe >= 200 && $httpCode_nfe < 300) {
            // Sucesso na atualização das configs de NF-e
            // add_debug_log("PUT /nfe bem-sucedido."); // Comentado para remover debug
            // Se todas as etapas anteriores foram sucesso, define sucesso geral
             $response_data['status'] = 'success';
             $response_data['message'] = 'Configurações Salva!';

        } else {
            // Log de erro na atualização das configs de NF-e
             // add_debug_log("ERRO NA API NFE (PUT): " . $httpCode_nfe . " - " . ($responseData_nfe['error']['message'] ?? $response_nfe)); // Comentado para remover debug
            $response_data['status'] = 'error';
            $response_data['message'] = 'Erro ao atualizar configurações de NF-e na Nuvem Fiscal: ' . ($responseData_nfe['error']['message'] ?? 'Erro desconhecido');
        }
    } else {
         // add_debug_log("Pulando atualizacao NFE na API, pois etapa anterior falhou."); // Comentado para remover debug
         // A mensagem de erro já foi definida na etapa que falhou
    }
     // add_debug_log("=== FIM DEBUG ETAPA 5 ==="); // Comentado para remover debug

} else {
    // Log do erro de autenticação
     // add_debug_log("ERRO FATAL: Falha ao obter o token de acesso."); // Comentado para remover debug
    $response_data['status'] = 'error';
    $response_data['message'] = 'Falha ao obter o token de acesso. Verifique o arquivo de debug para mais detalhes.';
}

// --- Resposta Final para o Frontend ---
// add_debug_log("=== RESPOSTA FINAL PARA FRONTEND ==="); // Comentado para remover debug
// add_debug_log("Status Final: " . $response_data['status']); // Comentado para remover debug
// add_debug_log("Mensagem Final: " . $response_data['message']); // Comentado para remover debug
// ob_clean(); // Limpa o buffer de saída para garantir que apenas o JSON seja enviado // Comentado para remover debug

// exit; // Adicionado para diagnosticar output inesperado // Comentado para remover debug

header('Content-Type: application/json');
echo json_encode($response_data);
exit; // Encerra o script

// Removido HTML e tag de fechamento PHP do final para evitar SyntaxError no frontend.