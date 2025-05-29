<?php
// painel/paginas/fiscal/criar_tabela_inutilizacoes.php
require_once(__DIR__ . '/../../conexao.php');

try {
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS inutilizacoes (
            id INT(11) PRIMARY KEY AUTO_INCREMENT,
            id_empresa INT(11) NOT NULL,
            cnpj VARCHAR(18) NOT NULL,
            ano INT(4) NOT NULL,
            serie VARCHAR(5) NOT NULL,
            numero_inicial INT(9) NOT NULL,
            numero_final INT(9) NOT NULL,
            justificativa TEXT NOT NULL,
            id_nuvem_fiscal_inut VARCHAR(255) UNIQUE COMMENT 'ID da Inutilização na Nuvem Fiscal',
            status VARCHAR(50) DEFAULT 'pendente', -- Ex: pendente, autorizada, rejeitada
            data_inutilizacao DATETIME DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (id_empresa) REFERENCES empresas(id) ON DELETE CASCADE
        );
    ");
    echo "Tabela 'inutilizacoes' criada ou já existente com sucesso!<br>";
} catch (PDOException $e) {
    echo "Erro ao criar tabela 'inutilizacoes': " . $e->getMessage() . "<br>";
}
?>