<?php
// painel/paginas/fiscal/criar_tabela_notas_fiscais.php
require_once(__DIR__ . '/../../../conexao.php'); // Ajuste o caminho conforme necessário

try {
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS notas_fiscais (
            id INT(11) PRIMARY KEY AUTO_INCREMENT,
            id_empresa INT(11) NOT NULL,
            id_venda INT(11) DEFAULT NULL, -- Opcional: Link para sua tabela de vendas
            tipo_nota VARCHAR(5) NOT NULL DEFAULT 'NFE', -- 'NFE' ou 'NFCE'
            id_nuvem_fiscal VARCHAR(255) UNIQUE COMMENT 'ID da NFe/NFCe na Nuvem Fiscal',
            numero_nfe VARCHAR(20) DEFAULT NULL,
            serie_nfe VARCHAR(5) DEFAULT NULL,
            chave_acesso VARCHAR(44) UNIQUE DEFAULT NULL,
            status VARCHAR(50) DEFAULT 'pendente', -- Ex: pendente, processando, autorizada, cancelada, erro
            xml_url TEXT DEFAULT NULL,
            danfe_url TEXT DEFAULT NULL,
            justificativa_cancelamento TEXT DEFAULT NULL,
            data_emissao DATETIME DEFAULT CURRENT_TIMESTAMP,
            data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            FOREIGN KEY (id_empresa) REFERENCES empresas(id) ON DELETE CASCADE
            -- FOREIGN KEY (id_venda) REFERENCES vendas(id) ON DELETE SET NULL -- Se você tiver uma tabela 'vendas'
        );
    ");
    echo "Tabela 'notas_fiscais' criada ou já existente com sucesso!<br>";
} catch (PDOException $e) {
    echo "Erro ao criar tabela 'notas_fiscais': " . $e->getMessage() . "<br>";
}
?>