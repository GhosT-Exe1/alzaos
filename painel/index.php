<?php
@session_start();
require_once("../conexao.php");
require_once(__DIR__ . '/../vendor/autoload.php');
require_once("verificar.php");


$id_empresa = @$_SESSION['empresa'];

$query = $pdo->query("SELECT * from config where empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas == 0) {
    $pdo->query("INSERT INTO config SET nome = '', email = '', telefone = '', logo = 'sem-foto.png', logo_rel = 'sem-foto.png', icone = 'sem-foto.png', ativo = 'Sim', multa_atraso = '0', juros_atraso = '0', marca_dagua = 'Sim', assinatura_recibo = 'Não', impressao_automatica = 'Não', api_whatsapp = 'Sim', alterar_acessos = 'Não', abertura_caixa = 'Sim', empresa = '$id_empresa', logo_painel = 'sem-foto.png'");
}

// LINHA DE DEBUG TEMPORÁRIA: Ponto de Verificação 4
// die('DEBUG_POINT_4: Apos carregar config');

//trazer as configurações
require_once("buscar_config.php");

// LINHA DE DEBUG TEMPORÁRIA: Ponto de Verificação 5
// die('DEBUG_POINT_5: Apos buscar_config.php'); // Manter a linha comentada por enquanto

$data_atual = date('Y-m-d');
$mes_atual = Date('m');
$ano_atual = Date('Y');
$data_inicio_mes = $ano_atual . "-" . $mes_atual . "-01";
$data_inicio_ano = $ano_atual . "-01-01";

$data_ontem = date('Y-m-d', strtotime("-1 days", strtotime($data_atual)));
$data_amanha = date('Y-m-d', strtotime("+1 days", strtotime($data_atual)));


if ($mes_atual == '04' || $mes_atual == '06' || $mes_atual == '09' || $mes_atual == '11') {
	$data_final_mes = $ano_atual . '-' . $mes_atual . '-30';
} else if ($mes_atual == '02') {
	$bissexto = date('L', @mktime(0, 0, 0, 1, 1, $ano_atual));
	if ($bissexto == 1) {
		$data_final_mes = $ano_atual . '-' . $mes_atual . '-29';
	} else {
		$data_final_mes = $ano_atual . '-' . $mes_atual . '-28';
	}
} else {
	$data_final_mes = $ano_atual . '-' . $mes_atual . '-31';
}



$id_usuario = @$_SESSION['id'];
$query = $pdo->query("SELECT * from usuarios where id = '$id_usuario'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	$nome_usuario = $res[0]['nome'];
	$nome_usuario_perfil = $res[0]['nome'];
	$email_usuario = $res[0]['email'];
	$telefone_usuario = $res[0]['telefone'];
	$senha_usuario = $res[0]['senha'];
	$nivel_usuario = $res[0]['nivel'];
	$foto_usuario = $res[0]['foto'];
	$endereco_usuario = $res[0]['endereco'];
	$mostrar_registros = $res[0]['mostrar_registros'];
	$data_nasc_usuario = $res[0]['data_nasc'];
	$data_nasc_usuarioF = implode('/', array_reverse(@explode('-', $data_nasc_usuario)));
	$numero_usuario = $res[0]['numero'];
	$bairro_usuario = $res[0]['bairro'];
	$cidade_usuario = $res[0]['cidade'];
	$estado_usuario = $res[0]['estado'];
	$cep_usuario = $res[0]['cep'];
	$complemento_usuario = $res[0]['complemento'];
	$empresa_usuario = $res[0]['empresa'];
} else {
	echo '<script>window.location="../login"</script>';
	exit();
}


$pag_inicial = 'home';
if (@$_SESSION['nivel'] != 'Administrador') {
	if($empresa_usuario > 0){
		require_once("verificar_permissoes.php");
	}
	
}


if($limitar_recursos == 'Sim'){
	require_once("verificar_permissoes_recursos.php");
}

if (@$_GET['pagina'] != "") {
	$pagina = @$_GET['pagina'];
} else {
	$pagina = $pag_inicial;
}


//verificar caixa aberto
$query1 = $pdo->query("SELECT * from caixas where operador = '$id_usuario' and data_fechamento is null and empresa = '$id_empresa' order by id desc limit 1");
$res1 = $query1->fetchAll(PDO::FETCH_ASSOC);
if (@count($res1) > 0) {
	$texto_caixa = '<small><span style="color:green"> (Aberto)</span></small>';
} else {
	$texto_caixa = '<small><span style="color:red"> (Fechado)</span></small>';
}



//inserir as formas de pagametnos padrão
$query = $pdo->query("SELECT * from formas_pgto where nome = 'Pix' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas == 0) {
	$pdo->query("INSERT INTO formas_pgto SET nome = 'Pix' , empresa = '$id_empresa', taxa = 0");
}

$query = $pdo->query("SELECT * from formas_pgto where nome = 'Boleto' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas == 0) {
	$pdo->query("INSERT INTO formas_pgto SET nome = 'Boleto' , empresa = '$id_empresa', taxa = 0");
}

$query = $pdo->query("SELECT * from formas_pgto where nome = 'Cartão de Crédito' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas == 0) {
	$pdo->query("INSERT INTO formas_pgto SET nome = 'Cartão de Crédito' , empresa = '$id_empresa', taxa = 0");
}

$query = $pdo->query("SELECT * from formas_pgto where nome = 'Cartão de Débito' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas == 0) {
	$pdo->query("INSERT INTO formas_pgto SET nome = 'Cartão de Débito' , empresa = '$id_empresa', taxa = 0");
}



$query = $pdo->query("SELECT * from cargos where nome = 'Técnico' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas == 0) {
	$pdo->query("INSERT INTO cargos SET nome = 'Técnico' , empresa = '$id_empresa'");
}


?>
<!DOCTYPE HTML>
<html lang="pt-BR" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>


	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Sistema de Alessandro Marques">
	<meta name="Author" content="Alessandro Marques">
	<meta name="Keywords" content="sistemas, sistemas alza, erp, gestor, empresas" />

	<title><?php echo $nome_sistema ?></title>

	<link rel="icon" href="../img/<?php echo $icone_sistema ?>" type="image/x-icon" />
	<link href="../assets/css/icons.css" rel="stylesheet">
	<link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/style-dark.css" rel="stylesheet">
	<link href="../assets/css/style-transparent.css" rel="stylesheet">
	<link href="../assets/css/skin-modes.css" rel="stylesheet" />
	<link href="../assets/css/animate.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link href="../assets/css/custom.css" rel="stylesheet" />
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>

	<link rel="stylesheet" href="css/monthly.css">

	<!-- fontawesome-->
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">


	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


	<!-- SweetAlert CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

	<!-- SweetAlert JS -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



	<!-- Trumbowyg  -->
    <link rel="stylesheet" href="../dist/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="../dist/plugins/emoji/ui/trumbowyg.emoji.min.css">
    <link rel="stylesheet" href="../dist/plugins/colors/ui/trumbowyg.colors.min.css">
	

</head>

