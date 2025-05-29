<?php
// Configurações temporárias para exibir erros (remover em produção)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../conexao.php");
require_once("config/api_config.php");
require_once("verificar.php");

// Define o modo de teste para a página de Notas Fiscais (true para simular dados, false para usar a API real)
$modo_teste_fiscal = false; // Defina como true para testar a interface sem a API

$notas = []; // Inicializa o array de notas

// Se não estiver no modo de teste, busca da API
if (!$modo_teste_fiscal) {
    // Busca o ID da Nuvem Fiscal da empresa
    $query = $pdo->prepare("SELECT id_nuvem_fiscal FROM empresas WHERE id = :id");
    $query->bindValue(":id", $id_empresa);
    $query->execute();
    $empresa = $query->fetch(PDO::FETCH_ASSOC);
    
    // Em modo real, a empresa e o ID da Nuvem Fiscal são necessários
    if (!$empresa || !$empresa['id_nuvem_fiscal']) {
        echo '<div class="alert alert-warning">Configure primeiro as credenciais da Nuvem Fiscal para emitir notas fiscais.</div>';
        // Não exit() aqui para permitir que o restante da página seja renderizado, mas $notas ficará vazio
    } else {
        // Busca as notas fiscais da empresa na API
        $api_url_nfse_list = API_URL . '/nfe?empresa_id=' . $empresa['id_nuvem_fiscal'];
        error_log('DEBUG NFSE LIST URL: ' . $api_url_nfse_list); // Adiciona log da URL
        $ch = curl_init($api_url_nfse_list);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Adiciona o header de autorização com o token
        $api_headers_nfse_list = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . CLIENT_ID
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $api_headers_nfse_list);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_error = curl_error($ch);
        curl_close($ch);
        
        if ($httpCode >= 200 && $httpCode < 300) {
            $responseData = json_decode($response, true);
            $notas = $responseData['data'] ?? [];
        } else {
            // Log de erro da API no modo real
            $debug_content = "=== MODO REAL - ERRO AO LISTAR NFSE ===\n";
            $debug_content .= "Data/Hora: " . date('Y-m-d H:i:s') . "\n";
            $debug_content .= "URL: " . API_URL . '/nfe?empresa_id=' . $empresa['id_nuvem_fiscal'] . "\n";
            $debug_content .= "Status HTTP: " . $httpCode . "\n";
            $debug_content .= "Resposta da API: " . $response . "\n";
            $debug_content .= "Erro CURL: " . $curl_error . "\n";
            $debug_content .= "Headers: " . print_r($api_headers_nfse_list, true) . "\n";
            $debug_content .= "=== FIM DO ERRO AO LISTAR NFSE ===\n\n";
            file_put_contents('debug_nf.txt', $debug_content, FILE_APPEND);
            
            echo '<div class="alert alert-danger">Erro ao buscar notas fiscais da API. Verifique o arquivo de debug.</div>';
            // $notas permanece vazio, a tabela será renderizada vazia
        }
    }
} else {
    // --- Modo de Teste: Busca dados de notas fiscais do banco local ---
    try {
        $query = $pdo->prepare("SELECT nf.*, c.nome as nome_cliente FROM notas_fiscais nf JOIN clientes c ON nf.cliente_id = c.id WHERE nf.empresa = :id_empresa ORDER BY nf.data_emissao DESC");
        $query->bindValue(":id_empresa", $id_empresa);
        $query->execute();
        $notas_db = $query->fetchAll(PDO::FETCH_ASSOC);
        
        // Adapta os dados do banco para o formato esperado na listagem
        foreach ($notas_db as $nota_db) {
            $notas[] = [
                'numero' => $nota_db['numero'],
                'data_emissao' => $nota_db['data_emissao'],
                'tomador' => [
                    'nome' => $nota_db['nome_cliente'],
                    // Outros dados do tomador podem ser adicionados aqui se necessário
                    'cpf_cnpj' => '', // Preencher com dados do cliente se disponíveis na tabela clientes ou se buscados
                    'email' => '',
                    'telefone' => '',
                    'endereco' => [
                        'cep' => '',
                        'logradouro' => '',
                        'numero' => '',
                        'complemento' => '',
                        'bairro' => '',
                        'cidade' => '',
                        'estado' => ''
                    ]
                ],
                'valor_total' => $nota_db['valor_total'],
                'status' => $nota_db['status'],
                'id' => $nota_db['id_nuvem_fiscal'], // Usamos o id_nuvem_fiscal para links de visualizar/download
                'servicos' => [], // Preencher se houver tabela de itens/serviços da nota
                'observacoes' => '' // Preencher se houver coluna de observações na tabela notas_fiscais
            ];
        }
        
         // Log simples no modo de teste
        $debug_content = "=== MODO DE TESTE - LISTAGEM DO BANCO ===\n";
        $debug_content .= "Data/Hora: " . date('Y-m-d H:i:s') . "\n";
        $debug_content .= "Buscando notas fiscais do banco local para a empresa ID: " . $id_empresa . "\n";
        $debug_content .= "Notas encontradas: " . count($notas) . "\n";
        $debug_content .= "=== FIM DO MODO DE TESTE ===\n\n";
        file_put_contents('debug_nf.txt', $debug_content, FILE_APPEND);

    } catch (PDOException $e) {
        $debug_content = "=== MODO DE TESTE - ERRO AO BUSCAR DO BANCO ===\n";
        $debug_content .= "Data/Hora: " . date('Y-m-d H:i:s') . "\n";
        $debug_content .= "Erro PDO: " . $e->getMessage() . "\n";
        $debug_content .= "Query: " . $query->queryString . "\n";
        $debug_content .= "=== FIM DO MODO DE TESTE - ERRO ===\n\n";
        file_put_contents('debug_nf.txt', $debug_content, FILE_APPEND);
        
        echo '<div class="alert alert-danger">Erro ao buscar notas fiscais do banco de dados local. Verifique o arquivo de debug.</div>';
        // $notas permanece vazio, a tabela será renderizada vazia
    }
}

