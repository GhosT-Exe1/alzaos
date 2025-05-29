<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../conexao.php");

// Busca as configurações da Nuvem Fiscal
$query = $pdo->prepare("SELECT * FROM nuvem_fiscal_config WHERE empresa_id = :id");
$query->bindValue(":id", $id_empresa);
$query->execute();
$config = $query->fetch(PDO::FETCH_ASSOC);

// Busca os dados da empresa
$query = $pdo->prepare("SELECT * FROM empresas WHERE id = :id");
$query->bindValue(":id", $id_empresa);
$query->execute();
$empresa = $query->fetch(PDO::FETCH_ASSOC);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Configurações Nuvem Fiscal</h4>
            </div>
            <div class="card-body">
                <form id="form-config-fiscal" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Certificado Digital</label>
                                <input type="file" class="form-control" name="certificado" accept=".pfx,.p12">
                                <?php if ($config && $config['certificado_path']) { ?>
                                    <small class="text-muted">Certificado atual: <?php echo $config['certificado_path']; ?></small>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Senha do Certificado</label>
                                <input type="password" class="form-control" name="senha_certificado" value="<?php echo $config ? $config['senha_certificado'] : ''; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ambiente</label>
                                <select class="form-control" name="ambiente_nf">
                                    <option value="1" <?php echo ($config && $config['ambiente'] == 1) ? 'selected' : ''; ?>>Homologação</option>
                                    <option value="2" <?php echo ($config && $config['ambiente'] == 2) ? 'selected' : ''; ?>>Produção</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Regime Tributário</label>
                                <select class="form-control" name="regime_tributario">
                                    <option value="1" <?php echo ($config && $config['regime_tributario'] == 1) ? 'selected' : ''; ?>>Simples Nacional</option>
                                    <option value="2" <?php echo ($config && $config['regime_tributario'] == 2) ? 'selected' : ''; ?>>Simples Nacional – excesso de sublimite de receita bruta</option>
                                    <option value="3" <?php echo ($config && $config['regime_tributario'] == 3) ? 'selected' : ''; ?>>Regime Normal</option>
                                    <option value="4" <?php echo ($config && $config['regime_tributario'] == 4) ? 'selected' : ''; ?>>Simples Nacional - Microempreendedor individual (MEI)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Inscrição Municipal</label>
                                <input type="text" class="form-control" name="inscricao_municipal" value="<?php echo $config ? $config['inscricao_municipal'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Inscrição Estadual</label>
                                <input type="text" class="form-control" name="inscricao_estadual" value="<?php echo $config ? $config['inscricao_estadual'] : ''; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CNAE</label>
                                <input type="text" class="form-control" name="cnae" value="<?php echo $config ? $config['cnae'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alíquota ISS (%)</label>
                                <input type="text" class="form-control" name="aliquota_iss" value="<?php echo $config ? $config['aliquota_iss'] : ''; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Salvar Configurações</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$("#form-config-fiscal").submit(function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "paginas/editar-config.php",
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
            console.log('Resposta da API (JSON):', response);
            if (response.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso!',
                    text: response.message,
                    timer: 1500,
                    showConfirmButton: false
                });
            } else {
                console.error('Erro na requisição AJAX:', response.textStatus, response.errorThrown, response.jqXHR);
                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: response.message ?? 'Erro desconhecido ao salvar configurações fiscais.'
                });
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
             console.error('Erro na requisição AJAX:', textStatus, errorThrown, jqXHR);
             Swal.fire({
                 icon: 'error',
                 title: 'Erro na Requisição!',
                 text: 'Ocorreu um erro ao comunicar com o servidor: ' + textStatus + (errorThrown ? ' - ' + errorThrown : '')
             });
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});
</script> 