<body class="ltr main-body app sidebar-mini">

	<?php if ($mostrar_preloader == 'Sim') { ?>
		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="../img/loader.gif" class="loader-img loader loader_mobile" alt="">
		</div>
		<!-- /GLOBAL-LOADER -->
	<?php } ?>

	<!-- Page -->
	<div class="page">

		<div>
			<!-- CABEÇALHO -->
			<div class="main-header side-header sticky nav nav-item">
				<div class=" main-container container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo logo_painel">
							<a href="index.php" class="header-logo">
								<img src="../img/<?php echo $logo_painel ?>" class="obile-logo dark-logo-1 logo_painel" alt="logo"
									style="margin-left: 50px !important">
							</a>
						</div>
						<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
							<a id="btn_max" class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left"></i></a>
							<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
						</div>
						<div class="logo-horizontal">
							<a href="index.php" class="header-logo">
								<img src="../img/<?php echo $logo_painel ?>" class="mobile-logo logo-1" alt="logo">
								<img src="../img/<?php echo $logo_painel ?>" class="mobile-logo dark-logo-1" alt="logo">
							</a>
						</div>
						<div class="main-header-center ms-4 d-sm-none d-md-none d-lg-block form-group">
						</div>
					</div>
					<!-- Adiiconar data -->
					<div class="ocultar_mobile ocultar_tablet">
						<?php
						$hora = date('H');

						$diaMes = date('d');
						$diaSemana = date('w');
						$mes = date('n') - 1;
						$ano = date('Y');

						$nomesDiasDaSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];

						$nomeDosMeses = ['Janeiro', 'Fevereiro', 'março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

						$dataFormatada = $nomesDiasDaSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomeDosMeses[$mes] . ' de ' . $ano;

						if ($hora < 12 && $hora >= 6)
							$saudacao = "Bom Dia";

						if ($hora >= 12 && $hora < 18)
							$saudacao = "Boa Tarde";

						if ($hora >= 18 && $hora <= 23)
							$saudacao = "Boa Noite";
						if ($hora < 6 && $hora >= 0)
							$saudacao = "Boa madrugada";

						$primeiroNome = substr($nome_usuario, 0, strpos($nome_usuario, ' '));


						?>
						<div style="font-size: 15px; color: #A9ABBD">
							<?php echo $saudacao . ' <b>' . $primeiroNome ?>
						</div>

					</div>

					<!-- Fim da data -->


					<div class="main-header-right">

						<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
							<div class="" id="navbarSupportedContent-4">
								<ul class="nav nav-item header-icons navbar-nav-right ms-auto">

									<li class="dropdown nav-item" style="opacity: 0">
										------------
									</li>



									<li class="dropdown nav-item ">
										<a class="new nav-link theme-layout nav-link-bg layout-setting">
											<span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs"
													width="24" height="24" viewBox="0 0 24 24">
													<path
														d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z" />
												</svg></span>
											<span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs"
													width="24" height="24" viewBox="0 0 24 24">
													<path
														d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z" />
												</svg></span>
										</a>
									</li>


									<?php
									if ($mostrar_registros == 'Não') {
										$query = $pdo->query("SELECT * from receber where vencimento < curDate() and pago != 'Sim' and usuario_lanc = '$id_usuario' and empresa = '$id_empresa' order by id asc");
									} else {
										$query = $pdo->query("SELECT * from receber where vencimento < curDate() and pago != 'Sim' and empresa = '$id_empresa' order by id asc");
									}
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$linhas = @count($res);
									?>

									<li class="dropdown nav-item  main-header-message <?php echo @$receber ?>">
										<a class="new nav-link" data-bs-toggle="dropdown" href="javascript:void(0);">
											<small><i class="fa fa-dollar"></i></small>
											<span class="badge  header-badge" style="background:green"><?php echo $linhas ?></span>
										</a>



										<div class="dropdown-menu">
											<div class="menu-header-content text-start border-bottom">
												<div class="d-flex">
													<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Contas a Receber</h6>

												</div>
												<p class="dropdown-title-text subtext mb-0 op-6 pb-0 tx-12 "><?php echo $linhas ?> Contas
													Vencidas!</p>
											</div>
											<div class="main-message-list chat-scroll">

												<?php
												if ($mostrar_registros == 'Não') {
													$query = $pdo->query("SELECT * from receber where vencimento < curDate() and pago != 'Sim' and usuario_lanc = '$id_usuario' and empresa = '$id_empresa' order by id asc");
												} else {
													$query = $pdo->query("SELECT * from receber where vencimento < curDate() and pago != 'Sim' and empresa = '$id_empresa' order by id asc");
												}
												$res = $query->fetchAll(PDO::FETCH_ASSOC);
												$linhas = @count($res);
												for ($i = 0; $i < $linhas; $i++) {
													$valor = $res[$i]['valor'];
													$vencimento = $res[$i]['vencimento'];
													$valorF = @number_format($valor, 2, ',', '.');
													$vencimentoF = implode('/', array_reverse(@explode('-', $vencimento)));
												?>

													<a href="receber" class="dropdown-item d-flex border-bottom">

														<div class="wd-90p">
															<div class="d-flex">
																<h5 class="mb-0 name" style="color:green">R$ <?php echo $valorF ?></h5>
															</div>
															<p class="mb-0 desc"><?php echo $res[$i]['descricao'] ?> </p>
															<p class="time mb-0 text-start float-start ms-2"><?php echo $vencimentoF ?> </p>
														</div>
													</a>

												<?php } ?>


											</div>
											<div class="text-center dropdown-footer">
												<a class="btn btn-primary btn-sm btn-block text-center" href="receber">Ver Todas</a>
											</div>
										</div>
									</li>




									<?php
									if ($mostrar_registros == 'Não') {
										$query = $pdo->query("SELECT * from pagar where vencimento < curDate() and pago != 'Sim' and usuario_lanc = '$id_usuario' and empresa = '$id_empresa' order by id asc");
									} else {
										$query = $pdo->query("SELECT * from pagar where vencimento < curDate() and pago != 'Sim' and empresa = '$id_empresa' order by id asc");
									}
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$linhas = @count($res);
									?>

									<li class="dropdown nav-item  main-header-message <?php echo @$pagar ?>">
										<a class="new nav-link" data-bs-toggle="dropdown" href="javascript:void(0);">
											<small><i class="fa fa-dollar"></i></small>
											<span class="badge  header-badge" style="background:red"><?php echo $linhas ?></span>
										</a>



										<div class="dropdown-menu" >
											<div class="menu-header-content text-start border-bottom">
												<div class="d-flex">
													<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Contas a Pagar</h6>

												</div>
												<p class="dropdown-title-text subtext mb-0 op-6 pb-0 tx-12 "><?php echo $linhas ?> Contas Vencidas!</p>
											</div>

											<div class="main-message-list Notification-scroll">

												<?php
												if ($mostrar_registros == 'Não') {
													$query = $pdo->query("SELECT * from pagar where vencimento < curDate() and pago != 'Sim' and usuario_lanc = '$id_usuario' and empresa = '$id_empresa' order by id asc");
												} else {
													$query = $pdo->query("SELECT * from pagar where vencimento < curDate() and pago != 'Sim' and empresa = '$id_empresa' order by id asc");
												}
												$res = $query->fetchAll(PDO::FETCH_ASSOC);
												$linhas = @count($res);
												for ($i = 0; $i < $linhas; $i++) {
													$valor = $res[$i]['valor'];
													$valorF = @number_format($valor, 2, ',', '.');
													$vencimentoF = implode('/', array_reverse(@explode('-', $vencimento)));
												?>

													<a href="pagar" class="dropdown-item d-flex border-bottom">

														<div class="wd-90p">
															<div class="d-flex">
																<h5 class="mb-0 name" style="color:red">R$ <?php echo $valorF ?></h5>
															</div>
															<p class="mb-0 desc"><?php echo $res[$i]['descricao'] ?> </p>
															<p class="time mb-0 text-start float-start ms-2"><?php echo $vencimentoF ?> </p>
														</div>
													</a>

												<?php } ?>


											</div>
											<div class="text-center dropdown-footer">
												<a class="btn btn-primary btn-sm btn-block text-center" href="pagar">Ver Todas</a>
											</div>
										</div>
									</li>



									<li class="nav-item full-screen fullscreen-button">
										<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg
												xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24"
												viewBox="0 0 24 24">
												<path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z" />
											</svg></a>
									</li>

									<li class="dropdown main-profile-menu nav nav-item nav-link ps-lg-2">
										<a class="new nav-link profile-user d-flex" href="#" data-bs-toggle="dropdown"><img
												src="../sas/images/perfil/<?php echo $foto_usuario ?>"></a>
										<div class="dropdown-menu">
											<div class="menu-header-content p-3 border-bottom">
												<div class="d-flex wd-100p">
													<div class="main-img-user"><img src="../sas/images/perfil/<?php echo $foto_usuario ?>"></div>
													<div class="ms-3 my-auto">
														<h6 class="tx-15 font-weight-semibold mb-0"><?php echo $nome_usuario ?></h6><span
															class="dropdown-title-text subtext op-6  tx-12"><?php echo $nivel_usuario ?></span>
													</div>
												</div>
											</div>
											<a class="dropdown-item" href="" data-bs-target="#modalPerfil" data-bs-toggle="modal"><i
													class="fa fa-user"></i>Perfil</a>
											<span class="<?php echo @$configuracoes ?>"><a class="dropdown-item " href=""
													data-bs-target="#modalConfig" data-bs-toggle="modal"><i class="fa fa-cogs "></i>
													Configurações</a>
											</span>

											<?php if($empresa_usuario == "" || $empresa_usuario == 0){ ?>
											<span ><a class="dropdown-item " href="../sas/"
													><i class="fa fa-hand-o-left "></i>
													Painel SAAS</a>
											</span>
										<?php } ?>

											<a class="dropdown-item" href="logout.php"><i class="fa fa-arrow-left"></i> Sair</a>
										</div>
									</li>


								</ul>
							</div>
						</div>

					</div>
				</div>
			</div> <!-- /APP-HEADER -->

			<!--APP-SIDEBAR-->
			<div class="sticky" style="z-index: 1000 !important">
				<aside class="app-sidebar">
					<div class="main-sidebar-header active">
						<a class="header-logo active" href="index.php">
							<img src="../img/<?php echo $logo_painel ?>" class="main-logo  desktop-logo" alt="logo">
							<img src="../img/<?php echo $logo_painel ?>" class="main-logo  desktop-dark" alt="logo">
							<img src="../img/<?php echo $icone_sistema ?>" class="main-logo  mobile-logo" alt="logo">
							<img src="../img/<?php echo $icone_sistema ?>" class="main-logo  mobile-dark" alt="logo">
						</a>
					</div>
					<div class="main-sidemenu">
						<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
								width="24" height="24" viewBox="0 0 24 24">
								<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
							</svg></div>
						<ul class="side-menu">
							<li class="slide <?php echo @$home ?>">
								<a class="side-menu__item" href="index.php">
									<i class="fa fa-home text-white"></i>
									<span class="side-menu__label" style="margin-left: 15px">Dashboard</span></a>
							</li>
							<li class="slide <?php echo @$menu_pessoas ?>">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
									<i class="fa fa-users text-white mt-1"></i>
									<span class="side-menu__label" style="margin-left: 15px">Pessoas</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li class="<?php echo @$clientes ?>"><a class="slide-item" href="clientes"> Clientes</a></li>
									<li class="<?php echo @$usuarios ?>"><a class="slide-item" href="usuarios"> Usuários</a></li>
									<li class="<?php echo @$funcionarios ?>"><a class="slide-item" href="funcionarios"> Funcionários</a>
									</li>
									<li class="<?php echo @$fornecedores ?>"><a class="slide-item" href="fornecedores"> Fornecedores</a>
									</li>
								</ul>
							</li>


							<li class="slide <?php echo @$menu_cadastros ?>">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
									<i class="fa fa-save text-white mt-1"></i>
									<span class="side-menu__label" style="margin-left: 15px">Cadastros</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">

									<li class="<?php echo @$modelos_contratos ?> <?php echo $gestao_contratos ?>"><a class="slide-item" href="modelos_contratos"> Modelos Contratos</a>

									<li class="<?php echo @$equipamentos ?>"><a class="slide-item" href="equipamentos"> Equipamentos</a></li>

									<li class="<?php echo @$marcas ?>"><a class="slide-item" href="marcas"> Marcas</a></li>

									<li class="<?php echo @$modelos ?>"><a class="slide-item" href="modelos"> Modelos</a></li>

									<li class="<?php echo @$servicos ?>"><a class="slide-item" href="servicos"> Serviços</a></li>

									<li class="<?php echo @$formas_pgto ?>"><a class="slide-item" href="formas_pgto"> Formas Pgto</a></li>
									<li class="<?php echo @$frequencias ?> "><a class="slide-item" href="frequencias"> Frequências</a>
									</li>
									<li class="<?php echo @$cargos ?> "><a class="slide-item" href="cargos"> Cargos</a></li>

									<?php if($empresa_usuario == "" || $empresa_usuario == 0){ ?>
									<?php if ($alterar_acessos == 'Sim') { ?>
										<li class="<?php echo @$grupo_acessos ?>"><a class="slide-item" href="grupo_acessos"> Grupos de
												Acessos</a></li>
										<li class="<?php echo @$acessos ?>"><a class="slide-item" href="acessos">
												Acessos</a></li>
									<?php } } ?>
								</ul>
							</li>



							<li class="slide <?php echo @$menu_produtos ?>">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fa fa-shopping-cart text-white mt-1"></i>
                                        <span class="side-menu__label" style="margin-left: 15px">Produtos</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">

                                        <li class="<?php echo $categorias ?>"><a class="slide-item" href="categorias"> Categorias</a></li>

                                        <li class="<?php echo $sub_categorias ?>"><a class="slide-item" href="sub_categorias"> Sub Categoria</a></li>

                                        <li class="<?php echo $produtos ?>"><a class="slide-item" href="produtos"> Produtos</a></li>

                                        <li class="<?php echo $entradas ?>"><a class="slide-item" href="entradas"> Entradas</a></li>

                                        <li class="<?php echo $saidas ?>"><a class="slide-item" href="saidas"> Saídas</a></li>

                                        <li class="<?php echo $estoque ?>"><a class="slide-item" href="estoque"> Estoque Baixo</a></li>

                                         <li class="<?php echo $compras ?>"><a class="slide-item" href="compras"> Compras</a></li>


                                        <li class="<?php echo @$rel_prod_vendidos ?> "><a class="slide-item" href="" data-bs-toggle="modal" data-bs-target="#modalRelProd">Produtos Mais Vendidos</a></li>

                                    </ul>
                                </li>


								<!-- Menu Nuvem Fiscal -->
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fa fa-university text-white mt-1"></i>
										<span class="side-menu__label" style="margin-left: 15px">Fiscal</span><i class="angle fe fe-chevron-right"></i></a>
										<ul class="slide-menu">
											<li class="<?php echo $config_fiscal ?>"><a class="slide-item" href="config_fiscal">Configurações</a></li>
											<li class="<?php echo $fiscal ?>"><a class="slide-item" href="fiscal">Notas Fiscais</a></li>
										</ul>
									</li>


									<!-- Fim Menu Nuvem Fiscal -->



                                  <li class="slide <?php echo @$vendas ?>">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="vendas"><i class="fa fa-money text-white mt-1"></i>
                                        <span class="side-menu__label" style="margin-left: 15px">Vendas</span></a>

                                </li>


                                 <li class="slide <?php echo @$orcamentos ?> <?php echo @$orcamentos_rec ?>">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="orcamentos"><i class="fa fa-file text-white mt-1"></i>
                                        <span class="side-menu__label" style="margin-left: 15px">Orçamentos</span></a>

                                </li>


                                 <li class="slide <?php echo @$os ?> <?php echo @$os_rec ?>">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="os"><i class="fa fa-file-pdf text-white mt-1"></i>
                                        <span class="side-menu__label" style="margin-left: 15px">OS</span></a>

                                </li>


							<li class="slide <?php echo @$menu_financeiro ?>">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
									<i class="fa fa-dollar text-white mt-1"></i>
									<span class="side-menu__label" style="margin-left: 15px">Financeiro</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li class="<?php echo @$pagar ?> "><a class="slide-item" href="pagar">Contas a Pagar</a></li>
									<li class="<?php echo @$receber ?> "><a class="slide-item" href="receber">Contas a Receber</a></li>
									<li class="<?php echo @$cobrancas ?> <?php echo $cobrancas_rec ?>"><a class="slide-item" href="cobrancas">Cobranças Recorrentes</a></li>

									<li class="<?php echo @$lista_vendas ?>"><a class="slide-item" href="lista_vendas">Lista de Vendas</a></li>

									<li class="<?php echo @$comissoes ?>"><a class="slide-item" href="comissoes">Comissões</a></li>

									<li class="<?php echo @$minhas_comissoes ?>"><a class="slide-item" href="minhas_comissoes">Minhas Comissões</a></li>

								</ul>
							</li>

							<li class="slide <?php echo @$menu_relatorios ?>">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
									<i class="fa-solid fa-file-pdf text-white mt-1"></i>
									<span class="side-menu__label" style="margin-left: 15px">Rel Financeiro</span><i
										class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li class="<?php echo @$rel_financeiro ?> ocultar_mobile_app"><a class="slide-item" href=""
											data-bs-toggle="modal" data-bs-target="#modalRelFin"> Relatório Financeiro</a></li>
									<li class="<?php echo @$rel_sintetico_despesas ?> ocultar_mobile_app"><a class="slide-item" href=""
											data-bs-toggle="modal" data-bs-target="#modalRelSinDesp"> Rel Sintético Despesas</a></li>
									<li class="<?php echo @$rel_sintetico_receber ?> ocultar_mobile_app"><a class="slide-item" href=""
											data-bs-toggle="modal" data-bs-target="#modalRelSinRec"> Rel Sintético Receber</a></li>
									<li class="<?php echo @$rel_balanco ?> ocultar_mobile_app"><a class="slide-item"
											href="rel/balanco_anual_class.php" target="_blank"> Rel Balanço Anual</a></li>
									<li class="<?php echo @$rel_inadimplementes ?> ocultar_mobile_app"><a class="slide-item"
											href="rel/sintetico_inadimplentes_class.php" target="_blank"> Rel Inadimplementes</a></li>
								</ul>
							</li>


							<li class="slide">
								<a class="side-menu__item " href="site">
									<i class="fa fa-globe text-white"></i>
									<span class="side-menu__label" style="margin-left: 15px">Dados do Site</span></a>
							</li>


							<li class="slide <?php echo @$caixas ?>">
								<a class="side-menu__item" href="caixas">
									<i class="fa fa-briefcase text-white"></i>
									<span class="side-menu__label" style="margin-left: 15px">Caixas <?php echo $texto_caixa ?></span></a>
							</li>

							<li class="slide <?php echo @$tarefas ?>">
								<a class="side-menu__item" href="tarefas">
									<i class="fa fa-calendar text-white"></i>
									<span class="side-menu__label" style="margin-left: 15px">Tarefas / Agenda</span></a>
							</li>

							<li class="slide <?php echo @$anotacoes ?>">
								<a class="side-menu__item" href="anotacoes">
									<i class="fa fa-file-signature text-white"></i>
									<span class="side-menu__label" style="margin-left: 15px">Anotações</span></a>
							</li>
							

							<li class="slide <?php echo @$mensalidades ?>">
								<a class="side-menu__item" href="mensalidades">
									<i class="fa fa-money text-white"></i>
									<span class="side-menu__label" style="margin-left: 15px">Mensalidades Sistema</span></a>
							</li>


							<li class="slide <?php echo @$rel_contratos ?> <?php echo @$gestao_contratos ?>">
								<a class="side-menu__item" href="rel_contratos">
									<i class="fa fa-file-pdf text-white"></i>
									<span class="side-menu__label" style="margin-left: 15px">Gerar Contratos</span></a>
							</li>


							<li class="slide <?php echo @$marketing ?> <?php echo @$marketing_whats ?>">
								<a class="side-menu__item" href="marketing">
									<i class="fa fa-comment-o text-white"></i>
									<span class="side-menu__label" style="margin-left: 15px">Marketing</span></a>
							</li>


							 <li class="slide <?php echo @$rh ?> ">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="rh"><i class="fa fa-calendar text-white mt-1"></i>
                                        <span class="side-menu__label" style="margin-left: 15px">RH</span></a>

                                </li>
						


							<li class="slide <?php echo @$dispositivos ?>">
								<a class="side-menu__item" href="dispositivos">
									<i class="fa fa-mobile text-white"></i>
									<span class="side-menu__label" style="margin-left: 15px">Conectar Whatsapp</span></a>
							</li>


							<li class="slide">
								<a class="side-menu__item <?php echo @$chamados ?>" href="chamados">
									<i class="fa fa-phone-square text-white"></i>
									<span class="side-menu__label" style="margin-left: 15px">Abertura Chamados</span></a>
							</li>


							<li class="slide">
								<a class="side-menu__item" href="tutoriais">
									<i class="fa fa-video text-white"></i>
									<span class="side-menu__label" style="margin-left: 15px">Tutoriais</span></a>
							</li>

						</ul>
						<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
								height="24" viewBox="0 0 24 24">
								<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
							</svg></div>
					</div>
				</aside>
			</div> <!--/APP-SIDEBAR-->
		</div>

		<!-- MAIN-CONTENT -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid ">

				<?php
				//Classe para ocultar mobile
				if ($ocultar_mobile == 'Sim') { ?>
					<style type="text/css">
						@media only screen and (max-width: 700px) {
							.ocultar_mobile_app {
								display: none;
							}
						}
					</style>
				<?php } ?>


				<?php
				echo "<script>localStorage.setItem('pagina', '$pagina')</script>";
				require_once('paginas/' . $pagina . '.php');
				?>


			</div>
			<!-- Container closed -->
		</div>
		<!-- MAIN-CONTENT CLOSED -->








		<!--######################## RODAPÉ ###########################-->
		<?php if ($pagina != 'vendas') { ?>
			<div class="main-footer">
				<div class="container-fluid pt-0 ht-100p">
					Copyright © <?php echo date('Y'); ?> Desevolverdor <a href="https://www.instagram.com/aleedevv/" target="_blank"
						class="text-primary"> ALZA OS</a>. Todos
					os direitos reservados
				</div>
			</div>
		<?php } ?>
		<!-- FOOTER END -->


	</div>
	<!-- End Page -->

	<!-- BUYNOW-MODAL -->



	<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>


	<!-- GRAFICOS -->
	<script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>
	<script src="../assets/js/apexcharts.js"></script>

	<!--INTERNAL  INDEX JS -->
	<script src="../assets/js/index.js"></script>



	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/moment/moment.js"></script>
	<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>
	<script src="../assets/js/eva-icons.min.js"></script>
	<script src="../assets/plugins/side-menu/sidemenu.js"></script>
	<script src="../assets/js/sticky.js"></script>
	<script src="../assets/plugins/sidebar/sidebar.js"></script>
	<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>


	<!-- INTERNAL DATA TABLES -->
	<script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
	<script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
	<script src="../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
	<script src="../assets/plugins/datatable/js/jszip.min.js"></script>
	<script src="../assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
	<script src="../assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
	<script src="../assets/plugins/datatable/js/buttons.html5.min.js"></script>
	<script src="../assets/plugins/datatable/js/buttons.print.min.js"></script>
	<script src="../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
	<script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
	<script src="../assets/plugins/datatable/responsive.bootstrap5.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


	<!-- POPOVER JS -->
	<script src="../assets/js/popover.js"></script>

	<script src="../assets/js/themecolor.js"></script>
	<script src="../assets/js/custom.js"></script>

	<!--INTERNAL  INDEX JS -->
	<script src="../assets/js/index.js"></script>

<!-- FULLCALENDER -->
<script src="../fullcalendar/dist/index.global.min.js"></script>
<script src="../fullcalendar/core/locales/pt-br.global.min.js"></script>
<script src="js/fullcalendar.js"></script>

</body>

</html>


<!-- Modal Perfil -->
<div class="modal fade" id="modalPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title">Alterar Dados</h4>
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form-perfil">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 mb-3 needs-validation was-validated">
							<label>Nome</label>
							<input type="text" class="form-control" id="nome_perfil" name="nome" placeholder="Seu Nome"
								value="<?php echo @$nome_usuario_perfil ?>" required>
						</div>
						<div class="col-md-3 mb-2 col-6">
							<label>Telefone</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
								</div>
								<input type="text" class="form-control" id="telefone_perfil" name="telefone" placeholder="Seu Telefone"
								value="<?php echo @$telefone_usuario ?>" required>
							</div>
						</div>
						<div class="col-md-3 mb-2 col-6">
							<label>Data Nascimento</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
								</div>
								<input type="text" class="form-control" id="data_nasc_perfil" name="data_nasc" placeholder=""
								value="<?php echo @$data_nasc_usuarioF ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-2 col-6">
							<label>Email</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
								</div>
								<input type="email" class="form-control" id="email_perfil" name="email" placeholder="Seu Nome"
								value="<?php echo @$email_usuario ?>" required>
							</div>
						</div>
						<div class="col-md-3 mb-3 needs-validation was-validated">
							<label>Senha</label>
							<input type="password" class="form-control" id="senha_perfil" name="senha" placeholder="Senha"
								value="<?php echo @$senha_usuario ?>" required>
						</div>
						<div class="col-md-3 mb-3 needs-validation was-validated">
							<label>Confirmar Senha</label>
							<input type="password" class="form-control" id="conf_senha_perfil" name="conf_senha"
								placeholder="Confirmar Senha" value="" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 mb-2">
							<label>CEP</label>
							<input type="text" class="form-control" id="cep_perfil" name="cep" placeholder="CEP"
								onblur="pesquisacepperfil(this.value);" value="<?php echo @$cep_usuario ?>">
						</div>
						<div class="col-md-7 mb-2">
							<label>Rua</label>
							<input type="text" class="form-control" id="endereco_perfil" name="endereco" placeholder="Rua"
								value="<?php echo @$endereco_usuario ?>">
						</div>
						<div class="col-md-2 mb-2">
							<label>Número</label>
							<input type="text" class="form-control" id="numero_perfil" name="numero" placeholder="Número"
								value="<?php echo @$numero_usuario ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 mb-2">
							<label>Complemento</label>
							<input type="text" class="form-control" id="complemento_perfil" name="complemento" placeholder="Bloco A AP 150" value="<?php echo @$complemento_usuario ?>">
						</div>
						<div class="col-md-4 mb-2">
							<label>Bairro</label>
							<input type="text" class="form-control" id="bairro_perfil" name="bairro" placeholder="Bairro"
								value="<?php echo @$bairro_usuario ?>">
						</div>
						<div class="col-md-4 mb-2">
							<label>Cidade</label>
							<input type="text" class="form-control" id="cidade_perfil" name="cidade" placeholder="Cidade"
								value="<?php echo @$cidade_usuario ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 mb-2">
							<label>Estado</label>
							<select class="form-select" id="estado_perfil" name="estado" value="<?php echo @$estado_usuario ?>">
								<option value="">Selecionar</option>
								<option value="AC" <?php if ($estado_usuario == 'AC') { ?> selected <?php } ?>>Acre</option>
								<option value="AL" <?php if ($estado_usuario == 'AL') { ?> selected <?php } ?>>Alagoas</option>
								<option value="AP" <?php if ($estado_usuario == 'AP') { ?> selected <?php } ?>>Amapá</option>
								<option value="AM" <?php if ($estado_usuario == 'AM') { ?> selected <?php } ?>>Amazonas</option>
								<option value="BA" <?php if ($estado_usuario == 'BA') { ?> selected <?php } ?>>Bahia</option>
								<option value="CE" <?php if ($estado_usuario == 'CE') { ?> selected <?php } ?>>Ceará</option>
								<option value="DF" <?php if ($estado_usuario == 'DF') { ?> selected <?php } ?>>Distrito Federal</option>
								<option value="ES" <?php if ($estado_usuario == 'ES') { ?> selected <?php } ?>>Espírito Santo</option>
								<option value="GO" <?php if ($estado_usuario == 'MA') { ?> selected <?php } ?>>Goiás</option>
								<option value="MA" <?php if ($estado_usuario == 'AL') { ?> selected <?php } ?>>Maranhão</option>
								<option value="MT" <?php if ($estado_usuario == 'MT') { ?> selected <?php } ?>>Mato Grosso</option>
								<option value="MS" <?php if ($estado_usuario == 'MS') { ?> selected <?php } ?>>Mato Grosso do Sul</option>
								<option value="MG" <?php if ($estado_usuario == 'MG') { ?> selected <?php } ?>>Minas Gerais</option>
								<option value="PA" <?php if ($estado_usuario == 'PA') { ?> selected <?php } ?>>Pará</option>
								<option value="PB" <?php if ($estado_usuario == 'PB') { ?> selected <?php } ?>>Paraíba</option>
								<option value="PR" <?php if ($estado_usuario == 'PR') { ?> selected <?php } ?>>Paraná</option>
								<option value="PE" <?php if ($estado_usuario == 'PE') { ?> selected <?php } ?>>Pernambuco</option>
								<option value="PI" <?php if ($estado_usuario == 'PI') { ?> selected <?php } ?>>Piauí</option>
								<option value="RJ" <?php if ($estado_usuario == 'RJ') { ?> selected <?php } ?>>Rio de Janeiro</option>
								<option value="RN" <?php if ($estado_usuario == 'RN') { ?> selected <?php } ?>>Rio Grande do Norte
								</option>
								<option value="RS" <?php if ($estado_usuario == 'RS') { ?> selected <?php } ?>>Rio Grande do Sul</option>
								<option value="RO" <?php if ($estado_usuario == 'RO') { ?> selected <?php } ?>>Rondônia</option>
								<option value="RR" <?php if ($estado_usuario == 'RR') { ?> selected <?php } ?>>Roraima</option>
								<option value="SC" <?php if ($estado_usuario == 'SC') { ?> selected <?php } ?>>Santa Catarina</option>
								<option value="SP" <?php if ($estado_usuario == 'SP') { ?> selected <?php } ?>>São Paulo</option>
								<option value="SE" <?php if ($estado_usuario == 'SE') { ?> selected <?php } ?>>Sergipe</option>
								<option value="TO" <?php if ($estado_usuario == 'TO') { ?> selected <?php } ?>>Tocantins</option>
								<option value="EX" <?php if ($estado_usuario == 'EX') { ?> selected <?php } ?>>Estrangeiro</option>
							</select>
						</div>
						<div class="col-md-5 mb-3">
							<label>Foto</label>
							<input type="file" class="form-control" id="foto_perfil" name="foto" value="<?php echo @$foto_usuario ?>"
								onchange="carregarImgPerfil()">
						</div>
						<div class="col-md-3 mb-3">
						<img src="../sas/images/perfil/<?php echo $foto_usuario ?>" width="80px" id="target-usu">
						</div>
					</div>
					<input type="hidden" name="id_usuario" value="<?php echo @$id_usuario ?>">
					<br>
					<small>
						<div id="msg-perfil" align="center"></div>
					</small>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="btn_salvar_perfil">Salvar</button>
					<button class="btn btn-primary" type="button" id="btn_carregando_peril" style="display: none">
						<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...
					</button>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- Modal Config -->
<div class="modal fade" id="modalConfig" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title">Alterar Configurações</h4>
				<button id="btn-fechar-config" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form-config">
				<div class="modal-body">
					<div class="row mb-3">
						<div class="col-md-4">
							<label>Nome do Projeto</label>
							<input type="text" class="form-control" id="nome_sistema" name="nome_sistema"
								placeholder="Delivery Interativo" value="<?php echo @$nome_sistema ?>" required>
						</div>
						<div class="col-md-5 mb-2 col-6">
						<label>Email Sistema</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
								</div>
								<input type="email" class="form-control" id="email_sistema" name="email_sistema"
								placeholder="Email do Sistema" value="<?php echo @$email_sistema ?>">
							</div>
						</div>
						<div class="col-md-3 mb-2 col-6">
						<label>Telefone Sistema</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
								</div>
								<input type="text" class="form-control" id="telefone_sistema" name="telefone_sistema"
								placeholder="Telefone do Sistema" value="<?php echo @$telefone_sistema ?>" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label>CNPJ Sistema</label>
							<input type="text" class="form-control" id="cnpj_sistema" name="cnpj_sistema" placeholder="CNPJ"
								value="<?php echo @$cnpj_sistema ?>">
						</div>
						<div class="col-md-3">
							<label>Instagram</label>
							<input type="text" class="form-control" id="instagram_sistema" name="instagram_sistema"
								placeholder="Link do Instagram" value="<?php echo @$instagram_sistema ?>">
						</div>
						<div class="col-md-6">
							<label>Dados para Pagamentos</label>
							<input type="text" class="form-control" id="dados_pagamento" name="dados_pagamento"
								placeholder="Vai aparecer nas cobranças se preenchido" value="<?php echo @$dados_pagamento ?>">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-8">
							<label>Endereço <small>(Rua Número Bairro e Cidade)</small></label>
							<input type="text" class="form-control" id="endereco_sistema" name="endereco_sistema"
								placeholder="Rua X..." value="<?php echo @$endereco_sistema ?>">
						</div>
						<div class="col-md-2">
							<label>Multa Atraso Conta</label>
							<input type="text" class="form-control" id="multa_atraso" name="multa_atraso" placeholder="Valor em R$"
								value="<?php echo @$multa_atraso ?>">
						</div>
						<div class="col-md-2">
							<label>Júros Atraso Dia Conta</label>
							<input type="text" class="form-control" id="juros_atraso" name="juros_atraso" placeholder="Valor em %"
								value="<?php echo @$juros_atraso ?>">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-3">
							<label>
								<div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="Clique para ver as opções das apis" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">Mostrar ou não a assinatura nos recibos. <br><br>
												
											</p>
										</div>
									</div>
								</div>
								Assinatura Recibo
							</label>
							<select name="assinatura_recibo" class="form-select">
								<option value="Sim" <?php if ($assinatura_recibo == 'Sim') { ?> selected <?php } ?>>Sim</option>
								<option value="Não" <?php if ($assinatura_recibo == 'Não') { ?> selected <?php } ?>>Não</option>
							</select>
						</div>
						<div class="col-md-3">
							<label>
								<div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="Clique para ver as opções das apis" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">Se deixar ativado, ao clicar no botão de imprimir, o sistema irá imprimir automaticamente o recibo "Esta função só fuciona no navegadpor Firefox".
==
											</p>
										</div>
									</div>
								</div>
								Impressão Automática
							</label>
							<select name="impressao_automatica" class="form-select">
								<option value="Sim" <?php if ($impressao_automatica == 'Sim') { ?> selected <?php } ?>>Sim</option>
								<option value="Não" <?php if ($impressao_automatica == 'Não') { ?> selected <?php } ?>>Não</option>
							</select>
						</div>
						<div class="col-md-3">
							<label><div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="Clique para ver as opções das apis" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">"Se deixar ativado, você entrará automaticamente no sistema sem precisar inserir login e senha. Ative essa opção apenas se este computador for usado exclusivamente por você.".
												
											</p>
										</div>
									</div>
								</div> Entrar Automáticamente</label>
							<select name="entrar_automatico" class="form-select">
								<option value="Sim" <?php if ($entrar_automatico == 'Sim') { ?> selected <?php } ?>>Sim</option>
								<option value="Não" <?php if ($entrar_automatico == 'Não') { ?> selected <?php } ?>>Não</option>
							</select>
						</div>
						<div class="col-md-3">
							<label><div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="Clique para ver as opções das apis" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">Se deixar ativado, aparecerá um preloader ao entrar no sistema e navegar entre as páginas.
												
											</p>
										</div>
									</div>
								</div> Mostrar PreLoader</label>
							<select name="mostrar_preloader" class="form-select">
								<option value="Sim" <?php if ($mostrar_preloader == 'Sim') { ?> selected <?php } ?>>Sim</option>
								<option value="Não" <?php if ($mostrar_preloader == 'Não') { ?> selected <?php } ?>>Não</option>
							</select>
						</div>
					</div>

					<?php if($alterar_api_whatsapp == 'Sim'){ ?>
					<div class="row mb-3">
						<div class="col-md-3">
							<label>
								<div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="Clique para ver as opções das apis" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">Integrei ao projeto 3 serviços de apis, estes serviços sáo terceirizados e tem
												custo adicional
												para utilização, segue abaixo site e contato dos 3. <br><br>
												<b>1 - (Menuia)</b> Diego (81)98976-9960 <br>
												<a href="https://chatbot.menuia.com/" target="_blank">https://chatbot.menuia.com/ </a>
												<br><br>
												<b>2 - (WordMensagens)</b> Bruno (44) 99986-3238 <br>
												<a href="http://wordmensagens.com.br/sistema/index.php"
													target="_blank">http://wordmensagens.com.br/sistema/index.php </a>
												<br><br>
												<b>3 - (NewTek)</b> Nando Silva (21) 99998-8666 <br>
												<a href="https://webapp.newteksoft.com.br/" target="_blank">https://webapp.newteksoft.com.br/
												</a>
												<br><br>
											</p>
										</div>
									</div>
								</div>
								Api Whatsapp <a href="#" onclick="testarApi()" title="Testar disparo Api">
									<i class="fa-brands fa-whatsapp text-verde"></i></a>
							</label>
							<select name="api_whatsapp" id="api_whatsapp" class="form-select">
								<option value="Não" <?php if ($api_whatsapp == 'Não') { ?> selected <?php } ?>>Não</option>
								<option value="menuia" <?php if ($api_whatsapp == 'menuia') { ?> selected <?php } ?>>Menuia</option>
								<option value="wm" <?php if ($api_whatsapp == 'wm') { ?> selected <?php } ?>>WordMensagens</option>
								<option value="newtek" <?php if ($api_whatsapp == 'newtek') { ?> selected <?php } ?>>NewTek</option>
							</select>
						</div>
						<div class="col-md-4">
							<label>App key Whatsapp (Token)</label>
							<input type="text" class="form-control" id="token_whatsapp" name="token_whatsapp"
								placeholder="Token ou App Key" value="<?php echo @$token_whatsapp ?>">
						</div>
						<div class="col-md-5">
							<label>AuthKey Whatsapp (Instancia)  </label>
							<input type="text" class="form-control" id="instancia_whatsapp" name="instancia_whatsapp"
								placeholder="Instância ou authKey" value="<?php echo @$instancia_whatsapp ?>">
						</div>
					</div>

				<?php } ?>

					<div class="row mb-3">
						<div class="col-md-3">
							<label>
								<div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="Clique para ver as opções das apis" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">Não usar apis de pagamentos, usar o mercado pago ou usar a api do Asaas, se você não usar nenhuma insira alguma informação de cobrança no campo Dados para Pagamentos acima, e ao gerar uma cobrança aquelas informações serão mostradas. 
												<br><br>
											</p>
										</div>
									</div>
								</div>
								Api de Pagamento 
							</label>
							<select name="api_pagamento" id="api_pagamento" class="form-select">
								<option value="" <?php if ($api_pagamento == '') { ?> selected <?php } ?>>Nenhuma</option>
								<option value="Mercado Pago" <?php if ($api_pagamento == 'Mercado Pago') { ?> selected <?php } ?>>Mercado Pago</option>
								<option value="Asaas" <?php if ($api_pagamento == 'Asaas') { ?> selected <?php } ?>>Asaas</option>
								
							</select>
						</div>


						<div class="col-md-9">
							<label>Chave Token Asaas</label>
							<input type="text" class="form-control" id="chave_api_asaas" name="chave_api_asaas" placeholder="Chave da api de integração do Asaas"
								value="<?php echo @$chave_api_asaas ?>">
						</div>


					</div>

					
						<div class="row mb-3">
						<div class="col-md-6">
							<label>Access Token Mercado Pago</label>
							<input type="text" class="form-control" id="access_token" name="access_token" placeholder="Chave access token Mercado pago"
								value="<?php echo @$access_token_mp ?>">
						</div>

						<div class="col-md-6">
							<label>Public Key Mercado Pago</label>
							<input type="text" class="form-control" id="public_key" name="public_key" placeholder="Public Key do mercado pago"
								value="<?php echo @$public_key_mp ?>">
						</div>
					</div>


					
					<div class="row mb-3">
						<div class="col-md-3" style="display:none">
							<label>Ocultar Itens Mobile</label>
							<select name="ocultar_mobile" class="form-select">
								<option value="Sim" <?php if ($ocultar_mobile == 'Sim') { ?> selected <?php } ?>>Sim</option>
								<option value="Não" <?php if ($ocultar_mobile == 'Não') { ?> selected <?php } ?>>Não</option>
							</select>
						</div>
						<div class="col-md-3" >
							<label><div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="Clique para ver as opções das apis" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">"Uso interno do sistema, para alterar os acessos dos usuários."<br><br>
												
											</p>
										</div>
									</div>
								</div> Alterar Acessos</label>
							<select name="alterar_acessos" class="form-select">
								<option value="Sim" <?php if ($alterar_acessos == 'Sim') { ?> selected <?php } ?>>Sim</option>
								<option value="Não" <?php if ($alterar_acessos == 'Não') { ?> selected <?php } ?>>Não</option>
							</select>
						</div>
						<div class="col-md-3">
							<label><div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="Clique para ver as opções das apis" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">"Mostrar ou não a marca d'agua no relatório financeiro"<br><br>
												
											</p>
										</div>
									</div>
								</div> Marca D'agua Rel</label>
							<select name="marca_dagua" class="form-select">
								<option value="Sim" <?php if ($marca_dagua == 'Sim') { ?> selected <?php } ?>>Sim</option>
								<option value="Não" <?php if ($marca_dagua == 'Não') { ?> selected <?php } ?>>Não</option>
							</select>
						</div>
						<div class="col-md-3">
							<label><div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">"desixar ativado caso queira que o Usuário só faça venda após abrir a caixa."<br><br>
												
											</p>
										</div>
									</div>
								</div> Abert Obrigatória Caixa</label>
							<select name="abertura_caixa" class="form-select">
								<option value="Sim" <?php if ($abertura_caixa == 'Sim') { ?> selected <?php } ?>>Sim</option>
								<option value="Não" <?php if ($abertura_caixa == 'Não') { ?> selected <?php } ?>>Não</option>
							</select>
						</div>

						<div class="col-md-3">
							<label>Cidade Sistema (Contratos)</label>
							<input type="text" class="form-control" id="cidade_sistema" name="cidade_sistema" placeholder="Aparecer nos contratos"
								value="<?php echo @$cidade_sistema ?>">
						</div>


						
					</div>



					<div class="row mb-3">
						
						<div class="col-md-3">
							<label>Dias Comissão Técnico</label>
							<input type="text" class="form-control" id="dias_comissao" name="dias_comissao" placeholder="Agendar comissão para x dias"
								value="<?php echo @$dias_comissao ?>">
						</div>


						<div class="col-md-3">
							<label><div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">"Ao deixar Sim quando for gerar certos contratos vai aparecer a opção para enviar para o cliente assinar antes!"<br><br>
												
											</p>
										</div>
									</div>
								</div> Assinatura Contrato Cliente</label>
							<select name="assinatura_cliente" class="form-select">
								<option value="Sim" <?php if ($assinatura_cliente == 'Sim') { ?> selected <?php } ?>>Sim</option>
								<option value="Não" <?php if ($assinatura_cliente == 'Não') { ?> selected <?php } ?>>Não</option>
							</select>
						</div>



						<div class="col-md-3">
							<label><div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">"Se essa opção tiver Sim, todo dia todos os clientes que estão com débitos serão cobrados!"<br><br>
												
											</p>
										</div>
									</div>
								</div> Cobrar Automáticamente</label>
							<select name="cobrar_automaticamente" class="form-select">
								<option value="Sim" <?php if ($cobrar_automaticamente == 'Sim') { ?> selected <?php } ?>>Sim</option>
								<option value="Não" <?php if ($cobrar_automaticamente == 'Não') { ?> selected <?php } ?>>Não</option>
							</select>
						</div>




						<div class="col-md-3">
							<label><div class="icones_mobile" class="dropdown" style="display: inline-block; ">
									<a title="" href="#" aria-expanded="false" aria-haspopup="true"
										data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-info-circle text-primary"></i> </a>
									<div class="dropdown-menu tx-13" style="width:500px">
										<div class="dropdown-item-text " style="width:500px; background: #c3fff0">
											<p class="mt-1">"Se essa opção tiver Sim, todos os clientes vão receber uma cobrança pela manhã e outra a tarde / noite"<br><br>
												
											</p>
										</div>
									</div>
								</div> Cobrar Duas Vezes ao Dia</label>
							<select name="cobrar_duas_vezes" class="form-select">
								<option value="Sim" <?php if ($cobrar_duas_vezes == 'Sim') { ?> selected <?php } ?>>Sim</option>
								<option value="Não" <?php if ($cobrar_duas_vezes == 'Não') { ?> selected <?php } ?>>Não</option>
							</select>
						</div>

					</div>


					<div class="row">
						
						<div class="col-md-6 mb-2  needs-validation was-validated">
							<label>Url Site</label>
							<div class="input-group mb-3">								
								<div style="display: flex; align-items: center;">
								    <input type="text" value="<?php echo $url_sistema ?>site/" readonly
								        style="background: #eee; border: 1px solid #ccc; padding: 6px; width: 370px;">
								    <input type="text" class="form-control" name="url_site" id="url_site"
								        placeholder="empresa1, loja1, etc" required=""
								        style="flex: 1; border-left: none;" value="<?php echo $url_site ?>">
								</div>
							</div>
						</div>
					</div>


					<div class="row mb-3">
						<div class="col-md-4">
							<div class="form-group">
								<label>Logo (*PNG)</label>
								<input class="form-control" type="file" name="foto-logo" onChange="carregarImgLogo();" id="foto-logo">
							</div>
						</div>
						<div class="col-md-2">
							<div id="divImg">
								<img src="../img/<?php echo $logo_sistema ?>" width="80px" id="target-logo">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Ícone (*Png)</label>
								<input class="form-control" type="file" name="foto-icone" onChange="carregarImgIcone();"
									id="foto-icone">
							</div>
						</div>
						<div class="col-md-2">
							<div id="divImg">
								<img src="../img/<?php echo $icone_sistema ?>" width="50px" id="target-icone">
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">
							<div class="form-group">
								<label>Logo Relatório 644 x 142 (*Jpg ou *Png)</label>
								<input class="form-control" type="file" name="foto-logo-rel" onChange="carregarImgLogoRel();"
									id="foto-logo-rel">
							</div>
						</div>
						<div class="col-md-2">
							<div id="divImg">
								<img src="../img/<?php echo @$logo_rel ?>" width="80px" id="target-logo-rel">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Logo Painél (Clara)(*PNG)</label>
								<input class="form-control" type="file" name="foto-painel" onChange="carregarImgPainel();"
									id="foto-painel">
							</div>
						</div>
						<div class="col-md-2">
							<div id="divImg">
								<img src="../img/<?php echo @$logo_painel ?>" width="80px" id="target-painel">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Assinatura (*Jpg ou *png)</label>
								<input class="form-control" type="file" name="assinatura_rel" onChange="carregarImgAssinatura();"
									id="assinatura_rel">
							</div>
						</div>
						<div class="col-md-2">
							<div id="divImg">
								<img src="../img/<?php echo $imagem_assinatura ?>" width="80px" id="target-assinatura">
							</div>
						</div>
					</div>
					<br>
					<small>
						<div id="msg-config" align="center"></div>
					</small>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="btn_salvar_config">Salvar</button>
					<button class="btn btn-primary" type="button" id="btn_carregando_config" style="display: none">
						<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...
					</button>
				</div>
			</form>
		</div>
	</div>
</div>






<!-- Modal Rel Financeiro -->
<div class="modal fade" id="modalRelFin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel">Relatório Financeiro
					<smdll>(
						<a href="#" onclick="datas('1980-01-01', 'tudo-Fin', 'Fin')">
							<span style="color:#fff" id="tudo-Fin">Tudo</span>
						</a> /
						<a href="#" onclick="datas('<?php echo $data_atual ?>', 'hoje-Fin', 'Fin')">
							<span style="color:blue" id="hoje-Fin">Hoje</span>
						</a> /
						<a href="#" onclick="datas('<?php echo $data_inicio_mes ?>', 'mes-Fin', 'Fin')">
							<span style="color:#fff" id="mes-Fin">Mês</span>
						</a> /
						<a href="#" onclick="datas('<?php echo $data_inicio_ano ?>', 'ano-Fin', 'Fin')">
							<span style="color:#fff" id="ano-Fin">Ano</span>
						</a>
						)
					</smdll>
				</h4>
				<button id="btn-fechar-config" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form method="POST" action="rel/financeiro_class.php" target="_blank">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<label>Data Inicial</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
								</div>
								<input type="date" name="dataInicial" id="dataInicialRel-Fin" class="form-control"
									value="<?php echo $data_atual ?>">
							</div>
						</div>
						<div class="col-md-4">
							<label>Data Final</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
								</div>
								<input type="date" name="dataFinal" id="dataFinalRel-Fin" class="form-control"
									value="<?php echo $data_atual ?>">
							</div>
						</div>
						<div class="col-md-4">
							<label>Filtro Data</label>
							<select name="filtro_data" class="form-select">
								<option value="data_lanc">Data de Lançamento</option>
								<option value="vencimento">Data de Vencimento</option>
								<option value="data_pgto">Data de Pagamento</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label>Entradas / Saídas</label>
							<select name="filtro_tipo" class="form-select">
								<option value="receber">Entradas / Ganhos</option>
								<option value="pagar">Saídas / Despesas</option>
							</select>
						</div>
						<div class="col-md-4">
							<label>Tipo Lançamento</label>
							<select name="filtro_lancamento" class="form-select">
								<option value="">Tudo</option>
								<option value="Conta">Ganhos / Despesas</option>
							</select>
						</div>
						<div class="col-md-4">
							<label>Pendentes / Pago</label>
							<select name="filtro_pendentes" class="form-select">
								<option value="">Tudo</option>
								<option value="Não">Pendentes</option>
								<option value="Sim">Pago</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Gerar<i class="fa fa-check ms-2"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>






<!-- Modal Rel Sintético Despesas -->
<div class="modal fade" id="modalRelSinDesp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel">Relatório Sintético Despesas
					<smdll>(
						<a href="#" onclick="datas('1980-01-01', 'tudo-Sim-Des', 'Sim-Des')">
							<span style="color:#fff" id="tudo-Sim-Des">Tudo</span>
						</a> /
						<a href="#" onclick="datas('<?php echo $data_atual ?>', 'hoje-Sim-Des', 'Sim-Des')">
							<span style="color:blue" id="hoje-Sim-Des">Hoje</span>
						</a> /
						<a href="#" onclick="datas('<?php echo $data_inicio_mes ?>', 'mes-Sim-Des', 'Sim-Des')">
							<span style="color:#fff" id="mes-Sim-Des">Mês</span>
						</a> /
						<a href="#" onclick="datas('<?php echo $data_inicio_ano ?>', 'ano-Sim-Des', 'Sim-Des')">
							<span style="color:#fff" id="ano-Sim-Des">Ano</span>
						</a>
						)
					</smdll>
				</h4>
				<button id="btn-fechar-config" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form method="POST" action="rel/sintetico_class.php" target="_blank">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<label>Data Inicial</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
								</div>
								<input type="date" name="dataInicial" id="dataInicialRel-Sim-Des" class="form-control"
									value="<?php echo $data_atual ?>">
							</div>
						</div>
						<div class="col-md-4">
							<label>Data Final</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
								</div>
								<input type="date" name="dataFinal" id="dataFinalRel-Sim-Des" class="form-control"
									value="<?php echo $data_atual ?>">
							</div>
						</div>
						<div class="col-md-4">
							<label>Filtro Data</label>
							<select name="filtro_data" class="form-select">
								<option value="data_lanc">Data de Lançamento</option>
								<option value="vencimento">Data de Vencimento</option>
								<option value="data_pgto">Data de Pagamento</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label>Tipo Filtro Contas</label>
							<select name="filtro_lancamento" class="form-select">
								<option value="fornecedor">Fornecedores</option>
								<option value="funcionario">Funcionário</option>
							</select>
						</div>
						<div class="col-md-4">
							<label>Pendentes / Pago</label>
							<select name="filtro_pendentes" class="form-select">
								<option value="">Tudo</option>
								<option value="Não">Pendentes</option>
								<option value="Sim">Pago</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Gerar<i class="fa fa-check ms-2"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>







<!-- Modal Rel Sintético Recebimentos -->
<div class="modal fade" id="modalRelSinRec" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel">Relatório Sintético Recebimentos
					<smdll>(
						<a href="#" onclick="datas('1980-01-01', 'tudo-Sim-Rec', 'Sim-Rec')">
							<span style="color:#fff" id="tudo-Sim-Rec">Tudo</span>
						</a> /
						<a href="#" onclick="datas('<?php echo $data_atual ?>', 'hoje-Sim-Rec', 'Sim-Rec')">
							<span style="color:blue" id="hoje-Sim-Rec">Hoje</span>
						</a> /
						<a href="#" onclick="datas('<?php echo $data_inicio_mes ?>', 'mes-Sim-Rec', 'Sim-Rec')">
							<span style="color:#fff" id="mes-Sim-Rec">Mês</span>
						</a> /
						<a href="#" onclick="datas('<?php echo $data_inicio_ano ?>', 'ano-Sim-Rec', 'Sim-Rec')">
							<span style="color:#fff" id="ano-Sim-Rec">Ano</span>
						</a>
						)
					</smdll>
				</h4>
				<button id="btn-fechar-config" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form method="POST" action="rel/sintetico_recebimentos_class.php" target="_blank">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<label>Data Inicial</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
								</div>
							<input type="date" name="dataInicial" id="dataInicialRel-Sim-Rec" class="form-control"
								value="<?php echo $data_atual ?>">
					</div>
						</div>

						<div class="col-md-4">
							<label>Data Final</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
								</div>
								<input type="date" name="dataFinal" id="dataFinalRel-Sim-Rec" class="form-control"
									value="<?php echo $data_atual ?>">
							</div>
						</div>

						<div class="col-md-4">
							<label>Filtro Data</label>
							<select name="filtro_data" class="form-select">
								<option value="data_lanc">Data de Lançamento</option>
								<option value="vencimento">Data de Vencimento</option>
								<option value="data_pgto">Data de Pagamento</option>
							</select>
						</div>
					</div>


					<div class="row">


						<div class="col-md-4">
							<label>Tipo Filtro Contas</label>
							<select name="filtro_lancamento" class="form-select">
								<option value="cliente">Clientes</option>

							</select>
						</div>
						<div class="col-md-4">
							<label>Pendentes / Pago</label>
							<select name="filtro_pendentes" class="form-select">
								<option value="">Tudo</option>
								<option value="Não">Pendentes</option>
								<option value="Sim">Pago</option>
							</select>
						</div>
					</div>



				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Gerar<i class="fa fa-check ms-2"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>






<!-- Modal Rel Produtos Vendidos -->
<div class="modal fade" id="modalRelProd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title" id="exampleModalLabel">Relatório de Produtos Mais Vendidos</h4>
                <button id="btn-fechar-rel" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
            </div>
            <form method="POST" action="rel/produtos_vendidos_class.php" target="_blank">
                <div class="modal-body">    
                   

                   <div class="row">

                    

                           <div class="col-md-8 col-6">
                            <label>Quantidade de Produtos</label>
                            <input type="text" name="quantidade" class="form-control" value="" placeholder="Deixe vazio se quiser todos">
                        </div>   
                    </div> 







                </div>
                <div class="modal-footer">       
                    <button type="submit" class="btn btn-primary">Gerar</button>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- SweetAlert JS -->
<script src="js/sweetalert2.all.min.js"></script>
<script src="js/sweetalert1.min.css"></script>




<script src="js/alertas.js"></script>

<!-- Alertas -->
<script src="../assets/plugins/sweet-alert/sweetalert.min.js"></script>
<script src="../assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>


<!-- Mascaras JS -->
<script type="text/javascript" src="js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>



<!-- FULLCALENDER -->
<script src="../fullcalendar/dist/index.global.min.js"></script>
<script src="../fullcalendar/core/locales/pt-br.global.min.js"></script>


<!-- <script src='js/fullcalendar.js'></script> -->


<script src='js/custom.js'></script>
<script src='js/converter_data.js'></script>
<script src='js/carregar_eventos.js'></script>




<script type="text/javascript" src="js/monthly.js"></script>

		 <!-- calendar -->

<script type="text/javascript">
	$(document).ready(function() {


		$('.sel2').select2({
			dropdownParent: $('#modalPerfil')
		});

		$('.sel3').select2({
			dropdownParent: $('#modalForm')
		});

		$('.sel30').select2({
			dropdownParent: $('#modalForm')
		});

		$('.sel31').select2({
			dropdownParent: $('#modalForm')
		});

		$('.sel32').select2({
			dropdownParent: $('#modalForm')
		});


		$('.sel33').select2({
			dropdownParent: $('#modalForm')
		});


		$('.sel34').select2({
			dropdownParent: $('#modalForm')
		});


		$('.sel35').select2({
			dropdownParent: $('#modalForm')
		});


		$('.sel36').select2({
			dropdownParent: $('#modalForm')
		});


		$('#cep_perfil').mask('00000-000');


	});
</script>

<script type="text/javascript">
	const modalForm = document.getElementById('modalForm')
	const nome = document.getElementById('nome')

	modalForm.addEventListener('shown.bs.modal', () => {
		nome.focus()
	})
</script>


<script type="text/javascript">
	function carregarImgPerfil() {
		var target = document.getElementById('target-usu');
		var file = document.querySelector("#foto_perfil").files[0];

		var reader = new FileReader();

		reader.onloadend = function() {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>






<script type="text/javascript">
	$("#form-perfil").submit(function() {

		event.preventDefault();
		var formData = new FormData(this);

		$('#btn_salvar_perfil').hide();
		$('#btn_carregando_perfil').show();

		$.ajax({
			url: "editar-perfil.php",
			type: 'POST',
			data: formData,

			success: function(mensagem) {
				$('#msg-perfil').text('');
				$('#msg-perfil').removeClass()
				if (mensagem.trim() == "Editado com Sucesso") {
					sucesso();
					$('#btn-fechar-perfil').click();
					location.reload();


				} else {

					$('#msg-perfil').addClass('text-danger')
					$('#msg-perfil').text(mensagem)
				}

				$('#btn_salvar_perfil').show();
				$('#btn_carregando_perfil').hide();


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>






<script type="text/javascript">
	$("#form-config").submit(function(event) {
		event.preventDefault();
		var formData = new FormData(this);
		$('#btn_salvar_config').hide();
		$('#btn_carregando_config').show();
		$.ajax({
			url: "editar-config.php",
			type: 'POST',
			data: formData,
			success: function(mensagem) {
				$('#msg-config').text('');
				$('#msg-config').removeClass();
				if (mensagem.trim() == "Salvo com Sucesso" || mensagem.trim() == "Editado com Sucesso") {
					Swal.fire({
						icon: 'success',
						title: 'Sucesso!',
						text: 'Configurações salvas com sucesso!',
						timer: 1500,
						showConfirmButton: false
					});
					$('#btn-fechar-config').click();
					// Não recarrega a página
				} else {
					$('#msg-config').addClass('text-danger')
					$('#msg-config').text(mensagem)
				}
				$('#btn_salvar_config').show();
				$('#btn_carregando_config').hide();
			},
			cache: false,
			contentType: false,
			processData: false,
		});
	});
</script>




<script type="text/javascript">
	function carregarImgLogo() {
		var target = document.getElementById('target-logo');
		var file = document.querySelector("#foto-logo").files[0];

		var reader = new FileReader();

		reader.onloadend = function() {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>





<script type="text/javascript">
	function carregarImgLogoRel() {
		var target = document.getElementById('target-logo-rel');
		var file = document.querySelector("#foto-logo-rel").files[0];

		var reader = new FileReader();

		reader.onloadend = function() {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>





<script type="text/javascript">
	function carregarImgIcone() {
		var target = document.getElementById('target-icone');
		var file = document.querySelector("#foto-icone").files[0];

		var reader = new FileReader();

		reader.onloadend = function() {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>



<script type="text/javascript">
	function carregarImgAssinatura() {
		var target = document.getElementById('target-assinatura');
		var file = document.querySelector("#assinatura_rel").files[0];

		var reader = new FileReader();

		reader.onloadend = function() {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>


<script type="text/javascript">
	function carregarImgPainel() {
		var target = document.getElementById('target-painel');
		var file = document.querySelector("#foto-painel").files[0];

		var reader = new FileReader();

		reader.onloadend = function() {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>



<script type="text/javascript">
	function testarApi() {
		var seletor_api = $('#api_whatsapp').val();
		var token = $('#token_whatsapp').val();
		var instancia = $('#instancia_whatsapp').val();
		var telefone_sistema = $('#telefone_sistema').val();

		$.ajax({
			url: 'apis/teste_whatsapp.php',
			method: 'POST',
			data: {
				seletor_api,
				token,
				instancia,
				telefone_sistema
			},
			dataType: "html",

			success: function(result) {
				alertWarning(result)
			}
		});
	}
</script>



<script>
	function limpa_formulário_cep_perfil() {
		//Limpa valores do formulário de cep.
		document.getElementById('endereco_perfil').value = ("");
		document.getElementById('bairro_perfil').value = ("");
		document.getElementById('cidade_perfil').value = ("");
		document.getElementById('estado_perfil').value = ("");
		//document.getElementById('ibge').value=("");
	}

	function meu_callback_perfil(conteudo) {
		if (!("erro" in conteudo)) {
			//Atualiza os campos com os valores.
			document.getElementById('endereco_perfil').value = (conteudo.logradouro);
			document.getElementById('bairro_perfil').value = (conteudo.bairro);
			document.getElementById('cidade_perfil').value = (conteudo.localidade);
			document.getElementById('estado_perfil').value = (conteudo.uf);
			//document.getElementById('ibge').value=(conteudo.ibge);
		} //end if.
		else {
			//CEP não Encontrado.
			limpa_formulário_cep_perfil();
			alert("CEP não encontrado.");
		}
	}

	function pesquisacepperfil(valor) {

		//Nova variável "cep" somente com dígitos.
		var cep = valor.replace(/\D/g, '');

		//Verifica se campo cep possui valor informado.
		if (cep != "") {

			//Expressão regular para validar o CEP.
			var validacep = /^[0-9]{8}$/;

			//Valida o formato do CEP.
			if (validacep.test(cep)) {

				//Preenche os campos com "..." enquanto consulta webservice.
				document.getElementById('endereco_perfil').value = "...";
				document.getElementById('bairro_perfil').value = "...";
				document.getElementById('cidade_perfil').value = "...";
				document.getElementById('estado_perfil').value = "...";
				//document.getElementById('ibge').value="...";

				//Cria um elemento javascript.
				var script = document.createElement('script');

				//Sincroniza com o callback.
				script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback_perfil';

				//Insere script no documento e carrega o conteúdo.
				document.body.appendChild(script);

			} //end if.
			else {
				//cep é inválido.
				limpa_formulário_cep_perfil();
				alert("Formato de CEP inválido.");
			}
		} //end if.
		else {
			//cep sem valor, limpa formulário.
			limpa_formulário_cep_perfil();
		}
	};
</script>



<script type="text/javascript">
	function datas(data, id, campo) {

		var data_atual = "<?= $data_atual ?>";
		var separarData = data_atual.split("-");
		var mes = separarData[1];
		var ano = separarData[0];

		var separarId = id.split("-");

		if (separarId[0] == 'tudo') {
			data_atual = '2100-12-31';
		}

		if (separarId[0] == 'ano') {
			data_atual = ano + '-12-31';
		}

		if (separarId[0] == 'mes') {
			if (mes == 4 || mes == 6 || mes == 9 || mes == 11) {
				data_atual = ano + '-' + mes + '-30';
			} else if (mes == 2) {
				data_atual = ano + '-' + mes + '-28';
			} else {
				data_atual = ano + '-' + mes + '-31';
			}

		}

		$('#dataInicialRel-' + campo).val(data);
		$('#dataFinalRel-' + campo).val(data_atual);

		document.getElementById('hoje-' + campo).style.color = "#fff";
		document.getElementById('mes-' + campo).style.color = "#fff";
		document.getElementById(id).style.color = "blue";
		document.getElementById('tudo-' + campo).style.color = "#fff";
		document.getElementById('ano-' + campo).style.color = "#fff";
		document.getElementById(id).style.color = "blue";
	}
</script>