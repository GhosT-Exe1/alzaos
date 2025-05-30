<?php
require_once("conexao.php");
@session_start();
?>



<!DOCTYPE html>
<html lang="pt-BR">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<!-- META DATA -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Sistemas de Alessandro Marques">
	<meta name="Author" content="Alessandro Marques">
	<meta name="Keywords" content="erp, alza, alza os, sistemas, gestor, empresas" />

	<!-- TITLE -->
	<title><?php echo $nome_sistema ?></title>


	<link rel="icon" href="img/icone.png" type="image/x-icon" />
	<link href="assets/css/icons.css" rel="stylesheet">
	<link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
	<link href="assets/css/style-dark.css" rel="stylesheet">
	<link href="assets/css/style-transparent.css" rel="stylesheet">
	<link href="assets/css/skin-modes.css" rel="stylesheet" />
	<link href="assets/css/animate.css" rel="stylesheet">




</head>


<!-- GLOBAL-LOADER -->
<div id="global-loader">
	<img src="img/loader.gif" class="loader-img loader loader_mobile" alt="">
</div>
<!-- /GLOBAL-LOADER -->

<?php 
if($fundo_login != "" and $fundo_login != "sem-foto.png"){ ?>
<body class="ltr error-page1 bg-primary" id="pagina" style="background: url('img/<?php echo $fundo_login ?>') no-repeat center center fixed; background-size: cover;">
<?php }else{ ?>
<body class="ltr error-page1 bg-primary" id="pagina" >
<?php } ?>



	<div class="square-box">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>


	<div class="page">


		<div class="page-single">
			<div class="container">
				<div class="row">
					<div
						class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-4 justify-content-center">
						<div class="card-sigin">
							<!-- Demo content-->
							<div class="main-card-signin d-md-flex">
								<div class="wd-100p">
									<div class="d-flex mb-4 justify-content-center"><a href="acesso.php">
											<img src="img/logo.jpg" class="sign-favicon" alt="logo" width="250px"></a></div>
									<div class="">
										<div class="main-signup-header">

											<div class="panel panel-primary">

												<div class="panel-body tabs-menu-body border-0 p-3">

													<?php
													if (isset($_SESSION['msg'])) {

														echo '<div class="alert alert-danger mg-b-0 mb-3 alert-dismissible fade show" role="alert">
											<strong><span class="alert-inner--icon"><i class="fe fe-slash"></i></span></strong> ' . $_SESSION['msg'] . '!
											<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
										</div>';

														unset($_SESSION['msg']);
													}
													?>




													<form method="post" action="autenticar_cliente.php">
														<label>Telefone Cliente</label>
														<div class="input-group mb-4">
															<div class="input-group-text">
																<i class="fe fe-phone"></i>
															</div>
															<input type="text" class="form-control" name="telefone" id="telefone"
																placeholder="Digite seu Telefone" required="" onkeyup="verificarTelefone('telefone', this.value);">
														</div>	

														<div class="form-group">
															<label class="control-label">Senha</label>
															<div class="input-group mb-4">
																<div class="input-group-text">
																	<span toggle="#password-field" class="fa fa-fw fa-eye  toggle-password"></span>
																</div>
																<input id="password-field" type="password" class="form-control" name="senha"
																	placeholder="Digite sua Senha (123) se for primeiro acesso" required value="">
															</div>
														</div>													

														<button class="btn btn-primary btn-block">Entrar no Sistema</button>

													</form>

												</div>
											</div>


											<div class="main-signin-footer text-center mt-3">

												<p><a href="" class="mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Esqueceu sua
														Senha?</a></p>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





</body>

</html>


<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/moment/moment.js"></script>
<script src="assets/js/eva-icons.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/themecolor.js"></script>
<script src="assets/js/custom.js"></script>



<script>
	$(".toggle-password").click(function () {

		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});
</script>


<!-- Mascaras JS -->
<script type="text/javascript" src="painel/js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
				<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true"
						class="text-white">&times;</span></button>

			</div>
			<form method="post" id="form-recuperar">
				<div class="modal-body">
					<label for="recipient-name" class="col-form-label">Telefone:</label>
					<input placeholder="Digite seu Telefone" class="form-control" type="telefone" name="telefone" id="telefone_recuperar"
						required onkeyup="verificarTelefone('telefone_recuperar', this.value);">

					<br>
					<small>
						<div id="mensagem-recuperar" align="center"></div>
					</small>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
					<button type="submit" class="btn btn-primary">Recuperar Senha</button>
				</div>
			</form>
		</div>
	</div>
</div>




<script type="text/javascript">
	$("#form-recuperar").submit(function () {

		$('#mensagem-recuperar').text('Enviando!!');

		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: "recuperar-senha_cliente.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem-recuperar').text('');
				$('#mensagem-recuperar').removeClass()
				if (mensagem.trim() == "Recuperado com Sucesso") {

					$('#email-recuperar').val('');
					$('#mensagem-recuperar').addClass('text-success')
					$('#mensagem-recuperar').text('Sua Senha foi enviada para seu telefone')

				} else {

					$('#mensagem-recuperar').addClass('text-danger')
					$('#mensagem-recuperar').text(mensagem)
				}


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>



<script type="text/javascript">
	// FUNÇÃO PARA VERIFICAR TELEFONE
function verificarTelefone(tel, valor) {
    if (valor.length > 14) {
        $('#' + tel).mask('(00) 00000-0000');
    } else if (valor.length == 14) {
        $('#' + tel).mask('(00) 0000-00000');
    } else {
        $('#' + tel).mask('(00) 0000-0000');

    }

    document.getElementById(tel).setSelectionRange(100, 100);
}

</script>