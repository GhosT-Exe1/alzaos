<?php
require_once('../../conexao.php');

try {
    // Adiciona a coluna id_nuvem_fiscal na tabela empresas
    $query = $pdo->prepare("ALTER TABLE empresas ADD COLUMN id_nuvem_fiscal VARCHAR(255) NULL");
    $query->execute();
    
    // Cria a tabela de configurações da Nuvem Fiscal
    $query = $pdo->prepare("CREATE TABLE IF NOT EXISTS nuvem_fiscal_config (
        id INT AUTO_INCREMENT PRIMARY KEY,
        empresa_id INT NOT NULL,
        certificado_path VARCHAR(255) NULL,
        senha_certificado VARCHAR(255) NULL,
        ambiente INT DEFAULT 1,
        regime_tributario INT DEFAULT 1,
        inscricao_municipal VARCHAR(50) NULL,
        inscricao_estadual VARCHAR(50) NULL,
        cnae VARCHAR(10) NULL,
        aliquota_iss DECIMAL(5,2) NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (empresa_id) REFERENCES empresas(id) ON DELETE CASCADE
    )");
    $query->execute();
    
    echo "Tabelas criadas/atualizadas com sucesso!";
    
} catch (PDOException $e) {
    echo "Erro ao criar/atualizar tabelas: " . $e->getMessage();
}
?> 