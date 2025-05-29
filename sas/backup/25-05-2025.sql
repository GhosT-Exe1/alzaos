-- TABLE: acessos
CREATE TABLE `acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `chave` varchar(50) NOT NULL,
  `grupo` int(11) NOT NULL,
  `pagina` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('1', 'Home', 'home', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('2', 'Configura��es', 'configuracoes', '0', 'N�o');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('3', 'Usu�rios', 'usuarios', '1', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('4', 'Acessos', 'acessos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('5', 'Grupos Acesso', 'grupo_acessos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('8', 'Funcion�rios', 'funcionarios', '1', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('9', 'Fornecedores', 'fornecedores', '1', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('10', 'Formas de Pagamento', 'formas_pgto', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('11', 'Cargos', 'cargos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('12', 'Frequ�ncias', 'frequencias', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('13', 'Contas � Receber', 'receber', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('14', 'Contas � Pagar', 'pagar', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('15', 'Clientes', 'clientes', '1', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('16', 'Relat�rio Financeiro', 'rel_financeiro', '4', 'N�o');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('17', 'Relat�rio Sint�tico Despesas', 'rel_sintetico_despesas', '4', 'N�o');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('18', 'Relat�rio Sint�tico Receber', 'rel_sintetico_receber', '4', 'N�o');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('19', 'Relat�rio Balan�o Anual', 'rel_balanco', '4', 'N�o');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('23', 'Caixas', 'caixas', '7', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('24', 'Relat�rio De Caixas', 'rel_caixas', '7', 'N�o');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('25', 'Tarefas', 'tarefas', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('26', 'Lan�ar Tarefas', 'lancar_tarefas', '0', 'N�o');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('27', 'Relat�rio Inadimplentes', 'rel_inadimplementes', '4', 'N�o');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('37', 'Mensalidades', 'mensalidades', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('38', 'Dispositivos', 'dispositivos', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('39', 'Editar Baixa Conta', 'editar_conta_paga', '0', 'N�o');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('40', 'Marketing', 'marketing', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('41', 'Chamados', 'chamados', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('42', 'Cobran�as Recorrentes', 'cobrancas', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('43', 'Modelos de Contratos', 'modelos_contratos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('44', 'Gerar Contratos', 'rel_contratos', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('45', 'Modelos', 'modelos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('46', 'Equipamentos', 'equipamentos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('47', 'Servi�os', 'servicos', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('48', 'Marcas', 'marcas', '2', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('49', 'Categorias', 'categorias', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('50', 'SubCategorias', 'sub_categorias', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('51', 'Produtos', 'produtos', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('52', 'Entradas', 'entradas', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('53', 'Sa�das', 'saidas', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('54', 'Estoque Baixo', 'estoque', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('55', 'Produtos Mais Vendidos', 'rel_prod_vendidos', '28', 'N�o');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('56', 'Vendas', 'vendas', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('57', 'Compras', 'compras', '28', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('58', 'Lista de Vendas', 'lista_vendas', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('59', 'Or�amentos', 'orcamentos', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('60', 'OS', 'os', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('61', 'Comiss�es', 'comissoes', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('62', 'Minhas Comiss�es', 'minhas_comissoes', '4', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('63', 'RH', 'rh', '0', 'Sim');
INSERT INTO `acessos` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('64', 'Dados do Site', 'site', '0', 'Sim');

-- TABLE: acessos_sas
CREATE TABLE `acessos_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `chave` varchar(50) NOT NULL,
  `grupo` int(11) NOT NULL,
  `pagina` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('1', 'Home', 'home', '0', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('2', 'Configura��es', 'configuracoes', '0', 'N�o');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('3', 'Usu�rios', 'usuarios', '1', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('4', 'Acessos', 'acessos', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('5', 'Grupos Acesso', 'grupo_acessos', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('9', 'Fornecedores', 'fornecedores', '1', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('10', 'Formas de Pagamento', 'formas_pgto', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('11', 'Cargos', 'cargos', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('12', 'Frequ�ncias', 'frequencias', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('13', 'Contas � Receber', 'receber', '4', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('14', 'Contas � Pagar', 'pagar', '4', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('15', 'Clientes', 'clientes', '1', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('16', 'Relat�rio Financeiro', 'rel_financeiro', '4', 'N�o');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('17', 'Relat�rio Sint�tico Despesas', 'rel_sintetico_despesas', '4', 'N�o');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('18', 'Relat�rio Sint�tico Receber', 'rel_sintetico_receber', '4', 'N�o');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('19', 'Relat�rio Balan�o Anual', 'rel_balanco', '4', 'N�o');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('23', 'Caixas', 'caixas', '7', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('24', 'Relat�rio De Caixas', 'rel_caixas', '7', 'N�o');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('25', 'Tarefas', 'tarefas', '0', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('26', 'Lan�ar Tarefas', 'lancar_tarefas', '0', 'N�o');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('27', 'Relat�rio Inadimplentes', 'rel_inadimplementes', '4', 'N�o');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('38', 'Dispositivos', 'dispositivos', '0', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('39', 'Recursos Sistema', 'recursos', '2', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('40', 'Planos', 'planos', '0', 'Sim');
INSERT INTO `acessos_sas` (`id`, `nome`, `chave`, `grupo`, `pagina`) VALUES ('41', 'Site', 'site', '0', 'Sim');

-- TABLE: anotacoes
CREATE TABLE `anotacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `msg` text NOT NULL,
  `usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `mostrar_home` varchar(5) NOT NULL,
  `privado` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- TABLE: arquivos
CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `data_cad` date NOT NULL,
  `registro` varchar(50) DEFAULT NULL,
  `id_reg` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: caixas
CREATE TABLE `caixas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operador` int(11) NOT NULL,
  `data_abertura` date NOT NULL,
  `data_fechamento` date DEFAULT NULL,
  `valor_abertura` decimal(8,2) NOT NULL,
  `valor_fechamento` decimal(8,2) DEFAULT NULL,
  `quebra` decimal(8,2) DEFAULT NULL,
  `usuario_abertura` int(11) NOT NULL,
  `usuario_fechamento` int(11) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `sangrias` decimal(8,2) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: cargos
CREATE TABLE `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('1', 'Administrador', '');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('2', 'Comum', '');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('74', 'Dono', '35');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('75', 'Entregador', '35');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('83', 'T�cnico', '42');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('84', 'T�cnico', '35');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('85', 'T�cnico', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('86', 'T�cnico', '2');

-- TABLE: categorias
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  `icone` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('133', 'P�o de Queijo (5KG)', 'sem-foto.jpg', 'Sim', '35', 'fas fa-hamburger');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('134', 'P�o de Queijo (1KG)', 'sem-foto.jpg', 'Sim', '35', 'fas fa-hamburger');

-- TABLE: chamados
CREATE TABLE `chamados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) NOT NULL,
  `data` date NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `respondido` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: chamados_respostas
CREATE TABLE `chamados_respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `usuario` int(11) NOT NULL,
  `texto` text NOT NULL,
  `chamado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: clientes
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(25) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `tipo_pessoa` varchar(15) DEFAULT NULL,
  `data_cad` date NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `marketing` varchar(5) DEFAULT NULL,
  `senha_crip` varchar(150) DEFAULT NULL,
  `ativo` varchar(5) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `assinatura` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=374 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('261', 'Uni�o 2', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('262', 'Imperato', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('263', 'Martins', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('264', 'Karol', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('265', '2+2=5 Maioba', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('266', 'Paen de France', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('267', 'Cardoso', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('268', 'Op��o', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('269', 'Man�', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('270', 'Felix', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('271', 'Nathy', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('272', 'Macedo', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('273', 'P�o da Ceia', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('274', 'Faria Comercio Ltda', '08.310.483/0001-32', '(98)3221-2520', '', 'Estrada Estrado De Ribamar', '4', 'Anil', 'S�o Lu�s', 'MA', '65060-540', 'Jur�dica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('275', 'Irinato', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('276', 'Auxiliadora', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('277', 'Nosso P�o', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('278', 'Carone 3', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('279', 'Carone 2', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('280', 'Carone Matriz', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('281', 'Carone 4', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('282', 'Kairos', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('283', 'Centeio', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('284', 'J.L 1', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('285', 'J.L 2', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('286', 'H.P. Quente', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('287', 'Souza', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('288', 'J.F.(Fatima)', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('289', 'Paladar 1', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('290', 'Bom P�es', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('291', 'Jos� Jr', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('292', 'Joaquim', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('293', 'P�o Quente', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('294', 'Kapricho', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('295', 'Tia Ruth', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('296', 'Redes Cariocas', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('297', 'Val', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('298', 'Point do P�o', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('299', 'Bacabeira', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('300', 'Havan', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('301', 'Afeto', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('302', 'Art Caf� (Adriana)', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('303', 'Expresso Lanche', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('304', 'Monica', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('305', 'Uni�o 1', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('306', 'Casa do P�o', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('307', 'Mathias (Fazendinha)', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('308', 'J.C 2', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('309', 'Escritorio Lanche', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('310', 'Caf� e Amor', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('311', 'Du Pain', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('312', 'Alian�a', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('313', 'Armazem', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('314', 'Tiane', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('315', 'Dunga', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('316', 'Diniz', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('317', 'Lidiani', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('318', 'Lanchito', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('319', 'Brasil', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('320', 'Bom Gosto', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('321', 'P. da Ceia', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('322', 'Caf� Marias', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('323', 'Vem ki tem', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('324', 'Cantinho do P�o', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('325', 'Alana', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('326', 'Layane', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('327', 'Caf� e Plantas', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('328', 'Chapadiense', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('329', 'Caf� da Natalia', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('330', 'Scuba', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('331', '2+2=5 Cidade Olimpica', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('332', '2+2=5 (3)', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-22', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('333', 'Alex', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-25', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('334', 'Cecilia', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-25', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('336', 'Ceissa Bolo', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-06-30', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('337', 'N.S.C', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-07-01', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('338', 'GIL', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-07-01', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('339', 'Tavares', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-07-01', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('340', 'W S T Comercio Ltda', '49.343.182/0001-92', '(98)8723-9602', 'faria_46@hotmail.com', 'Avenida Aririzal', '', 'Turu', 'S�o Lu�s', 'MA', '65066-265', 'Jur�dica', '2024-07-01', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('342', 'P�o da hora', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-07-04', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('343', 'Paladar 2', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-07-09', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('344', 'estacao mix', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-08-15', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('345', 'layane carone matriz', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-08-15', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('346', 'dioceco', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-08-15', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('347', 'spresso', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-08-15', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('348', 'shopping', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-08-15', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('349', 'carone rodoviaria', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-08-15', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('350', 'caminho maranhao novo', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-05', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('351', 'caminho guajajaras', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-05', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('352', 'forno a lenha', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-05', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('353', 'particular', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-05', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('354', 'fabrica o. p.', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-05', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('355', 'tavares', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-05', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('356', 'eduardo funcionario', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-05', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('357', 'br 135  padaria', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-05', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('358', 'otimo pao', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-05', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('359', 'caminho maioba', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-05', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('360', 'Cohab', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-09', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('361', 'Floricultura', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-09', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('362', 'edineth', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-13', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('363', 'Kelly Kaicks', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-13', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('364', 'pao da vida', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-13', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('365', 'casa verde', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-25', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('366', 'Uninassal', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-09-25', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('367', 'liziane chefe', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-11-03', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('368', 'ana vila luizao', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-11-05', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('369', 'posto maguinolia', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-11-07', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('370', 'P.da vida', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-11-07', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('371', 'P.Quente', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-11-07', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('372', 'C.do p�o', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2024-11-07', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('373', 'Cantinho do bolo', '', '', '', '', '', '', 'S�o Lu�s', 'MA', '', 'F�sica', '2025-01-08', '0000-00-00', '0', '', '1', '', '$2y$10$iqJ4WRrdoKIN9K0cpN5di..yPw.hDWFoYnL3LsLs4Xz8yFG5eE2oC', 'Sim', '', '', '');

-- TABLE: clientes_recursos
CREATE TABLE `clientes_recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) DEFAULT NULL,
  `recurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('1', '1', '1');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('2', '1', '5');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('3', '1', '4');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('4', '1', '3');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('5', '1', '6');

-- TABLE: cobrancas
CREATE TABLE `cobrancas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `data` date NOT NULL,
  `usuario` int(11) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `data_venc` date NOT NULL,
  `frequencia` varchar(25) NOT NULL,
  `valor_parcela` decimal(8,2) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `parcelas` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: compra_venda
CREATE TABLE `compra_venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) NOT NULL,
  `texto` text NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- TABLE: config
CREATE TABLE `config` (
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `icone` varchar(100) DEFAULT NULL,
  `logo_rel` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ativo` varchar(5) DEFAULT NULL,
  `multa_atraso` decimal(8,2) DEFAULT NULL,
  `juros_atraso` decimal(8,2) DEFAULT NULL,
  `marca_dagua` varchar(5) DEFAULT NULL,
  `assinatura_recibo` varchar(5) DEFAULT NULL,
  `impressao_automatica` varchar(5) DEFAULT NULL,
  `cnpj` varchar(25) DEFAULT NULL,
  `entrar_automatico` varchar(5) DEFAULT NULL,
  `mostrar_preloader` varchar(5) DEFAULT NULL,
  `ocultar_mobile` varchar(5) DEFAULT NULL,
  `api_whatsapp` varchar(25) DEFAULT NULL,
  `token_whatsapp` varchar(70) DEFAULT NULL,
  `instancia_whatsapp` varchar(70) DEFAULT NULL,
  `alterar_acessos` varchar(5) DEFAULT NULL,
  `dados_pagamento` varchar(100) DEFAULT NULL,
  `abertura_caixa` varchar(5) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `public_key` varchar(255) DEFAULT NULL,
  `logo_painel` varchar(100) DEFAULT NULL,
  `imagem_assinatura` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `limitar_recursos` varchar(5) DEFAULT NULL,
  `fundo_login` varchar(100) DEFAULT NULL,
  `cidade_sistema` varchar(50) DEFAULT NULL,
  `api_pagamento` varchar(35) DEFAULT NULL,
  `chave_api_asaas` varchar(255) DEFAULT NULL,
  `dias_comissao` int(11) DEFAULT NULL,
  `assinatura_cliente` varchar(5) DEFAULT NULL,
  `alterar_api_whatsapp` varchar(5) DEFAULT NULL,
  `cobrar_automaticamente` varchar(5) DEFAULT NULL,
  `cobrar_duas_vezes` varchar(5) DEFAULT NULL,
  `pagina_entrada` varchar(25) DEFAULT NULL,
  `url_site` varchar(50) DEFAULT NULL,
  `dispositivos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`) VALUES ('ALZA OS', 'contato@alzaos.com.br', '(94) 99665-5467', '', 'https://instagram.com/ale._mrqs', 'logo.png', 'icone.png', 'logo.jpg', '1', 'Sim', '10.00', '10.00', 'Sim', 'N�o', 'N�o', '11.111.111/1111-11', 'Sim', 'Sim', 'Sim', 'menuia', 'a22586f4-a1f7-4fe5-a7cb-77894aaadd96', 'wNlUzuDW49C5LpPrqZmhCHB9Dtro1L0l7p836sicSvKLutr4bB', 'Sim', '', 'Sim', 'APP_USR-5991156942033444-052418-32b83d93d140a53762ff7d314fcd35ad-1718060789', 'APP_USR-db89c4ec-9d7c-4c0b-bff4-96bad359354e', '', '', '0', 'Sim', '24-05-2025-17-58-48-circulo-azul-abstrato-na-tecnologia-de-fundo-preto_1142-12714.png', '', 'Mercado Pago', '', '', '', 'N�o', '', '', 'Site', '', '');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`) VALUES ('WG CONGELADOS', 'contato@gostinhodeminaslz.com.br', '(98) 81850-435', 'Rua Vinte e Quatro,8', '', '24-05-2025-17-09-08-logo.png', '24-05-2025-17-09-08icone-logo.png', '24-05-2025-17-10-13rel-logo.jpg', '2', 'Sim', '0.00', '0.00', 'Sim', 'N�o', 'N�o', '43.691.539/0001-47', 'Sim', 'Sim', 'Sim', 'N�o', 'appkey_68324990c1f3f0.70775492', 'a06QVZeHQJyeyup4tzhZv70x8MMRTcco2Il4AvFo23cjqGUHGc', 'N�o', 'CNPJ: 43.691.539/0001-47', 'Sim', '', '', '24-05-2025-17-09-08painel-logo.png', '', '1', '', '', 'S�o Lu�s', 'Mercado Pago', '', '0', 'Sim', '', 'Sim', 'Sim', '', 'gostinhodeminas', '1');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`) VALUES ('EDILENE MARQUES CABRAL', 'edilenepepeu2018@gmail.com', '', '', '', '25-05-2025-14-16-57-LogoTransparante.png', '25-05-2025-14-16-57icone-LogoTransparante.png', '25-05-2025-14-17-50rel-Logo-Relatorios.jpg', '3', 'Sim', '0.00', '0.00', 'Sim', 'N�o', 'N�o', '', '', '', '', 'N�o', '', 'wNlUzuDW49C5LpPrqZmhCHB9Dtro1L0l7p836sicSvKLutr4bB', 'N�o', '', 'Sim', '', '', '25-05-2025-14-16-57painel-Logo-Relatorios.png', '', '2', '', '', '', '', '', '', '', '', '', '', '', 'edilenecakes', '1');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`) VALUES ('', '', '', '', '', 'sem-foto.png', 'sem-foto.png', 'sem-foto.png', '42', 'Sim', '0.00', '0.00', 'Sim', 'N�o', 'N�o', '', '', '', '', 'Sim', '', '', 'N�o', '', 'Sim', '', '', 'sem-foto.png', '', '42', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`) VALUES ('', '', '', '', '', 'sem-foto.png', 'sem-foto.png', 'sem-foto.png', '43', 'Sim', '0.00', '0.00', 'Sim', 'N�o', 'N�o', '', '', '', '', 'Sim', '', '', 'N�o', '', 'Sim', '', '', 'sem-foto.png', '', '35', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- TABLE: contratos
CREATE TABLE `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `mostrar_modelos` varchar(5) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: disparos
CREATE TABLE `disparos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campanha` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `data_disparo` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: dispositivos
CREATE TABLE `dispositivos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `telefone` varchar(20) DEFAULT NULL,
  `appkey` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `status_api` varchar(100) DEFAULT NULL,
  `horario` datetime DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('1', '559496655467', 'appkey_68325969418420.19261686', 'Ativo', 'conectado', '', '0');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('2', '', 'appkey_68324990c1f3f0.70775492', '', '', '', '1');

-- TABLE: empresas
CREATE TABLE `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(25) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `tipo_pessoa` varchar(15) DEFAULT NULL,
  `data_cad` date NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `dias_teste` int(11) DEFAULT NULL,
  `mensalidade` decimal(8,2) DEFAULT NULL,
  `data_teste` date DEFAULT NULL,
  `ativo` varchar(5) DEFAULT NULL,
  `plano` int(11) DEFAULT NULL,
  `url_site` varchar(100) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `dispositivos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('1', 'WG CONGELADOS', '43.691.539/0001-47', '(98) 8185-0435', 'contabilidadewilliamsantos@gmail.com', 'RUA BOM JESUS', '15', 'JARDIM SAO CRISTOVAO', 'SAO LUIS', 'MA', '65.055-050', 'Jur�dica', '2025-05-24', '2025-05-24', '1', 'QUADRA 136 A;LOTE 03', '365', '180.00', '2026-05-24', 'Sim', '4', 'gostinhodeminas', '365', '1');
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('2', 'EDILENE MARQUES CABRAL', '025.925.512-20', '', 'edilenepepeu2018@gmail.com', 'Avenida Trinta e Um de Mar�o', '310', 'Laranjeira', 'Marab�', 'PA', '68501-150', 'F�sica', '2025-05-25', '1969-12-31', '1', '', '365', '500.00', '2026-05-25', 'Sim', '4', 'edilenecakes', '365', '1');

-- TABLE: entradas
CREATE TABLE `entradas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: equipamentos
CREATE TABLE `equipamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- TABLE: formas_pgto
CREATE TABLE `formas_pgto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `taxa` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('1', 'Cart�o de D�bito', '0', '0');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('2', 'Boleto', '0', '0');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('3', 'Cart�o de Cr�dito', '0', '0');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('4', 'Pix', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('5', 'Boleto', '2', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('6', 'Dinheiro', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('7', 'Pix', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('8', 'Boleto', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('9', 'Cart�o de Cr�dito', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('10', 'Cart�o de D�bito', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('11', 'Pix', '0', '0');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('12', 'Cart�o de Cr�dito', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('13', 'Cart�o de D�bito', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('107', 'Pix', '0', '35');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('108', 'Boleto', '0', '35');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('109', 'Cart�o de Cr�dito', '0', '35');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('110', 'Cart�o de D�bito', '0', '35');

-- TABLE: fornecedores
CREATE TABLE `fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `pix` varchar(50) DEFAULT NULL,
  `data` date NOT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `tipo_chave` varchar(100) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `fornecedores` (`id`, `nome`, `telefone`, `email`, `endereco`, `pix`, `data`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `cnpj`, `complemento`, `tipo_chave`, `usuario`, `empresa`) VALUES ('1', 'API WHATSAPP', '(20) 0200-0000', 'menuia@menuia.com.br', '', '111.111.111-11', '2025-02-03', '', '', '', '', '', '', '', 'CPF', '', '0');
INSERT INTO `fornecedores` (`id`, `nome`, `telefone`, `email`, `endereco`, `pix`, `data`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `cnpj`, `complemento`, `tipo_chave`, `usuario`, `empresa`) VALUES ('2', 'Gasolina', '(99) 99999-9999', 'gasolina@gasolina.com', '', '', '2025-05-25', '', '', '', '', '', '11.111.111/1111-11', '', '', '', '1');
INSERT INTO `fornecedores` (`id`, `nome`, `telefone`, `email`, `endereco`, `pix`, `data`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `cnpj`, `complemento`, `tipo_chave`, `usuario`, `empresa`) VALUES ('3', 'Caixa', '(11) 11111-1111', 'caixa@caixa.com', '', '', '2025-05-25', '', '', '', '', '', '', '', '', '', '1');

-- TABLE: frequencias
CREATE TABLE `frequencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frequencia` varchar(25) NOT NULL,
  `dias` int(11) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('2', 'Di�ria', '1', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('3', 'Semanal', '7', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('4', 'Mensal', '30', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('5', 'Trimestral', '90', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('6', 'Semestral', '180', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('7', 'Anual', '365', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('23', 'Di�ria', '1', '0');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('36', 'Di�ria', '1', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('37', 'Mensal', '30', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('38', 'Semanal', '7', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('39', 'Anual', '365', '1');

-- TABLE: grupo_acessos
CREATE TABLE `grupo_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('1', 'Pessoas');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('2', 'Cadastros');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('3', 'Financeiro');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('4', 'Caixas');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('5', 'Produtos');

-- TABLE: grupo_acessos_sas
CREATE TABLE `grupo_acessos_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('1', 'Pessoas');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('2', 'Cadastros');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('3', 'Financeiro');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('4', 'Caixas');

-- TABLE: itens_venda
CREATE TABLE `itens_venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `funcionario` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: jornada
CREATE TABLE `jornada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario` int(11) NOT NULL,
  `data` date NOT NULL,
  `entrada` time NOT NULL,
  `entrada_almoco` time NOT NULL,
  `saida_almoco` time NOT NULL,
  `saida` time NOT NULL,
  `total_horas` time NOT NULL,
  `intervalo` time NOT NULL,
  `hora_extra` time NOT NULL,
  `folga` varchar(5) NOT NULL,
  `feriado` varchar(5) NOT NULL,
  `falta` varchar(5) NOT NULL,
  `data_lanc` date NOT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: marcas
CREATE TABLE `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- TABLE: marketing
CREATE TABLE `marketing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `data_envio` date DEFAULT NULL,
  `envios` int(11) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `mensagem2` text DEFAULT NULL,
  `mensagem` text DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `audio` varchar(100) DEFAULT NULL,
  `forma_envio` varchar(50) DEFAULT NULL,
  `documento` varchar(100) DEFAULT NULL,
  `ultimo_registro` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `dispositivo` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- TABLE: modelos
CREATE TABLE `modelos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `equipamento` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=308 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- TABLE: orcamentos
CREATE TABLE `orcamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `data` date NOT NULL,
  `data_entrega` date NOT NULL,
  `dias_validade` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `desconto` int(11) NOT NULL,
  `tipo_desconto` varchar(20) NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `total_produtos` decimal(8,2) DEFAULT NULL,
  `total_servicos` decimal(8,2) DEFAULT NULL,
  `funcionario` int(11) NOT NULL,
  `frete` decimal(8,2) NOT NULL,
  `equipamento` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `defeito` varchar(1000) DEFAULT NULL,
  `condicoes` varchar(2000) DEFAULT NULL,
  `acessorios` varchar(1000) DEFAULT NULL,
  `laudo` varchar(1000) DEFAULT NULL,
  `senha_ap` varchar(50) DEFAULT NULL,
  `mao_obra` decimal(8,2) DEFAULT NULL,
  `vall` decimal(8,2) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: os
CREATE TABLE `os` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `data` date NOT NULL,
  `data_entrega` date NOT NULL,
  `dias_validade` int(11) DEFAULT NULL,
  `valor` decimal(8,2) NOT NULL,
  `desconto` int(11) NOT NULL,
  `tipo_desconto` varchar(20) NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `total_produtos` decimal(8,2) NOT NULL,
  `total_servicos` decimal(8,2) NOT NULL,
  `funcionario` int(11) NOT NULL,
  `frete` decimal(8,2) NOT NULL,
  `tecnico` int(11) NOT NULL,
  `laudo` varchar(2000) DEFAULT NULL,
  `condicoes` varchar(2000) DEFAULT NULL,
  `acessorios` varchar(1000) DEFAULT NULL,
  `equipamento` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `orcamento` int(11) DEFAULT NULL,
  `mao_obra` decimal(8,2) DEFAULT NULL,
  `val_entrada` decimal(8,2) DEFAULT NULL,
  `vall` decimal(8,2) DEFAULT NULL,
  `defeito` varchar(1000) DEFAULT NULL,
  `dias_garantia` varchar(50) DEFAULT NULL,
  `senha_ap` varchar(50) DEFAULT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `forma_pgto` varchar(20) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: os_imagens
CREATE TABLE `os_imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `os` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: pagar
CREATE TABLE `pagar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `fornecedor` int(11) NOT NULL,
  `funcionario` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `vencimento` date NOT NULL,
  `data_pgto` date DEFAULT NULL,
  `data_lanc` date NOT NULL,
  `forma_pgto` int(11) NOT NULL,
  `frequencia` int(11) NOT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `desconto` decimal(8,2) DEFAULT NULL,
  `taxa` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `usuario_pgto` int(11) NOT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `residuo` varchar(5) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `caixa` int(11) DEFAULT NULL,
  `quant_recorrencia` int(11) DEFAULT NULL,
  `recorrencia_inf` varchar(5) DEFAULT NULL,
  `id_recorrencia` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `alerta` varchar(5) DEFAULT NULL,
  `hora_alerta` time DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: pagar_sas
CREATE TABLE `pagar_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `fornecedor` int(11) NOT NULL,
  `funcionario` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `vencimento` date NOT NULL,
  `data_pgto` date DEFAULT NULL,
  `data_lanc` date NOT NULL,
  `forma_pgto` int(11) NOT NULL,
  `frequencia` int(11) NOT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `desconto` decimal(8,2) DEFAULT NULL,
  `taxa` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `usuario_pgto` int(11) NOT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `residuo` varchar(5) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `caixa` int(11) DEFAULT NULL,
  `quant_recorrencia` int(11) DEFAULT NULL,
  `recorrencia_inf` varchar(5) DEFAULT NULL,
  `id_recorrencia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: perguntas_site
CREATE TABLE `perguntas_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_pergunta` varchar(150) DEFAULT NULL,
  `descricao_pergunta` text DEFAULT NULL,
  `empresa` int(11) NOT NULL,
  `posicao_pergunta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('1', 'O que � o ALZA OS?', 'O ALZA OS, � um sistema ERP (Enterprise Resource Planning) completo, 100% online, desenvolvido para simplificar a gest�o de empresas de todos os portes. Ele integra vendas, estoque, financeiro, atendimento ao cliente e muito mais em uma �nica plataforma', '0', '1');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('3', 'Como funciona a assinatura?', 'Ap�s escolher seu plano, voc� ser� redirecionado para o processo de pagamento. Assim que confirmado, voc� receber� acesso imediato ao sistema com todas as funcionalidades do pl Assim que confirmado, voc� receber� acesso imediato ao sistema com todas as fu', '0', '2');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('4', 'Preciso instalar algum software?', 'N�o! O ALZA OS SAAS � 100% baseado na nuvem. Voc� s� precisa de um navegador e conex�o com a internet para acessar o sistema de qualquer dispositivo, seja computador, tablet ou smartphone. ', '0', '3');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('5', 'Como funciona a integra��o com WhatsAppp?', 'Voc� conecta seu WhatsApp diretamente no sistema atrav�s de um simples QR Code. Com isso, voc� pode realizar campanhas de marketing com envio de disparos em massa, incluindo arquivos, textos e at� mesmo �udios personalizados. Al�m disso, tudo que � gerado', '0', '4');

-- TABLE: planos
CREATE TABLE `planos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `ativo` varchar(5) DEFAULT NULL,
  `clientes` int(11) DEFAULT NULL,
  `usuarios` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `planos` (`id`, `nome`, `valor`, `ativo`, `clientes`, `usuarios`) VALUES ('1', 'Plano Prata', '120.00', 'Sim', '100', '5');
INSERT INTO `planos` (`id`, `nome`, `valor`, `ativo`, `clientes`, `usuarios`) VALUES ('2', 'Plano Ouro', '360.00', 'Sim', '400', '10');
INSERT INTO `planos` (`id`, `nome`, `valor`, `ativo`, `clientes`, `usuarios`) VALUES ('4', 'Plano Diamante', '500.00', 'Sim', '0', '0');

-- TABLE: planos_itens
CREATE TABLE `planos_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plano` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('9', '1', 'Vendas, Estoque e Produtos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('11', '1', 'Abertura de Chamados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('13', '1', 'Contas � Pagar e Receber');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('15', '1', 'Gest�o de RH');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('17', '1', 'Api do Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('18', '1', 'Apis de Pagamentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('20', '1', 'Painel do Cliente');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('22', '1', 'Assinatura Digital');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('23', '2', 'Vendas, Estoque e Produtos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('25', '2', 'Abertura de Chamados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('27', '2', 'Contas � Pagar e Receber');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('29', '2', 'Gest�o de RH');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('31', '2', 'Api do Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('32', '2', 'Api de Pagamentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('34', '2', 'Painel do Cliente');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('36', '2', 'Assinatura Digital');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('37', '2', 'Cobran�as Recorrentes');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('55', '4', 'Vendas, Estoque e Produtos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('57', '4', 'Abertura de Chamados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('59', '4', 'Contas � Pagar e Receber');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('61', '4', 'Gest�o de RH');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('63', '4', 'Api do Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('64', '4', 'Api de Pagamentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('68', '4', 'Assinatura Digital');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('69', '4', 'Cobran�as Recorrentes');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('70', '4', 'Gest�o de Contratos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('71', '4', 'Or�amentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('73', '4', 'Marketing Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('76', '2', 'Limite de 3 Clientes');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('77', '2', 'Limite de 3 Usu�rios');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('80', '4', 'Clientes Ilimitados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('81', '4', 'Usu�rios Ilimitados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('93', '4', 'Tudo do Plano Ouro');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('94', '4', 'Em breve, EMISS�O DE NF-e');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('96', '1', 'Limite de 100 Cliente');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('97', '1', 'Limite de 5 Usu�rios');

-- TABLE: planos_recursos
CREATE TABLE `planos_recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plano` int(11) DEFAULT NULL,
  `recurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('1', '4', '1');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('5', '2', '3');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('9', '4', '5');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('10', '4', '4');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('11', '4', '3');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('12', '4', '6');

-- TABLE: produtos
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor_compra` decimal(8,2) NOT NULL,
  `valor_venda` decimal(8,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `nivel_estoque` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `fornecedor` int(11) NOT NULL,
  `sub_categoria` varchar(50) DEFAULT NULL,
  `lucro` decimal(8,2) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `tem_estoque` varchar(5) DEFAULT NULL,
  `vendas` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `valor_lucro` decimal(8,2) DEFAULT NULL,
  `lucro_reais` decimal(8,2) DEFAULT NULL,
  `valor_promocional` decimal(8,2) DEFAULT NULL,
  `mostrar_site` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=235 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('1', '5859035900188', 'P�o de Queijo (1KG)', '0.00', '14.70', '1000', '24-05-2025-17-39-48-pqueijo.png', 'Sim', '0', '134', '0', '42', '', 'P�o de Queijo (30G) 1KG', 'N�o', '', '1', '0.00', '0.00', '0.00', '');
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('2', '9752856128217', 'P�o de Queijo (5KG)', '0.00', '73.50', '100', '25-05-2025-01-31-59-pqueijo.png', 'Sim', '0', '133', '0', '41', '', '', 'N�o', '', '1', '0.00', '0.00', '0.00', '');

-- TABLE: produtos_orc
CREATE TABLE `produtos_orc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` int(11) NOT NULL,
  `orcamento` int(11) DEFAULT NULL,
  `funcionario` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `os` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: receber
CREATE TABLE `receber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `valor` decimal(8,2) DEFAULT NULL,
  `vencimento` date DEFAULT NULL,
  `data_pgto` date DEFAULT NULL,
  `data_lanc` date DEFAULT NULL,
  `forma_pgto` int(11) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `desconto` decimal(8,2) DEFAULT NULL,
  `taxa` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `usuario_lanc` int(11) DEFAULT NULL,
  `usuario_pgto` int(11) DEFAULT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `residuo` varchar(5) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `caixa` int(11) DEFAULT NULL,
  `tipo_chave` varchar(50) DEFAULT NULL,
  `acessar_painel` varchar(5) DEFAULT NULL,
  `quant_recorrencia` int(11) DEFAULT NULL,
  `id_recorrencia` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `ref_pix` varchar(100) DEFAULT NULL,
  `alerta` varchar(5) DEFAULT NULL,
  `hora_alerta` time DEFAULT NULL,
  `data_alerta` date DEFAULT NULL,
  `parcela` int(11) DEFAULT NULL,
  `recorrencia` varchar(5) DEFAULT NULL,
  `parcela_sem_juros` decimal(10,2) DEFAULT NULL,
  `troco` decimal(9,2) DEFAULT NULL,
  `garantia_venda` varchar(20) DEFAULT NULL,
  `tipo_desconto` varchar(10) DEFAULT NULL,
  `total_venda` decimal(10,2) DEFAULT NULL,
  `valor_restante` decimal(10,2) DEFAULT NULL,
  `forma_pgto_restante` int(11) DEFAULT NULL,
  `data_restante` date DEFAULT NULL,
  `cancelada` varchar(25) DEFAULT NULL,
  `hora_alerta2` time DEFAULT NULL,
  `data_alerta2` date DEFAULT NULL,
  `dispositivo` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: receber_sas
CREATE TABLE `receber_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `valor` decimal(8,2) DEFAULT NULL,
  `vencimento` date DEFAULT NULL,
  `data_pgto` date DEFAULT NULL,
  `data_lanc` date DEFAULT NULL,
  `forma_pgto` int(11) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) DEFAULT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `multa` decimal(8,2) DEFAULT NULL,
  `juros` decimal(8,2) DEFAULT NULL,
  `desconto` decimal(8,2) DEFAULT NULL,
  `taxa` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `usuario_lanc` int(11) DEFAULT NULL,
  `usuario_pgto` int(11) DEFAULT NULL,
  `pago` varchar(5) DEFAULT NULL,
  `residuo` varchar(5) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `caixa` int(11) DEFAULT NULL,
  `tipo_chave` varchar(50) DEFAULT NULL,
  `acessar_painel` varchar(5) DEFAULT NULL,
  `quant_recorrencia` int(11) DEFAULT NULL,
  `id_recorrencia` int(11) DEFAULT NULL,
  `ref_pix` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: recursos
CREATE TABLE `recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `chave` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('1', 'Marketing Whatsapp', 'marketing_whats');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('2', 'Cobran�as Recorrentes', 'cobrancas_rec');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('3', 'Gest�o de Contratos', 'gestao_contratos');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('4', 'Or�amentos', 'orcamentos_rec');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('5', 'OS Ordens de Servi�os', 'os_rec');

-- TABLE: recursos_site
CREATE TABLE `recursos_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_recurso` varchar(150) DEFAULT NULL,
  `icone_recurso` varchar(100) DEFAULT NULL,
  `descricao_recurso` varchar(255) DEFAULT NULL,
  `empresa` int(11) NOT NULL,
  `posicao_recurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('3', 'Aumente suas Vendas', 'fas fa-chart-line', 'Controle completo do processo de vendas, desde o or�amento at� a entrega, com relat�rios detalhados para tomar as melhores decis�es.', '0', '1');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('4', 'Controle Financeiro', 'fas fa-coins', 'Gerencie contas a pagar e receber, fluxo de caixa, concilia��o banc�ria e muito mais, tudo em um s� lugar.', '0', '2');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('5', 'Estoque Inteligente', 'fas fa-boxes', 'Controle de estoque em tempo real, com alertas de estoque m�nimo, gest�o de fornecedores e controle de validade.', '0', '3');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('6', 'Atendimento ao Cliente', 'fas fa-headset', 'Integra��o com WhatsApp, gest�o de chamados e hist�rico completo de intera��es para um atendimento personalizado.', '0', '4');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('7', 'Gest�o de Equipe', 'fas fa-users-cog', 'Controle de produtividade, metas, comiss�es e muito mais para maximizar o desempenho da sua equipe.', '0', '5');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('8', 'Contratos e Servi�os', 'fas fa-file-contract', 'Gest�o completa de contratos, ordens de servi�o e agendamentos para otimizar seus processos.', '0', '6');

-- TABLE: saidas
CREATE TABLE `saidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: sangrias
CREATE TABLE `sangrias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `caixa` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: servicos
CREATE TABLE `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `comissao` int(11) DEFAULT NULL,
  `dias` int(11) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('21', 'Entrega', '0.00', '0', '0', 'Sim', '1');

-- TABLE: servicos_orc
CREATE TABLE `servicos_orc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servico` int(11) NOT NULL,
  `orcamento` int(11) DEFAULT NULL,
  `funcionario` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `os` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `equipamento` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: site
CREATE TABLE `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `botao1` varchar(80) DEFAULT NULL,
  `botao2` varchar(80) DEFAULT NULL,
  `botao3` varchar(80) DEFAULT NULL,
  `item1` varchar(100) DEFAULT NULL,
  `item2` varchar(100) DEFAULT NULL,
  `item3` varchar(100) DEFAULT NULL,
  `titulo_recursos` varchar(255) DEFAULT NULL,
  `titulo_perguntas` varchar(255) DEFAULT NULL,
  `titulo_rodape` varchar(255) DEFAULT NULL,
  `descricao_rodape` text DEFAULT NULL,
  `botao_rodape` varchar(100) DEFAULT NULL,
  `link_rodape` varchar(255) DEFAULT NULL,
  `logo_topo` varchar(5) DEFAULT NULL,
  `fundo_topo` varchar(100) DEFAULT NULL,
  `fundo_topo_mobile` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `site` (`id`, `empresa`, `logo`, `titulo`, `subtitulo`, `botao1`, `botao2`, `botao3`, `item1`, `item2`, `item3`, `titulo_recursos`, `titulo_perguntas`, `titulo_rodape`, `descricao_rodape`, `botao_rodape`, `link_rodape`, `logo_topo`, `fundo_topo`, `fundo_topo_mobile`) VALUES ('1', '0', '25-05-2025-18-04-48-logo-mapos-branco-grande.png', 'Transforme a Gest�o do Seu Neg�cio HOJE MESMO!', 'O ALZA OS � a solu��o completa que voc� precisa para controlar vendas, estoque, financeiro e muito mais em um �nico sistema intuitivo e poderoso.', 'Come�ar Agora', 'Solicitar teste gr�tis', 'Acessar Painel', 'Comece a usar em minutos', 'Pagamento seguro', 'Suporte dedicado', 'Por Que Escolher o ALZA OS?', 'Perguntas Frequentes', 'Pronto para Revolucionar a Gest�o do Seu Neg�cio?', 'N�o perca mais tempo com processos manuais e desorganizados. O ALZA OS oferece tudo que voc� precisa para crescer com efici�ncia e controle total. ', 'Come�ar Agora', '#plans', 'Sim', '', '');

-- TABLE: sub_categorias
CREATE TABLE `sub_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('17', 'Azul', 'Sim', '', '1');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('26', 'Trasparente', 'Sim', '', '1');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('27', 'preta', 'Sim', '', '1');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('28', 'Rosa', 'Sim', '', '1');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('38', 'Rosa2', 'Sim', '', '1');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('40', 'Subcategoria 1', 'Sim', '', '2');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('41', '25G', 'Sim', '', '35');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('42', '30G', 'Sim', '', '35');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('43', '50G', 'Sim', '', '35');
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('44', '100G', 'Sim', '', '35');

-- TABLE: tarefas
CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `hora_mensagem` time DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `prioridade` varchar(25) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `recorrencia` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `tarefas` (`id`, `usuario`, `usuario_lanc`, `data`, `hora`, `hora_mensagem`, `descricao`, `status`, `hash`, `prioridade`, `titulo`, `recorrencia`, `empresa`) VALUES ('1', '17', '1', '2025-02-04', '18:00:00', '17:00:00', 'Testess', 'Agendada', '', 'Baixa', 'Teste', '0', '1');

-- TABLE: tarefas_sas
CREATE TABLE `tarefas_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `usuario_lanc` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `hora_mensagem` time DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `prioridade` varchar(25) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `recorrencia` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: temp_texto
CREATE TABLE `temp_texto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  `cabecalho` varchar(5) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `ip` varchar(35) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `assinatura` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('1', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURA��O</u></font></span></strong></p><div><font size=\"2\"><strong>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Ju�zo, inst�ncia ouTribunal, conferindo-lhes poderes gerais da cl�usula ?ad judicia? e aindapoderes especiais para propor a��es de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta � acusa��o, fazer arrazoados, requererjustifica��es, interpela��es e/ou notifica��es c�veis e criminais, oferecerrepresenta��o criminal, produzir provas, acompanhar dilig�ncias, fazer acordosou compromissos, receber e dar quita��o, requerer e levantar alvar�s judiciais,indicar bens � penhora, requerer compensa��o tribut�ria, nos limites previstosna legisla��o brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justi�a, tudo omais que se fizer necess�rio para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Quarta-Feira, 19 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/14.png\" style=\"margin-top:25px\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Hugo Cliente</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '14', '::1', '2025-03-24', '12:02:10', '3', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('4', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURA��O</u></font></span></strong></p><div><font size=\"2\"><strong>Cliente 2 emp 1, , , , nascido(a) em 04/03/2000, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: cliente2@hotmail.com, telefone: (00) 0000-0010</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Ju�zo, inst�ncia ouTribunal, conferindo-lhes poderes gerais da cl�usula ?ad judicia? e aindapoderes especiais para propor a��es de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta � acusa��o, fazer arrazoados, requererjustifica��es, interpela��es e/ou notifica��es c�veis e criminais, oferecerrepresenta��o criminal, produzir provas, acompanhar dilig�ncias, fazer acordosou compromissos, receber e dar quita��o, requerer e levantar alvar�s judiciais,indicar bens � penhora, requerer compensa��o tribut�ria, nos limites previstosna legisla��o brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justi�a, tudo omais que se fizer necess�rio para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Quarta-Feira, 19 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Cliente 2 emp 1</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '10', '', '', '', '3', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('6', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURA��O</u></font></span></strong></p><div><font size=\"2\"><strong>Cliente 3 emp 1, , , , nascido(a) em 01/01/2000, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: cliente3@hotmail.com, telefone: (00) 00000-0000</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Ju�zo, inst�ncia ouTribunal, conferindo-lhes poderes gerais da cl�usula ?ad judicia? e aindapoderes especiais para propor a��es de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta � acusa��o, fazer arrazoados, requererjustifica��es, interpela��es e/ou notifica��es c�veis e criminais, oferecerrepresenta��o criminal, produzir provas, acompanhar dilig�ncias, fazer acordosou compromissos, receber e dar quita��o, requerer e levantar alvar�s judiciais,indicar bens � penhora, requerer compensa��o tribut�ria, nos limites previstosna legisla��o brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justi�a, tudo omais que se fizer necess�rio para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Quarta-Feira, 19 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/11.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Cliente 3 emp 1</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '11', '::1', '2025-03-19', '18:17:34', '3', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('7', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURA��O</u></font></span></strong></p><div><font size=\"2\"><strong>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Ju�zo, inst�ncia ouTribunal, conferindo-lhes poderes gerais da cl�usula ?ad judicia? e aindapoderes especiais para propor a��es de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta � acusa��o, fazer arrazoados, requererjustifica��es, interpela��es e/ou notifica��es c�veis e criminais, oferecerrepresenta��o criminal, produzir provas, acompanhar dilig�ncias, fazer acordosou compromissos, receber e dar quita��o, requerer e levantar alvar�s judiciais,indicar bens � penhora, requerer compensa��o tribut�ria, nos limites previstosna legisla��o brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justi�a, tudo omais que se fizer necess�rio para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Quarta-Feira, 19 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/14.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Hugo Cliente</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '14', '', '', '', '3', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('8', '<div><b><font size=\"5\">fdafdsaf dfdsf a f</font></b></div><div><br></div><div><b><b>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</b></b></div><div><b><b><br></b></b></div><div><b><b>Hugo Cliente <br></b></b></div><div><br></div><div><b>Belo Horizonte</b></div><div><b><b><br></b></b></div>', '1', 'Sim', '14', '', '', '', '18', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('9', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURA��O</u></font></span></strong></p><div><font size=\"2\"><strong>Cliente Teste, , , , nascido(a) em 05/03/2001, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � Rua de Teste, 500, bairro Bairro Teste, munic�pio de Cidade Teste ?MG ? CEP: 30512-660, email: cliente1@hotmail.com, telefone: (31) 99534-8118</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Ju�zo, inst�ncia ouTribunal, conferindo-lhes poderes gerais da cl�usula ?ad judicia? e aindapoderes especiais para propor a��es de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta � acusa��o, fazer arrazoados, requererjustifica��es, interpela��es e/ou notifica��es c�veis e criminais, oferecerrepresenta��o criminal, produzir provas, acompanhar dilig�ncias, fazer acordosou compromissos, receber e dar quita��o, requerer e levantar alvar�s judiciais,indicar bens � penhora, requerer compensa��o tribut�ria, nos limites previstosna legisla��o brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justi�a, tudo omais que se fizer necess�rio para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Segunda-Feira, 24 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/1.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Cliente Teste</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '1', '::1', '2025-03-24', '12:01:53', '3', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('10', '<h3 data-start=\"299\" data-end=\"336\" align=\"center\"><b><h3 data-start=\"299\" data-end=\"336\"><font size=\"4\"><u>CONTRATO DE PRESTA��O DE SERVI�OS</u></font></h3></b></h3><p data-start=\"338\" data-end=\"386\">Pelo presente instrumento particular, as partes:</p><p data-start=\"388\" data-end=\"502\"><strong data-start=\"388\" data-end=\"404\">CONTRATANTE:</strong><br data-start=\"404\" data-end=\"407\">Nome: <b>Empresa 1 Teste</b><br data-start=\"434\" data-end=\"437\">CNPJ: <b>20.000.000/0000-00</b><br data-start=\"468\" data-end=\"471\">Endere�o: <b>Rua X N�mero 150 Bairro Teste X</b></p><p data-start=\"504\" data-end=\"616\"><strong data-start=\"504\" data-end=\"519\">CONTRATADA:</strong><br data-start=\"519\" data-end=\"522\"><b>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</b></p><p data-start=\"504\" data-end=\"616\">T�m entre si, justas e contratadas, as cl�usulas e condi��es a seguir dispostas:</p><h3 data-start=\"705\" data-end=\"729\"><font size=\"3\">CL�USULA 1� ? OBJETO</font></h3><p data-start=\"731\" data-end=\"959\">O presente contrato tem como objeto a presta��o dos seguintes servi�os:<br data-start=\"802\" data-end=\"805\"><strong data-start=\"805\" data-end=\"959\">[Descrever detalhadamente os servi�os que ser�o prestados, ex.: \"Aulas presenciais de ingl�s para n�vel b�sico, com carga hor�ria total de 40 horas.\"]</strong></p><h3 data-start=\"966\" data-end=\"1008\"><font size=\"3\">CL�USULA 2� ? OBRIGA��ES DA CONTRATADA</font></h3><p data-start=\"1010\" data-end=\"1232\">A CONTRATADA se obriga a:<br data-start=\"1035\" data-end=\"1038\">a) Prestar os servi�os descritos na Cl�usula 1� com zelo, dilig�ncia e qualidade;<br data-start=\"1119\" data-end=\"1122\">b) Cumprir o cronograma e prazos acordados;<br data-start=\"1165\" data-end=\"1168\">c) Manter sigilo sobre informa��es confidenciais da CONTRATANTE.</p><h3 data-start=\"1239\" data-end=\"1282\"><font size=\"3\">CL�USULA 3� ? OBRIGA��ES DA CONTRATANTE</font></h3><p data-start=\"1284\" data-end=\"1547\">A CONTRATANTE se compromete a:<br data-start=\"1314\" data-end=\"1317\">a) Fornecer todas as informa��es necess�rias � execu��o dos servi�os;<br data-start=\"1386\" data-end=\"1389\">b) Efetuar o pagamento na forma e prazos estipulados neste contrato;<br data-start=\"1457\" data-end=\"1460\">c) Cooperar com a CONTRATADA, sempre que necess�rio, para o bom andamento dos servi�os.</p><p data-start=\"504\" data-end=\"616\"><br></p><p data-start=\"504\" data-end=\"616\"><br></p>', '1', 'Sim', '14', '::1', '2025-03-24', '12:06:13', '17', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('11', '<p>fdfa fdf asfdsf fsadfda fa&nbsp; <strong>Cliente 2 emp 1, , , , nascido(a) em 04/03/2000, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: cliente2@hotmail.com, telefone: (00) 0000-0010, Cliente 2 emp 1, , , , nascido(a) em 04/03/2000, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: cliente2@hotmail.com, telefone: (00) 0000-0010, Cliente 3 emp 1, , , , nascido(a) em 04/03/2000, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: cliente3@hotmail.com, telefone: (00) 00000-0000</strong> cliente2@hotmail.com fadfadfa fd afaf f ,  , , - {{CEP}} Belo Horizonte fdfaf ads Terca-Feira, 25 de Marco de 2025&nbsp; fadfsad f Empresa 1 Teste dfafa a <strong>{{PROFISSIONAL}} <br></strong></p><p><strong><br></strong></p><p> <br><br>______________________________________________________________________<br>\r\nCliente 2 emp 1<br>\r\n (Contratante)<br><br>______________________________________________________________________<br>\r\nCliente 3 emp 1<br>\r\n (Contratante) <br></p><p><br></p><p> <br><br>______________________________________________________________________<br>\r\nGerente<br>\r\nOAB/ <br>\r\n (Contratado)<br><br>______________________________________________________________________<br>\r\nTeste<br>\r\nOAB/ <br>\r\n (Contratado) <br></p>', '1', 'Sim', '10', '', '', '', '19', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('12', '<div><b><font size=\"5\">fdafdsaf dfdsf a f</font></b></div><div><br></div><div><b><b>aaaaaaa, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: aaassssaaa@hotmail.com, telefone: (00) 0000-0000</b></b></div><div><b><b><br></b></b></div><div><b><b>aaaaaaa <br></b></b></div><div><br></div><div><b>Belo Horizonte</b></div><div><b><b><br></b></b></div>', '1', 'Sim', '13', '127.0.0.1', '2025-03-31', '21:16:31', '18', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('13', '<p></p><p style=\"text-align: center;\"><span style=\"font-size: 0.81568rem;\"><strong>Contrato de Presta��o de Servi�os</strong></span></p><strong>Contratante:</strong><span style=\"font-size: 0.81568rem;\">Alessandro</span><p></p><p><strong>CPF:</strong>076.778.952-04</p><p><strong>Endere�o:</strong>\r\n Rua Vinte e Quatro, 8 , Alameda dos Sonhos, S�o Lu�s-MA ,  Alameda dos Sonhos .&nbsp;<span style=\"font-size: 0.81568rem;\">S�o Lu�s-</span><span style=\"font-size: 0.81568rem;\">MA</span></p><p><strong>Contratada:</strong>&nbsp;<span style=\"font-size: 0.81568rem;\">Mano Zambrano</span></p><p><strong>CPF:</strong>&nbsp;<span style=\"font-size: 0.81568rem;\">43.691.539/0001-47</span></p><p><strong>Endere�o:</strong>&nbsp;<span style=\"font-size: 0.81568rem;\">Rua Vinte e Quatro,8</span></p><p><strong>Objeto do Contrato:\r\n</strong><br>A Contratada se compromete a fornecer os seguintes produtos para a Contratante:&nbsp;</p><p><strong>- Bolo (20 Pessoas):</strong>\r\nR$ 520,00\r\n<br><strong>- 4 Trufa (P):</strong>\r\nR$ 28,00\r\n<br><strong>- 4 Bolo bombom Anjo:</strong>\r\nR$ 100,00\r\n<br><strong>- 4 Bolo bombom Duplo:</strong>\r\nR$ 140,00\r\n<br><strong>- 4 Bolo no Palito:</strong>\r\nR$ 80,00\r\n<br><strong>- 4\r\nIgreja:</strong>\r\nR$ 120,00\r\n<br><strong>Valor Total:</strong>\r\nR$ 988,00\r\n<br><br><strong>Forma de Pagamento:</strong>\r\nO pagamento dever� ser realizado da seguinte forma:&nbsp;</p><p><font color=\"#11ff00\">- Pagamento de 50% no Pix\r\n</font><br><br><strong>Prazo de Entrega:</strong>\r\nOs produtos ser�o entregues na data de <strong>29/06/2025&nbsp;</strong><span style=\"font-size: 0.81568rem;\">para a Contratante (OBS: N�O FAZEMOS\r\nENTREGAS).</span></p><p>Disposi��es Gerais:\r\n<br>1. A Contratada se compromete a utilizar ingredientes de qualidade e a entregar os produtos\r\nconforme especificado.\r\n<br>2. Em caso de cancelamento do pedido, a Contratante dever� informar com anteced�ncia m�nima\r\nde <strong>15\r\n</strong>dias.\r\n<br>3. Qualquer altera��o no pedido dever� ser comunicada e acordada entre as partes.</p>', '35', 'N�o', '260', '2804:14d:8c80:474b:4d17:ad76:ccab:5', '2025-05-25', '04:09:08', '20', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('14', '<p style=\"text-align: center;\"><span style=\"font-size: 0.81568rem;\"><strong>Contrato de Presta��o de Servi�os</strong></span></p><p><strong>Contratante:</strong><span style=\"font-size: 0.81568rem;\">Alessandro</span></p><p><strong>CPF:</strong>076.778.952-04</p><p><strong>Endere�o:</strong> Rua Vinte e Quatro, 8 , Alameda dos Sonhos, S�o Lu�s-MA ,  Alameda dos Sonhos .&nbsp;<span style=\"font-size: 0.81568rem;\">S�o Lu�s-</span><span style=\"font-size: 0.81568rem;\">MA</span></p><p><strong>Contratada:</strong>&nbsp;<span style=\"font-size: 0.81568rem;\">{{PROFISSIONAL}}</span></p><p><strong>CPF:</strong>&nbsp;<span style=\"font-size: 0.81568rem;\">43.691.539/0001-47</span></p><p><strong>Endere�o:</strong>&nbsp;<span style=\"font-size: 0.81568rem;\">Rua Vinte e Quatro,8</span></p><p><strong>Objeto do Contrato:</strong><br>A Contratada se compromete a fornecer os seguintes produtos para a Contratante:&nbsp;</p><p><strong>- Bolo (20 Pessoas):</strong>R$ 520,00<br><strong>- 4 Trufa (P):</strong>R$ 28,00<br><strong>- 4 Bolo bombom Anjo:</strong>R$ 100,00<br><strong>- 4 Bolo bombom Duplo:</strong>R$ 140,00<br><strong>- 4 Bolo no Palito:</strong>R$ 80,00<br><strong>- 4Igreja:</strong>R$ 120,00<br><strong>Valor Total:</strong>R$ 988,00<br><br><strong>Forma de Pagamento:</strong>O pagamento dever� ser realizado da seguinte forma:&nbsp;</p><p><font color=\"#11ff00\">- Pagamento de 50% no Pix</font><br><br><strong>Prazo de Entrega:</strong>Os produtos ser�o entregues na data de <strong>29/06/2025&nbsp;</strong><span style=\"font-size: 0.81568rem;\">para a Contratante (OBS: N�O FAZEMOSENTREGAS).</span></p><p>Disposi��es Gerais:<br>1. A Contratada se compromete a utilizar ingredientes de qualidade e a entregar os produtosconforme especificado.<br>2. Em caso de cancelamento do pedido, a Contratante dever� informar com anteced�ncia m�nimade <strong>15</strong>dias.<br>3. Qualquer altera��o no pedido dever� ser comunicada e acordada entre as partes.<br><br>Contratante: Ana Carolina Miranda Guerra de Souza\r\n________<span style=\"font-size: 13.0509px;\">&nbsp;<img src=\"http://alzaos.com.br/painel/images/assinaturas/260.png\" alt=\"Imagem da Assinatura\">&nbsp;</span><span style=\"font-size: 0.81568rem;\">______________________</span></p>', '35', 'Sim', '260', '', '', '', '20', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('15', '<br><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div>{{ASSINATURA}}</div>', '35', 'Sim', '260', '', '', '', '', '');

-- TABLE: usuarios
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `senha_crip` varchar(130) NOT NULL,
  `nivel` varchar(25) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `data` date NOT NULL,
  `comissao` decimal(9,2) DEFAULT NULL,
  `id_ref` int(11) DEFAULT NULL,
  `pix` varchar(100) DEFAULT NULL,
  `token` varchar(150) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `acessar_painel` varchar(5) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `mostrar_registros` varchar(5) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `tipo_chave` varchar(100) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `valor_hora` decimal(10,2) DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_saida` time DEFAULT NULL,
  `jornada_horas` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('1', 'Alessandro Marques', 'alessandro@alzaos.com.br', '', '$2y$10$hobMJ9hntdES8UKCkCHYs.UXqLH.4oVuw7Ivy2ye3eJ3pZrk094OK', 'Administrador', 'Sim', '(94) 99665-5467', 'Rua Vinte e Quatro', '24-05-2025-16-55-01-Foto-perfil.png', '2025-02-01', '', '0', '', '534d9ca41d6b90d81686ed93e714d0ca908dfab89b3d27ecbd811f4646a87fe1', '2006-03-09', '8', 'Alameda dos Sonhos', 'S�o Lu�s', 'MA', '65055-462', 'Sim', '', 'Sim', '', '', '', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('61', 'Mano Zambrano', 'mano@gostinhodeminaslz.com.br', '', '$2y$10$aBuy0PDJt1gl9/2U3bVtMea4fFeGwQMcOo/ms9u0QXN4FYEnhmq5u', 'Dono', 'Sim', '(98) 8185-0435', 'RUA BOM JESUS', 'sem-foto.jpg', '2025-05-24', '', '35', '', '', '2025-05-24', '15', 'JARDIM SAO CRISTOVAO', 'SAO LUIS', 'MA', '65.055-050', 'Sim', '', '', 'QUADRA 136 A;LOTE 03', '', '35', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('62', 'Eduardo', 'eduardo@gostinhodeminaslz.com.br', '', '$2y$10$pBAxuKsYL/wyB1iwFmdVb.RvvOrB3tT6SlI7j6PTlr99NpcneD7FG', 'Entregador', 'Sim', '(11) 11111-1111', 'Rua Vinte e Quatro', 'sem-foto.jpg', '2025-05-24', '2.00', '', '111.111.111-11', '', '2006-03-09', '8', 'Alameda dos Sonhos', 'S�o Lu�s', 'MA', '65055-462', 'Sim', '', 'Sim', '', 'CPF', '35', '150000.00', '7.86', '08:30:00', '19:30:00', '00:00:00');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('69', 'EDILENE MARQUES CABRAL', 'edilenepepeu2018@gmail.com', '', '$2y$10$lsKX5dAcQBpliGbflVYibOBfw89Y9NOD66llmXnGLABPJUCPgZFei', 'Administrador', 'Sim', '', 'Avenida Trinta e Um de Mar�o', 'sem-foto.jpg', '2025-05-25', '', '42', '', '', '1969-12-31', '310', 'Laranjeira', 'Marab�', 'PA', '68501-150', 'Sim', '', '', '', '', '42', '', '', '', '', '');

-- TABLE: usuarios_permissoes
CREATE TABLE `usuarios_permissoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `permissao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('45', '36', '1');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('46', '36', '2');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('47', '36', '3');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('48', '36', '4');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('49', '36', '5');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('50', '36', '8');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('51', '36', '9');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('52', '36', '10');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('53', '36', '11');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('54', '36', '12');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('55', '36', '13');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('56', '36', '14');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('57', '36', '15');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('58', '36', '16');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('59', '36', '17');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('60', '36', '18');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('61', '36', '19');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('62', '36', '23');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('63', '36', '24');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('64', '36', '25');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('65', '36', '26');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('66', '36', '27');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('67', '36', '36');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('68', '20', '1');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('69', '20', '25');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('70', '20', '8');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('71', '20', '12');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('72', '21', '1');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('73', '21', '2');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('74', '21', '3');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('75', '21', '4');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('76', '21', '5');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('77', '21', '8');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('78', '21', '9');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('79', '21', '10');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('80', '21', '11');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('81', '21', '12');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('82', '21', '13');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('83', '21', '14');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('84', '21', '15');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('85', '21', '16');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('86', '21', '17');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('87', '21', '18');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('88', '21', '19');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('89', '21', '23');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('90', '21', '24');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('91', '21', '25');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('92', '21', '26');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('93', '21', '27');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('94', '21', '37');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('95', '21', '38');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('97', '29', '1');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('98', '29', '2');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('99', '29', '3');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('100', '29', '4');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('101', '29', '5');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('102', '29', '8');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('103', '29', '9');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('104', '29', '10');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('105', '29', '11');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('106', '29', '12');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('107', '29', '13');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('108', '29', '14');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('109', '29', '15');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('110', '29', '16');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('111', '29', '17');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('112', '29', '18');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('113', '29', '19');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('114', '29', '23');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('115', '29', '24');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('116', '29', '25');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('117', '29', '26');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('118', '29', '27');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('119', '29', '37');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('120', '29', '38');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('121', '29', '39');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('122', '29', '40');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('123', '29', '41');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('124', '29', '42');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('125', '29', '43');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('126', '29', '44');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('127', '29', '45');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('128', '29', '46');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('129', '29', '47');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('130', '29', '48');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('131', '29', '49');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('132', '29', '50');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('133', '29', '51');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('134', '29', '52');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('135', '29', '53');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('136', '29', '54');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('137', '29', '55');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('138', '29', '56');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('139', '29', '57');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('140', '29', '58');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('141', '29', '59');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('142', '29', '60');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('143', '29', '61');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('144', '29', '62');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('146', '62', '58');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('147', '61', '1');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('148', '61', '2');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('149', '61', '3');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('150', '61', '4');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('151', '61', '5');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('152', '61', '8');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('153', '61', '9');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('154', '61', '10');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('155', '61', '11');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('157', '61', '13');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('158', '61', '14');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('159', '61', '15');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('160', '61', '16');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('161', '61', '17');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('162', '61', '18');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('163', '61', '19');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('164', '61', '23');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('165', '61', '24');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('166', '61', '25');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('167', '61', '26');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('168', '61', '27');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('169', '61', '37');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('170', '61', '38');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('171', '61', '39');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('172', '61', '40');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('173', '61', '41');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('174', '61', '42');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('176', '61', '44');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('179', '61', '47');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('181', '61', '49');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('182', '61', '50');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('183', '61', '51');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('184', '61', '52');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('185', '61', '53');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('186', '61', '54');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('187', '61', '55');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('188', '61', '56');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('189', '61', '57');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('190', '61', '58');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('193', '61', '61');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('194', '61', '62');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('195', '61', '63');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('197', '62', '41');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('199', '62', '25');
INSERT INTO `usuarios_permissoes` (`id`, `usuario`, `permissao`) VALUES ('201', '62', '62');

-- TABLE: usuarios_permissoes_sas
CREATE TABLE `usuarios_permissoes_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `permissao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('1', '7', '1');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('2', '7', '2');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('3', '7', '3');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('4', '7', '4');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('5', '7', '5');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('6', '7', '9');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('7', '7', '10');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('8', '7', '11');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('9', '7', '12');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('10', '7', '13');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('11', '7', '14');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('12', '7', '15');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('13', '7', '16');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('14', '7', '17');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('15', '7', '18');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('16', '7', '19');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('17', '7', '23');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('18', '7', '24');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('19', '7', '25');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('20', '7', '26');
INSERT INTO `usuarios_permissoes_sas` (`id`, `usuario`, `permissao`) VALUES ('21', '7', '27');

-- TABLE: videos
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `videos` (`id`, `titulo`, `link`) VALUES ('1', 'Como Trabalhar com a campanha de Marketing', 'https://www.instagram.com/ale._mrqs/');
INSERT INTO `videos` (`id`, `titulo`, `link`) VALUES ('3', 'Como utilizar o sistema', 'https://youtu.be/QtelNzAmSiM?si=Vj3n10cZg2NwvR24');

