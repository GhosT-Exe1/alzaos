<?php
require_once("../../../conexao.php");

try {
    // Insere os registros de acesso para o módulo fiscal
    $query = $pdo->prepare("INSERT INTO acessos (nome, chave) VALUES 
        ('Configurações Nuvem Fiscal', 'config_fiscal'),
        ('Notas Fiscais', 'fiscal')
    ON DUPLICATE KEY UPDATE nome = VALUES(nome)");
    $query->execute();
    
    echo "Registros de acesso criados com sucesso!";
    
} catch (PDOException $e) {
    echo "Erro ao criar registros de acesso: " . $e->getMessage();
}
?> 