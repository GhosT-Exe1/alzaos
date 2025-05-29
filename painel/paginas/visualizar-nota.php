<?php
// Configurações temporárias para exibir erros (remover em produção)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../conexao.php");

// Define o modo de teste para a página de Visualizar Nota (true para simular dados, false para usar a API real)
$modo_teste_visualizar_nota = true; // Defina como true para testar a interface sem a API

// Recebe o ID da nota fiscal (pode ser o ID simulado do banco de dados no modo de teste)
$id = $_GET['id'];

$nota = null; // Inicializa a variável da nota

// Se estiver no modo de teste, busca do banco de dados local
if ($modo_teste_visualizar_nota) {
    // Busca os detalhes da nota fiscal no banco de dados local usando o ID simulado salvo
    // Nota: No modo de teste, o ID que vem pela URL (GET['id']) é o ID simulado salvo no seu BD.
    $query = $pdo->prepare("SELECT * FROM notas_fiscais WHERE id_nuvem_fiscal = :id_nuvem_fiscal AND empresa = :empresa"); // Busca por id_nuvem_fiscal e empresa
    $query->bindValue(":id_nuvem_fiscal", $id); // O ID da URL é o id_nuvem_fiscal no modo teste
    $query->bindValue(":empresa", $id_empresa); // Usa o ID da empresa logada
    $query->execute();
    $nota_bd = $query->fetch(PDO::FETCH_ASSOC);
    
    if ($nota_bd) {
        // Para simular a estrutura de resposta da API que a página espera, construímos um array similar
        // com os dados do banco de dados local.
        $nota = [
            'numero' => $nota_bd['numero'],
            'data_emissao' => $nota_bd['data_emissao'],
            'valor_total' => $nota_bd['valor_total'],
            'status' => $nota_bd['status'],
            'id' => $nota_bd['id_nuvem_fiscal'], // Usamos o id_nuvem_fiscal salvo como ID da API simulada
            'observacoes' => $nota_bd['observacoes'] ?? '', // Assume que observacoes podem ser salvas
            // Para tomador e serviços, precisaríamos buscar de outras tabelas ou simular.
            // Por enquanto, vamos simular uma estrutura básica para não quebrar o display.
            'tomador' => [
                 'nome' => $nota_bd['nome_cliente'] ?? 'Cliente Simulado', // Tenta usar o nome do cliente do BD
                'cpf_cnpj' => $nota_bd['cpf'] ?? '', // Assumindo que cpf está na tabela notas_fiscais ou clientes
                'email' => $nota_bd['email'] ?? '', // Assumindo que email está na tabela notas_fiscais ou clientes
                'telefone' => $nota_bd['telefone'] ?? '', // Assumindo que telefone está na tabela notas_fiscais ou clientes
                 'endereco' => [
                    'cep' => $nota_bd['cep'] ?? '',
                    'logradouro' => $nota_bd['endereco'] ?? '',
                    'numero' => $nota_bd['numero_endereco'] ?? '', // Assumindo coluna diferente para número
                    'complemento' => $nota_bd['complemento_endereco'] ?? '', // Assumindo coluna diferente para complemento
                    'bairro' => $nota_bd['bairro'] ?? '',
                    'cidade' => $nota_bd['cidade'] ?? '',
                    'estado' => $nota_bd['estado'] ?? ''
                ]
            ],
            'servicos' => [
                ['descricao' => 'Serviço Simulado', 'valor' => $nota_bd['valor_total'], 'aliquota_iss' => 0, 'valor_iss' => 0]
            ] // Simulado
        ];
        
        // O status HTTP é simulado como sucesso para que a lógica de exibição prossiga
        $httpCode = 200;
        
         // Log simples no modo de teste
        $debug_content = "=== MODO DE TESTE - VISUALIZAR NOTA SIMULADA ===\n";
        $debug_content .= "Data/Hora: " . date('Y-m-d H:i:s') . "\n";
        $debug_content .= "Buscando nota fiscal com ID local: " . $id . " no banco de dados.\n";
        $debug_content .= "Dados encontrados (simulados): " . json_encode($nota) . "\n";
        $debug_content .= "=== FIM DO MODO DE TESTE ===\n\n";
        file_put_contents('debug_nf.txt', $debug_content, FILE_APPEND);
        
    } else {
        echo '<div class="alert alert-warning">Nota fiscal de teste não encontrada no banco de dados local com o ID fornecido.</div>';
         $httpCode = 404; // Simula um status não encontrado
         
         // Log no modo de teste quando a nota não é encontrada
        $debug_content = "=== MODO DE TESTE - NOTA NÃO ENCONTRADA NO BD LOCAL ===\n";
        $debug_content .= "Data/Hora: " . date('Y-m-d H:i:s') . "\n";
        $debug_content .= "Tentativa de buscar nota com ID local: " . $id . ", mas não encontrada no banco de dados.\n";
        $debug_content .= "=== FIM DO MODO DE TESTE ===\n\n";
        file_put_contents('debug_nf.txt', $debug_content, FILE_APPEND);
    }
    
} else {
    // --- Modo Real: Busca da API da Nuvem Fiscal ---
    
    // Busca o ID da Nuvem Fiscal da empresa (necessário para obter o token, se centralizado)
     $query = $pdo->prepare("SELECT id_nuvem_fiscal FROM empresas WHERE id = :id");
    $query->bindValue(":id", $id_empresa);
    $query->execute();
    $empresa = $query->fetch(PDO::FETCH_ASSOC);
    
    if (!$empresa || !$empresa['id_nuvem_fiscal']) {
         echo '<div class="alert alert-warning">Empresa não configurada na Nuvem Fiscal.</div>';
         $httpCode = 400; // Simula um erro de configuração
    } else {
        // --- Lógica para obter o access_token (precisa ser integrada aqui ou centralizada) ---
        // $access_token = ...
        
        // Busca os detalhes da nota fiscal na Nuvem Fiscal usando o ID da API
        // Nota: No modo real, o ID que vem pela URL (GET['id']) DEVE ser o id_nuvem_fiscal da nota.
        $id_nuvem_fiscal_real = $id; // Assumimos que o ID na URL é o da Nuvem Fiscal no modo real
        
        $ch = curl_init('https://api.nuvemfiscal.com.br/nfse/' . $id_nuvem_fiscal_real);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
         // Adiciona o header de autorização com o token (se obtido)
        $api_headers_nfse_view = [
             'Content-Type: application/json',
             'Accept: application/json',
            // 'Authorization: Bearer ' . $access_token // Adicionar o token real aqui
            'Authorization: Bearer B19tlAZtFsYPH2hba2FMsESq141qkPdm4K4ePWkM' // Exemplo com chave antiga, precisa ser atualizado
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $api_headers_nfse_view);
        
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
            $nota = json_decode($response, true);
        } else {
            // Log de erro da API no modo real
            $debug_content = "=== MODO REAL - ERRO AO VISUALIZAR NFSE ===\n";
            $debug_content .= "Data/Hora: " . date('Y-m-d H:i:s') . "\n";
            $debug_content .= "URL: " . 'https://api.nuvemfiscal.com.br/v1/nfse/' . $id_nuvem_fiscal_real . "\n";
            $debug_content .= "Status HTTP: " . $httpCode . "\n";
            $debug_content .= "Resposta da API: " . $response . "\n";
            $debug_content .= "Erro CURL: " . $curl_error . "\n";
             $debug_content .= "Headers: " . print_r($api_headers_nfse_view, true) . "\n";
            // $debug_content .= "Log Detalhado: " . $verboseLog . "\n";
            $debug_content .= "=== FIM DO ERRO AO VISUALIZAR NFSE ===\n\n";
            file_put_contents('debug_nf.txt', $debug_content, FILE_APPEND);
            
            echo '<div class="alert alert-danger">Erro ao buscar detalhes da nota fiscal da API. Verifique o arquivo de debug.</div>';
             // $nota permanece null, a página exibirá campos vazios ou erros
        }
    }
}

