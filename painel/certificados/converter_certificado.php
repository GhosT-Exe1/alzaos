<?php
// Caminhos dos arquivos de saída
$pem_file = __DIR__ . '/certificado.pem';
$key_file = __DIR__ . '/certificado.key';

// Senha para a chave privada (opcional, mas recomendado)
$senha_key = '123456';

// Configurações para o certificado (Distinguished Name - DN)
$dn = [
    "countryName" => "BR",
    "stateOrProvinceName" => "SP",
    "localityName" => "Sao Paulo",
    "organizationName" => "Minha Empresa Teste",
    "organizationalUnitName" => "Setor Fiscal",
    "commonName" => "Certificado de Teste",
    "emailAddress" => "teste@minhaempresateste.com.br"
];

// Configurações da chave privada
$private_key_config = [
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
];

// 1. Gerar uma nova chave privada
$private_key = openssl_pkey_new($private_key_config);

if ($private_key === false) {
    die('Erro ao gerar a chave privada: ' . openssl_error_string() . "\n");
}

// 2. Gerar uma CSR (Certificate Signing Request - Solicitação de Assinatura de Certificado)
$csr = openssl_csr_new($dn, $private_key);

if ($csr === false) {
    die('Erro ao gerar a CSR: ' . openssl_error_string() . "\n");
}

// 3. Assinar o certificado (autoassinado neste caso)
// O certificado será válido por X dias (neste caso, 365 dias)
$x509 = openssl_csr_sign($csr, null, $private_key, $days=365);

if ($x509 === false) {
    die('Erro ao assinar o certificado: ' . openssl_error_string() . "\n");
}

// 4. Exportar a chave privada para um arquivo
$private_key_exported = '';
if (!openssl_pkey_export($private_key, $private_key_exported, $senha_key)) {
     die('Erro ao exportar a chave privada: ' . openssl_error_string() . "\n");
}
file_put_contents($key_file, $private_key_exported);

// 5. Exportar o certificado para um arquivo
$certificate_exported = '';
if (!openssl_x509_export($x509, $certificate_exported)) {
    die('Erro ao exportar o certificado: ' . openssl_error_string() . "\n");
}
file_put_contents($pem_file, $certificate_exported);

// Liberar recursos
openssl_pkey_free($private_key);
openssl_x509_free($x509);

echo "Certificado de teste (PEM) e Chave Privada (KEY) gerados com sucesso!\n";
echo "Certificado PEM: " . $pem_file . "\n";
echo "Chave Privada: " . $key_file . "\n"; 