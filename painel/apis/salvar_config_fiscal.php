<?php
// painel/apis/salvar_config_fiscal.php

require_once("../conexao.php");

@session_start();
// Garante que a requisição está vindo de um usuário logado e com permissão adequada
// Ajuste a lógica de permissão se necessário (ex: admin OU id_empresa_logada == id_empresa_do_post)
$id_empresa_logada = @$_SESSION['id_empresa_logada'];
$nivel_usuario = @$_SESSION['nivel_usuario'];

$id_empresa_post = $_POST['id_empresa'] ?? null;

// Lógica de autorização:
// 1. Se o usuário é admin, ele pode salvar qualquer empresa.
// 2. Se o usuário NÃO é admin, ele só pode salvar a própria empresa logada.
if ($nivel_usuario != 'admin') {
    if (empty($id_empresa_logada) || $id_empresa_logada != $id_empresa_post) {
        echo json_encode(['success' => false, 'message' => 'Acesso não autorizado ou tentativa de configurar outra empresa.']);
        exit();
    }
} else if (empty($id_empresa_post)) { // Admin mas sem ID da empresa no POST
    echo json_encode(['success' => false, 'message' => 'ID da empresa não fornecido para o admin.']);
    exit();
}


$nome_razao_social = $_POST['nome_razao_social'] ?? null;
$nome_fantasia = $_POST['nome_fantasia'] ?? null;
$inscricao_estadual = $_POST['inscricao_estadual'] ?? null;
$regime_tributario = $_POST['regime_tributario'] ?? null;
$endereco = $_POST['endereco'] ?? null;
$numero_endereco = $_POST['numero_endereco'] ?? null;
$bairro = $_POST['bairro'] ?? null;
$cep = $_POST['cep'] ?? null;
$cidade = $_POST['cidade'] ?? null;
$estado = $_POST['estado'] ?? null;
$codigo_municipio_ibge = $_POST['codigo_municipio_ibge'] ?? null;
$cnpj = $_POST['cnpj'] ?? null; // CNPJ deve ser apenas para validação, não para edição

if (empty($nome_razao_social) || empty($regime_tributario) || empty($endereco) || empty($numero_endereco) || empty($bairro) || empty($cep) || empty($cidade) || empty($estado) || empty($codigo_municipio_ibge)) {
    echo json_encode(['success' => false, 'message' => 'Todos os campos obrigatórios devem ser preenchidos.']);
    exit();
}

// Limpar e validar dados
$inscricao_estadual = preg_replace('/[^0-9]/', '', $inscricao_estadual);
$cep = preg_replace('/[^0-9]/', '', $cep);
$codigo_municipio_ibge = preg_replace('/[^0-9]/', '', $codigo_municipio_ibge);
$cnpj_clean = preg_replace('/[^0-9]/', '', $cnpj);


try {
    $pdo->beginTransaction();

    $query = $pdo->prepare("UPDATE empresas SET
        nome_razao_social = :nome_razao_social,
        nome_fantasia = :nome_fantasia,
        inscricao_estadual = :inscricao_estadual,
        regime_tributario = :regime_tributario,
        endereco = :endereco,
        numero_endereco = :numero_endereco,
        bairro = :bairro,
        cep = :cep,
        cidade = :cidade,
        estado = :estado,
        codigo_municipio_ibge = :codigo_municipio_ibge
        WHERE id = :id_empresa AND cnpj = :cnpj
    ");

    $query->bindValue(":nome_razao_social", $nome_razao_social);
    $query->bindValue(":nome_fantasia", $nome_fantasia);
    $query->bindValue(":inscricao_estadual", $inscricao_estadual);
    $query->bindValue(":regime_tributario", $regime_tributario);
    $query->bindValue(":endereco", $endereco);
    $query->bindValue(":numero_endereco", $numero_endereco);
    $query->bindValue(":bairro", $bairro);
    $query->bindValue(":cep", $cep);
    $query->bindValue(":cidade", $cidade);
    $query->bindValue(":estado", $estado);
    $query->bindValue(":codigo_municipio_ibge", $codigo_municipio_ibge);
    $query->bindValue(":id_empresa", $id_empresa_post); // Usa o ID do POST, validado acima
    $query->bindValue(":cnpj", $cnpj_clean);

    $query->execute();
    $pdo->commit();

    if ($query->rowCount() > 0) {
        echo json_encode(['success' => true, 'message' => 'Configurações fiscais atualizadas com sucesso!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Nenhuma alteração foi feita ou empresa não encontrada/autorizada.']);
    }

} catch (PDOException $e) {
    $pdo->rollBack();
    error_log("Erro no DB ao salvar configurações fiscais: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Erro interno ao salvar configurações.', 'db_error' => $e->getMessage()]);
}
?>