<?php
// painel/paginas/fiscal/criar_tabela_cartas_correcao.php
require_once(__DIR__ . '/../../conexao.php');

try {
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS cartas_correcao (
            id INT(11) PRIMARY KEY AUTO_INCREMENT,
            id_nota_fiscal INT(11) NOT NULL,
            id_nuvem_fiscal_cc VARCHAR(255) UNIQUE COMMENT 'ID da Carta de Correção na Nuvem Fiscal',
            texto_correcao TEXT NOT NULL,
            data_emissao DATETIME DEFAULT CURRENT_TIMESTAMP,
            status VARCHAR(50) DEFAULT 'pendente', -- Ex: pendente, autorizada, rejeitada
            FOREIGN KEY (id_nota_fiscal) REFERENCES notas_fiscais(id) ON DELETE CASCADE
        );
    ");
    echo "Tabela 'cartas_correcao' criada ou já existente com sucesso!<br>";
} catch (PDOException $e) {
    echo "Erro ao criar tabela 'cartas_correcao': " . $e->getMessage() . "<br>";
}
?>