// Buscar NF-e que podem receber carta de correção
$query_notas = $pdo->prepare("SELECT * FROM notas_fiscais
    WHERE empresa = :empresa
    AND status = 'autorizada'
    ORDER BY data_emissao DESC");
$query_notas->bindValue(":empresa", $_SESSION['empresa']);
$query_notas->execute();
$notas_carta = $query_notas->fetchAll(PDO::FETCH_ASSOC);

// Buscar inutilizações da empresa
$query_inutilizacoes = $pdo->prepare("SELECT * FROM nuvem_fiscal_inutilizacoes WHERE empresa_id = :empresa_id ORDER BY created_at DESC");
$query_inutilizacoes->bindValue(":empresa_id", $_SESSION['empresa']);
$query_inutilizacoes->execute();
$inutilizacoes = $query_inutilizacoes->fetchAll(PDO::FETCH_ASSOC);

// Buscar cartas de correção
$query_cartas = $pdo->prepare("SELECT cc.*, n.numero as numero_nfe 
    FROM nuvem_fiscal_cartas_correcao cc 
    JOIN notas_fiscais n ON cc.id = n.id
    WHERE cc.empresa_id = :empresa_id
    ORDER BY cc.data_protocolo DESC");
$query_cartas->bindValue(":empresa_id", $_SESSION['empresa']);
$query_cartas->execute();
$cartas = $query_cartas->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Fiscal</h4>
            </div>
            <div class="card-body">
                <!-- Botões para abrir os modais -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCartaCorrecao">
                            <i class="fas fa-file-alt"></i> Carta de Correção
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalInutilizacao">
                            <i class="fas fa-ban"></i> Inutilizar Números
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Notas Fiscais</h4>
                                <div class="card-options">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNovaNota">
                                        <i class="fe fe-plus"></i> Nova Nota Fiscal
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Número</th>
                                                <th>Data</th>
                                                <th>Cliente</th>
                                                <th>Valor</th>
                                                <th>Status</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($notas as $nota) { ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($nota['numero']); ?></td>
                                                    <td><?php echo htmlspecialchars(date('d/m/Y', strtotime($nota['data_emissao']))); ?></td>
                                                    <td><?php echo htmlspecialchars($nota['tomador']['nome']); ?></td>
                                                    <td>R$ <?php echo htmlspecialchars(number_format($nota['valor_total'], 2, ',', '.')); ?></td>
                                                    <td>
                                                        <?php
                                                        $status_class = '';
                                                        switch ($nota['status']) {
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
                                                            <?php echo htmlspecialchars(ucfirst($nota['status'])); ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="index.php?pagina=visualizar-nota&id=<?php echo htmlspecialchars($nota['id']); ?>" class="btn btn-info btn-sm">
                                                            <i class="fe fe-eye"></i>
                                                        </a>
                                                        <?php if (isset($nota['status']) && $nota['status'] == 'autorizada') { ?>
                                                            <!-- Assumindo que o download usa o ID da Nuvem Fiscal -->
                                                            <a href="index.php?pagina=fiscal/download-nota&id_nuvem_fiscal=<?php echo htmlspecialchars($nota['id']); ?>" class="btn btn-success btn-sm">
                                                                <i class="fe fe-download"></i>
                                                            </a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nova Nota Fiscal -->
<div class="modal fade" id="modalNovaNota" tabindex="-1" aria-labelledby="modalNovaNotaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalNovaNotaLabel">Nova Nota Fiscal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formNovaNota" method="post" action="/alza/painel/apis/emitir_nfe.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cliente</label>
                                <select class="form-control" name="cliente_id" required>
                                    <option value="">Selecione...</option>
                                    <?php
                                    // Certifica-se de que $pdo está disponível e que a tabela clientes existe
                                    if (isset($pdo)) {
                                        try {
                                            $query = $pdo->query("SELECT id, nome FROM clientes WHERE empresa = '$id_empresa' ORDER BY nome");
                                            $res = $query->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($res as $cliente) {
                                                echo '<option value="' . htmlspecialchars($cliente['id']) . '">' . htmlspecialchars($cliente['nome']) . '</option>';
                                            }
                                        } catch (PDOException $e) {
                                            echo '<option value="">Erro ao carregar clientes</option>';
                                            // Logar o erro de banco de dados se necessário
                                            error_log("Erro ao carregar clientes: " . $e->getMessage());
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Data de Emissão</label>
                                <input type="date" class="form-control" name="data_emissao" value="<?php echo htmlspecialchars(date('Y-m-d')); ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Valor do Serviço</label>
                                <input type="text" class="form-control" name="valor_servico" id="valor_servico" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Descrição do Serviço</label>
                                <input type="text" class="form-control" name="descricao_servico" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Observações</label>
                                <textarea class="form-control" name="observacoes" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="formNovaNota" class="btn btn-primary">Emitir Nota</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Carta de Correção -->
<div class="modal fade" id="modalCartaCorrecao" tabindex="-1" role="dialog" aria-labelledby="modalCartaCorrecaoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCartaCorrecaoLabel">Carta de Correção de NF-e</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulário de Carta de Correção -->
                <form id="formCartaCorrecao" class="mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NF-e</label>
                                <select class="form-control" name="chave_acesso" required>
                                    <option value="">Selecione a NF-e</option>
                                    <?php foreach ($notas_carta as $nota): ?>
                                    <option value="<?php echo $nota['chave_acesso'] ?>">
                                        NF-e <?php echo $nota['numero'] ?> - 
                                        <?php echo date('d/m/Y', strtotime($nota['data_emissao'])) ?> - 
                                        R$ <?php echo number_format($nota['valor_total'], 2, ',', '.') ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Grupo Alterado</label>
                                <select class="form-control" name="grupo_alterado" required>
                                    <option value="geral">Geral</option>
                                    <option value="destinatario">Destinatário</option>
                                    <option value="itens">Itens</option>
                                    <option value="pagamentos">Pagamentos</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Correção</label>
                                <textarea class="form-control" name="correcao" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Enviar Carta de Correção</button>
                </form>

                <!-- Tabela de Cartas de Correção -->
                <div class="table-responsive mt-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NF-e</th>
                                <th>Grupo</th>
                                <th>Correção</th>
                                <th>Protocolo</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cartas as $carta): ?>
                            <tr>
                                <td>NF-e <?php echo $carta['numero_nfe'] ?></td>
                                <td><?php echo ucfirst($carta['grupo_alterado']) ?></td>
                                <td><?php echo $carta['correcao'] ?></td>
                                <td><?php echo $carta['protocolo'] ?></td>
                                <td><?php echo date('d/m/Y H:i', strtotime($carta['data_protocolo'])) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Inutilização -->
<div class="modal fade" id="modalInutilizacao" tabindex="-1" role="dialog" aria-labelledby="modalInutilizacaoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInutilizacaoLabel">Inutilização de Números de NF-e</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulário de Inutilização -->
                <form id="formInutilizacao" class="mb-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Número Inicial</label>
                                <input type="number" class="form-control" name="numero_inicial" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Número Final</label>
                                <input type="number" class="form-control" name="numero_final" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Justificativa</label>
                                <input type="text" class="form-control" name="justificativa" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Inutilizar Números</button>
                </form>

                <!-- Tabela de Inutilizações -->
                <div class="table-responsive mt-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Ano</th>
                                <th>Série</th>
                                <th>Número Inicial</th>
                                <th>Número Final</th>
                                <th>Justificativa</th>
                                <th>Protocolo</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($inutilizacoes as $inutilizacao): ?>
                            <tr>
                                <td><?php echo $inutilizacao['ano'] ?></td>
                                <td><?php echo $inutilizacao['serie'] ?></td>
                                <td><?php echo $inutilizacao['numero_inicial'] ?></td>
                                <td><?php echo $inutilizacao['numero_final'] ?></td>
                                <td><?php echo $inutilizacao['justificativa'] ?></td>
                                <td><?php echo $inutilizacao['protocolo'] ?></td>
                                <td><?php echo date('d/m/Y H:i', strtotime($inutilizacao['data_protocolo'])) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Máscara para o campo de valor
    $('#valor_servico').mask('#.##0,00', {reverse: true});
    
    // Processar o formulário de emissão
    $('#formNovaNota').submit(function(e) {
        e.preventDefault();
        
        var formData = $(this).serialize();
        
        // Preparar os dados para a API
        var dados = {
            cliente_id: formData.cliente_id,
            itens: [{
                descricao: formData.descricao_servico,
                valor_unitario: formData.valor_servico.replace('.', '').replace(',', '.'),
                quantidade: 1,
                unidade_comercial: 'UN',
                ncm: '00000000', // NCM padrão para serviços
                cfop: '5933' // CFOP para prestação de serviços
            }],
            pagamento: [{
                forma: 'DINHEIRO',
                valor: formData.valor_servico.replace('.', '').replace(',', '.')
            }]
        };
        
        $.ajax({
            url: '/alza/painel/apis/emitir_nfe.php',
            type: 'POST',
            data: dados,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro!',
                        text: response.message
                    });
                }
            },
            error: function(xhr, status, error) {
                var errorMessage = "Ocorreu um erro ao processar a requisição.";
                if(xhr.responseText) {
                    try {
                        var jsonResponse = JSON.parse(xhr.responseText);
                        if(jsonResponse.message) {
                            errorMessage = "Erro: " + jsonResponse.message;
                        }
                    } catch (e) {
                        errorMessage = "Resposta inesperada do servidor: " + xhr.responseText.substring(0, 200) + "...";
                    }
                }

                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: errorMessage
                });
            }
        });
    });
    
    // Formulário de Carta de Correção
    $('#formCartaCorrecao').on('submit', function(e) {
        e.preventDefault();
        
        var formData = $(this).serialize();
        
        $.ajax({
            url: 'painel/apis/carta_correcao.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: response.message
                    }).then(() => {
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro!',
                        text: response.message
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: 'Erro ao processar a requisição.'
                });
            }
        });

    // Formulário de Inutilização
    $('#formInutilizacao').on('submit', function(e) {
        e.preventDefault();
        
        var formData = $(this).serialize();
        
        $.ajax({
            url: 'painel/apis/inutilizar_numeros.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: response.message
                    }).then(() => {
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro!',
                        text: response.message
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: 'Erro ao processar a requisição.'
                });
            }
        });
});
</script> 