<?php
// Caminhos dos arquivos
$pfx_file = __DIR__ . '/certificado.pfx';
$pem_file = __DIR__ . '/certificado.pem';
$key_file = __DIR__ . '/certificado.key';

// Senha do certificado PFX (a mesma usada no baixar_certificado_teste.php)
$senha_pfx = '123456';

// Verifica se o arquivo PFX existe
if (!file_exists($pfx_file)) {
    die("Erro: Arquivo PFX não encontrado em: " . $pfx_file . "\n");
}

// Tenta ler e parsear o certificado PFX
$certs = [];
if (!openssl_pkcs12_read(file_get_contents($pfx_file), $certs, $senha_pfx)) {
    die('Erro ao ler ou parsear o arquivo PFX: ' . openssl_error_string() . "\n");
}

// Verifica se o certificado e a chave privada foram extraídos
if (!isset($certs['cert']) || !isset($certs['pkey'])) {
    die("Erro: Certificado ou chave privada não encontrados no arquivo PFX.\n");
}

// Salva o certificado em formato PEM
if (file_put_contents($pem_file, $certs['cert']) === false) {
    die("Erro ao salvar o arquivo PEM: " . $pem_file . "\n");
}

// Salva a chave privada em formato PEM
// Nota: Por padrão, openssl_pkcs12_read já exporta a chave privada sem senha,
// mas você pode adicionar uma senha se necessário usando openssl_pkey_export.
if (file_put_contents($key_file, $certs['pkey']) === false) {
    die("Erro ao salvar o arquivo KEY: " . $key_file . "\n");
}

echo "Certificado e chave privada extraídos e convertidos para PEM com sucesso!\n";
echo "Certificado PEM: " . $pem_file . "\n";
echo "Chave Privada: " . $key_file . "\n"; 