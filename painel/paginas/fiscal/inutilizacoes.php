<?php
require_once("../../../conexao.php");
require_once("../../verificar.php");

// Buscar inutilizações da empresa
$query = $pdo->prepare("SELECT * FROM nuvem_fiscal_inutilizacoes WHERE empresa_id = :empresa_id ORDER BY created_at DESC");
$query->bindValue(":empresa_id", $_SESSION['empresa']);
$query->execute();
$inutilizacoes = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Inutilização de Números de NF-e</h4>
            </div>
            <div class="card-body">
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
                <div class="table-responsive">
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
});
</script> 