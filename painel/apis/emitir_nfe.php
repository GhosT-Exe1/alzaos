<?php

// Incluir arquivos necessários (conexao.php e api_config.php)
require_once("../../conexao.php");
require_once __DIR__ . '/../config/api_config.php';

// Definir headers para resposta JSON
header('Content-Type: application/json');

// Array para resposta ao frontend
$response_data = ['status' => 'error', 'message' => 'Erro desconhecido'];

// Verificar se a requisição é POST e se recebeu os dados mínimos
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cliente_id']) && isset($_POST['itens']) && isset($_POST['pagamento'])) {
    
    $id_cliente = $_POST['cliente_id'];
    $itens_venda = $_POST['itens']; // Array com detalhes dos itens
    $pagamento = $_POST['pagamento']; // Array com detalhes do pagamento

    // --- 1. Buscar dados do Cliente ---
    $query_cliente = $pdo->prepare("SELECT * FROM clientes WHERE id = :id");
    $query_cliente->bindValue(":id", $id_cliente);
    $query_cliente->execute();
    $cliente = $query_cliente->fetch(PDO::FETCH_ASSOC);

    if (!$cliente) {
        $response_data['message'] = 'Cliente não encontrado.';
        echo json_encode($response_data);
        exit;
    }

    // --- 2. Buscar dados da Empresa (Emitente) ---
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
    $empresa_emitente = $query_empresa->fetch(PDO::FETCH_ASSOC);

    if (!$empresa_emitente) {
        $response_data['message'] = 'Configurações da empresa emitente não encontradas.';
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

    // --- 4. Montar o Payload da NF-e ---
    $nfe_payload = [
        'infNFe' => [
            'ide' => [
                'cUF' => $empresa_emitente['uf'] ?? '35',
                'cNF' => str_pad(mt_rand(0, 999999), 8, '0', STR_PAD_LEFT),
                'natOp' => 'Venda ao Consumidor',
                'mod' => '55',
                'serie' => $empresa_emitente['serie_nfe'] ?? '1',
                'nNF' => $empresa_emitente['ultima_nfe'] ?? '1',
                'dhEmi' => date('c'),
                'tpNF' => '1',
                'idDest' => '1',
                'cMunFG' => $empresa_emitente['codigo_municipio'] ?? '',
                'tpImp' => '1',
                'tpEmis' => '1',
                'cDV' => '0',
                'tpAmb' => API_AMBIENTE === 'producao' ? '1' : '2',
                'finNFe' => '1',
                'indFinal' => '1',
                'indPres' => '1',
                'procEmi' => '0',
                'verProc' => '1.0'
            ],
            'emit' => [
                'CNPJ' => preg_replace('/[^0-9]/', '', $empresa_emitente['cnpj'] ?? ''),
                'xNome' => $empresa_emitente['nome'] ?? '',
                'xFant' => $empresa_emitente['nome_fantasia'] ?? '',
                'enderEmit' => [
                    'xLgr' => $empresa_emitente['endereco'] ?? '',
                    'nro' => $empresa_emitente['numero'] ?? '',
                    'xCpl' => $empresa_emitente['complemento'] ?? '',
                    'xBairro' => $empresa_emitente['bairro'] ?? '',
                    'cMun' => $empresa_emitente['codigo_municipio'] ?? '',
                    'xMun' => $empresa_emitente['cidade'] ?? '',
                    'UF' => $empresa_emitente['uf'] ?? '',
                    'CEP' => preg_replace('/[^0-9]/', '', $empresa_emitente['cep'] ?? ''),
                    'cPais' => '1058',
                    'xPais' => 'BRASIL',
                    'fone' => preg_replace('/[^0-9]/', '', $empresa_emitente['telefone'] ?? '')
                ],
                'IE' => $empresa_emitente['ie'] ?? '',
                'IEST' => $empresa_emitente['iest'] ?? '',
                'IM' => $empresa_emitente['im'] ?? '',
                'CNAE' => $empresa_emitente['cnae'] ?? '',
                'CRT' => $empresa_emitente['crt'] ?? '1'
            ],
            'dest' => [
                'CNPJ' => preg_replace('/[^0-9]/', '', $cliente['cnpj'] ?? ''),
                'CPF' => preg_replace('/[^0-9]/', '', $cliente['cpf'] ?? ''),
                'xNome' => $cliente['nome'] ?? '',
                'enderDest' => [
                    'xLgr' => $cliente['endereco'] ?? '',
                    'nro' => $cliente['numero'] ?? '',
                    'xCpl' => $cliente['complemento'] ?? '',
                    'xBairro' => $cliente['bairro'] ?? '',
                    'cMun' => $cliente['codigo_municipio'] ?? '',
                    'xMun' => $cliente['cidade'] ?? '',
                    'UF' => $cliente['uf'] ?? '',
                    'CEP' => preg_replace('/[^0-9]/', '', $cliente['cep'] ?? ''),
                    'cPais' => '1058',
                    'xPais' => 'BRASIL',
                    'fone' => preg_replace('/[^0-9]/', '', $cliente['telefone'] ?? '')
                ],
                'indIEDest' => '9',
                'IE' => $cliente['ie'] ?? '',
                'ISUF' => $cliente['isuf'] ?? '',
                'email' => $cliente['email'] ?? ''
            ],
            'det' => [],
            'total' => [],
            'transp' => ['modFrete' => 9],
            'cobr' => [],
            'pag' => []
        ],
        'infNFeSupl' => [],
        'ambiente' => API_AMBIENTE,
        'referencia' => uniqid('nfe-')
    ];

    // Processar itens
    foreach ($itens_venda as $item) {
        $det_item = [
            'prod' => [
                'cProd' => $item['codigo'] ?? '',
                'cEAN' => $item['ean'] ?? '',
                'xProd' => $item['descricao'] ?? 'Item sem descrição',
                'NCM' => $item['ncm'] ?? '',
                'uCom' => $item['unidade_comercial'] ?? 'UN',
                'qCom' => (float)($item['quantidade'] ?? 0),
                'vUnCom' => (float)($item['valor_unitario'] ?? 0),
                'vProd' => (float)($item['valor_total'] ?? 0),
                'cEANTrib' => $item['ean_tributavel'] ?? '',
                'uTrib' => $item['unidade_tributavel'] ?? 'UN',
                'qTrib' => (float)($item['quantidade_tributavel'] ?? ($item['quantidade'] ?? 0)),
                'vUnTrib' => (float)($item['valor_unitario_tributavel'] ?? ($item['valor_unitario'] ?? 0))
            ],
            'imposto' => [
                'ICMS' => [
                    'ICMSSN102' => [
                        'orig' => 0,
                        'CSOSN' => 102
                    ]
                ]
            ]
        ];
        
        $nfe_payload['infNFe']['det'][] = $det_item;
    }

    // Processar pagamentos
    $total_nota = 0;
    $pagamentos = [];

    foreach ($pagamento as $forma_pag) {
        $valor = (float)($forma_pag['valor'] ?? 0);
        $total_nota += $valor;

        $tPag = match(strtoupper($forma_pag['forma'] ?? '')) {
            'DINHEIRO' => '01',
            'CARTAO_CREDITO' => '03',
            'CARTAO_DEBITO' => '04',
            'PIX' => '17',
            'BOLETO' => '06',
            default => '99'
        };

        $pagamentos[] = [
            'tPag' => $tPag,
            'vPag' => $valor
        ];
    }

    $nfe_payload['infNFe']['pag'] = $pagamentos;

    // Calcular totais
    $total_produtos = 0;
    foreach ($itens_venda as $item) {
        $total_produtos += (float)($item['valor_total'] ?? 0);
    }

    $nfe_payload['infNFe']['total'] = [
        'ICMSTot' => [
            'vBC' => $total_produtos,
            'vICMS' => 0,
            'vProd' => $total_produtos,
            'vNF' => $total_nota,
            'vPIS' => 0,
            'vCOFINS' => 0
        ]
    ];

    // --- 5. Enviar para a API da Nuvem Fiscal ---
    $nfe_ch = curl_init(NFE_URL);
    curl_setopt($nfe_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($nfe_ch, CURLOPT_POST, true);
    curl_setopt($nfe_ch, CURLOPT_POSTFIELDS, json_encode($nfe_payload));
    curl_setopt($nfe_ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'Authorization: Bearer ' . $access_token
    ]);
    curl_setopt($nfe_ch, CURLOPT_SSL_VERIFYPEER, false);

    $nfe_response = curl_exec($nfe_ch);
    $nfe_http_code = curl_getinfo($nfe_ch, CURLINFO_HTTP_CODE);
    $nfe_curl_error = curl_error($nfe_ch);

    curl_close($nfe_ch);

    $nfe_response_data = json_decode($nfe_response, true);

    if ($nfe_http_code === 200 || $nfe_http_code === 201) {
        // NF-e emitida com sucesso
        $chave_acesso = $nfe_response_data['chave'] ?? '';
        $numero_nfe = $nfe_response_data['numero'] ?? '';
        $status = $nfe_response_data['status'] ?? '';

        // Salvar a NF-e no banco de dados local
        $query_salvar = $pdo->prepare("INSERT INTO nuvem_fiscal_notas (
            empresa_id, cliente_id, chave_acesso, numero, status, 
            xml, json_enviado, json_recebido, data_emissao
        ) VALUES (
            :empresa_id, :cliente_id, :chave_acesso, :numero, :status,
            :xml, :json_enviado, :json_recebido, NOW()
        )");

        $query_salvar->bindValue(":empresa_id", $id_empresa);
        $query_salvar->bindValue(":cliente_id", $id_cliente);
        $query_salvar->bindValue(":chave_acesso", $chave_acesso);
        $query_salvar->bindValue(":numero", $numero_nfe);
        $query_salvar->bindValue(":status", $status);
        $query_salvar->bindValue(":xml", $nfe_response_data['xml'] ?? null);
        $query_salvar->bindValue(":json_enviado", json_encode($nfe_payload));
        $query_salvar->bindValue(":json_recebido", $nfe_response);

        if ($query_salvar->execute()) {
            // Atualizar o número da última NF-e da empresa
            $query_atualizar = $pdo->prepare("UPDATE empresas SET ultima_nfe = :ultima_nfe WHERE id = :id");
            $query_atualizar->bindValue(":ultima_nfe", $numero_nfe);
            $query_atualizar->bindValue(":id", $id_empresa);
            $query_atualizar->execute();

            $response_data = [
                'status' => 'success',
                'message' => 'NF-e emitida com sucesso!',
                'chave_acesso' => $chave_acesso,
                'numero' => $numero_nfe,
                'status_nfe' => $status
            ];
        } else {
            $response_data = [
                'status' => 'error',
                'message' => 'NF-e emitida, mas houve erro ao salvar no banco local.'
            ];
        }
    } else {
        $response_data = [
            'status' => 'error',
            'message' => 'Erro ao emitir NF-e: ' . ($nfe_response_data['error'] ?? $nfe_curl_error ?? $nfe_response)
        ];
    }
} else {
    $response_data['message'] = 'Requisição inválida.';
}

echo json_encode($response_data);
exit;
?> 