// Se a nota foi encontrada (seja no modo de teste ou real com sucesso), exibe os detalhes
if ($nota) {
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Detalhes da Nota Fiscal #<?php echo htmlspecialchars($nota['numero'] ?? ''); ?></h4>
                <div class="card-options">
                    <?php if (isset($nota['status']) && $nota['status'] == 'autorizada') { ?>
                        <!-- Assumindo que o download usa o ID da Nuvem Fiscal -->
                        <a href="index.php?pagina=fiscal/download-nota&id_nuvem_fiscal=<?php echo htmlspecialchars($nota['id'] ?? ''); ?>" class="btn btn-success btn-sm">
                             <i class="fe fe-download"></i> Baixar PDF
                        </a>
                    <?php } ?>
                     <a href="index.php?pagina=fiscal" class="btn btn-secondary btn-sm">
                        Voltar
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Informações Gerais</h5>
                        <table class="table">
                            <tr>
                                <th>Número:</th>
                                <td><?php echo htmlspecialchars($nota['numero'] ?? ''); ?></td>
                            </tr>
                            <tr>
                                <th>Data de Emissão:</th>
                                <td><?php echo htmlspecialchars(isset($nota['data_emissao']) ? date('d/m/Y', strtotime($nota['data_emissao'])) : ''); ?></td>
                            </tr>
                            <tr>
                                <th>Status:</th>
                                <td>
                                    <?php
                                    $status = $nota['status'] ?? '';
                                    $status_class = '';
                                    switch ($status) {
                                        case 'autorizada':
                                            $status_class = 'success';
                                            break;
                                        case 'rejeitada':
                                            $status_class = 'danger';
                                            break;
                                        case 'cancelada':
                                            $status_class = 'warning';
                                            break;
                                        default:
                                            $status_class = 'info';
                                    }
                                    ?>
                                    <span class="badge bg-<?php echo $status_class; ?>">
                                        <?php echo htmlspecialchars(ucfirst($status)); ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Valor Total:</th>
                                <td>R$ <?php echo htmlspecialchars(isset($nota['valor_total']) ? number_format($nota['valor_total'], 2, ',', '.') : ''); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h5>Tomador</h5>
                        <table class="table">
                            <tr>
                                <th>Nome:</th>
                                <td><?php echo htmlspecialchars($nota['tomador']['nome'] ?? ''); ?></td>
                            </tr>
                            <tr>
                                <th>CPF/CNPJ:</th>
                                <td><?php echo htmlspecialchars($nota['tomador']['cpf_cnpj'] ?? ''); ?></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><?php echo htmlspecialchars($nota['tomador']['email'] ?? ''); ?></td>
                            </tr>
                            <tr>
                                <th>Telefone:</th>
                                <td><?php echo htmlspecialchars($nota['tomador']['telefone'] ?? ''); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <h5>Endereço do Tomador</h5>
                        <table class="table">
                            <tr>
                                <th>CEP:</th>
                                <td><?php echo htmlspecialchars($nota['tomador']['endereco']['cep'] ?? ''); ?></td>
                                <th>Logradouro:</th>
                                <td><?php echo htmlspecialchars($nota['tomador']['endereco']['logradouro'] ?? ''); ?></td>
                            </tr>
                            <tr>
                                <th>Número:</th>
                                <td><?php echo htmlspecialchars($nota['tomador']['endereco']['numero'] ?? ''); ?></td>
                                <th>Complemento:</th>
                                <td><?php echo htmlspecialchars($nota['tomador']['endereco']['complemento'] ?? ''); ?></td>
                            </tr>
                            <tr>
                                <th>Bairro:</th>
                                <td><?php echo htmlspecialchars($nota['tomador']['endereco']['bairro'] ?? ''); ?></td>
                                <th>Cidade/UF:</th>
                                <td><?php echo htmlspecialchars(($nota['tomador']['endereco']['cidade'] ?? '') . '/' . ($nota['tomador']['endereco']['estado'] ?? '')); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <h5>Serviços</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Descrição</th>
                                    <th>Valor</th>
                                    <th>Alíquota ISS</th>
                                    <th>Valor ISS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($nota['servicos'])): ?>
                                    <?php foreach ($nota['servicos'] as $servico) { ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($servico['descricao'] ?? ''); ?></td>
                                            <td>R$ <?php echo htmlspecialchars(isset($servico['valor']) ? number_format($servico['valor'], 2, ',', '.') : ''); ?></td>
                                            <td><?php echo htmlspecialchars(isset($servico['aliquota_iss']) ? number_format($servico['aliquota_iss'], 2, ',', '.') . '%' : ''); ?></td>
                                            <td>R$ <?php echo htmlspecialchars(isset($servico['valor_iss']) ? number_format($servico['valor_iss'], 2, ',', '.') : ''); ?></td>
                                        </tr>
                                    <?php } ?>
                                <?php else: ?>
                                     <tr><td colspan="4">Nenhum serviço encontrado.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <?php if (!empty($nota['observacoes'])) { ?>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5>Observações</h5>
                            <div class="alert alert-info">
                                <?php echo nl2br(htmlspecialchars($nota['observacoes'])); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php
} // Fim do if ($nota)
?> 