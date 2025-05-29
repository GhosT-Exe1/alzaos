<?php
require_once("../../../conexao.php");

try {
    // Cria a tabela de notas fiscais
    $query = $pdo->prepare("CREATE TABLE IF NOT EXISTS notas_fiscais (
        id INT AUTO_INCREMENT PRIMARY KEY,
        empresa_id INT NOT NULL,
        cliente_id INT NOT NULL,
        numero VARCHAR(50) NOT NULL,
        data_emissao DATE NOT NULL,
        valor_total DECIMAL(10,2) NOT NULL,
        status VARCHAR(50) NOT NULL,
        id_nuvem_fiscal VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (empresa_id) REFERENCES empresas(id) ON DELETE CASCADE,
        FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
    $query->execute();
    
    echo "Tabela notas_fiscais criada com sucesso!";
    
} catch (PDOException $e) {
    echo "Erro ao criar tabela: " . $e->getMessage();
}
?> 