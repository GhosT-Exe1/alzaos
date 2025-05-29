<?php
require_once("../../../conexao.php");
require_once("../verificar.php");

// Buscar NF-e que podem receber carta de correção
$query = $pdo->prepare("SELECT * FROM nuvem_fiscal_notas 
    WHERE empresa_id = :empresa_id 
    AND status = 'autorizada'
    ORDER BY data_emissao DESC");
$query->bindValue(":empresa_id", $_SESSION['empresa']);
$query->execute();
$notas = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Carta de Correção de NF-e</h4>
            </div>
            <div class="card-body">
                <!-- Formulário de Carta de Correção -->
                <form id="formCartaCorrecao" class="mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NF-e</label>
                                <select class="form-control" name="chave_acesso" required>
                                    <option value="">Selecione a NF-e</option>
                                    <?php foreach ($notas as $nota): ?>
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
                            <?php
                            $query_cartas = $pdo->prepare("SELECT cc.*, n.numero as numero_nfe 
                                FROM nuvem_fiscal_cartas_correcao cc 
                                JOIN nuvem_fiscal_notas n ON cc.chave_acesso = n.chave_acesso 
                                WHERE cc.empresa_id = :empresa_id 
                                ORDER BY cc.data_protocolo DESC");
                            $query_cartas->bindValue(":empresa_id", $_SESSION['empresa']);
                            $query_cartas->execute();
                            $cartas = $query_cartas->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($cartas as $carta):
                            ?>
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

<script>
$(document).ready(function() {
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
    });
});
</script> 