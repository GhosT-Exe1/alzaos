<?php
// painel/paginas/fiscal/notas_fiscais.php

@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'admin'){
    echo "<script language='javascript'> window.location='../index.php' </script>";
    exit();
}

require_once("../config/conexao.php");
require_once("../config/config.php");

// Lógica para pegar o ID da empresa (se o admin gerencia várias empresas)
// Para este exemplo, vamos assumir que o admin selecionou a empresa via GET ou SESSION
$id_empresa_gerenciar = @$_GET['id_empresa']; // Você pode passar o ID da empresa aqui

// Se não houver ID de empresa, pode listar todas as empresas para seleção ou exibir erro
if(empty($id_empresa_gerenciar)){
    echo '<div class="alert alert-warning">Selecione uma empresa para gerenciar as notas fiscais.</div>';
    // Ou redirecionar para a página fiscal principal para seleção
    // header('Location: index.php?pag=fiscal');
    // exit();
    // PARA FINS DE TESTE, DEFINA UM ID FIXO SE NÃO QUISER SELECIONAR SEMPRE
    // $id_empresa_gerenciar = 1; // ID de uma empresa existente para teste
}

// Busca as notas fiscais para a empresa selecionada (ou todas se não houver seleção)
$query_notas = $pdo->prepare("SELECT * FROM notas_fiscais WHERE id_empresa = :id_empresa ORDER BY id DESC");
$query_notas->bindValue(":id_empresa", $id_empresa_gerenciar);
$query_notas->execute();
$notas = $query_notas->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="main-page">
    <div class="col_3">
        <h3 class="res-header-panel">Notas Fiscais - Empresa: <?php echo $id_empresa_gerenciar; ?></h3>
        <hr>

        <button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#modalEmitirNfe">
            Emitir Nova NF-e
        </button>

        <div class="tables">
            <table class="table table-bordered table-striped" id="tabela_notas_fiscais">
                <thead>
                    <tr>
                        <th>ID Sistema</th>
                        <th>ID Nuvem Fiscal</th>
                        <th>Número / Série</th>
                        <th>Chave de Acesso</th>
                        <th>Status</th>
                        <th>Data Emissão</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($notas) > 0): ?>
                        <?php foreach ($notas as $nota): ?>
                            <tr>
                                <td><?php echo $nota['id']; ?></td>
                                <td><?php echo $nota['id_nuvem_fiscal']; ?></td>
                                <td><?php echo $nota['numero_nfe'] . '/' . $nota['serie_nfe']; ?></td>
                                <td><?php echo $nota['chave_acesso']; ?></td>
                                <td><span class="badge <?php
                                    if ($nota['status'] == 'autorizada') echo 'badge-success';
                                    else if ($nota['status'] == 'cancelada') echo 'badge-danger';
                                    else if ($nota['status'] == 'pendente' || $nota['status'] == 'processando') echo 'badge-info';
                                    else echo 'badge-secondary';
                                ?>"><?php echo ucfirst($nota['status']); ?></span></td>
                                <td><?php echo date('d/m/Y H:i', strtotime($nota['data_emissao'])); ?></td>
                                <td>
                                    <?php if ($nota['status'] == 'erro_emissao' || $nota['status'] == 'pendente'): ?>
                                        <button class="btn btn-primary btn-sm" onclick="emitirNfe(<?php echo $nota['id']; ?>, <?php echo $nota['id_venda']; ?>)">Re-Emitir</button>
                                    <?php endif; ?>

                                    <button class="btn btn-info btn-sm" onclick="consultarNfe(<?php echo $nota['id']; ?>)">Consultar Status</button>

                                    <?php if ($nota['status'] == 'autorizada'): ?>
                                        <button class="btn btn-danger btn-sm" onclick="cancelarNfe(<?php echo $nota['id']; ?>)">Cancelar</button>
                                        <button class="btn btn-warning btn-sm" onclick="cartaCorrecao(<?php echo $nota['id']; ?>)">CC-e</button>
                                        <a href="apis/gerar_danfe.php?id_nfe_sistema=<?php echo $nota['id']; ?>" target="_blank" class="btn btn-success btn-sm">DANFE</a>
                                        <?php if (!empty($nota['xml_url'])): ?>
                                            <a href="<?php echo $nota['xml_url']; ?>" target="_blank" class="btn btn-secondary btn-sm">XML</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7">Nenhuma nota fiscal encontrada para esta empresa.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEmitirNfe" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Emitir Nova Nota Fiscal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-emitir-nfe">
                <div class="modal-body">
                    <input type="hidden" name="id_empresa" value="<?php echo $id_empresa_gerenciar; ?>">
                    <div class="form-group">
                        <label for="id_venda_emissao">ID da Venda (no seu sistema)</label>
                        <input type="number" class="form-control" id="id_venda_emissao" name="id_venda" required>
                    </div>
                    <small>*Os demais dados da NFe (cliente, produtos, impostos) serão buscados da venda informada.</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Emitir NF-e</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
    // Script JS para interações da parte fiscal
    $(document).ready(function() {
        // Inicializar DataTables (se você usa)
        $('#tabela_notas_fiscais').DataTable({
            "ordering": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
            }
        });

        // Submissão do formulário de emissão da NFe
        $('#form-emitir-nfe').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();

            Swal.fire({
                title: 'Processando emissão...',
                text: 'Isso pode levar alguns segundos.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: 'apis/emitir_nfe.php',
                method: 'POST',
                data: formData,
                dataType: 'json', // Espera JSON como resposta
                success: function(response) {
                    if (response.success) {
                        Swal.fire('Sucesso!', response.message, 'success').then(() => {
                            location.reload(); // Recarrega a página para ver a nota atualizada
                        });
                    } else {
                        let errorMessage = response.message;
                        if (response.details) {
                            errorMessage += "<br>Detalhes: " + JSON.stringify(response.details, null, 2);
                        }
                        Swal.fire('Erro!', errorMessage, 'error');
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire('Erro de Conexão!', 'Não foi possível se comunicar com o servidor.', 'error');
                    console.error("Erro na requisição AJAX:", xhr.responseText);
                }
            });
        });
    });

    function emitirNfe(id_nfe_sistema, id_venda) {
        Swal.fire({
            title: 'Re-emitir Nota Fiscal?',
            text: "Tem certeza que deseja re-emitir esta nota? Os dados serão atualizados.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, re-emitir!',
            cancelButtonText: 'Não'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Processando re-emissão...',
                    text: 'Isso pode levar alguns segundos.',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                $.ajax({
                    url: 'apis/emitir_nfe.php', // O mesmo endpoint de emissão
                    method: 'POST',
                    data: { id_nfe_sistema: id_nfe_sistema, id_venda: id_venda }, // Passa o ID da NFe e o ID da Venda (se a NFe já existe no seu DB)
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire('Sucesso!', response.message, 'success').then(() => {
                                location.reload();
                            });
                        } else {
                            let errorMessage = response.message;
                            if (response.details) {
                                errorMessage += "<br>Detalhes: " + JSON.stringify(response.details, null, 2);
                            }
                            Swal.fire('Erro!', errorMessage, 'error');
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire('Erro de Conexão!', 'Não foi possível se comunicar com o servidor.', 'error');
                        console.error("Erro na requisição AJAX:", xhr.responseText);
                    }
                });
            }
        });
    }


    function consultarNfe(id_nfe_sistema) {
        Swal.fire({
            title: 'Consultando Status...',
            text: 'Aguarde enquanto consultamos o status da NFe na Nuvem Fiscal.',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        $.ajax({
            url: 'apis/consultar_nfe.php',
            method: 'POST',
            data: { id_nfe_sistema: id_nfe_sistema },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    let msg = `Status: ${response.status}<br>Chave de Acesso: ${response.chave_acesso || 'Não gerada'}`;
                    if (response.danfe_url) {
                        msg += `<br><a href="${response.danfe_url}" target="_blank" class="btn btn-link">Ver DANFE</a>`;
                    }
                    Swal.fire('Consulta Realizada!', msg, 'info').then(() => {
                        location.reload(); // Recarrega para refletir o status atualizado
                    });
                } else {
                    let errorMessage = response.message;
                    if (response.details) {
                        errorMessage += "<br>Detalhes: " + JSON.stringify(response.details, null, 2);
                    }
                    Swal.fire('Erro!', errorMessage, 'error');
                }
            },
            error: function(xhr, status, error) {
                Swal.fire('Erro de Conexão!', 'Não foi possível se comunicar com o servidor.', 'error');
                console.error("Erro na requisição AJAX:", xhr.responseText);
            }
        });
    }

    function cancelarNfe(id_nfe_sistema) {
        Swal.fire({
            title: 'Cancelar Nota Fiscal?',
            input: 'textarea',
            inputLabel: 'Justificativa para o cancelamento (mínimo 15 caracteres):',
            inputPlaceholder: 'Motivo do cancelamento...',
            inputAttributes: {
                'aria-label': 'Justificativa para o cancelamento'
            },
            showCancelButton: true,
            confirmButtonText: 'Sim, Cancelar!',
            cancelButtonText: 'Não',
            inputValidator: (value) => {
                if (!value || value.length < 15) {
                    return 'Você precisa fornecer uma justificativa com no mínimo 15 caracteres!';
                }
            }
        }).then((result) => {
            if (result.isConfirmed) {
                const justificativa = result.value;
                Swal.fire({
                    title: 'Processando cancelamento...',
                    text: 'Aguarde enquanto a nota é cancelada na Nuvem Fiscal.',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                $.ajax({
                    url: 'apis/cancelar_nfe.php',
                    method: 'POST',
                    data: { id_nfe_sistema: id_nfe_sistema, justificativa: justificativa },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire('Sucesso!', response.message, 'success').then(() => {
                                location.reload();
                            });
                        } else {
                            let errorMessage = response.message;
                            if (response.details) {
                                errorMessage += "<br>Detalhes: " + JSON.stringify(response.details, null, 2);
                            }
                            Swal.fire('Erro!', errorMessage, 'error');
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire('Erro de Conexão!', 'Não foi possível se comunicar com o servidor.', 'error');
                        console.error("Erro na requisição AJAX:", xhr.responseText);
                    }
                });
            }
        });
    }

    function cartaCorrecao(id_nfe_sistema) {
        Swal.fire({
            title: 'Carta de Correção',
            input: 'textarea',
            inputLabel: 'Texto da Correção (mínimo 15 caracteres):',
            inputPlaceholder: 'Ex: Alteração do endereço do destinatário...',
            inputAttributes: {
                'aria-label': 'Texto da Carta de Correção'
            },
            showCancelButton: true,
            confirmButtonText: 'Emitir CC-e',
            cancelButtonText: 'Cancelar',
            inputValidator: (value) => {
                if (!value || value.length < 15) {
                    return 'O texto da correção é obrigatório e deve ter no mínimo 15 caracteres!';
                }
            }
        }).then((result) => {
            if (result.isConfirmed) {
                const texto_correcao = result.value;
                Swal.fire({
                    title: 'Processando Carta de Correção...',
                    text: 'Aguarde enquanto a CC-e é gerada.',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                $.ajax({
                    url: 'apis/carta_correcao.php',
                    method: 'POST',
                    data: { id_nfe_sistema: id_nfe_sistema, texto_correcao: texto_correcao },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire('Sucesso!', response.message, 'success').then(() => {
                                // Pode recarregar a página ou apenas dar um aviso
                                // location.reload();
                            });
                        } else {
                            let errorMessage = response.message;
                            if (response.details) {
                                errorMessage += "<br>Detalhes: " + JSON.stringify(response.details, null, 2);
                            }
                            Swal.fire('Erro!', errorMessage, 'error');
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire('Erro de Conexão!', 'Não foi possível se comunicar com o servidor.', 'error');
                        console.error("Erro na requisição AJAX:", xhr.responseText);
                    }
                });
            }
        });
    }

    // Inutilização de Números - Requer um modal ou formulário à parte para os campos
    function inutilizarNumerosModal() {
        Swal.fire({
            title: 'Inutilizar Faixa de Numeração',
            html: `
                <form id="form-inutilizar-numeros">
                    <input type="hidden" name="id_empresa" value="<?php echo $id_empresa_gerenciar; ?>">
                    <div class="form-group">
                        <label for="ano_inutilizacao">Ano de Competência:</label>
                        <input type="number" id="ano_inutilizacao" name="ano" class="form-control" value="<?php echo date('Y'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="serie_inutilizacao">Série:</label>
                        <input type="text" id="serie_inutilizacao" name="serie" class="form-control" required placeholder="Ex: 1, 2">
                    </div>
                    <div class="form-group">
                        <label for="num_inicial_inutilizacao">Número Inicial:</label>
                        <input type="number" id="num_inicial_inutilizacao" name="numero_inicial" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="num_final_inutilizacao">Número Final:</label>
                        <input type="number" id="num_final_inutilizacao" name="numero_final" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="justificativa_inutilizacao">Justificativa (mínimo 15 caracteres):</label>
                        <textarea id="justificativa_inutilizacao" name="justificativa" class="form-control" rows="3" required></textarea>
                    </div>
                </form>
            `,
            focusConfirm: false,
            showCancelButton: true,
            confirmButtonText: 'Inutilizar',
            cancelButtonText: 'Cancelar',
            preConfirm: () => {
                const form = document.getElementById('form-inutilizar-numeros');
                const formData = new FormData(form);
                const justificativa = formData.get('justificativa');

                if (!justificativa || justificativa.length < 15) {
                    Swal.showValidationMessage('A justificativa é obrigatória e deve ter no mínimo 15 caracteres.');
                    return false;
                }
                return formData;
            }
        }).then((result) => {
            if (result.isConfirmed) {
                const formData = result.value;
                Swal.fire({
                    title: 'Processando Inutilização...',
                    text: 'Aguarde enquanto a faixa de numeração é inutilizada.',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                $.ajax({
                    url: 'apis/inutilizar_numeros.php',
                    method: 'POST',
                    data: Object.fromEntries(formData), // Converte FormData para objeto JS simples
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire('Sucesso!', response.message, 'success').then(() => {
                                // location.reload(); // Opcional: recarregar a página
                            });
                        } else {
                            let errorMessage = response.message;
                            if (response.details) {
                                errorMessage += "<br>Detalhes: " + JSON.stringify(response.details, null, 2);
                            }
                            Swal.fire('Erro!', errorMessage, 'error');
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire('Erro de Conexão!', 'Não foi possível se comunicar com o servidor.', 'error');
                        console.error("Erro na requisição AJAX:", xhr.responseText);
                    }
                });
            }
        });
    }

</script>