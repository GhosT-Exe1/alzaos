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
INSERT INTO `anotacoes` (`id`, `titulo`, `msg`, `usuario`, `data`, `mostrar_home`, `privado`, `empresa`) VALUES ('2', 'Teste', '<p>fdsfadf afd afa fsadf </p>', '1', '2025-02-04', 'Sim ', 'N�o', '1');

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
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('1', 'fsdfdsf', '', '17-03-2025-20-44-51-eu.jpeg', '2025-03-17', 'Conta � Pagar', '28', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('2', 'fsdfdsf', '', '17-03-2025-20-44-51-eu.jpeg', '2025-03-17', 'Fornecedor', '3', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('3', 'fsdfdsf', '', '17-03-2025-20-44-51-eu.jpeg', '2025-03-17', 'Cliente', '0', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('5', 'fsdfdsf', '', '17-03-2025-20-44-51-eu.jpeg', '2025-03-17', 'Fornecedor', '3', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('6', 'fsdfdsf', '', '17-03-2025-20-44-51-eu.jpeg', '2025-03-17', 'Cliente', '0', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('8', 'fsdfdsf', '', '17-03-2025-20-45-21-eu.jpeg', '2025-03-17', 'Fornecedor', '3', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('9', 'fsdfdsf', '', '17-03-2025-20-45-21-eu.jpeg', '2025-03-17', 'Cliente', '0', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('11', 'fsdfdsf', '', '17-03-2025-20-45-21-eu.jpeg', '2025-03-17', 'Fornecedor', '3', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('12', 'fsdfdsf', '', '17-03-2025-20-45-21-eu.jpeg', '2025-03-17', 'Cliente', '0', '1');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('13', 'teste', '', '18-03-2025-19-05-20-eupng.png', '2025-03-18', 'Conta � Receber', '29', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('14', 'teste', '', '18-03-2025-19-05-20-eupng.png', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('15', 'teste', '', '18-03-2025-19-05-20-eupng.png', '2025-03-18', 'Conta � Receber', '29', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('16', 'teste', '', '18-03-2025-19-05-20-eupng.png', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('17', 'ffaf', '', '18-03-2025-19-05-34-eu.jpeg', '2025-03-18', 'Conta � Receber', '28', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('18', 'ffaf', '', '18-03-2025-19-05-34-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('19', 'ffaf', '', '18-03-2025-19-05-34-eu.jpeg', '2025-03-18', 'Conta � Receber', '28', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('20', 'ffaf', '', '18-03-2025-19-05-34-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('21', 'fdsfdsf', '', '18-03-2025-19-06-18-eu.jpeg', '2025-03-18', 'Conta � Receber', '28', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('22', 'fdsfdsf', '', '18-03-2025-19-06-18-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('23', 'fdfdf', '', '18-03-2025-19-25-22-eu.jpeg', '2025-03-18', 'Or�amento', '8', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('24', 'fdfdf', '', '18-03-2025-19-25-22-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('25', 'fdfdf', '', '18-03-2025-19-25-22-eu.jpeg', '2025-03-18', 'Or�amento', '8', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('26', 'fdfdf', '', '18-03-2025-19-25-22-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('27', 'fdsfsd', '', '18-03-2025-19-25-39-eupng.png', '2025-03-18', 'Or�amento', '8', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('28', 'fdsfsd', '', '18-03-2025-19-25-39-eupng.png', '2025-03-18', 'Cliente', '14', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('29', 'fdfdsf', '', '18-03-2025-19-27-10-eu.jpeg', '2025-03-18', 'OS', '17', '0');
INSERT INTO `arquivos` (`id`, `nome`, `descricao`, `arquivo`, `data_cad`, `registro`, `id_reg`, `usuario`) VALUES ('30', 'fdfdsf', '', '18-03-2025-19-27-10-eu.jpeg', '2025-03-18', 'Cliente', '14', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('1', 'Administrador', '');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('2', 'Comum', '');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('56', 'Gerente', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('57', 'Tesoureiro', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('58', 'Gerente', '2');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('59', 'Financeiro', '2');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('60', 'Administrador', '2');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('61', 'fafad', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('62', 'aaaa', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('63', 'dsfadfa', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('64', 'Gerente', '8');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('65', 'T�cnico', '1');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('66', 'T�cnico', '2');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('67', 'T�cnico', '8');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('68', 'T�cnico', '12');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('70', 'T�cnico', '4');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('71', 'T�cnico', '17');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('72', 'T�cnico', '34');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('73', 'T�cnico', '35');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('74', 'Dono', '35');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('75', 'Entregador', '35');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('76', 'T�cnico', '36');
INSERT INTO `cargos` (`id`, `nome`, `empresa`) VALUES ('77', 'T�cnico', '37');

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
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('18', 'Celular', '21-10-2023-05-19-03-18-04-2023-19-51-26-CELULAR.jpg', 'Sim', '1', 'fas fa-mobile-alt');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('19', 'Notebook', '21-10-2023-05-20-49-download.png', 'Sim', '1', 'fas fa-laptop');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('20', 'PC', '21-10-2023-05-23-05-pc2.png', 'Sim', '1', 'fas fa-desktop');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('21', 'Tablet', '21-10-2023-05-25-00-pngimg.com---tablet_PNG8600.png', 'Sim', '1', 'fas fa-tablet-alt');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('22', 'Caixa de Som', '21-10-2023-05-18-56-Caixa-Som-Bluetooth-Mini-Speaker-3w.jpg', 'Sim', '1', 'fas fa-volume-up');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('26', 'Inform�tica', '21-10-2023-05-20-38-downswswload.png', 'Sim', '1', 'fas fa-microchip');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('27', 'Bateria Celular', '21-10-2023-05-03-23-gran-prime-original11-cf5e225f6264c44d9c15154995103467-640-0.jpg', 'Sim', '1', 'fas fa-battery-full');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('28', 'Perif�ricos Celular', '21-10-2023-05-28-44-placa_de_carga_conector_moto_g9.png', 'Sim', '1', 'fas fa-blender-phone');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('29', 'Pel�cula 3D', '21-10-2023-05-21-55-752fbb9b-95cb-453a-adbc-efc07f75844a.png', 'Sim', '1', 'fas fa-tablet-alt');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('30', 'Pel�cula 3D Privacidade', '21-10-2023-05-26-46-pelicula-3D-Privacidade.png', 'Sim', '1', 'fas fa-user-secret');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('31', 'Fone de Ouvido', '21-10-2023-05-34-42-faa1075c-f616-4bc3-8dff-b0232002e689.png', 'Sim', '1', 'fas fa-headphones');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('32', 'Fone Bluetooth', '21-10-2023-05-35-03-cfaff441-3098-4871-97e7-7cf85538f20a.png', 'Sim', '1', 'fas fa-bluetooth');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('33', 'Fone Headset', '21-10-2023-05-35-12-13b3f94d-ad17-4f5c-861d-cc5eb51de10c.png', 'Sim', '1', 'fas fa-headset');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('34', 'Cart�o de Mem�ria', '21-10-2023-05-35-34-128-removebg-preview.png', 'Sim', '1', 'fas fa-memory');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('35', 'Pen Driver', '21-10-2023-05-36-42-1xg.png', 'Sim', '1', 'fas fa-usb');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('36', 'Carregador', '21-10-2023-05-37-36-18-04-2023-19-57-26-CARREGADOR-2.jpg', 'Sim', '1', 'fas fa-charging-station');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('37', 'Carregaodor Veicular', '21-10-2023-05-38-56-carregadorveicularrr.png', 'Sim', '1', 'fas fa-charging-station');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('38', 'Cabos Celular', '21-10-2023-05-39-11-18-04-2023-19-54-29-CABO-2.jpg', 'Sim', '1', 'fas fa-plug');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('39', 'Games', '21-10-2023-05-41-16-62-622862_download-free-png-dlpng-transparent-game-controller-png.png', 'Sim', '1', 'fas fa-gamepad');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('40', 'Automotivo ', '21-10-2023-05-42-38-acessorios-para-montar-som-autom.png', 'Sim', '1', 'fas fa-car');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('41', 'Capinhas', '21-10-2023-05-43-25-18-04-2023-19-56-22-CAPA-2.jpg', 'Sim', '1', 'fas fa-mobile');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('42', 'Mouse', '21-10-2023-05-43-51-24f2b0d096a6ede59fc153af6aae857a_470x0_i84040850lso.png', 'Sim', '1', 'fas fa-mouse');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('43', 'Teclado', '21-10-2023-05-44-27-keyboardmouse.png', 'Sim', '1', 'fas fa-keyboard');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('44', 'Pel�cula V�dro', '21-10-2023-05-44-45-v�dro.png', 'Sim', '1', 'fas fa-tablet-alt');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('45', 'Cooler ', '21-10-2023-05-45-57-710-1.png', 'Sim', '1', 'fas fa-wind');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('46', 'Adaptador Bluetooth', '21-10-2023-05-47-13-Adaptador-Bluetooth-P2-20200303232446.5972900015.jpg', 'Sim', '1', 'fas fa-bluetooth-b');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('47', 'Adaptador', '21-10-2023-05-48-53-4813845086_1_large.png', 'Sim', '1', 'fas fa-plug');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('48', 'Antena Wifi', '21-10-2023-05-49-55-antena-wireless.png', 'Sim', '1', 'fas fa-wifi');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('49', 'Cabo Auxiliar', '21-10-2023-06-01-09-1jpDZcTnCTLGKJYY4KQWBtREgEqdY0jjscYAI85C.jpg', 'Sim', '1', 'fas fa-headphones-alt');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('50', 'Cabo Inform�tica', '21-10-2023-06-18-58-2023-10-21_06h18_48.png', 'Sim', '1', 'fas fa-network-wired');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('51', 'Calculadora', '21-10-2023-06-36-25-2023-10-21_06h33_53.png', 'Sim', '1', 'fas fa-calculator');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('52', 'C�mera', '21-10-2023-06-38-30-2023-10-21_06h34_04.png', 'Sim', '1', 'fas fa-camera');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('53', 'Campainha', '21-10-2023-06-41-25-2023-10-21_06h41_12.png', 'Sim', '1', 'fas fa-bell');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('54', 'Carregaodor Celular', '21-10-2023-06-43-46-6f2202fb-468d-4fdf-8784-6e2b21bc1979.png', 'Sim', '1', 'fas fa-charging-station');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('55', 'Carregaodor Port�tio', '21-10-2023-06-51-34-2023-10-21_06h49_57.png', 'Sim', '1', 'fas fa-charging-station');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('56', 'Case', '21-10-2023-07-04-17-2023-10-21_07h03_57.png', 'Sim', '1', 'fas fa-suitcase');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('57', 'M�quina de cabelo', '21-10-2023-07-33-11-2023-10-21_07h26_38.png', 'Sim', '1', 'fas fa-cut');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('58', 'lanterna', '21-10-2023-07-33-27-2023-10-21_07h26_47.png', 'Sim', '1', 'fas fa-lightbulb');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('59', 'Mouse pad', '21-10-2023-07-38-49-2023-10-21_07h27_01.png', 'Sim', '1', 'fas fa-mouse-pointer');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('60', 'Pilha', '21-10-2023-07-45-45-2023-10-21_07h45_15.png', 'Sim', '1', 'fas fa-battery-three-quarters');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('61', 'Ring light', '21-10-2023-07-47-53-2023-10-21_07h47_34.png', 'Sim', '1', 'fas fa-lightbulb');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('62', 'Suporte para Celular', '21-10-2023-07-49-20-2023-10-21_07h49_07.png', 'Sim', '1', 'fas fa-mobile');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('63', 'Cabos', '23-10-2023-07-47-30-d1224087-ac31-448c-b26c-83eccdb87304.png', 'Sim', '1', 'fas fa-plug');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('64', 'Servi�os', '23-10-2023-19-00-37-servi�os2.png', 'Sim', '1', 'fas fa-tools');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('65', 'DVR', 'sem-foto.jpg', 'Sim', '1', 'fas fa-video');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('66', 'Conectores', 'sem-foto.jpg', 'Sim', '1', 'fas fa-plug');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('126', 'DVR 2', 'sem-foto.jpg', 'Sim', '1', 'fas fa-laptop');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('129', 'Categoria 1', 'sem-foto.jpg', 'Sim', '2', 'fas fa-folder');
INSERT INTO `categorias` (`id`, `nome`, `foto`, `ativo`, `empresa`, `icone`) VALUES ('130', 'Teste', 'sem-foto.jpg', 'Sim', '2', 'fas fa-vial');
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
INSERT INTO `chamados` (`id`, `empresa`, `data`, `titulo`, `texto`, `status`, `respondido`) VALUES ('4', '1', '2025-03-05', 'Estou com problemas ...', '<p>fdf dsafs fsa fsa fdaf daf as fasd fdfa fa </p>', 'Fechado', 'N�o');

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
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('1', '2', '2025-03-05', '14:32:30', '1', 'fad fadf ads fasf dsaf asfsaf a', '3');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('2', '1', '2025-03-05', '14:33:26', '1', 'dfa fsa fasf asf sadfads a', '1');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('5', '2', '2025-03-05', '14:59:41', '1', 'fdasf da fffdaf asf a', '3');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('6', '2', '2025-03-05', '15:13:55', '1', 'dfa fsfa fsdaf ', '3');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('7', '1', '2025-03-05', '15:14:17', '1', 'fda fads fdfa fadf ', '1');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('8', '1', '2025-03-05', '15:15:05', '1', 'dfa fdsa faf adf', '1');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('10', '1', '2025-03-05', '15:21:31', '0', 'fdsf fda fdsa fdsaf asdfsa fsdaf afafea fdsafaf a', '1');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('11', '1', '2025-03-05', '20:05:18', '1', 'fda fafsa fdsa fda f', '4');
INSERT INTO `chamados_respostas` (`id`, `empresa`, `data`, `hora`, `usuario`, `texto`, `chamado`) VALUES ('12', '1', '2025-03-05', '20:05:38', '0', 'fda dfdsa fdsaf sad fsadfa', '4');

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('1', 'Cliente Teste', '', '(31) 99534-8118', 'cliente1@hotmail.com', 'Rua de Teste', '500', 'Bairro Teste', 'Cidade Teste', 'MG', '30512-660', 'F�sica', '2025-02-04', '2001-03-05', '7', '60', '1', '', '$2y$10$xVkotyYt1.JImScaZEOTW.gIFIZ5BgXviMhv09ePfB.yaKfLeGYWO', 'Sim', '', 'sem-foto.jpg', '1.png');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('2', 'Cliente emp 2', '', '(31) 99534-8118', 'cliente1@hotmail.com', '', '', '', '', '', '', 'F�sica', '2025-02-04', '', '18', '', '2', '', '$2y$10$xVkotyYt1.JImScaZEOTW.gIFIZ5BgXviMhv09ePfB.yaKfLeGYWO', '', '', 'sem-foto.jpg', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('10', 'Cliente 2 emp 1', '', '(00) 0000-0010', 'cliente2@hotmail.com', '', '', '', '', '', '', 'F�sica', '2025-03-04', '2000-03-04', '1', '', '1', '', '$2y$10$xVkotyYt1.JImScaZEOTW.gIFIZ5BgXviMhv09ePfB.yaKfLeGYWO', 'Sim', '', 'sem-foto.jpg', '10.png');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('11', 'Cliente 3 emp 1', '', '(00) 00000-0000', 'cliente3@hotmail.com', '', '', '', '', '', '', 'F�sica', '2025-03-04', '2000-01-01', '1', '', '1', '', '$2y$10$xVkotyYt1.JImScaZEOTW.gIFIZ5BgXviMhv09ePfB.yaKfLeGYWO', 'Sim', '', 'sem-foto.jpg', '11.png');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('12', 'teste', '', '(22) 0000-0000', 'cliente1sss@hotmail.com', '', '', '', '', '', '', 'F�sica', '2025-03-17', '1969-12-31', '1', '', '1', '', '$2y$10$xVkotyYt1.JImScaZEOTW.gIFIZ5BgXviMhv09ePfB.yaKfLeGYWO', 'Sim', '', 'sem-foto.jpg', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('13', 'aaaaaaa', '', '(00) 0000-0000', 'aaassssaaa@hotmail.com', '', '', '', '', '', '', 'F�sica', '2025-03-18', '1111-11-11', '1', '', '1', '', '$2y$10$xVkotyYt1.JImScaZEOTW.gIFIZ5BgXviMhv09ePfB.yaKfLeGYWO', 'Sim', '', 'sem-foto.jpg', '13.png');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('14', 'Hugo Cliente', '', '(31) 97527-5084', 'hugocliente@hotmail.com', '', '', '', '', '', '', 'F�sica', '2025-03-18', '1111-11-11', '1', '', '1', '', '$2y$10$jVL22Rqopg2YfzIzKF8UD.TB0Z1aY5U6FQKwojcmmlPftUo3suhPS', 'Sim', '', 'sem-foto.jpg', '14.png');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('15', 'teste', '', '(02) 0000-0000', '', '', '', '', '', '', '', 'F�sica', '2025-03-31', '1111-11-11', '1', '', '1', '', '$2y$10$AeKw7w3kbKRVG9uRyYge4uKoDnzK0ZE23w0vkegV3O7WknIaDboWq', 'Sim', '', 'sem-foto.jpg', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('16', 'dfaa', '', '(20) 0000-0000', '', '', '', '', '', '', '', 'F�sica', '2025-04-04', '1969-12-31', '1', '', '1', '', '$2y$10$yP6huOkTOtWBl7ANpZFkbedoP67V53s01s2Ae3aq8QBg4Id7lqEKe', 'Sim', '', 'sem-foto.jpg', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('17', 'Cliente teste', '', '(00) 0020-0000', '', '', '', '', '', '', '', 'F�sica', '2025-04-21', '2025-04-21', '1', '', '1', '', '$2y$10$LdzvLmdSquXDFMAHPL4rnOamr.9C8w548JDlNoqzEMFbca/89zhSa', 'Sim', '', 'sem-foto.jpg', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('31', 'Jo�o da Silva', '123.456.789-00', '(11) 99999-9999', 'joao@email.com', 'Rua A', '100', 'Centro', 'S�o Paulo', 'SP', '01000-000', 'F�sica', '2024-01-10', '1990-05-01', '0', 'Apto 101', '1', '', '$2y$10$o9vvTpSPQI1oWFOJqgn8gO3W3LlHC5spNvsPdQJS20qYwOjhcseOK', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('32', 'Maria Oliveira', '987.654.321-00', '(21) 98888-8888', 'maria@email.com', 'Av. B', '200', 'Jardins', 'Rio de Janeiro', 'RJ', '20000-000', 'F�sica', '2024-01-11', '1985-08-15', '0', 'Casa', '1', '', '$2y$10$o9vvTpSPQI1oWFOJqgn8gO3W3LlHC5spNvsPdQJS20qYwOjhcseOK', 'Sim', '', '', '');
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `empresa`, `marketing`, `senha_crip`, `ativo`, `token`, `foto`, `assinatura`) VALUES ('33', 'Carlos Souza', '456.123.789-00', '(31) 97777-7777', 'carlos@email.com', 'Travessa C', '300', 'Bela Vista', 'Belo Horizonte', 'MG', '30000-000', 'F�sica', '2024-01-12', '1978-03-20', '0', 'Bloco B', '1', '', '$2y$10$o9vvTpSPQI1oWFOJqgn8gO3W3LlHC5spNvsPdQJS20qYwOjhcseOK', 'Sim', '', '', '');

-- TABLE: clientes_recursos
CREATE TABLE `clientes_recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) DEFAULT NULL,
  `recurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('95', '35', '1');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('96', '35', '5');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('97', '35', '4');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('98', '35', '3');
INSERT INTO `clientes_recursos` (`id`, `empresa`, `recurso`) VALUES ('99', '35', '6');

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
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`) VALUES ('10', '1', '970.00', '0.00', '0.00', '2025-03-05', '1', '', '2025-03-05', 'Mensal', '970.00', 'Alugu�l', '1', '1');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`) VALUES ('11', '1', '680.00', '0.00', '0.00', '2025-03-05', '1', '', '2025-03-05', 'Mensal', '680.00', 'Alugu�l', '1', '1');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`) VALUES ('12', '14', '200.00', '0.00', '0.00', '2025-04-21', '1', '', '2025-04-21', 'Mensal', '200.00', 'Teste', '1', '1');
INSERT INTO `cobrancas` (`id`, `cliente`, `valor`, `juros`, `multa`, `data`, `usuario`, `obs`, `data_venc`, `frequencia`, `valor_parcela`, `descricao`, `parcelas`, `empresa`) VALUES ('13', '14', '140.00', '0.00', '0.00', '2025-04-21', '1', '', '2025-04-21', 'Di�ria', '140.00', 'Teste cob', '1', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`) VALUES ('ALZA OS', 'contato@alzaos.com.br', '(94) 99665-5467', '', 'https://instagram.com/ale._mrqs', 'logo.png', 'icone.png', 'logo.jpg', '1', 'Sim', '10.00', '10.00', 'Sim', 'N�o', 'N�o', '', 'Sim', 'Sim', 'Sim', 'menuia', '196a4130-ec39-4ec7-a9d8-588d74ae7ab6', 'a06QVZeHQJyeyup4tzhZv70x8MMRTcco2Il4AvFo23cjqGUHGc', 'Sim', '', 'Sim', 'APP_USR-5991156942033444-052418-32b83d93d140a53762ff7d314fcd35ad-1718060789', 'APP_USR-db89c4ec-9d7c-4c0b-bff4-96bad359354e', '', '', '0', 'Sim', '24-05-2025-17-58-48-circulo-azul-abstrato-na-tecnologia-de-fundo-preto_1142-12714.png', '', 'Mercado Pago', '', '', '', 'Sim', '', '', 'Site', '', '');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`) VALUES ('WG CONGELADOS', 'contato@gostinhodeminaslz.com.br', '(98) 8185-0435', 'Rua Vinte e Quatro,8', '', '24-05-2025-17-09-08-logo.png', '24-05-2025-17-09-08icone-logo.png', '24-05-2025-17-10-13rel-logo.jpg', '33', 'Sim', '0.00', '0.00', 'Sim', 'N�o', 'N�o', '', 'Sim', 'Sim', 'Sim', 'N�o', 'appkey_68324990c1f3f0.70775492', 'a06QVZeHQJyeyup4tzhZv70x8MMRTcco2Il4AvFo23cjqGUHGc', 'N�o', '', 'Sim', '', '', '24-05-2025-17-09-08painel-logo.png', '', '35', '', '', 'S�o Lu�s', 'Mercado Pago', '', '0', 'Sim', '', 'Sim', 'Sim', '', 'gostinhodeminas', '1');
INSERT INTO `config` (`nome`, `email`, `telefone`, `endereco`, `instagram`, `logo`, `icone`, `logo_rel`, `id`, `ativo`, `multa_atraso`, `juros_atraso`, `marca_dagua`, `assinatura_recibo`, `impressao_automatica`, `cnpj`, `entrar_automatico`, `mostrar_preloader`, `ocultar_mobile`, `api_whatsapp`, `token_whatsapp`, `instancia_whatsapp`, `alterar_acessos`, `dados_pagamento`, `abertura_caixa`, `access_token`, `public_key`, `logo_painel`, `imagem_assinatura`, `empresa`, `limitar_recursos`, `fundo_login`, `cidade_sistema`, `api_pagamento`, `chave_api_asaas`, `dias_comissao`, `assinatura_cliente`, `alterar_api_whatsapp`, `cobrar_automaticamente`, `cobrar_duas_vezes`, `pagina_entrada`, `url_site`, `dispositivos`) VALUES ('', '', '', '', '', 'sem-foto.png', 'sem-foto.png', 'sem-foto.png', '35', 'Sim', '0.00', '0.00', 'Sim', 'N�o', 'N�o', '', '', '', '', 'Sim', '', '', 'N�o', '', 'Sim', '', '', 'sem-foto.png', '', '36', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- TABLE: contratos
CREATE TABLE `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `mostrar_modelos` varchar(5) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('3', 'Procura��o', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURA��O</u></font></span></strong></p><div><font size=\"2\"><strong>{{TEXTO DADOS}}</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Ju�zo, inst�ncia ouTribunal, conferindo-lhes poderes gerais da cl�usula ?ad judicia? e aindapoderes especiais para propor a��es de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta � acusa��o, fazer arrazoados, requererjustifica��es, interpela��es e/ou notifica��es c�veis e criminais, oferecerrepresenta��o criminal, produzir provas, acompanhar dilig�ncias, fazer acordosou compromissos, receber e dar quita��o, requerer e levantar alvar�s judiciais,indicar bens � penhora, requerer compensa��o tribut�ria, nos limites previstosna legisla��o brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justi�a, tudo omais que se fizer necess�rio para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">{{LOCAL}}, {{DATA}}.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\">{{ASSINATURA}}</div><div align=\"center\"><font size=\"2\">_________________________________________<br>{{NOME}}</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '', '1');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('9', 'Modelo de Teste', '<div align=\"center\"><b><font size=\"4\">T�tulo do Contrato</font></b></div><div><br></div><div>texto do contrato<b> {{TEXTO DADOS}}</b></div>', '', '1');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('12', 'fdafsdaf', 'fdafdsafa', '', '0');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('16', 'Contrato emp 2', 'df fasd fdafaf <br>', '', '2');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('17', 'PRESTA��O DE SERVI�OS', '<h3 data-start=\"299\" data-end=\"336\" align=\"center\"><b><h3 data-start=\"299\" data-end=\"336\"><font size=\"4\"><u>CONTRATO DE PRESTA��O DE SERVI�OS</u></font></h3></b></h3><p data-start=\"338\" data-end=\"386\">Pelo presente instrumento particular, as partes:</p><p data-start=\"388\" data-end=\"502\"><strong data-start=\"388\" data-end=\"404\">CONTRATANTE:</strong><br data-start=\"404\" data-end=\"407\">Nome: <b>{{NOME EMPRESA}}</b><br data-start=\"434\" data-end=\"437\">CNPJ: <b>{{CNPJ EMPRESA}}</b><br data-start=\"468\" data-end=\"471\">Endere�o: <b>{{ENDERECO EMPRESA}}</b></p><p data-start=\"504\" data-end=\"616\"><strong data-start=\"504\" data-end=\"519\">CONTRATADA:</strong><br data-start=\"519\" data-end=\"522\"><b>{{TEXTO DADOS}}</b></p><p data-start=\"504\" data-end=\"616\">T�m entre si, justas e contratadas, as cl�usulas e condi��es a seguir dispostas:</p><h3 data-start=\"705\" data-end=\"729\"><font size=\"3\">CL�USULA 1� ? OBJETO</font></h3><p data-start=\"731\" data-end=\"959\">O presente contrato tem como objeto a presta��o dos seguintes servi�os:<br data-start=\"802\" data-end=\"805\"><strong data-start=\"805\" data-end=\"959\">[Descrever detalhadamente os servi�os que ser�o prestados, ex.: \"Aulas presenciais de ingl�s para n�vel b�sico, com carga hor�ria total de 40 horas.\"]</strong></p><h3 data-start=\"966\" data-end=\"1008\"><font size=\"3\">CL�USULA 2� ? OBRIGA��ES DA CONTRATADA</font></h3><p data-start=\"1010\" data-end=\"1232\">A CONTRATADA se obriga a:<br data-start=\"1035\" data-end=\"1038\">a) Prestar os servi�os descritos na Cl�usula 1� com zelo, dilig�ncia e qualidade;<br data-start=\"1119\" data-end=\"1122\">b) Cumprir o cronograma e prazos acordados;<br data-start=\"1165\" data-end=\"1168\">c) Manter sigilo sobre informa��es confidenciais da CONTRATANTE.</p><h3 data-start=\"1239\" data-end=\"1282\"><font size=\"3\">CL�USULA 3� ? OBRIGA��ES DA CONTRATANTE</font></h3><p data-start=\"1284\" data-end=\"1547\">A CONTRATANTE se compromete a:<br data-start=\"1314\" data-end=\"1317\">a) Fornecer todas as informa��es necess�rias � execu��o dos servi�os;<br data-start=\"1386\" data-end=\"1389\">b) Efetuar o pagamento na forma e prazos estipulados neste contrato;<br data-start=\"1457\" data-end=\"1460\">c) Cooperar com a CONTRATADA, sempre que necess�rio, para o bom andamento dos servi�os.</p><p data-start=\"504\" data-end=\"616\"><br></p><p data-start=\"504\" data-end=\"616\"><br></p>', '', '1');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('18', 'Contrato de Vendas', '<div><b><font size=\"5\">fdafdsaf dfdsf a f</font></b></div><div><br></div><div><b><b>{{TEXTO DADOS}}</b></b></div><div><b><b><br></b></b></div><div><b><b>{{NOME}} <br></b></b></div><div><br></div><div><b>{{LOCAL}}</b></div><div><b><b><br></b></b></div>', '', '1');
INSERT INTO `contratos` (`id`, `modelo`, `texto`, `mostrar_modelos`, `empresa`) VALUES ('19', 'tesstee', '<p>fdfa fdf asfdsf fsadfda fa� <strong>{{TEXTO DADOS}}</strong> {{EMAIL}} fadfadfa fd afaf f {{ENDERECO_COMPLETO}} {{CEP}} {{LOCAL}} fdfaf ads {{DATA}}� fadfsad f {{NOME EMPRESA}} dfafa a <strong>{{PROFISSIONAL}} <br></strong></p><p><strong><br></strong></p><p> {{DEMAIS CONTRATANTES}} <br></p><p><br></p><p> {{DEMAIS CONTRATADOS}} <br></p>', '', '1');

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
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('1', '13', '0', 'Ana Silva', '11999990001', '22:49:00', '1', '2025-05-16');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('2', '13', '0', 'Ana Silva', '11999990001', '22:49:00', '1', '2025-05-17');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('3', '13', '0', 'Ana Silva', '11999990001', '22:49:00', '1', '2025-05-18');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('4', '13', '0', 'Ana Silva', '11999990001', '22:49:00', '1', '2025-05-19');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('5', '13', '0', 'Ana Silva', '11999990001', '22:49:00', '1', '2025-05-20');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('6', '13', '0', 'Bruno Costa', '21988887772', '22:51:00', '1', '2025-05-16');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('7', '13', '0', 'Bruno Costa', '21988887772', '22:51:00', '1', '2025-05-17');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('8', '13', '0', 'Bruno Costa', '21988887772', '22:51:00', '1', '2025-05-18');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('9', '13', '0', 'Bruno Costa', '21988887772', '22:51:00', '1', '2025-05-19');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('10', '13', '0', 'Bruno Costa', '21988887772', '22:51:00', '1', '2025-05-20');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('11', '13', '0', 'Carlos Lima', '31977776663', '22:14:00', '1', '2025-05-16');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('12', '13', '0', 'Carlos Lima', '31977776663', '22:14:00', '1', '2025-05-17');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('13', '13', '0', 'Carlos Lima', '31977776663', '22:14:00', '1', '2025-05-18');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('14', '13', '0', 'Carlos Lima', '31977776663', '22:14:00', '1', '2025-05-19');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('15', '13', '0', 'Carlos Lima', '31977776663', '22:14:00', '1', '2025-05-20');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('16', '13', '0', 'Daniela Souza', '41966665554', '22:39:00', '1', '2025-05-16');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('17', '13', '0', 'Daniela Souza', '41966665554', '22:39:00', '1', '2025-05-17');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('18', '13', '0', 'Daniela Souza', '41966665554', '22:39:00', '1', '2025-05-18');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('19', '13', '0', 'Daniela Souza', '41966665554', '22:39:00', '1', '2025-05-19');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('20', '13', '0', 'Daniela Souza', '41966665554', '22:39:00', '1', '2025-05-20');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('21', '13', '0', 'Eduardo Melo', '51955554443', '22:17:00', '1', '2025-05-16');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('22', '13', '0', 'Eduardo Melo', '51955554443', '22:17:00', '1', '2025-05-17');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('23', '13', '0', 'Eduardo Melo', '51955554443', '22:17:00', '1', '2025-05-18');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('24', '13', '0', 'Eduardo Melo', '51955554443', '22:17:00', '1', '2025-05-19');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('25', '13', '0', 'Eduardo Melo', '51955554443', '22:17:00', '1', '2025-05-20');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('26', '13', '0', 'hugo', '31975275084', '22:49:00', '1', '2025-05-16');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('27', '13', '0', 'hugo', '31975275084', '22:49:00', '1', '2025-05-17');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('28', '13', '0', 'hugo', '31975275084', '22:49:00', '1', '2025-05-18');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('29', '13', '0', 'hugo', '31975275084', '22:49:00', '1', '2025-05-19');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('30', '13', '0', 'hugo', '31975275084', '22:49:00', '1', '2025-05-20');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('31', '13', '0', 'hugo2', '31995348118', '22:24:00', '1', '2025-05-16');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('32', '13', '0', 'hugo2', '31995348118', '22:24:00', '1', '2025-05-17');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('33', '13', '0', 'hugo2', '31995348118', '22:24:00', '1', '2025-05-18');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('34', '13', '0', 'hugo2', '31995348118', '22:24:00', '1', '2025-05-19');
INSERT INTO `disparos` (`id`, `campanha`, `cliente`, `nome`, `telefone`, `hora`, `empresa`, `data_disparo`) VALUES ('35', '13', '0', 'hugo2', '31995348118', '22:24:00', '1', '2025-05-20');

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
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('15', '553189241964', 'appkey_68067cb0054403.77640072', 'Ativo', 'conectado', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('18', '553195348118', 'appkey_68067daaa85e70.17360722', 'Ativo', 'conectado', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('19', '', 'appkey_68067dae57fb42.08854095', '', '', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('20', '', 'appkey_68067db87d1e12.87840875', '', '', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('21', '', 'appkey_68067dc2ab8c64.43563929', '', '', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('22', '', 'appkey_68067dcd28bc83.25454867', '', '', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('23', '', 'appkey_68067dd7508366.17966043', '', '', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('24', '', 'appkey_68067de26bacd1.66258444', '', '', '', '1');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('26', '', 'appkey_68324978c49a99.81628085', '', '', '', '37');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('27', '', 'appkey_68324990c1f3f0.70775492', '', '', '', '35');
INSERT INTO `dispositivos` (`id`, `telefone`, `appkey`, `status`, `status_api`, `horario`, `empresa`) VALUES ('28', '', 'appkey_68325969418420.19261686', '', '', '', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `empresas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `tipo_pessoa`, `data_cad`, `data_nasc`, `usuario`, `complemento`, `dias_teste`, `mensalidade`, `data_teste`, `ativo`, `plano`, `url_site`, `frequencia`, `dispositivos`) VALUES ('35', 'WG CONGELADOS', '43.691.539/0001-47', '(98) 8185-0435', 'contato@gostinhodeminaslz.com.br', 'RUA BOM JESUS', '15', 'JARDIM SAO CRISTOVAO', 'SAO LUIS', 'MA', '65.055-050', 'Jur�dica', '2025-05-24', '2025-05-24', '1', 'QUADRA 136 A;LOTE 03', '365', '180.00', '2026-05-24', 'Sim', '4', 'gostinhodeminas', '365', '1');

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
INSERT INTO `entradas` (`id`, `produto`, `quantidade`, `motivo`, `usuario`, `data`, `empresa`) VALUES ('2', '228', '3', 'teste', '1', '2025-03-17', '1');

-- TABLE: equipamentos
CREATE TABLE `equipamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('9', 'Notebook', 'Sim', '1');
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('12', 'Celular', 'Sim', '1');
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('16', 'Tablet ', 'Sim', '1');
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('17', 'PC', 'Sim', '1');
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('19', 'Ciaxa de Som', 'Sim', '1');
INSERT INTO `equipamentos` (`id`, `nome`, `ativo`, `empresa`) VALUES ('26', 'Equipemento 1', 'Sim', '2');

-- TABLE: formas_pgto
CREATE TABLE `formas_pgto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `taxa` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('2', 'Pix', '0', '');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('34', 'Cart�o', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('35', 'Boleto', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('36', 'Pix', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('37', 'Dinheiro', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('38', 'Dinheiro', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('39', 'Cart�o', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('40', 'Pix', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('41', 'Boleto', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('43', 'Cart�o de D�bito', '0', '0');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('44', 'Cart�o de Cr�dito', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('45', 'Cart�o de D�bito', '0', '1');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('46', 'Cart�o de Cr�dito', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('47', 'Cart�o de D�bito', '0', '2');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('48', 'Pix', '0', '5');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('49', 'Boleto', '0', '5');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('50', 'Cart�o de Cr�dito', '0', '5');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('51', 'Cart�o de D�bito', '0', '5');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('52', 'Pix', '0', '7');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('53', 'Boleto', '0', '7');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('54', 'Cart�o de Cr�dito', '0', '7');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('55', 'Cart�o de D�bito', '0', '7');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('56', 'Pix', '0', '4');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('57', 'Boleto', '0', '4');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('58', 'Cart�o de Cr�dito', '0', '4');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('59', 'Cart�o de D�bito', '0', '4');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('60', 'Pix', '0', '8');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('61', 'Boleto', '0', '8');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('62', 'Cart�o de Cr�dito', '0', '8');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('63', 'Cart�o de D�bito', '0', '8');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('65', 'Boleto', '0', '0');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('66', 'Cart�o de Cr�dito', '0', '0');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('67', 'Pix', '0', '12');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('68', 'Boleto', '0', '12');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('69', 'Cart�o de Cr�dito', '0', '12');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('70', 'Cart�o de D�bito', '0', '12');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('71', 'Pix', '0', '17');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('72', 'Boleto', '0', '17');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('73', 'Cart�o de Cr�dito', '0', '17');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('74', 'Cart�o de D�bito', '0', '17');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('75', 'Pix', '0', '34');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('76', 'Boleto', '0', '34');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('77', 'Cart�o de Cr�dito', '0', '34');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('78', 'Cart�o de D�bito', '0', '34');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('79', 'Pix', '0', '35');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('80', 'Boleto', '0', '35');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('83', 'Dinheiro', '2', '35');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('84', 'Cart�o de Cr�dito', '0', '35');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('85', 'Cart�o de D�bito', '0', '35');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('86', 'Pix', '0', '36');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('87', 'Boleto', '0', '36');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('88', 'Cart�o de Cr�dito', '0', '36');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('89', 'Cart�o de D�bito', '0', '36');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('90', 'Pix', '0', '37');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('91', 'Boleto', '0', '37');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('92', 'Cart�o de Cr�dito', '0', '37');
INSERT INTO `formas_pgto` (`id`, `nome`, `taxa`, `empresa`) VALUES ('93', 'Cart�o de D�bito', '0', '37');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `fornecedores` (`id`, `nome`, `telefone`, `email`, `endereco`, `pix`, `data`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `cnpj`, `complemento`, `tipo_chave`, `usuario`, `empresa`) VALUES ('2', 'Fornecedor SAAS', '(20) 0200-0000', 'fornecedorsas@hotmail.com', '', '', '2025-02-03', '', '', '', '', '', '', '', '', '', '0');
INSERT INTO `fornecedores` (`id`, `nome`, `telefone`, `email`, `endereco`, `pix`, `data`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `cnpj`, `complemento`, `tipo_chave`, `usuario`, `empresa`) VALUES ('3', 'Fornecedor emp 1', '(25) 0555-5502', 'fornecedor1@hotmail.com', '', '', '2025-02-04', '', '', '', '', '', '', '', '', '', '1');
INSERT INTO `fornecedores` (`id`, `nome`, `telefone`, `email`, `endereco`, `pix`, `data`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `cnpj`, `complemento`, `tipo_chave`, `usuario`, `empresa`) VALUES ('4', 'Fornecedor emp 2', '(61) 00000-0000', 'fornecedor2@hotmail.com', '', '', '2025-02-04', '', '', '', '', '', '', '', '', '', '2');

-- TABLE: frequencias
CREATE TABLE `frequencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frequencia` varchar(25) NOT NULL,
  `dias` int(11) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('2', 'Di�ria', '1', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('3', 'Semanal', '7', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('4', 'Mensal', '30', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('5', 'Trimestral', '90', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('6', 'Semestral', '180', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('7', 'Anual', '365', '');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('23', 'Di�ria', '1', '0');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('24', 'Di�ria', '1', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('25', 'Semanal', '7', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('26', 'Mensal', '30', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('27', 'Semestral', '180', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('28', 'Anual', '365', '1');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('29', 'Anual', '365', '2');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('30', 'Semestral', '180', '2');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('31', 'Mensal', '30', '2');
INSERT INTO `frequencias` (`id`, `frequencia`, `dias`, `empresa`) VALUES ('32', 'Di�ria', '1', '2');

-- TABLE: grupo_acessos
CREATE TABLE `grupo_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('1', 'Pessoas');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('2', 'Cadastros');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('4', 'Financeiro');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('7', 'Caixas');
INSERT INTO `grupo_acessos` (`id`, `nome`) VALUES ('28', 'Produtos');

-- TABLE: grupo_acessos_sas
CREATE TABLE `grupo_acessos_sas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('1', 'Pessoas');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('2', 'Cadastros');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('4', 'Financeiro');
INSERT INTO `grupo_acessos_sas` (`id`, `nome`) VALUES ('7', 'Caixas');

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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('1', '155', '18.00', '1', '18.00', '1', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('2', '157', '25.00', '1', '25.00', '2', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('3', '43', '30.00', '1', '30.00', '3', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('4', '45', '20.00', '1', '20.00', '3', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('5', '155', '18.00', '1', '18.00', '11', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('6', '230', '5000.00', '1', '5000.00', '18', '1', '', '2');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('7', '53', '30.00', '1', '30.00', '22', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('8', '92', '50.00', '3', '150.00', '22', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('9', '155', '18.00', '1', '18.00', '24', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('10', '47', '10.00', '3', '30.00', '25', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('11', '155', '18.00', '1', '18.00', '26', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('12', '157', '25.00', '1', '25.00', '27', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('13', '94', '50.00', '1', '50.00', '30', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('14', '47', '10.00', '1', '10.00', '31', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('15', '94', '50.00', '1', '50.00', '32', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('16', '46', '10.00', '1', '10.00', '3', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('17', '157', '25.00', '1', '25.00', '3', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('18', '165', '10.00', '1', '10.00', '3', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('19', '164', '5.00', '1', '5.00', '3', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('20', '47', '10.00', '1', '10.00', '3', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('21', '47', '10.00', '1', '10.00', '3', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('22', '47', '10.00', '1', '10.00', '3', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('23', '157', '25.00', '1', '25.00', '3', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('24', '157', '25.00', '1', '25.00', '3', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('25', '64', '12.00', '1', '12.00', '4', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('26', '65', '15.00', '1', '15.00', '4', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('27', '158', '25.00', '1', '25.00', '5', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('28', '157', '25.00', '1', '25.00', '6', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('29', '155', '18.00', '1', '18.00', '6', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('30', '47', '10.00', '1', '10.00', '6', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('31', '155', '18.00', '1', '18.00', '8', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('32', '155', '18.00', '1', '18.00', '9', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('33', '155', '18.00', '1', '18.00', '10', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('41', '47', '10.00', '2', '20.00', '17', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('42', '155', '18.00', '2', '36.00', '17', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('50', '158', '25.00', '1', '25.00', '18', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('51', '47', '10.00', '1', '10.00', '18', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('52', '164', '5.00', '3', '15.00', '18', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('53', '231', '3125.00', '1', '3125.00', '19', '1', '', '2');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('54', '230', '5000.00', '1', '5000.00', '20', '1', '', '2');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('61', '158', '25.00', '1', '25.00', '20', '1', '', '1');
INSERT INTO `itens_venda` (`id`, `produto`, `valor`, `quantidade`, `total`, `id_venda`, `funcionario`, `codigo`, `empresa`) VALUES ('62', '233', '14.70', '1', '14.70', '20', '1', '', '35');

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
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('1', '31', '2025-03-18', '08:00:00', '12:00:00', '14:00:00', '18:00:00', '08:00:00', '02:00:00', '00:00:00', '', '', '', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('2', '31', '2025-03-17', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Sim', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('3', '31', '2025-03-15', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Sim', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('4', '31', '2025-03-16', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', 'Sim', '', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('5', '31', '2025-03-14', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'Sim', '', '', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('6', '31', '2025-03-13', '08:00:00', '12:00:00', '13:00:00', '18:00:00', '09:00:00', '01:00:00', '01:00:00', '', '', '', '2025-03-18', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('10', '29', '2025-03-19', '09:00:00', '10:00:00', '12:00:00', '19:00:00', '08:00:00', '02:00:00', '00:00:00', '', '', '', '2025-03-19', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('11', '29', '2025-03-18', '09:00:00', '10:00:00', '11:00:00', '19:00:00', '09:00:00', '01:00:00', '01:00:00', '', '', '', '2025-03-19', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('12', '29', '2025-03-17', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'Sim', '', '', '2025-03-19', '0', '1');
INSERT INTO `jornada` (`id`, `funcionario`, `data`, `entrada`, `entrada_almoco`, `saida_almoco`, `saida`, `total_horas`, `intervalo`, `hora_extra`, `folga`, `feriado`, `falta`, `data_lanc`, `usuario_lanc`, `empresa`) VALUES ('13', '29', '2025-03-16', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', '', 'Sim', '2025-03-19', '0', '1');

-- TABLE: marcas
CREATE TABLE `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('11', 'Samsung', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('12', 'LG', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('13', 'Apple', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('14', 'Xiaomi', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('16', 'Motorola', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('19', 'Lenovo', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('20', 'CCE', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('23', 'Acer', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('24', 'Outras', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('29', 'DELL', 'Sim', '1');
INSERT INTO `marcas` (`id`, `nome`, `ativo`, `empresa`) VALUES ('31', 'Marca 1', 'Sim', '2');

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
INSERT INTO `marketing` (`id`, `data`, `data_envio`, `envios`, `titulo`, `mensagem2`, `mensagem`, `arquivo`, `audio`, `forma_envio`, `documento`, `ultimo_registro`, `empresa`, `dispositivo`) VALUES ('6', '2025-04-04', '', '', '?? PROMO��O EXCLUSIVA ??', '?? *PROMO��O EXCLUSIVA 2*??\r\n\r\n? Mais de 10.000 canais (incluindo esportes, filmes e s�ries)\r\n? Canais em HD, Full HD e 4K\r\n? Acesso a conte�dos exclusivos\r\n? Funciona em Smart TV, TV Box, Celular, PC e Tablet\r\n? Suporte r�pido e garantia de estabilidade\r\n\r\n? *OFERTA ESPECIAL: * Assinando agora, voc� mant�m o pre�o atual e ainda ganha dias extras gr�tis!\r\n\r\n? *TESTE GR�TIS DISPON�VEL!* Quer testar antes de assinar? Chame no WhatsApp e pe�a seu teste gr�tis!\r\n\r\n?? Me chama no WhatsApp agora mesmo e garanta o seu\r\n\r\n\r\n? _Vagas limitadas! Aproveite antes que acabe!_', '?? *PROMO��O EXCLUSIVA ? IPTV ILIMITADO!*??\r\n\r\n? Mais de 10.000 canais (incluindo esportes, filmes e s�ries)\r\n? Canais em HD, Full HD e 4K\r\n? Acesso a conte�dos exclusivos\r\n? Funciona em Smart TV, TV Box, Celular, PC e Tablet\r\n? Suporte r�pido e garantia de estabilidade\r\n\r\n? *OFERTA ESPECIAL: * Assinando agora, voc� mant�m o pre�o atual e ainda ganha dias extras gr�tis!\r\n\r\n? *TESTE GR�TIS DISPON�VEL!* Quer testar antes de assinar? Chame no WhatsApp e pe�a seu teste gr�tis!\r\n\r\n?? Me chama no WhatsApp agora mesmo e garanta o seu\r\n\r\n\r\n? _Vagas limitadas! Aproveite antes que acabe!_', '21-04-2025-11-36-31-04-03-2025-12-29-00-eupng.png', '21-04-2025-11-36-31-04-03-2025-12-29-00-13-07-2023-18-52-36-WhatsApp-Ptt-2023-07-13-at-18.34.03.ogg', '', '21-04-2025-11-36-31-04-03-2025-12-29-14-rel_teste_pdf.pdf', '', '1', '');
INSERT INTO `marketing` (`id`, `data`, `data_envio`, `envios`, `titulo`, `mensagem2`, `mensagem`, `arquivo`, `audio`, `forma_envio`, `documento`, `ultimo_registro`, `empresa`, `dispositivo`) VALUES ('13', '2025-04-04', '', '', '? INDIQUE E GANHE! ?', 'Ol� {cliente} Curtiu nosso IPTV? Ent�o compartilha com os amigos e ainda ganhe um m�s gr�tis! ??\r\n\r\n? *A cada pessoa que voc� indicar e assinar*, voc� *ganha +1 m�s gr�tis* no seu plano!\r\n\r\nSem limite de indica��es! Quanto mais gente indicar, mais tempo voc� assiste de gra�a! ??\r\n\r\n? Canais ao vivo\r\n? Filmes, s�ries, lan�amentos\r\n? Esportes, lutas, desenhos e muito mais\r\n? Qualidade HD/Full HD\r\n? Suporte r�pido\r\n\r\n? S� falar com a gente e passar os dados do indicado!', 'Ol� {cliente} Curtiu nosso IPTV? Ent�o compartilha com os amigos e ainda ganhe um m�s gr�tis! ??\r\n\r\n? *A cada pessoa que voc� indicar e assinar*, voc� *ganha +1 m�s gr�tis* no seu plano!\r\n\r\nSem limite de indica��es! Quanto mais gente indicar, mais tempo voc� assiste de gra�a! ??\r\n\r\n? Canais ao vivo\r\n? Filmes, s�ries, lan�amentos\r\n? Esportes, lutas, desenhos e muito mais\r\n? Qualidade HD/Full HD\r\n? Suporte r�pido\r\n\r\n? S� falar com a gente e passar os dados do indicado!', '21-04-2025-11-36-21-GESTAO_IMP_4.jpg', '21-04-2025-11-36-21-04-03-2025-12-29-00-13-07-2023-18-52-36-WhatsApp-Ptt-2023-07-13-at-18.34.03.ogg', '', '21-04-2025-11-36-21-04-03-2025-12-29-14-rel_teste_pdf.pdf', '', '1', '');
INSERT INTO `marketing` (`id`, `data`, `data_envio`, `envios`, `titulo`, `mensagem2`, `mensagem`, `arquivo`, `audio`, `forma_envio`, `documento`, `ultimo_registro`, `empresa`, `dispositivo`) VALUES ('16', '2025-04-07', '', '', 'Teste Campanha Promo��o s', 'f*fda f*a*d fas_df afdafd*__sfdfs_f dfafadsfsdaf fasa????????', 'f*fda f*a*d fas_df afdafd*__sfdfs_f dfafadsfsdaf fasa????????', 'sem-foto.png', '21-04-2025-11-36-52-04-03-2025-12-29-00-13-07-2023-18-52-36-WhatsApp-Ptt-2023-07-13-at-18.34.03.ogg', '', '21-04-2025-11-36-52-04-03-2025-12-29-14-rel_teste_pdf.pdf', '', '1', '');
INSERT INTO `marketing` (`id`, `data`, `data_envio`, `envios`, `titulo`, `mensagem2`, `mensagem`, `arquivo`, `audio`, `forma_envio`, `documento`, `ultimo_registro`, `empresa`, `dispositivo`) VALUES ('17', '2025-04-21', '', '', 'fdafadsfdas ', 'fdafasdfdsa fasd fdsafasd fas?fads??a?', 'fdafasdfdsa fasd fdsafasd fas?fads??a?', 'sem-foto.png', '', '', 'sem-foto.png', '', '2', '');
INSERT INTO `marketing` (`id`, `data`, `data_envio`, `envios`, `titulo`, `mensagem2`, `mensagem`, `arquivo`, `audio`, `forma_envio`, `documento`, `ultimo_registro`, `empresa`, `dispositivo`) VALUES ('18', '2025-05-24', '', '', 'teste', 'testetetetetetetete', 'testetetetetetetete', 'sem-foto.png', '', '', 'sem-foto.png', '', '37', '');

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
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('26', 'E6S', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('36', 'G530 Gran Prime Duos', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('75', 'A01 - A015', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('76', 'A01 CORE - A013  ', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('81', 'A02 - A022', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('118', 'A71 - A715', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('119', 'A72 4G 5G A725 A726', 'Sim', '11', '12', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('291', 'Ideapad - 320', 'Sim', '19', '9', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('301', 'Gp350M', 'Sim', '24', '19', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('302', 'E50PT', 'Sim', '23', '9', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('303', 'a55', 'Sim', 'Acer', 'Celular', '1');
INSERT INTO `modelos` (`id`, `nome`, `ativo`, `marca`, `equipamento`, `empresa`) VALUES ('307', 'Modelo 1', 'Sim', '31', '26', '2');

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
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('1', '13', '2025-03-18', '2025-03-18', '5', '285.00', '5', '%', '330.75', '', 'Aprovado', '100.00', '185.00', '1', '10.00', 'Celular', 'Acer', '303', 'csdaf sadfa fsafdsafdsa fa f', 'fdasfa fdsf asfafds fas', '', '', '', '50.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('2', '1', '2025-03-18', '2025-03-18', '5', '50.00', '0', '%', '50.00', '', 'Aprovado', '50.00', '0.00', '1', '0.00', '', '', '', '', '', '', '', '', '0.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('4', '1', '2025-03-18', '2025-03-18', '4', '160.00', '0', '%', '160.00', '', 'Pendente', '30.00', '130.00', '1', '0.00', '', '', '', '', '', '', '', '', '0.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('5', '2', '2025-03-18', '2025-03-18', '3', '5200.00', '0', '%', '5200.00', '', 'Aprovado', '5000.00', '200.00', '1', '0.00', '26', '31', '307', '', '', '', '', '', '0.00', '0.00', '2');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('6', '1', '2025-03-18', '2025-03-18', '5', '920.00', '0', '%', '920.00', '', 'Aprovado', '20.00', '900.00', '1', '0.00', '', '', '', '', '', '', '', '', '0.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('7', '14', '2025-03-18', '2025-03-18', '5', '120.00', '0', '%', '120.00', '', 'Pendente', '20.00', '100.00', '1', '0.00', 'Celular', 'Acer', '303', '', '', '', '', '', '0.00', '0.00', '1');
INSERT INTO `orcamentos` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `equipamento`, `marca`, `modelo`, `defeito`, `condicoes`, `acessorios`, `laudo`, `senha_ap`, `mao_obra`, `vall`, `empresa`) VALUES ('8', '14', '2025-03-18', '2025-03-18', '3', '60.00', '0', '%', '60.00', '', 'Aprovado', '20.00', '40.00', '1', '0.00', '9', '23', '302', '', '', '', '', '', '0.00', '0.00', '1');

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
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('1', '13', '2025-03-18', '2025-03-18', '5', '285.00', '5', '%', '330.75', '', 'Entregue', '100.00', '185.00', '1', '10.00', '0', '', 'fdasfa fdsf asfafds fas', '', '', '', '303', '1', '50.00', '', '0.00', 'csdaf sadfa fsafdsafdsa fa f', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('2', '1', '2025-03-18', '2025-03-18', '', '140.00', '50', '%', '80.00', '', 'Finalizada', '50.00', '65.00', '1', '10.00', '17', '', 'ffasdfdsaf', '', 'Celular', 'Acer', '303', '', '25.00', '0.00', '0.00', 'fdfa', '30', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('3', '1', '2025-03-18', '2025-03-18', '', '20.00', '0', '%', '20.00', '', 'Finalizada', '20.00', '0.00', '1', '0.00', '17', '', '', '', 'Celular', 'Acer', '303', '', '0.00', '0.00', '0.00', 'fdasf afd fafasf ', '', '', 'Sim', '36', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('5', '1', '2025-03-18', '2025-03-18', '', '100.00', '0', '%', '100.00', '', 'Entregue', '0.00', '100.00', '1', '0.00', '29', '', '', '', 'Celular', 'Acer', '303', '', '0.00', '0.00', '0.00', 'fdafa adfasf ', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('6', '1', '2025-03-18', '2025-03-18', '', '50.00', '0', '%', '50.00', '', 'Entregue', '20.00', '30.00', '1', '0.00', '29', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fda fsafdsa ', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('7', '1', '2025-03-18', '2025-03-18', '', '3.00', '0', '%', '3.00', '', 'Entregue', '3.00', '0.00', '1', '0.00', '29', '', '', '', 'Celular', 'Acer', '303', '', '0.00', '0.00', '0.00', 'fadfa ', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('8', '1', '2025-03-18', '2025-03-18', '', '110.00', '0', '%', '110.00', '', 'Entregue', '0.00', '110.00', '1', '0.00', '29', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fdafasf', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('9', '1', '2025-03-18', '2025-03-18', '', '350.00', '0', '%', '350.00', '', 'Entregue', '0.00', '350.00', '1', '0.00', '29', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fdfda', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('10', '1', '2025-03-18', '2025-03-18', '', '100.00', '0', '%', '100.00', '', 'Entregue', '0.00', '100.00', '1', '0.00', '29', '', '', '', '19', '24', '301', '', '0.00', '0.00', '0.00', 'vfgfd', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('11', '1', '2025-03-18', '2025-03-18', '', '230.00', '0', '%', '230.00', '', 'Entregue', '0.00', '230.00', '29', '0.00', '29', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fdsfada', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('12', '1', '2025-03-18', '2025-03-18', '', '100.00', '0', '%', '100.00', '', 'Entregue', '0.00', '100.00', '29', '0.00', '29', '', '', '', '9', '23', '302', '', '0.00', '0.00', '0.00', 'fdafadf', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('13', '2', '2025-03-18', '2025-03-18', '3', '5200.00', '0', '%', '5200.00', '', 'Entregue', '5000.00', '200.00', '1', '0.00', '0', '', '', '', '', '', '307', '5', '0.00', '', '0.00', '', '', '', '', '', '2');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('14', '2', '2025-03-18', '2025-03-18', '', '0.00', '0', '%', '0.00', '', 'Aberta', '0.00', '0.00', '1', '0.00', '29', '', '', '', '26', '31', '307', '', '0.00', '0.00', '0.00', 'dfggdfgfddfg', '', '', '', '', '2');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('15', '2', '2025-03-18', '2025-03-18', '', '5600.00', '0', '%', '5600.00', '', 'Entregue', '5000.00', '600.00', '1', '0.00', '30', '', '', '', '26', '31', '307', '', '0.00', '0.00', '0.00', 'fdsaf', '', '', '', '', '2');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('16', '1', '2025-03-18', '2025-03-18', '5', '920.00', '0', '%', '920.00', '', 'Aberta', '20.00', '900.00', '1', '0.00', '0', '', '', '', '', '', '', '6', '0.00', '', '0.00', '', '', '', '', '', '1');
INSERT INTO `os` (`id`, `cliente`, `data`, `data_entrega`, `dias_validade`, `valor`, `desconto`, `tipo_desconto`, `subtotal`, `obs`, `status`, `total_produtos`, `total_servicos`, `funcionario`, `frete`, `tecnico`, `laudo`, `condicoes`, `acessorios`, `equipamento`, `marca`, `modelo`, `orcamento`, `mao_obra`, `val_entrada`, `vall`, `defeito`, `dias_garantia`, `senha_ap`, `pago`, `forma_pgto`, `empresa`) VALUES ('17', '14', '2025-03-18', '2025-03-18', '3', '60.00', '0', '%', '60.00', '', 'Aberta', '20.00', '40.00', '1', '0.00', '0', '', '', '', '', '', '302', '8', '0.00', '', '0.00', '', '', '', '', '', '1');

-- TABLE: os_imagens
CREATE TABLE `os_imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `os` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `os_imagens` (`id`, `os`, `foto`) VALUES ('1', '3', '18-03-2025-13-15-09-eupng.png');
INSERT INTO `os_imagens` (`id`, `os`, `foto`) VALUES ('2', '3', '18-03-2025-13-15-46-vendas_orcamentos.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('3', 'Comiss�o', '0', '29', '15.15', '2025-03-21', '2025-03-18', '2025-03-18', '36', '0', '', 'sem-foto.png', 'Comiss�o', '6', '0.00', '0.00', '0.00', '', '15.15', '1', '1', 'Sim', '', '15:09:56', '', '', '', '', '', '1', '', '09:01:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('4', 'Comiss�o', '0', '29', '55.55', '2025-03-21', '2025-03-18', '2025-03-18', '0', '0', '', 'sem-foto.png', 'Comiss�o', '8', '', '', '', '', '55.55', '1', '1', 'Sim', '', '', '', '', '', '', '', '1', '', '10:50:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('5', 'Comiss�o', '0', '29', '176.75', '2025-03-21', '2025-03-18', '2025-03-18', '0', '0', '', 'sem-foto.png', 'Comiss�o', '9', '', '', '', '', '176.75', '1', '1', 'Sim', '', '', '', '', '', '', '', '1', '', '08:51:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('6', 'Comiss�o', '0', '29', '50.50', '2025-03-21', '2025-03-18', '2025-03-18', '0', '0', '', 'sem-foto.png', 'Comiss�o', '10', '', '', '', '', '50.50', '1', '1', 'Sim', '', '', '', '', '', '', '', '1', '', '08:03:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('8', 'Comiss�o', '0', '29', '50.50', '2025-03-21', '', '2025-03-18', '0', '0', '', 'sem-foto.png', 'Comiss�o', '12', '', '', '', '', '50.50', '29', '0', 'N�o', '', '', '', '', '', '', '', '1', '', '09:57:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('9', 'Comiss�o', '0', '30', '60.00', '1969-12-31', '2025-03-18', '2025-03-18', '0', '0', '', 'sem-foto.png', 'Comiss�o', '15', '', '', '', '', '60.00', '1', '1', 'Sim', '', '', '', '', '', '', '', '2', '', '10:48:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('10', 'Alugu�l', '0', '0', '20.00', '2025-04-30', '', '2025-04-30', '34', '1', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '20.00', '1', '0', 'N�o', '', '18:23:43', '', '5', '3', 'N�o', '', '1', '', '10:13:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('11', 'Alugu�l', '0', '0', '20.00', '2025-05-01', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '20.00', '1', '0', 'N�o', '', '18:23:43', '', '5', '', '', '10', '1', '', '10:13:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('12', 'Alugu�l', '0', '0', '20.00', '2025-05-02', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '20.00', '1', '0', 'N�o', '', '18:23:43', '', '5', '', '', '10', '1', '', '10:13:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('13', 'Teste', '0', '0', '65.00', '2025-04-30', '', '2025-04-30', '34', '1', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '0', 'Sim', '', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('14', 'Teste', '0', '0', '65.00', '2025-05-01', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('15', 'Teste', '0', '0', '65.00', '2025-05-02', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('16', 'Teste', '0', '0', '65.00', '2025-05-03', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('17', 'Teste', '0', '0', '65.00', '2025-05-04', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('18', 'Teste', '0', '0', '65.00', '2025-05-05', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('19', 'Teste', '0', '0', '65.00', '2025-05-06', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('20', 'Teste', '0', '0', '65.00', '2025-05-07', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('21', 'Teste', '0', '0', '65.00', '2025-05-08', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('22', 'Teste', '0', '0', '65.00', '2025-05-09', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('23', 'Teste', '0', '0', '65.00', '2025-05-10', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('24', 'Teste', '0', '0', '65.00', '2025-05-11', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('25', 'Teste', '0', '0', '65.00', '2025-05-12', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('26', 'Teste', '0', '0', '65.00', '2025-05-13', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('27', 'Teste', '0', '0', '65.00', '2025-05-14', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('28', 'Teste', '0', '0', '65.00', '2025-05-15', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('29', 'Teste', '0', '0', '65.00', '2025-05-16', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('30', 'Teste', '0', '0', '65.00', '2025-05-17', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('31', 'Teste', '0', '0', '65.00', '2025-05-18', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('32', 'Teste', '0', '0', '65.00', '2025-05-19', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('33', 'Teste', '0', '0', '65.00', '2025-05-20', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('34', 'Teste', '0', '0', '65.00', '2025-05-21', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('35', 'Teste', '0', '0', '65.00', '2025-05-22', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('36', 'Teste', '0', '0', '65.00', '2025-05-23', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('37', 'Teste', '0', '0', '65.00', '2025-05-24', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('38', 'Teste', '0', '0', '65.00', '2025-05-25', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('39', 'Teste', '0', '0', '65.00', '2025-05-26', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('40', 'Teste', '0', '0', '65.00', '2025-05-27', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('41', 'Teste', '0', '0', '65.00', '2025-05-28', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('42', 'Teste', '0', '0', '65.00', '2025-05-29', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('43', 'Teste', '0', '0', '65.00', '2025-05-30', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('44', 'Teste', '0', '0', '65.00', '2025-05-31', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('45', 'Teste', '0', '0', '65.00', '2025-06-01', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('46', 'Teste', '0', '0', '65.00', '2025-06-02', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('47', 'Teste', '0', '0', '65.00', '2025-06-03', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('48', 'Teste', '0', '0', '65.00', '2025-06-04', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('49', 'Teste', '0', '0', '65.00', '2025-06-05', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('50', 'Teste', '0', '0', '65.00', '2025-06-06', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('51', 'Teste', '0', '0', '65.00', '2025-06-07', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('52', 'Teste', '0', '0', '65.00', '2025-06-08', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('53', 'Teste', '0', '0', '65.00', '2025-06-09', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('54', 'Teste', '0', '0', '65.00', '2025-06-10', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('55', 'Teste', '0', '0', '65.00', '2025-06-11', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('56', 'Teste', '0', '0', '65.00', '2025-06-12', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('57', 'Teste', '0', '0', '65.00', '2025-06-13', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('58', 'Teste', '0', '0', '65.00', '2025-06-14', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('59', 'Teste', '0', '0', '65.00', '2025-06-15', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('60', 'Teste', '0', '0', '65.00', '2025-06-16', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('61', 'Teste', '0', '0', '65.00', '2025-06-17', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('62', 'Teste', '0', '0', '65.00', '2025-06-18', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('63', 'Teste', '0', '0', '65.00', '2025-06-19', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('64', 'Teste', '0', '0', '65.00', '2025-06-20', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('65', 'Teste', '0', '0', '65.00', '2025-06-21', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('66', 'Teste', '0', '0', '65.00', '2025-06-22', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('67', 'Teste', '0', '0', '65.00', '2025-06-23', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('68', 'Teste', '0', '0', '65.00', '2025-06-24', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('69', 'Teste', '0', '0', '65.00', '2025-06-25', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('70', 'Teste', '0', '0', '65.00', '2025-06-26', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('71', 'Teste', '0', '0', '65.00', '2025-06-27', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('72', 'Teste', '0', '0', '65.00', '2025-06-28', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('73', 'Teste', '0', '0', '65.00', '2025-06-29', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('74', 'Teste', '0', '0', '65.00', '2025-06-30', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('75', 'Teste', '0', '0', '65.00', '2025-07-01', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('76', 'Teste', '0', '0', '65.00', '2025-07-02', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('77', 'Teste', '0', '0', '65.00', '2025-07-03', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('78', 'Teste', '0', '0', '65.00', '2025-07-04', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('79', 'Teste', '0', '0', '65.00', '2025-07-05', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('80', 'Teste', '0', '0', '65.00', '2025-07-06', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('81', 'Teste', '0', '0', '65.00', '2025-07-07', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('82', 'Teste', '0', '0', '65.00', '2025-07-08', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('83', 'Teste', '0', '0', '65.00', '2025-07-09', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('84', 'Teste', '0', '0', '65.00', '2025-07-10', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('85', 'Teste', '0', '0', '65.00', '2025-07-11', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('86', 'Teste', '0', '0', '65.00', '2025-07-12', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('87', 'Teste', '0', '0', '65.00', '2025-07-13', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('88', 'Teste', '0', '0', '65.00', '2025-07-14', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('89', 'Teste', '0', '0', '65.00', '2025-07-15', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('90', 'Teste', '0', '0', '65.00', '2025-07-16', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('91', 'Teste', '0', '0', '65.00', '2025-07-17', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('92', 'Teste', '0', '0', '65.00', '2025-07-18', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('93', 'Teste', '0', '0', '65.00', '2025-07-19', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('94', 'Teste', '0', '0', '65.00', '2025-07-20', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('95', 'Teste', '0', '0', '65.00', '2025-07-21', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('96', 'Teste', '0', '0', '65.00', '2025-07-22', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('97', 'Teste', '0', '0', '65.00', '2025-07-23', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('98', 'Teste', '0', '0', '65.00', '2025-07-24', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('99', 'Teste', '0', '0', '65.00', '2025-07-25', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('100', 'Teste', '0', '0', '65.00', '2025-07-26', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('101', 'Teste', '0', '0', '65.00', '2025-07-27', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('102', 'Teste', '0', '0', '65.00', '2025-07-28', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('103', 'Teste', '0', '0', '65.00', '2025-07-29', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('104', 'Teste', '0', '0', '65.00', '2025-07-30', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('105', 'Teste', '0', '0', '65.00', '2025-07-31', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('106', 'Teste', '0', '0', '65.00', '2025-08-01', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('107', 'Teste', '0', '0', '65.00', '2025-08-02', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('108', 'Teste', '0', '0', '65.00', '2025-08-03', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('109', 'Teste', '0', '0', '65.00', '2025-08-04', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('110', 'Teste', '0', '0', '65.00', '2025-08-05', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('111', 'Teste', '0', '0', '65.00', '2025-08-06', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('112', 'Teste', '0', '0', '65.00', '2025-08-07', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('113', 'Teste', '0', '0', '65.00', '2025-08-08', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('114', 'Teste', '0', '0', '65.00', '2025-08-09', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('115', 'Teste', '0', '0', '65.00', '2025-08-10', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('116', 'Teste', '0', '0', '65.00', '2025-08-11', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('117', 'Teste', '0', '0', '65.00', '2025-08-12', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('118', 'Teste', '0', '0', '65.00', '2025-08-13', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('119', 'Teste', '0', '0', '65.00', '2025-08-14', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('120', 'Teste', '0', '0', '65.00', '2025-08-15', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('121', 'Teste', '0', '0', '65.00', '2025-08-16', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('122', 'Teste', '0', '0', '65.00', '2025-08-17', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('123', 'Teste', '0', '0', '65.00', '2025-08-18', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('124', 'Teste', '0', '0', '65.00', '2025-08-19', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('125', 'Teste', '0', '0', '65.00', '2025-08-20', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('126', 'Teste', '0', '0', '65.00', '2025-08-21', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('127', 'Teste', '0', '0', '65.00', '2025-08-22', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('128', 'Teste', '0', '0', '65.00', '2025-08-23', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('129', 'Teste', '0', '0', '65.00', '2025-08-24', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('130', 'Teste', '0', '0', '65.00', '2025-08-25', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('131', 'Teste', '0', '0', '65.00', '2025-08-26', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');
INSERT INTO `pagar` (`id`, `descricao`, `fornecedor`, `funcionario`, `valor`, `vencimento`, `data_pgto`, `data_lanc`, `forma_pgto`, `frequencia`, `obs`, `arquivo`, `referencia`, `id_ref`, `multa`, `juros`, `desconto`, `taxa`, `subtotal`, `usuario_lanc`, `usuario_pgto`, `pago`, `residuo`, `hora`, `hash`, `caixa`, `quant_recorrencia`, `recorrencia_inf`, `id_recorrencia`, `empresa`, `alerta`, `hora_alerta`, `quantidade`, `cliente`) VALUES ('132', 'Teste', '0', '0', '65.00', '2025-08-27', '', '2025-04-30', '34', '0', '', 'sem-foto.png', 'Conta', '', '', '', '', '', '65.00', '1', '0', 'N�o', '', '18:24:33', '', '5', '', '', '13', '1', '', '10:07:00', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: perguntas_site
CREATE TABLE `perguntas_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_pergunta` varchar(150) DEFAULT NULL,
  `descricao_pergunta` text DEFAULT NULL,
  `empresa` int(11) NOT NULL,
  `posicao_pergunta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('1', 'O que � o ALZA OS?', 'O ALZA OS, � um sistema ERP (Enterprise Resource Planning) completo, 100% online, desenvolvido para simplificar a gest�o de empresas de todos os portes. Ele integra vendas, estoque, financeiro, atendimento ao cliente e muito mais em uma �nica plataforma', '0', '1');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('3', 'Como funciona a assinatura?', 'Ap�s escolher seu plano, voc� ser� redirecionado para o processo de pagamento. Assim que confirmado, voc� receber� acesso imediato ao sistema com todas as funcionalidades do pl Assim que confirmado, voc� receber� acesso imediato ao sistema com todas as fu', '0', '2');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('4', 'Preciso instalar algum software?', 'N�o! O ALZA OS SAAS � 100% baseado na nuvem. Voc� s� precisa de um navegador e conex�o com a internet para acessar o sistema de qualquer dispositivo, seja computador, tablet ou smartphone. ', '0', '3');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('5', 'Como funciona a integra��o com WhatsAppp?', 'Voc� conecta seu WhatsApp diretamente no sistema atrav�s de um simples QR Code. Com isso, voc� pode realizar campanhas de marketing com envio de disparos em massa, incluindo arquivos, textos e at� mesmo �udios personalizados. Al�m disso, tudo que � gerado', '0', '4');
INSERT INTO `perguntas_site` (`id`, `titulo_pergunta`, `descricao_pergunta`, `empresa`, `posicao_pergunta`) VALUES ('6', '�rea de Perguntasss', 'Resposta perguntas', '1', '1');

-- TABLE: planos
CREATE TABLE `planos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `ativo` varchar(5) DEFAULT NULL,
  `clientes` int(11) DEFAULT NULL,
  `usuarios` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `planos` (`id`, `nome`, `valor`, `ativo`, `clientes`, `usuarios`) VALUES ('1', 'Plano Bronze', '300.00', 'Sim', '1', '1');
INSERT INTO `planos` (`id`, `nome`, `valor`, `ativo`, `clientes`, `usuarios`) VALUES ('2', 'Plano Prata', '140.00', 'Sim', '3', '3');
INSERT INTO `planos` (`id`, `nome`, `valor`, `ativo`, `clientes`, `usuarios`) VALUES ('3', 'Plano Ouro', '160.00', 'Sim', '7', '7');
INSERT INTO `planos` (`id`, `nome`, `valor`, `ativo`, `clientes`, `usuarios`) VALUES ('4', 'Plano Diamante', '180.00', 'Sim', '', '');

-- TABLE: planos_itens
CREATE TABLE `planos_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plano` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('38', '3', 'Vendas, Estoque e Produtos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('40', '3', 'Abertura de Chamados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('41', '3', 'V�deo Tutoriais');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('42', '3', 'Contas � Pagar e Receber');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('44', '3', 'Gest�o de RH');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('46', '3', 'Api do Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('47', '3', 'Api de Pagamentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('49', '3', 'Painel do Cliente');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('51', '3', 'Assinatura Digital');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('52', '3', 'Cobran�as Recorrentes');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('53', '3', 'Gest�o de Contratos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('54', '3', 'Or�amentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('55', '4', 'Vendas, Estoque e Produtos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('57', '4', 'Abertura de Chamados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('59', '4', 'Contas � Pagar e Receber');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('61', '4', 'Gest�o de RH');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('63', '4', 'Api do Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('64', '4', 'Api de Pagamentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('66', '4', 'Painel do Cliente');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('68', '4', 'Assinatura Digital');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('69', '4', 'Cobran�as Recorrentes');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('70', '4', 'Gest�o de Contratos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('71', '4', 'Or�amentos');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('72', '4', 'Ordem de Servi�os');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('73', '4', 'Marketing Whatsapp');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('74', '1', 'Limite de 1 Cliente');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('75', '1', 'Limite de 1 Usu�rio');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('76', '2', 'Limite de 3 Clientes');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('77', '2', 'Limite de 3 Usu�rios');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('80', '4', 'Clientes Ilimitados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('81', '4', 'Usu�rios Ilimitados');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('82', '3', 'Limite de 7 Usu�rios');
INSERT INTO `planos_itens` (`id`, `plano`, `nome`) VALUES ('83', '3', 'Limite de 7 Clientes');

-- TABLE: planos_recursos
CREATE TABLE `planos_recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plano` int(11) DEFAULT NULL,
  `recurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('1', '4', '1');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('5', '2', '3');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('6', '3', '3');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('7', '3', '4');
INSERT INTO `planos_recursos` (`id`, `plano`, `recurso`) VALUES ('8', '3', '5');
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
) ENGINE=InnoDB AUTO_INCREMENT=234 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `produtos` (`id`, `codigo`, `nome`, `valor_compra`, `valor_venda`, `estoque`, `foto`, `ativo`, `nivel_estoque`, `categoria`, `fornecedor`, `sub_categoria`, `lucro`, `descricao`, `tem_estoque`, `vendas`, `empresa`, `valor_lucro`, `lucro_reais`, `valor_promocional`, `mostrar_site`) VALUES ('233', '5859035900188', 'P�o de Queijo', '0.00', '14.70', '1000', '24-05-2025-17-39-48-pqueijo.png', 'Sim', '0', '134', '0', '42', '', 'P�o de Queijo (30G) 1KG', 'N�o', '', '35', '0.00', '0.00', '0.00', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- TABLE: recursos
CREATE TABLE `recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `chave` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('1', 'Marketing Whatsapp', 'marketing_whats');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('3', 'Cobran�as Recorrentes', 'cobrancas_rec');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('4', 'Gest�o de Contratos', 'gestao_contratos');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('5', 'Or�amentos', 'orcamentos_rec');
INSERT INTO `recursos` (`id`, `nome`, `chave`) VALUES ('6', 'OS Ordens de Servi�os', 'os_rec');

-- TABLE: recursos_site
CREATE TABLE `recursos_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_recurso` varchar(150) DEFAULT NULL,
  `icone_recurso` varchar(100) DEFAULT NULL,
  `descricao_recurso` varchar(255) DEFAULT NULL,
  `empresa` int(11) NOT NULL,
  `posicao_recurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('3', 'Aumente suas Vendas', 'fas fa-chart-line', 'Controle completo do processo de vendas, desde o or�amento at� a entrega, com relat�rios detalhados para tomar as melhores decis�es.', '0', '1');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('4', 'Controle Financeiro', 'fas fa-coins', 'Gerencie contas a pagar e receber, fluxo de caixa, concilia��o banc�ria e muito mais, tudo em um s� lugar.', '0', '2');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('5', 'Estoque Inteligente', 'fas fa-boxes', 'Controle de estoque em tempo real, com alertas de estoque m�nimo, gest�o de fornecedores e controle de validade.', '0', '3');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('6', 'Atendimento ao Cliente', 'fas fa-headset', 'Integra��o com WhatsApp, gest�o de chamados e hist�rico completo de intera��es para um atendimento personalizado.', '0', '4');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('7', 'Gest�o de Equipe', 'fas fa-users-cog', 'Controle de produtividade, metas, comiss�es e muito mais para maximizar o desempenho da sua equipe.', '0', '5');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('8', 'Contratos e Servi�os', 'fas fa-file-contract', 'Gest�o completa de contratos, ordens de servi�o e agendamentos para otimizar seus processos.', '0', '6');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('9', 'Item 1', 'fas fa-chart-line', 'Texto item 1 aqui', '1', '1');
INSERT INTO `recursos_site` (`id`, `titulo_recurso`, `icone_recurso`, `descricao_recurso`, `empresa`, `posicao_recurso`) VALUES ('10', 'Item 2', 'fas fa-cogs', 'Texto Item 2', '1', '2');

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
INSERT INTO `saidas` (`id`, `produto`, `quantidade`, `motivo`, `usuario`, `data`, `empresa`) VALUES ('1', '229', '2', 'Teste', '1', '2025-03-17', '1');

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
INSERT INTO `sangrias` (`id`, `usuario`, `valor`, `data`, `hora`, `caixa`) VALUES ('1', '1', '50.00', '2025-02-03', '17:58:25', '1');
INSERT INTO `sangrias` (`id`, `usuario`, `valor`, `data`, `hora`, `caixa`) VALUES ('2', '17', '100.00', '2025-02-04', '17:58:21', '3');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('1', 'SOFTWARE C/ BAKUP', '130.00', '0', '3', 'Sim', '1');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('2', 'SOFTWARE S/ BACKUP', '100.00', '0', '2', 'Sim', '1');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('3', 'TROCA DE TELA', '0.00', '0', '3', 'Sim', '1');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('4', 'TROCA DE BATERIA', '0.00', '0', '0', 'Sim', '1');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('5', 'FORMATA��O', '0.00', '0', '0', 'Sim', '1');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('6', 'CONTA GOOGLE', '0.00', '0', '0', 'Sim', '1');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('7', 'AUTO FALANTE', '0.00', '0', '0', 'Sim', '1');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('8', 'TROCA CONECTOR DE CARGA', '0.00', '0', '0', 'Sim', '1');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('9', 'CHOQUE NA BATERIA', '0.00', '0', '1', 'Sim', '1');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('10', 'DESOXIDA��O', '0.00', '0', '2', 'Sim', '1');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('16', 'HARD RESET', '30.00', '0', '5', 'Sim', '1');
INSERT INTO `servicos` (`id`, `nome`, `valor`, `comissao`, `dias`, `ativo`, `empresa`) VALUES ('20', 'Servi�o', '200.00', '50', '10', 'Sim', '2');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('1', '1', '1', '1', '1', '130.00', '130.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('2', '3', '1', '1', '1', '55.00', '55.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('3', '2', '3', '1', '1', '100.00', '100.00', '5', '1', '2025-03-18', '', '', '100.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('4', '4', '3', '1', '1', '0.00', '0.00', '5', '1', '2025-03-18', '', '', '100.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('5', '1', '4', '1', '1', '130.00', '130.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('6', '16', '', '1', '1', '30.00', '30.00', '2', '1', '2025-03-18', '', '', '80.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('7', '10', '', '1', '1', '35.00', '35.00', '2', '1', '2025-03-18', '', '', '80.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('8', '9', '', '1', '1', '0.00', '0.00', '3', '1', '2025-03-18', '', '', '20.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('9', '9', '', '1', '1', '0.00', '0.00', '4', '1', '2025-03-18', '', '', '120.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('10', '10', '', '1', '1', '0.00', '0.00', '5', '1', '2025-03-18', '', '', '100.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('11', '9', '', '1', '1', '30.00', '30.00', '6', '1', '2025-03-18', '', '', '50.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('12', '8', '', '1', '1', '0.00', '0.00', '7', '1', '2025-03-18', '', '', '3.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('13', '10', '', '1', '1', '50.00', '50.00', '8', '1', '2025-03-18', '', '', '110.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('14', '8', '', '1', '1', '60.00', '60.00', '8', '1', '2025-03-18', '', '', '110.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('15', '3', '', '1', '1', '350.00', '350.00', '9', '1', '2025-03-18', '', '', '350.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('16', '2', '', '1', '1', '100.00', '100.00', '10', '1', '2025-03-18', '', '', '100.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('17', '9', '', '29', '1', '230.00', '230.00', '11', '1', '2025-03-18', '', '', '230.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('18', '2', '', '29', '1', '100.00', '100.00', '12', '1', '2025-03-18', '', '', '100.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('19', '20', '5', '1', '1', '200.00', '200.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('20', '20', '', '1', '3', '200.00', '600.00', '15', '2', '2025-03-18', '', '', '5600.00');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('21', '3', '6', '1', '3', '300.00', '900.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('22', '2', '7', '1', '1', '100.00', '100.00', '', '', '', '', '', '');
INSERT INTO `servicos_orc` (`id`, `servico`, `orcamento`, `funcionario`, `quantidade`, `valor`, `total`, `os`, `cliente`, `data`, `equipamento`, `modelo`, `subtotal`) VALUES ('23', '9', '8', '1', '1', '40.00', '40.00', '', '', '', '', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `site` (`id`, `empresa`, `logo`, `titulo`, `subtitulo`, `botao1`, `botao2`, `botao3`, `item1`, `item2`, `item3`, `titulo_recursos`, `titulo_perguntas`, `titulo_rodape`, `descricao_rodape`, `botao_rodape`, `link_rodape`, `logo_topo`, `fundo_topo`, `fundo_topo_mobile`) VALUES ('1', '0', '24-05-2025-17-53-54-logo-mapos-branco-grande.png', 'Transforme a Gest�o do Seu Neg�cio HOJE MESMO!', 'O ALZA OS � a solu��o completa que voc� precisa para controlar vendas, estoque, financeiro e muito mais em um �nico sistema intuitivo e poderoso.', 'Come�ar Agora', 'Saiba Mais', 'Acessar Painel', 'Comece a usar em minutos', 'Pagamento seguro', 'Suporte dedicado', 'Por Que Escolher o ALZA OS?', 'Perguntas Frequentes', 'Pronto para Revolucionar a Gest�o do Seu Neg�cio?', 'N�o perca mais tempo com processos manuais e desorganizados. O ALZA OS oferece tudo que voc� precisa para crescer com efici�ncia e controle total. ', 'Come�ar Agora', '#plans', 'Sim', '', '');
INSERT INTO `site` (`id`, `empresa`, `logo`, `titulo`, `subtitulo`, `botao1`, `botao2`, `botao3`, `item1`, `item2`, `item3`, `titulo_recursos`, `titulo_perguntas`, `titulo_rodape`, `descricao_rodape`, `botao_rodape`, `link_rodape`, `logo_topo`, `fundo_topo`, `fundo_topo_mobile`) VALUES ('2', '1', '28-03-2025-15-23-57-03.png', '', '', '', 'Saiba Mais', 'Painel Cliente', 'item 1', 'item 2', 'item 3', 'Titulo do recursos', 'TItulo da �rea perguntas', 'Titulo Rodap�', 'Link', 'Rodap�', 'link', 'N�o', '21-04-2025-21-06-04-fundo_sit.png', '21-04-2025-21-25-48-banner_mobile.jpg');
INSERT INTO `site` (`id`, `empresa`, `logo`, `titulo`, `subtitulo`, `botao1`, `botao2`, `botao3`, `item1`, `item2`, `item3`, `titulo_recursos`, `titulo_perguntas`, `titulo_rodape`, `descricao_rodape`, `botao_rodape`, `link_rodape`, `logo_topo`, `fundo_topo`, `fundo_topo_mobile`) VALUES ('3', '2', '01-04-2025-22-30-31-fundo_adv.jpg', 'Teste emp 2', 'dASSFDSA ', 'AFDFA ', 'DFAFAS', 'FA F', 'FDA FA', 'FDAF', 'FDAFA', '', '', '', '', '', '', '', '', '');
INSERT INTO `site` (`id`, `empresa`, `logo`, `titulo`, `subtitulo`, `botao1`, `botao2`, `botao3`, `item1`, `item2`, `item3`, `titulo_recursos`, `titulo_perguntas`, `titulo_rodape`, `descricao_rodape`, `botao_rodape`, `link_rodape`, `logo_topo`, `fundo_topo`, `fundo_topo_mobile`) VALUES ('4', '8', 'sem-foto.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `site` (`id`, `empresa`, `logo`, `titulo`, `subtitulo`, `botao1`, `botao2`, `botao3`, `item1`, `item2`, `item3`, `titulo_recursos`, `titulo_perguntas`, `titulo_rodape`, `descricao_rodape`, `botao_rodape`, `link_rodape`, `logo_topo`, `fundo_topo`, `fundo_topo_mobile`) VALUES ('5', '35', '24-05-2025-17-41-09-logo.jpg', 'Gostinho de Minas SLZ', '', '', '', '', '', '', '', 'AA', '', '', '', '', '', 'Sim', 'sem-foto.png', 'sem-foto.png');

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
INSERT INTO `sub_categorias` (`id`, `nome`, `ativo`, `foto`, `empresa`) VALUES ('44', '100', 'Sim', '', '35');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('1', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURA��O</u></font></span></strong></p><div><font size=\"2\"><strong>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Ju�zo, inst�ncia ouTribunal, conferindo-lhes poderes gerais da cl�usula ?ad judicia? e aindapoderes especiais para propor a��es de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta � acusa��o, fazer arrazoados, requererjustifica��es, interpela��es e/ou notifica��es c�veis e criminais, oferecerrepresenta��o criminal, produzir provas, acompanhar dilig�ncias, fazer acordosou compromissos, receber e dar quita��o, requerer e levantar alvar�s judiciais,indicar bens � penhora, requerer compensa��o tribut�ria, nos limites previstosna legisla��o brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justi�a, tudo omais que se fizer necess�rio para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Quarta-Feira, 19 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/14.png\" style=\"margin-top:25px\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Hugo Cliente</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '14', '::1', '2025-03-24', '12:02:10', '3', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('4', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURA��O</u></font></span></strong></p><div><font size=\"2\"><strong>Cliente 2 emp 1, , , , nascido(a) em 04/03/2000, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: cliente2@hotmail.com, telefone: (00) 0000-0010</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Ju�zo, inst�ncia ouTribunal, conferindo-lhes poderes gerais da cl�usula ?ad judicia? e aindapoderes especiais para propor a��es de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta � acusa��o, fazer arrazoados, requererjustifica��es, interpela��es e/ou notifica��es c�veis e criminais, oferecerrepresenta��o criminal, produzir provas, acompanhar dilig�ncias, fazer acordosou compromissos, receber e dar quita��o, requerer e levantar alvar�s judiciais,indicar bens � penhora, requerer compensa��o tribut�ria, nos limites previstosna legisla��o brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justi�a, tudo omais que se fizer necess�rio para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Quarta-Feira, 19 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Cliente 2 emp 1</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '10', '', '', '', '3', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('6', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURA��O</u></font></span></strong></p><div><font size=\"2\"><strong>Cliente 3 emp 1, , , , nascido(a) em 01/01/2000, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: cliente3@hotmail.com, telefone: (00) 00000-0000</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Ju�zo, inst�ncia ouTribunal, conferindo-lhes poderes gerais da cl�usula ?ad judicia? e aindapoderes especiais para propor a��es de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta � acusa��o, fazer arrazoados, requererjustifica��es, interpela��es e/ou notifica��es c�veis e criminais, oferecerrepresenta��o criminal, produzir provas, acompanhar dilig�ncias, fazer acordosou compromissos, receber e dar quita��o, requerer e levantar alvar�s judiciais,indicar bens � penhora, requerer compensa��o tribut�ria, nos limites previstosna legisla��o brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justi�a, tudo omais que se fizer necess�rio para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Quarta-Feira, 19 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/11.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Cliente 3 emp 1</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '11', '::1', '2025-03-19', '18:17:34', '3', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('7', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURA��O</u></font></span></strong></p><div><font size=\"2\"><strong>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Ju�zo, inst�ncia ouTribunal, conferindo-lhes poderes gerais da cl�usula ?ad judicia? e aindapoderes especiais para propor a��es de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta � acusa��o, fazer arrazoados, requererjustifica��es, interpela��es e/ou notifica��es c�veis e criminais, oferecerrepresenta��o criminal, produzir provas, acompanhar dilig�ncias, fazer acordosou compromissos, receber e dar quita��o, requerer e levantar alvar�s judiciais,indicar bens � penhora, requerer compensa��o tribut�ria, nos limites previstosna legisla��o brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justi�a, tudo omais que se fizer necess�rio para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Quarta-Feira, 19 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/14.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Hugo Cliente</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '14', '', '', '', '3', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('8', '<div><b><font size=\"5\">fdafdsaf dfdsf a f</font></b></div><div><br></div><div><b><b>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</b></b></div><div><b><b><br></b></b></div><div><b><b>Hugo Cliente <br></b></b></div><div><br></div><div><b>Belo Horizonte</b></div><div><b><b><br></b></b></div>', '1', 'Sim', '14', '', '', '', '18', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('9', '<p class=\"\" \"\"\"msonormal\"\"\"\"\"=\"\" center\"\"=\"\" align=\"center\"><strong><span style=\"\" \"\"\"font-size:22.0pt;mso-bidi-font-size:11.0pt;line-height:115%\"\"\"\"\"=\"\"><font size=\"4\"><u>PROCURA��O</u></font></span></strong></p><div><font size=\"2\"><strong>Cliente Teste, , , , nascido(a) em 05/03/2001, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � Rua de Teste, 500, bairro Bairro Teste, munic�pio de Cidade Teste ?MG ? CEP: 30512-660, email: cliente1@hotmail.com, telefone: (31) 99534-8118</strong></font><strong> </strong><font size=\"2\">por este instrumento de mandato nomeia e constitui seu(ua) procurador(a) o(a) advogado(a) <strong>{{PROFISSIONAL}},</strong> para o fim de representar o(s) outorgante(s) perante qualquer Ju�zo, inst�ncia ouTribunal, conferindo-lhes poderes gerais da cl�usula ?ad judicia? e aindapoderes especiais para propor a��es de qualquer natureza, inclusive penais, requerer, contestar, transigir, desistir, confessar, recorrer, representar,oferecer queixa-crime ou resposta � acusa��o, fazer arrazoados, requererjustifica��es, interpela��es e/ou notifica��es c�veis e criminais, oferecerrepresenta��o criminal, produzir provas, acompanhar dilig�ncias, fazer acordosou compromissos, receber e dar quita��o, requerer e levantar alvar�s judiciais,indicar bens � penhora, requerer compensa��o tribut�ria, nos limites previstosna legisla��o brasileira, podendo substabelecer com ou sem reservas de iguaispoderes, podendo, em seu nome, requerer gratuidade de justi�a, tudo omais que se fizer necess�rio para o fiel desempenho do presente mandato, dandotudo por bom, firme e valioso.</font></div><div align=\"\" \"center\"\"\"=\"\"><br></div><div align=\"center\"><font size=\"2\">Belo Horizonte, Segunda-Feira, 24 de Marco de 2025.</font></div><div align=\"center\"><br></div><div align=\"center\"><br></div><div align=\"center\"><img src=\"http://localhost/erp/painel/images/assinaturas/1.png\" alt=\"Imagem da Assinatura\"></div><div align=\"center\"><font size=\"2\">_________________________________________<br>Cliente Teste</font></div><div align=\"center\"><font size=\"2\">Outorgante</font><br></div>', '1', 'Sim', '1', '::1', '2025-03-24', '12:01:53', '3', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('10', '<h3 data-start=\"299\" data-end=\"336\" align=\"center\"><b><h3 data-start=\"299\" data-end=\"336\"><font size=\"4\"><u>CONTRATO DE PRESTA��O DE SERVI�OS</u></font></h3></b></h3><p data-start=\"338\" data-end=\"386\">Pelo presente instrumento particular, as partes:</p><p data-start=\"388\" data-end=\"502\"><strong data-start=\"388\" data-end=\"404\">CONTRATANTE:</strong><br data-start=\"404\" data-end=\"407\">Nome: <b>Empresa 1 Teste</b><br data-start=\"434\" data-end=\"437\">CNPJ: <b>20.000.000/0000-00</b><br data-start=\"468\" data-end=\"471\">Endere�o: <b>Rua X N�mero 150 Bairro Teste X</b></p><p data-start=\"504\" data-end=\"616\"><strong data-start=\"504\" data-end=\"519\">CONTRATADA:</strong><br data-start=\"519\" data-end=\"522\"><b>Hugo Cliente, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: hugocliente@hotmail.com, telefone: (31) 97527-5084</b></p><p data-start=\"504\" data-end=\"616\">T�m entre si, justas e contratadas, as cl�usulas e condi��es a seguir dispostas:</p><h3 data-start=\"705\" data-end=\"729\"><font size=\"3\">CL�USULA 1� ? OBJETO</font></h3><p data-start=\"731\" data-end=\"959\">O presente contrato tem como objeto a presta��o dos seguintes servi�os:<br data-start=\"802\" data-end=\"805\"><strong data-start=\"805\" data-end=\"959\">[Descrever detalhadamente os servi�os que ser�o prestados, ex.: \"Aulas presenciais de ingl�s para n�vel b�sico, com carga hor�ria total de 40 horas.\"]</strong></p><h3 data-start=\"966\" data-end=\"1008\"><font size=\"3\">CL�USULA 2� ? OBRIGA��ES DA CONTRATADA</font></h3><p data-start=\"1010\" data-end=\"1232\">A CONTRATADA se obriga a:<br data-start=\"1035\" data-end=\"1038\">a) Prestar os servi�os descritos na Cl�usula 1� com zelo, dilig�ncia e qualidade;<br data-start=\"1119\" data-end=\"1122\">b) Cumprir o cronograma e prazos acordados;<br data-start=\"1165\" data-end=\"1168\">c) Manter sigilo sobre informa��es confidenciais da CONTRATANTE.</p><h3 data-start=\"1239\" data-end=\"1282\"><font size=\"3\">CL�USULA 3� ? OBRIGA��ES DA CONTRATANTE</font></h3><p data-start=\"1284\" data-end=\"1547\">A CONTRATANTE se compromete a:<br data-start=\"1314\" data-end=\"1317\">a) Fornecer todas as informa��es necess�rias � execu��o dos servi�os;<br data-start=\"1386\" data-end=\"1389\">b) Efetuar o pagamento na forma e prazos estipulados neste contrato;<br data-start=\"1457\" data-end=\"1460\">c) Cooperar com a CONTRATADA, sempre que necess�rio, para o bom andamento dos servi�os.</p><p data-start=\"504\" data-end=\"616\"><br></p><p data-start=\"504\" data-end=\"616\"><br></p>', '1', 'Sim', '14', '::1', '2025-03-24', '12:06:13', '17', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('11', '<p>fdfa fdf asfdsf fsadfda fa&nbsp; <strong>Cliente 2 emp 1, , , , nascido(a) em 04/03/2000, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: cliente2@hotmail.com, telefone: (00) 0000-0010, Cliente 2 emp 1, , , , nascido(a) em 04/03/2000, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: cliente2@hotmail.com, telefone: (00) 0000-0010, Cliente 3 emp 1, , , , nascido(a) em 04/03/2000, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: cliente3@hotmail.com, telefone: (00) 00000-0000</strong> cliente2@hotmail.com fadfadfa fd afaf f ,  , , - {{CEP}} Belo Horizonte fdfaf ads Terca-Feira, 25 de Marco de 2025&nbsp; fadfsad f Empresa 1 Teste dfafa a <strong>{{PROFISSIONAL}} <br></strong></p><p><strong><br></strong></p><p> <br><br>______________________________________________________________________<br>\r\nCliente 2 emp 1<br>\r\n (Contratante)<br><br>______________________________________________________________________<br>\r\nCliente 3 emp 1<br>\r\n (Contratante) <br></p><p><br></p><p> <br><br>______________________________________________________________________<br>\r\nGerente<br>\r\nOAB/ <br>\r\n (Contratado)<br><br>______________________________________________________________________<br>\r\nTeste<br>\r\nOAB/ <br>\r\n (Contratado) <br></p>', '1', 'Sim', '10', '', '', '', '19', '');
INSERT INTO `temp_texto` (`id`, `texto`, `empresa`, `cabecalho`, `cliente`, `ip`, `data`, `hora`, `modelo`, `assinatura`) VALUES ('12', '<div><b><font size=\"5\">fdafdsaf dfdsf a f</font></b></div><div><br></div><div><b><b>aaaaaaa, , , , nascido(a) em 11/11/1111, inscrito(a) no CPF sob o n.� , sob identidade n.� , filho de  e , residente e domiciliado(a) � , , bairro , munic�pio de  ? ? CEP: , email: aaassssaaa@hotmail.com, telefone: (00) 0000-0000</b></b></div><div><b><b><br></b></b></div><div><b><b>aaaaaaa <br></b></b></div><div><br></div><div><b>Belo Horizonte</b></div><div><b><b><br></b></b></div>', '1', 'Sim', '13', '127.0.0.1', '2025-03-31', '21:16:31', '18', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('1', 'Alessandro Marques', 'alessandro@alzaos.com.br', '', '$2y$10$hobMJ9hntdES8UKCkCHYs.UXqLH.4oVuw7Ivy2ye3eJ3pZrk094OK', 'Administrador', 'Sim', '(94) 99665-5467', 'Rua Vinte e Quatro', '24-05-2025-16-55-01-Foto-perfil.png', '2025-02-01', '', '0', '', 'd13137c94f6a73a5a25c8af54a69c6d4efa1f36258c6bdd076bb4eada8fe2bf8', '2006-03-09', '8', 'Alameda dos Sonhos', 'S�o Lu�s', 'MA', '65055-462', 'Sim', '', 'Sim', '', '', '', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('7', 'Gerente SAAS', 'gerente@hotmail.com', '', '$2y$10$1k0gtweYlk/TML2r1hYYiOEOmY3ZVJ5ExumzkKa3qDjHhQ9DCWhzC', 'Comum', 'Sim', '(31) 9999-9999', '', 'sem-foto.jpg', '2025-02-03', '', '0', '', '', '', '', '', '', '', '', 'Sim', '', 'Sim', '', '', '', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('61', 'Mano Zambrano', 'mano@gostinhodeminaslz.com.br', '', '$2y$10$MWkfa4x2fEKy4KkEYJPsOua4SIWuEYb7jj1/RDcVv3AumrKNBwgT.', 'Dono', 'Sim', '(98) 8185-0435', 'RUA BOM JESUS', 'sem-foto.jpg', '2025-05-24', '', '35', '', '', '2025-05-24', '15', 'JARDIM SAO CRISTOVAO', 'SAO LUIS', 'MA', '65.055-050', 'Sim', '', '', 'QUADRA 136 A;LOTE 03', '', '35', '', '', '', '', '');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senha_crip`, `nivel`, `ativo`, `telefone`, `endereco`, `foto`, `data`, `comissao`, `id_ref`, `pix`, `token`, `data_nasc`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `acessar_painel`, `cpf`, `mostrar_registros`, `complemento`, `tipo_chave`, `empresa`, `salario`, `valor_hora`, `hora_entrada`, `hora_saida`, `jornada_horas`) VALUES ('62', 'Eduardo', 'eduardo@gostinhodeminaslz.com.br', '', '$2y$10$CfoiofbldU/mTRXl2.gD/OU9xxV9vtY.5PiDbBNyxJik3HAiY3l9a', 'Entregador', 'Sim', '(11) 11111-1111', 'Rua Vinte e Quatro', 'sem-foto.jpg', '2025-05-24', '0.00', '', '111.111.111-11', '', '2006-03-09', '8', 'Alameda dos Sonhos', 'S�o Lu�s', 'MA', '65055-462', 'Sim', '', '', '', 'CPF', '35', '150000.00', '1.00', '08:30:00', '19:30:00', '00:00:00');

-- TABLE: usuarios_permissoes
CREATE TABLE `usuarios_permissoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `permissao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
INSERT INTO `videos` (`id`, `titulo`, `link`) VALUES ('3', 'Como utilizar o sistema', 'https://www.instagram.com/ale._mrqs/');

