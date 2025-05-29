<?php
// painel/paginas/fiscal/config_fiscal.php

@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'admin'){
    echo "<script language='javascript'> window.location='../index.php' </script>";
    exit();
}

require_once("../config/conexao.php");
require_once("../config/config.php");

// Lógica para listar empresas para que o admin possa selecionar e configurar
$query_empresas = $pdo->query("SELECT id, nome_razao_social, cnpj FROM empresas ORDER BY nome_razao_social ASC");
$empresas = $query_empresas->fetchAll(PDO::FETCH_ASSOC);

$empresa_selecionada = null;
if (isset($_GET['id_empresa_cfg']) && !empty($_GET['id_empresa_cfg'])) {
    $id_empresa_cfg = $_GET['id_empresa_cfg'];
    $query_empresa_cfg = $pdo->prepare("SELECT * FROM empresas WHERE id = :id");
    $query_empresa_cfg->bindValue(":id", $id_empresa_cfg);
    $query_empresa_cfg->execute();
    $empresa_selecionada = $query_empresa_cfg->fetch(PDO::FETCH_ASSOC);
}
?>

<div class="main-page">
    <div class="col_3">
        <h3 class="res-header-panel">Configurações Fiscais por Empresa</h3>
        <hr>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="select_empresa_cfg">Selecionar Empresa:</label>
                    <select id="select_empresa_cfg" class="form-control">
                        <option value="">-- Selecione uma Empresa --</option>
                        <?php foreach ($empresas as $emp): ?>
                            <option value="<?php echo $emp['id']; ?>" <?php echo ($empresa_selecionada && $empresa_selecionada['id'] == $emp['id']) ? 'selected' : ''; ?>>
                                <?php echo $emp['nome_razao_social'] . ' (' . $emp['cnpj'] . ')'; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <?php if ($empresa_selecionada): ?>
            <hr>
            <h4>Configurações para: <?php echo $empresa_selecionada['nome_razao_social']; ?></h4>
            <form id="form-config-fiscal">
                <input type="hidden" name="id_empresa" value="<?php echo $empresa_selecionada['id']; ?>">

                <div class="form-group">
                    <label for="cnpj">CNPJ:</label>
                    <input type="text" id="cnpj" name="cnpj" class="form-control" value="<?php echo $empresa_selecionada['cnpj']; ?>" required readonly>
                </div>

                <div class="form-group">
                    <label for="nome_razao_social">Razão Social:</label>
                    <input type="text" id="nome_razao_social" name="nome_razao_social" class="form-control" value="<?php echo $empresa_selecionada['nome_razao_social']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="nome_fantasia">Nome Fantasia:</label>
                    <input type="text" id="nome_fantasia" name="nome_fantasia" class="form-control" value="<?php echo $empresa_selecionada['nome_fantasia']; ?>">
                </div>

                <div class="form-group">
                    <label for="inscricao_estadual">Inscrição Estadual (IE):</label>
                    <input type="text" id="inscricao_estadual" name="inscricao_estadual" class="form-control" value="<?php echo $empresa_selecionada['inscricao_estadual']; ?>">
                </div>

                <div class="form-group">
                    <label for="regime_tributario">Regime Tributário:</label>
                    <select id="regime_tributario" name="regime_tributario" class="form-control" required>
                        <option value="simples_nacional" <?php echo ($empresa_selecionada['regime_tributario'] == 'simples_nacional') ? 'selected' : ''; ?>>Simples Nacional</option>
                        <option value="regime_normal" <?php echo ($empresa_selecionada['regime_tributario'] == 'regime_normal') ? 'selected' : ''; ?>>Regime Normal</option>
                        </select>
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" class="form-control" value="<?php echo $empresa_selecionada['endereco']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="numero_endereco">Número:</label>
                    <input type="text" id="numero_endereco" name="numero_endereco" class="form-control" value="<?php echo $empresa_selecionada['numero_endereco']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo $empresa_selecionada['bairro']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" class="form-control" value="<?php echo $empresa_selecionada['cep']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" class="form-control" value="<?php echo $empresa_selecionada['cidade']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado (UF):</label>
                    <input type="text" id="estado" name="estado" class="form-control" value="<?php echo $empresa_selecionada['estado']; ?>" maxlength="2" required>
                </div>
                <div class="form-group">
                    <label for="codigo_municipio_ibge">Código IBGE do Município:</label>
                    <input type="text" id="codigo_municipio_ibge" name="codigo_municipio_ibge" class="form-control" value="<?php echo $empresa_selecionada['codigo_municipio_ibge']; ?>" required>
                    <small class="form-text text-muted">Ex: 3550308 para São Paulo-SP. Consulte em ibge.gov.br.</small>
                </div>


                <button type="submit" class="btn btn-success">Salvar Configurações</button>
            </form>
        <?php else: ?>
            <p>Selecione uma empresa acima para visualizar e editar as configurações fiscais.</p>
        <?php endif; ?>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#select_empresa_cfg').change(function() {
            var id_empresa = $(this).val();
            if (id_empresa) {
                window.location.href = 'index.php?pag=config_fiscal&id_empresa_cfg=' + id_empresa;
            } else {
                window.location.href = 'index.php?pag=config_fiscal';
            }
        });

        $('#form-config-fiscal').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();

            Swal.fire({
                title: 'Salvando configurações...',
                text: 'Aguarde.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Endpoint para salvar as configurações da empresa (você precisará criar este)
            $.ajax({
                url: 'apis/salvar_config_fiscal.php', // CRIE ESTE ARQUIVO!
                method: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire('Sucesso!', response.message, 'success').then(() => {
                            // location.reload(); // Recarrega para ver as mudanças
                        });
                    } else {
                        Swal.fire('Erro!', response.message, 'error');
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire('Erro de Conexão!', 'Não foi possível salvar as configurações.', 'error');
                    console.error("Erro na requisição AJAX:", xhr.responseText);
                }
            });
        });
    });
</script>