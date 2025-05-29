<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../conexao.php");
require_once("../../config/api_config.php");

// Recebe o ID da nota fiscal
$id = $_GET['id'];

// Busca o ID da Nuvem Fiscal da empresa
$query = $pdo->prepare("SELECT id_nuvem_fiscal FROM empresas WHERE id = :id");
$query->bindValue(":id", $id_empresa);
$query->execute();
$empresa = $query->fetch(PDO::FETCH_ASSOC);

if (!$empresa || !$empresa['id_nuvem_fiscal']) {
    echo '<div class="alert alert-warning">Configure primeiro as credenciais da Nuvem Fiscal para visualizar notas fiscais.</div>';
    exit();
}

// Busca os detalhes da nota fiscal
$ch = curl_init(API_URL . '/v1/nfse/' . $id);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . CLIENT_ID,
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode >= 200 && $httpCode < 300) {
    $nota = json_decode($response, true);
} else {
    echo '<div class="alert alert-danger">Erro ao buscar detalhes da nota fiscal.</div>';
    exit();
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Detalhes da Nota Fiscal</h4>
                <div class="card-options">
                    <a href="index.php?pagina=fiscal" class="btn btn-secondary">
                        <i class="fe fe-arrow-left"></i> Voltar
                    </a>
                    <?php if ($nota['status'] == 'autorizada') { ?>
                        <a href="index.php?pagina=download-nota&id=<?php echo $id; ?>" class="btn btn-success">
                            <i class="fe fe-download"></i> Download
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Informações Gerais</h5>
                        <table class="table">
                            <tr>
                                <th>Número:</th>
                                <td><?php echo $nota['numero']; ?></td>
                            </tr>
                            <tr>
                                <th>Data de Emissão:</th>
                                <td><?php echo date('d/m/Y', strtotime($nota['data_emissao'])); ?></td>
                            </tr>
                            <tr>
                                <th>Status:</th>
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
                                        <?php echo ucfirst($nota['status']); ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Valor Total:</th>
                                <td>R$ <?php echo number_format($nota['valor_total'], 2, ',', '.'); ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h5>Tomador</h5>
                        <table class="table">
                            <tr>
                                <th>Nome:</th>
                                <td><?php echo $nota['tomador']['nome']; ?></td>
                            </tr>
                            <tr>
                                <th>CPF/CNPJ:</th>
                                <td><?php echo $nota['tomador']['cpf_cnpj']; ?></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><?php echo $nota['tomador']['email']; ?></td>
                            </tr>
                            <tr>
                                <th>Telefone:</th>
                                <td><?php echo $nota['tomador']['telefone']; ?></td>
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
                                <td><?php echo $nota['tomador']['endereco']['cep']; ?></td>
                                <th>Logradouro:</th>
                                <td><?php echo $nota['tomador']['endereco']['logradouro']; ?></td>
                            </tr>
                            <tr>
                                <th>Número:</th>
                                <td><?php echo $nota['tomador']['endereco']['numero']; ?></td>
                                <th>Complemento:</th>
                                <td><?php echo $nota['tomador']['endereco']['complemento']; ?></td>
                            </tr>
                            <tr>
                                <th>Bairro:</th>
                                <td><?php echo $nota['tomador']['endereco']['bairro']; ?></td>
                                <th>Cidade/UF:</th>
                                <td><?php echo $nota['tomador']['endereco']['cidade'] . '/' . $nota['tomador']['endereco']['estado']; ?></td>
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
                                <?php foreach ($nota['servicos'] as $servico) { ?>
                                    <tr>
                                        <td><?php echo $servico['descricao']; ?></td>
                                        <td>R$ <?php echo number_format($servico['valor'], 2, ',', '.'); ?></td>
                                        <td><?php echo number_format($servico['aliquota_iss'], 2, ',', '.'); ?>%</td>
                                        <td>R$ <?php echo number_format($servico['valor_iss'], 2, ',', '.'); ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <?php if ($nota['observacoes']) { ?>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5>Observações</h5>
                            <div class="alert alert-info">
                                <?php echo nl2br($nota['observacoes']); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div> 