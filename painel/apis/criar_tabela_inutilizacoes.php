<?php
require_once("../../conexao.php");

// Criar tabela de inutilizações
$query = $pdo->prepare("CREATE TABLE IF NOT EXISTS nuvem_fiscal_inutilizacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    empresa_id INT NOT NULL,
    ano INT NOT NULL,
    serie INT NOT NULL,
    numero_inicial INT NOT NULL,
    numero_final INT NOT NULL,
    justificativa TEXT NOT NULL,
    protocolo VARCHAR(50),
    data_protocolo DATETIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (empresa_id) REFERENCES empresas(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

try {
    $query->execute();
    echo "Tabela de inutilizações criada com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao criar tabela de inutilizações: " . $e->getMessage();
}
?> 