<?php
// Configurações da API
define('API_URL', 'https://api.sandbox.nuvemfiscal.com.br');
define('AUTH_URL', 'https://auth.nuvemfiscal.com.br/oauth/token');

// Suas credenciais OAuth 2 - Substitua pelos valores obtidos no Console da Nuvem Fiscal
define('CLIENT_ID', 'a0kWBFCvLS22r3uQqyPi'); // Substitua pelo seu Client ID
define('CLIENT_SECRET', 'MHiazLWYd3GD4H6ZNloidjQBbk3qK47lpcNPfx2c'); // Substitua pelo seu Client Secret

// Configurações do Certificado (ainda mantemos, mas não usaremos nesta etapa de debug)
define('CERTIFICADO_PATH', __DIR__ . '/../certificados/certificado.pem');
define('CERTIFICADO_KEY', __DIR__ . '/../certificados/certificado.key');
define('CERTIFICADO_SENHA', '123456'); // Use a senha do seu certificado

// Configurações do Ambiente (Homologação/Produção)
define('AMBIENTE_HOMOLOGACAO', 1);
define('AMBIENTE_PRODUCAO', 2);

// Headers padrão da API (agora sem o token, que será obtido dinamicamente)
$GLOBALS['api_headers'] = [
    'Content-Type: application/json',
    'Accept: application/json',
    // 'Authorization: Bearer <token>'
];

// Função para verificar configurações
function verificar_configuracoes() {
    $erros = [];
    
    if (!defined('CLIENT_ID') || CLIENT_ID === 'a0kWBFCvLS22r3uQqyPi' || !defined('MHiazLWYd3GD4H6ZNloidjQBbk3qK47lpcNPfx2c') || CLIENT_SECRET === 'MHiazLWYd3GD4H6ZNloidjQBbk3qK47lpcNPfx2c') {
        $erros[] = 'Client ID ou Client Secret não configurados corretamente.';
    }
    
    // Verifica certificado (apenas aviso, pois não é usado na autenticação OAuth2)
    if (!file_exists(CERTIFICADO_PATH)) {
        $erros[] = 'Aviso: Certificado digital não encontrado em: ' . CERTIFICADO_PATH . '. Necessário para emissão de documentos fiscais, mas não para obter o token de acesso.';
    }
    
    if (!file_exists(CERTIFICADO_KEY)) {
        $erros[] = 'Aviso: Chave privada não encontrada em: ' . CERTIFICADO_KEY . '. Necessário para emissão de documentos fiscais, mas não para obter o token de acesso.';
    }
    
    return $erros;
} 