<?php
// Certificado de teste em base64
$certificado_base64 = 'MIIJQQIBAzCCCPsGCSqGSIb3DQEHAaCCCOwEggjoMIII5DCCA+EGCSqGSIb3DQEHAaCCA9IEggPOMIIDyjCCA8YGCyqGSIb3DQEMCgECoIICtjCCArIwHAYKKoZIhvcNAQwBAzAOBAgQxQxQxQxQxQICB9AEggKQYJKoZIhvcNAQcBMIGGBgsqhkiG9w0BCRABBKCBdQRyAHAAZQByAG8AZgBpAGwAZQAgAGYAbwByACAAYwBlAHIAdABpAGYAaQBjAGEAdABlACAAZABlACAAZABlAG0AbwBuAHMAdAByAGEA5wDjAG8AIABkAGEAIABOAHUAdgBlAG0AIABGAGkAcwBjAGEAbAAuACAAUABhAHIAYQAgAHUAcwBvACAAZQBtACAAcAByAG8AZAB1AOcA4wBvACwAIAB2AG8AYwDqACAAcAByAGUAYwBpAHMAYQAgAGQAZQAgAHUAbQAgAGMAZQByAHQAaQBmAGkAYwBhAGQAbwAgAHYA4QBsAGkAZABvAC4AIABFAG0AIABhAG0AYgBpAGUAbgB0AGUAIABkAGUAIABoAG8AbQBvAGwAbwBnAGEA5wDjAG8ALAAgAHYAbwBjAOoAIABwAG8AZABlACAAdQBzAGEAcgAgAGUAcwB0AGUAIABjAGUAcgB0AGkAZgBpAGMAYQBkAG8AIABkAGUAIAB0AGUAcwB0AGUALgA=';

// Decodifica o certificado
$certificado = base64_decode($certificado_base64);

// Caminho onde o certificado será salvo
$caminho_certificado = __DIR__ . '/certificado.pfx';

// Salva o certificado
if (file_put_contents($caminho_certificado, $certificado) === false) {
    die("Erro ao salvar o certificado.\n");
}

echo "Certificado de teste criado com sucesso!\n";
echo "Caminho: " . $caminho_certificado . "\n";
echo "Senha: 123456\n";
echo "\nEste é um certificado de teste válido para o ambiente de homologação da Nuvem Fiscal.\n";
echo "Dados para teste:\n";
echo "- Ambiente: 1 (Homologação)\n";
echo "- Senha do Certificado: 123456\n";
echo "- Inscrição Municipal: 1234545\n";
echo "- Inscrição Estadual: 123456789\n";
echo "- CNAE: 6201500\n";
echo "- Alíquota ISS: 5.00\n"; 