<?php
require_once("../../conexao.php");

// Criar tabela de cartas de correção
$query = $pdo->prepare("CREATE TABLE IF NOT EXISTS nuvem_fiscal_cartas_correcao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    empresa_id INT NOT NULL,
    chave_acesso VARCHAR(44) NOT NULL,
    grupo_alterado VARCHAR(50) NOT NULL,
    correcao TEXT NOT NULL,
    protocolo VARCHAR(50),
    data_protocolo DATETIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (empresa_id) REFERENCES empresas(id) ON DELETE CASCADE,
    FOREIGN KEY (id) REFERENCES notas_fiscais(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

try {
    $query->execute();
    echo "Tabela de cartas de correção criada com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao criar tabela de cartas de correção: " . $e->getMessage();
}
?> 