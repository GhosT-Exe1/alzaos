<?php
require_once("../conexao.php");
require_once("../config/api_config.php");
@session_start();
$id_empresa = @$_SESSION['empresa'];

// Recebe os dados do formulário
$certificado = $_FILES['certificado'];
$senha_certificado = $_POST['senha_certificado'];
$ambiente_nf = $_POST['ambiente_nf'];
$regime_tributario = $_POST['regime_tributario'];
$inscricao_municipal = $_POST['inscricao_municipal'];
$inscricao_estadual = $_POST['inscricao_estadual'];
$cnae = $_POST['cnae'];
$aliquota_iss = $_POST['aliquota_iss'];

// Busca os dados da empresa
$query = $pdo->prepare("SELECT * FROM empresas WHERE id = :id");
$query->bindValue(":id", $id_empresa);
$query->execute();
$empresa = $query->fetch(PDO::FETCH_ASSOC);

// Prepara os dados para a Nuvem Fiscal
$dados = [
    'cnpj' => $empresa['cpf'],
    'razao_social' => $empresa['nome'],
    'nome_fantasia' => $empresa['nome'],
    'inscricao_municipal' => $inscricao_municipal,
    'inscricao_estadual' => $inscricao_estadual,
    'regime_tributario' => $regime_tributario,
    'cnae' => $cnae,
    'aliquota_iss' => $aliquota_iss,
    'endereco' => [
        'cep' => $empresa['cep'],
        'logradouro' => $empresa['endereco'],
        'numero' => $empresa['numero'],
        'complemento' => $empresa['complemento'],
        'bairro' => $empresa['bairro'],
        'cidade' => $empresa['cidade'],
        'estado' => $empresa['estado']
    ],
    'ambiente' => $ambiente_nf
];

// Se tiver certificado, adiciona aos dados
if ($certificado['error'] == 0) {
    $dados['certificado'] = [
        'arquivo' => base64_encode(file_get_contents($certificado['tmp_name'])),
        'senha' => $senha_certificado
    ];
}

// Busca o ID da Nuvem Fiscal se já existir
$query = $pdo->prepare("SELECT id_nuvem_fiscal FROM empresas WHERE id = :id");
$query->bindValue(":id", $id_empresa);
$query->execute();
$res = $query->fetch(PDO::FETCH_ASSOC);

if ($res && $res['id_nuvem_fiscal']) {
    $dados['id_nuvem_fiscal'] = $res['id_nuvem_fiscal'];
}

// Faz a requisição para a Nuvem Fiscal
$ch = curl_init(API_URL . '/empresa');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dados));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . CLIENT_ID,
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$responseData = json_decode($response, true);

if ($httpCode >= 200 && $httpCode < 300) {
    // Atualiza o ID da Nuvem Fiscal no banco
    if (isset($responseData['id'])) {
        $query = $pdo->prepare("UPDATE empresas SET id_nuvem_fiscal = :id_nuvem_fiscal WHERE id = :id");
        $query->bindValue(":id_nuvem_fiscal", $responseData['id']);
        $query->bindValue(":id", $id_empresa);
        $query->execute();
    }
    
    // Salva as configurações da Nuvem Fiscal
    $query = $pdo->prepare("INSERT INTO nuvem_fiscal_config (empresa_id, certificado_path, senha_certificado, ambiente, regime_tributario, inscricao_municipal, inscricao_estadual, cnae, aliquota_iss) VALUES (:empresa_id, :certificado_path, :senha_certificado, :ambiente, :regime_tributario, :inscricao_municipal, :inscricao_estadual, :cnae, :aliquota_iss) ON DUPLICATE KEY UPDATE certificado_path = :certificado_path, senha_certificado = :senha_certificado, ambiente = :ambiente, regime_tributario = :regime_tributario, inscricao_municipal = :inscricao_municipal, inscricao_estadual = :inscricao_estadual, cnae = :cnae, aliquota_iss = :aliquota_iss");
    
    $query->bindValue(":empresa_id", $id_empresa);
    $query->bindValue(":certificado_path", $certificado['error'] == 0 ? $certificado['name'] : null);
    $query->bindValue(":senha_certificado", $senha_certificado);
    $query->bindValue(":ambiente", $ambiente_nf);
    $query->bindValue(":regime_tributario", $regime_tributario);
    $query->bindValue(":inscricao_municipal", $inscricao_municipal);
    $query->bindValue(":inscricao_estadual", $inscricao_estadual);
    $query->bindValue(":cnae", $cnae);
    $query->bindValue(":aliquota_iss", $aliquota_iss);
    $query->execute();
    
    echo json_encode(['status' => 'success', 'message' => 'Configurações da Nuvem Fiscal atualizadas com sucesso!']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Erro ao atualizar configurações da Nuvem Fiscal: ' . ($responseData['message'] ?? 'Erro desconhecido')]);
}
?> 