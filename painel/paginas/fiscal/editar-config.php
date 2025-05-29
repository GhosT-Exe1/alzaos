<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");

// Recebe os dados do formulário
$senha_certificado = $_POST['senha_certificado'];
$ambiente = $_POST['ambiente_nf'];
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

// Prepara os dados para a API da Nuvem Fiscal
$data = [
    'api_key' => 'B19tlAZtFsYPH2hba2FMsESq141qkPdm4K4ePWkM',
    'empresa' => [
        'nome' => $empresa['nome'],
        'cnpj' => $empresa['cnpj'],
        'email' => $empresa['email'],
        'telefone' => $empresa['telefone'],
        'endereco' => [
            'cep' => $empresa['cep'],
            'logradouro' => $empresa['rua'],
            'numero' => $empresa['numero'],
            'complemento' => $empresa['complemento'],
            'bairro' => $empresa['bairro'],
            'cidade' => $empresa['cidade'],
            'estado' => $empresa['uf']
        ]
    ]
];

// Processa o certificado se foi enviado
if (isset($_FILES['certificado']) && $_FILES['certificado']['error'] == 0) {
    $certificado = $_FILES['certificado'];
    $certificado_path = 'certificados/' . $id_empresa . '_' . $certificado['name'];
    
    if (!file_exists('certificados')) {
        mkdir('certificados', 0777, true);
    }
    
    move_uploaded_file($certificado['tmp_name'], $certificado_path);
    $data['certificado'] = [
        'arquivo' => base64_encode(file_get_contents($certificado_path)),
        'senha' => $senha_certificado
    ];
}

// Faz a requisição para a API da Nuvem Fiscal
$ch = curl_init(API_URL . '/v1/empresa');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer B19tlAZtFsYPH2hba2FMsESq141qkPdm4K4ePWkM',
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode >= 200 && $httpCode < 300) {
    $responseData = json_decode($response, true);
    
    // Atualiza o ID da Nuvem Fiscal na tabela empresas
    $query = $pdo->prepare("UPDATE empresas SET id_nuvem_fiscal = :id_nuvem_fiscal WHERE id = :id");
    $query->bindValue(":id_nuvem_fiscal", $responseData['id']);
    $query->bindValue(":id", $id_empresa);
    $query->execute();
    
    // Salva as configurações
    $query = $pdo->prepare("INSERT INTO nuvem_fiscal_config (empresa_id, certificado_path, senha_certificado, ambiente, regime_tributario, inscricao_municipal, inscricao_estadual, cnae, aliquota_iss) 
                           VALUES (:empresa_id, :certificado_path, :senha_certificado, :ambiente, :regime_tributario, :inscricao_municipal, :inscricao_estadual, :cnae, :aliquota_iss)
                           ON DUPLICATE KEY UPDATE 
                           certificado_path = VALUES(certificado_path),
                           senha_certificado = VALUES(senha_certificado),
                           ambiente = VALUES(ambiente),
                           regime_tributario = VALUES(regime_tributario),
                           inscricao_municipal = VALUES(inscricao_municipal),
                           inscricao_estadual = VALUES(inscricao_estadual),
                           cnae = VALUES(cnae),
                           aliquota_iss = VALUES(aliquota_iss)");
    
    $query->bindValue(":empresa_id", $id_empresa);
    $query->bindValue(":certificado_path", isset($certificado_path) ? $certificado_path : null);
    $query->bindValue(":senha_certificado", $senha_certificado);
    $query->bindValue(":ambiente", $ambiente);
    $query->bindValue(":regime_tributario", $regime_tributario);
    $query->bindValue(":inscricao_municipal", $inscricao_municipal);
    $query->bindValue(":inscricao_estadual", $inscricao_estadual);
    $query->bindValue(":cnae", $cnae);
    $query->bindValue(":aliquota_iss", $aliquota_iss);
    $query->execute();
    
    echo "<script>window.location.href='config_fiscal.php';</script>";
} else {
    echo "<script>alert('Erro ao salvar configurações: " . $response . "');</script>";
    echo "<script>window.location.href='config_fiscal.php';</script>";
}
?> 