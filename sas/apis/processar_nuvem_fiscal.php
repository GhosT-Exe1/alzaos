<?php
require_once('../conexao.php');
require_once('nuvem_fiscal.php');

// Verifica se é uma requisição POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = json_decode(file_get_contents('php://input'), true);
    
    try {
        // Inicializa a classe NuvemFiscal com a chave da API
        $nuvemFiscal = new NuvemFiscal($dados['api_key']);
        
        // Prepara os dados da empresa
        $dadosEmpresa = [
            'cnpj' => $dados['cnpj'],
            'razao_social' => $dados['razao_social'],
            'nome_fantasia' => $dados['nome_fantasia'],
            'inscricao_municipal' => $dados['inscricao_municipal'],
            'inscricao_estadual' => $dados['inscricao_estadual'],
            'regime_tributario' => $dados['regime_tributario'],
            'cnae' => $dados['cnae'],
            'aliquota_iss' => $dados['aliquota_iss'],
            'endereco' => [
                'cep' => $dados['cep'],
                'logradouro' => $dados['endereco'],
                'numero' => $dados['numero'],
                'complemento' => $dados['complemento'],
                'bairro' => $dados['bairro'],
                'cidade' => $dados['cidade'],
                'estado' => $dados['estado']
            ],
            'certificado' => [
                'arquivo' => base64_encode(file_get_contents($dados['certificado']['tmp_name'])),
                'senha' => $dados['senha_certificado']
            ],
            'ambiente' => $dados['ambiente_nf']
        ];
        
        // Se tiver ID, atualiza a empresa, senão cria uma nova
        if (isset($dados['id_nuvem_fiscal'])) {
            $response = $nuvemFiscal->atualizarEmpresa($dados['id_nuvem_fiscal'], $dadosEmpresa);
        } else {
            $response = $nuvemFiscal->criarEmpresa($dadosEmpresa);
        }
        
        // Atualiza o ID da Nuvem Fiscal no banco de dados
        if (isset($response['id'])) {
            $query = $pdo->prepare("UPDATE empresas SET id_nuvem_fiscal = :id_nuvem_fiscal WHERE id = :id");
            $query->bindValue(":id_nuvem_fiscal", $response['id']);
            $query->bindValue(":id", $dados['id']);
            $query->execute();
        }
        
        echo json_encode(['status' => 'success', 'data' => $response]);
        
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Método não permitido']);
}
?> 