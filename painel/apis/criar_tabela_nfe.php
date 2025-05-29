<?php
require_once("../../conexao.php");

try {
    // Criar tabela de NF-e
    $sql = "CREATE TABLE IF NOT EXISTS nuvem_fiscal_notas (
        id INT AUTO_INCREMENT PRIMARY KEY,
        empresa_id INT NOT NULL,
        cliente_id INT NOT NULL,
        chave_acesso VARCHAR(44) NOT NULL,
        numero VARCHAR(9) NOT NULL,
        status VARCHAR(20) NOT NULL,
        xml LONGTEXT,
        json_enviado LONGTEXT,
        json_recebido LONGTEXT,
        data_emissao DATETIME NOT NULL,
        data_cancelamento DATETIME,
        motivo_cancelamento VARCHAR(255),
        protocolo VARCHAR(50),
        data_protocolo DATETIME,
        FOREIGN KEY (empresa_id) REFERENCES empresas(id),
        FOREIGN KEY (cliente_id) REFERENCES clientes(id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    
    $pdo->exec($sql);

    // Adicionar coluna ultima_nfe na tabela empresas se não existir
    $sql = "SHOW COLUMNS FROM empresas LIKE 'ultima_nfe'";
    $result = $pdo->query($sql);
    
    if ($result->rowCount() == 0) {
        $sql = "ALTER TABLE empresas ADD COLUMN ultima_nfe VARCHAR(9) DEFAULT '0'";
        $pdo->exec($sql);
    }

    // Criar tabela de produtos para controle fiscal
    $sql = "CREATE TABLE IF NOT EXISTS produtos_fiscal (
        id INT AUTO_INCREMENT PRIMARY KEY,
        empresa_id INT NOT NULL,
        codigo VARCHAR(20) NOT NULL,
        descricao VARCHAR(120) NOT NULL,
        ncm VARCHAR(8) NOT NULL,
        cfop VARCHAR(4) NOT NULL,
        unidade_comercial VARCHAR(6) NOT NULL,
        valor_unitario DECIMAL(15,2) NOT NULL,
        aliquota_icms DECIMAL(5,2),
        aliquota_pis DECIMAL(5,2),
        aliquota_cofins DECIMAL(5,2),
        cst_icms VARCHAR(2),
        cst_pis VARCHAR(2),
        cst_cofins VARCHAR(2),
        csosn VARCHAR(3),
        origem_mercadoria TINYINT DEFAULT 0,
        FOREIGN KEY (empresa_id) REFERENCES empresas(id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    
    $pdo->exec($sql);

    // Criar tabela de configurações fiscais da empresa
    $sql = "CREATE TABLE IF NOT EXISTS nuvem_fiscal_config (
        id INT AUTO_INCREMENT PRIMARY KEY,
        empresa_id INT NOT NULL,
        ambiente ENUM('homologacao', 'producao') DEFAULT 'homologacao',
        serie_nfe VARCHAR(3) DEFAULT '1',
        certificado_digital VARCHAR(255),
        senha_certificado VARCHAR(255),
        csc VARCHAR(50),
        csc_id VARCHAR(50),
        FOREIGN KEY (empresa_id) REFERENCES empresas(id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    
    $pdo->exec($sql);

    echo "Tabelas criadas com sucesso!";
} catch(PDOException $e) {
    echo "Erro ao criar tabelas: " . $e->getMessage();
}
?> 