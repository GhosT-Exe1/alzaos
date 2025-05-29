<?php
echo "=== Extensões do PHP ===\n";
echo "OpenSSL está carregada: " . (extension_loaded('openssl') ? 'Sim' : 'Não') . "\n";

echo "\nVerificando arquivo php.ini:\n";
$php_ini = php_ini_loaded_file();
echo "php.ini usado: " . $php_ini . "\n";

// Verifica se a extensão está comentada no php.ini
if (file_exists($php_ini)) {
    $conteudo = file_get_contents($php_ini);
    if (strpos($conteudo, ';extension=openssl') !== false) {
        echo "ATENÇÃO: A extensão OpenSSL está comentada no php.ini (tem ; na frente)\n";
    } elseif (strpos($conteudo, 'extension=openssl') !== false) {
        echo "A extensão OpenSSL está descomentada no php.ini\n";
    } else {
        echo "ATENÇÃO: Não encontrei a linha da extensão OpenSSL no php.ini\n";
    }
}

echo "\nDiretório de extensões: " . ini_get('extension_dir') . "\n";
echo "Verificando se a DLL existe:\n";
$ext_dir = ini_get('extension_dir');
$openssl_dll = $ext_dir . DIRECTORY_SEPARATOR . 'php_openssl.dll';
echo "Arquivo da extensão existe: " . (file_exists($openssl_dll) ? 'Sim' : 'Não') . "\n";
echo "Caminho completo: " . $openssl_dll . "\n";

echo "\nTodas as extensões carregadas:\n";
print_r(get_loaded_extensions());

echo "\n\n=== Informações do Sistema ===\n";
echo "PHP Version: " . phpversion() . "\n";
echo "SAPI: " . php_sapi_name() . "\n";
echo "Sistema Operacional: " . PHP_OS . "\n"; 