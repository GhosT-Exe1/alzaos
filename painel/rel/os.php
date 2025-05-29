<?php 
include('data_formatada.php');

if ($token_rel != 'M543661') {
	echo '<script>window.location="../../"</script>';
	exit();
}

$query = $pdo->query("SELECT * from os where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);


$data = $res[0]['data'];
$cliente = $res[0]['cliente'];
$data_entrega = $res[0]['data_entrega'];
$dias_validade = $res[0]['dias_validade'];
$valor = $res[0]['valor'];
$desconto = $res[0]['desconto'];
$tipo_desconto = $res[0]['tipo_desconto'];
$subtotal = $res[0]['subtotal'];
$obs = $res[0]['obs'];
$status = $res[0]['status'];
$total_produtos = $res[0]['total_produtos'];
$total_servicos = $res[0]['total_servicos'];
$funcionario = $res[0]['funcionario'];
$frete = $res[0]['frete'];
$tecnico = $res[0]['tecnico'];
$condicoes = $res[0]['condicoes'];
$acessorios = $res[0]['acessorios'];
$equipamento = $res[0]['equipamento'];
$marca = $res[0]['marca'];
$modelo = $res[0]['modelo'];
$orcamento = $res[0]['orcamento'];
$mao_obra = $res[0]['mao_obra'];
$laudo = $res[0]['laudo'];
$vall = $res[0]['vall'];
$defeito = $res[0]['defeito'];
$val_entrada = $res[0]['val_entrada'];
$dias_garantia = $res[0]['dias_garantia'];
$senha_ap = $res[0]['senha_ap'];
$pago = $res[0]['pago'];


$dataF = implode('/', array_reverse(@explode('-', $data)));
$data_entregaF = implode('/', array_reverse(@explode('-', $data_entrega)));

$valorF = number_format($valor, 2, ',', '.');
$subtotalF = number_format($subtotal, 2, ',', '.');
$freteF = number_format($frete, 2, ',', '.');
$total_produtosF = number_format($total_produtos, 2, ',', '.');
$total_servicosF = number_format($total_servicos, 2, ',', '.');
$mao_obraF = number_format($mao_obra, 2, ',', '.');
$total_vallF = number_format($vall, 2, ',', '.');
$val_entradaF = number_format($val_entrada, 2, ',', '.');


$query2 = $pdo->query("SELECT * FROM usuarios where id = '$funcionario'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_usu_lanc = $res2[0]['nome'];
}else{
	$nome_usu_lanc = 'Sem Usuário';
}

$query2 = $pdo->query("SELECT * FROM usuarios where id = '$tecnico'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_tecnico = $res2[0]['nome'];
}else{
	$nome_tecnico = 'Sem Usuário';
}

$query3 = $pdo->query("SELECT * FROM equipamentos where id = '$equipamento'");
$res3 = $query3->fetchAll(PDO::FETCH_ASSOC);
if(@count($res3) > 0){
	@$nome_equipamento = @$res3[0]['nome'];	
	
}

$nome_marca = '';

$query3 = $pdo->query("SELECT * FROM marcas where id = '$marca'");
$res3 = $query3->fetchAll(PDO::FETCH_ASSOC);
if(@count($res3) > 0){
	@$nome_marca = @$res3[0]['nome'];	
	
}

$nome_modelo = '';

$query3 = $pdo->query("SELECT * FROM modelos where id = '$modelo'");
$res3 = $query3->fetchAll(PDO::FETCH_ASSOC);
if(@count($res3) > 0){
	@$nome_modelo = @$res3[0]['nome'];	
	
}



$query2 = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_cliente = $res2[0]['nome'];	
	$tel_cliente = $res2[0]['telefone'];
	
	
	$endereco = $res2[0]['endereco'];
	$numero = $res2[0]['numero'];
	$bairro = $res2[0]['bairro'];
	$cidade = $res2[0]['cidade'];
	$estado = $res2[0]['estado'];
	$cep = $res2[0]['cep'];

	$endereco_cliente = $endereco.' '.$numero.' '.$bairro.' '.$cidade.' '.$estado.' '.$cep;
	
}


if($tipo_desconto == "%"){
	$valor_porcent = '%';
	$valor_reais = '';
	$descontoF = $desconto;
}else{
	$valor_porcent = '';
	$valor_reais = 'R$';
	$descontoF = number_format($desconto, 2, ',', '.');
}



?>
<!DOCTYPE html>
<html>
<head>

	<style>

		@import url('https://fonts.cdnfonts.com/css/tw-cen-mt-condensed');
		@page { margin: 145px 20px 25px 20px; }
		#header { position: fixed; left: 0px; top: -110px; bottom: 100px; right: 0px; height: 35px; text-align: center; padding-bottom: 100px; }
		#content {margin-top: 0px;}
		#footer { position: fixed; left: 0px; bottom: -60px; right: 0px; height: 80px; }
		#footer .page:after {content: counter(page, my-sec-counter);}
		body {font-family: 'Tw Cen MT', sans-serif;}

		.marca{
			position:fixed;
			left:50;
			top:100;
			width:80%;
			opacity:10%;
			transform: rotate(-30deg);
		}

		p{
			text-align-last: left;
			text-align:justify;
		}

	</style>

</head>
<body>
	<?php 
	if($marca_dagua == 'Sim'){ ?>
		<img class="marca" src="<?php echo $url_sistema ?>img/<?php echo $logo_rel ?>">	
	<?php } ?>



	<div id="header" >

		<div style="border-style: solid; font-size: 10px; height: 55px;">
			<table style="width: 100%; border: 0px solid #ccc;">
				<tr>
					<td style="border: 1px; solid #000; width: 25%; text-align: left;">
						<img style="margin-top: 0px; margin-left: 7px;" id="imag" src="<?php echo $url_sistema ?>img/<?php echo $logo_rel ?>" width="180px">
					</td>

					<td style="text-align: center; font-size: 10px">

						<b><?php echo @mb_strtoupper($nome_sistema) ?></b><br>
						<?php echo @mb_strtoupper($cnpj_sistema) ?><br>
						INSTAGRAM: <b><?php echo @mb_strtoupper($instagram_sistema) ?></b><br>
						<?php echo @mb_strtoupper($endereco_sistema) ?>

					</td>
					<td style="width: 28%; text-align: right; font-size: 9px;padding-right: 10px;">
						<b><big>NÚMERO DA OS: <?php echo $id ?></big></b><br>
						CONTATO: <?php echo $telefone_sistema ?><br> 
						<?php echo @mb_strtoupper($data_hoje) ?>
					</td>
				</tr>		
			</table>
		</div>

	</div>


		<table id="cabecalhotabela" style="border-bottom-style: solid; font-size: 10px; margin-bottom:10px; width: 100%; table-layout: fixed; margin-top: -20px">
			<thead>
				
				<tr id="cabeca" style="margin-left: 0px; background-color:#f2f0f0">
					<td style="width:33%"><b>DATA: <?php echo $dataF ?></b> </td>
					<td style="width:33%"><b>TÉCNICO: <?php echo @mb_strtoupper($nome_tecnico) ?></b></td>
					<td style="width:34%"><b>PREVISÃO DE ENTREGA: <?php echo $data_entregaF ?></b></td>	
					<td style="width:20%"><b>GARANTIA: <?php echo $dias_garantia ?></b></td>			
					
					
				</tr>
			</thead>
		</table>




		<table id="cabecalhotabela" style="border-style: solid; font-size: 9px; margin-bottom:10px; width: 100%; table-layout: fixed; margin-top:10px;">
			<thead>
				
				<tr id="cabeca" style="margin-left: 0px; background-color:#f2f0f0">
					<td colspan="4" style="width:100%; font-size: 10px"><b>DADOS DO CLIENTE</b> </td>					
				</tr>
				<tr >
					<td style="width:10%; border-right: 1px solid #000;border-bottom: : 1px solid #000;">NOME: </td>
					<td style="width:40%; border-right: : 1px solid #000; border-bottom: : 1px solid #000;">
						<?php echo @mb_strtoupper($nome_cliente) ?>
					</td>

					<td style="width:10%; border-right: 1px solid #000; border-bottom: : 1px solid #000">TELEFONE: </td>
					<td style="width:40%; border-right: : 1px solid #000;  border-bottom: : 1px solid #000">
						<?php echo @mb_strtoupper($tel_cliente) ?>
					</td>
					
					
				</tr>
				<tr >
					<td style="width:10%; border-right: 1px solid #000;border-bottom: : 1px solid #000;">ENDEREÇO: </td>
					<td colspan="3" style="width:40%; border-bottom: : 1px solid #000;">
						<?php echo @mb_strtoupper($endereco_cliente) ?>
					</td>
					
					
				</tr>

			



				
			</thead>
		</table>


		<table id="cabecalhotabela" style="font-size: 9px; margin-bottom:10px; width: 100%; table-layout: fixed; margin-top:10px;">
			<thead>

				<?php if(@$equipamento != '') { ?>
				
				<tr id="cabeca" style="margin-left: 0px; background-color:#CCC">
					<td colspan="4" style="width:100%; font-size: 10px"><b>DADOS DO EQUIPAMENTO</b> </td>					
				</tr>
				<tr>
					<td style="width:12%; border-right: 1px solid #000;border-bottom: : 1px solid #000;">EQUIPAMENTO: </td>
					<td style="width:100%; border-bottom: : 1px solid #000;">
						<?php echo @mb_strtoupper(@$nome_equipamento) ?>
					</td>
				</tr>

					<tr >
					<td style="width:8%; border-right: 1px solid #000; border-bottom: : 1px solid #000">MODELO: </td>
					<td style="border-bottom: : 1px solid #000">
						<?php echo @mb_strtoupper(@$nome_modelo) ?>
					</td>
				</tr>


				<td style="width:6%; border-right: 1px solid #000; border-bottom: : 1px solid #000;">MARCA: </td>
				<td style="border-bottom: : 1px solid #000;">
					<?php echo @mb_strtoupper(@$nome_marca) ?>
				</td>
			
				<?php } ?>

			</thead>
		</table>

		<table id="cabecalhotabela" style="font-size: 9px; margin-bottom:10px; width: 100%; table-layout: fixed; margin-top:10px;">
			<thead>
				
				<tr id="cabeca" style="background-color:#CCC">
					<td colspan="12" style="width:100%; font-size: 10px"><b>OUTRAS INFORMAÇÕES: </b> </td>					
				</tr>
				<tr >
					<td style="width:7%; border-right: 1px solid #000;border-bottom: : 1px solid #000;">DEFEITO: </td>
					<td style="width:40%; border-bottom: : 1px solid #000;">
						<?php echo @mb_strtoupper($defeito) ?>
					</td>

				</tr>
			
				<tr>
					<td style="width:11%; border-right: 1px solid #000;border-bottom: : 1px solid #000;">ACESSÓRIOS: </td>
					<td style="width:100%; border-bottom: 1px solid #000;">
						<?php echo @mb_strtoupper($acessorios) ?>
					</td>
				</tr>

				<tr>
					<td style="width:10%; border-right: 1px solid #000;border-bottom: : 1px solid #000;">CONDIÇÕES: </td>
					<td style="width:100%; border-bottom: 1px solid #000;">
						<?php echo @mb_strtoupper($condicoes) ?>
					</td>
				</tr>
				<tr>
					<td style="width:14%; border-right: 1px solid #000;border-bottom: : 1px solid #000;">LAUDO TÉCNICO: </td>
					<td style="width:100%; border-bottom: 1px solid #000;">
						<?php echo @mb_strtoupper($laudo) ?>
					</td>
				</tr>
				<tr>
					<td style="width:8%; border-right: 1px solid #000;border-bottom: : 1px solid #000;">OBS: </td>
					<td style="width:100%; border-bottom: : 1px solid #000;">
						<?php echo @mb_strtoupper($obs) ?>
					</td>
				</tr>

					<?php if($senha_ap != ""){ ?>
						<td style="width:18%; border-right: 1px solid #000;border-bottom: : 1px solid #000;">SENHA DO APARELHO: </td>
					<td style="width:100%; border-bottom: : 1px solid #000;">
						<?php echo @mb_strtoupper($senha_ap) ?>
					</td>
				<?php	} ?>


			</thead>
		</table>



		<?php 
		$total_servicos = 0;
		$total_servicosF = 0;
		$query = $pdo->query("SELECT * from servicos_orc where os = '$id'");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		$linhas = @count($res);
		if($linhas > 0){
			?>
			<table id="cabecalhotabela" style="border-bottom-style: solid; font-size: 10px; margin-bottom:10px; width: 100%; table-layout: fixed;">
				<thead>

					<tr id="cabeca" style="margin-left: 0px; background-color:#CCC">
						<td style="width:45%">SERVIÇO</td>
						<td style="width:15%">QUANTIDADE</td>
						<td style="width:20%">R$ VALOR</td>
						<td style="width:20%">TOTAL</td>
					</tr>
				</thead>
			</table>


			<table style="width: 100%; table-layout: fixed; font-size:10px; text-transform: uppercase; margin-top: -5px">
				<thead>
					<tbody>
						<?php 
						for($i=0; $i<$linhas; $i++){

							$servico = $res[$i]['servico'];
							$quantidade = $res[$i]['quantidade'];
							$valor = $res[$i]['valor'];
							$total = $res[$i]['total'];

							$valorF = number_format($valor, 2, ',', '.');
							$totalF = number_format($total, 2, ',', '.');

							$total_servicos += $total;
							$total_servicosF = number_format($total_servicos, 2, ',', '.');

							$query2 = $pdo->query("SELECT * from servicos where id = '$servico'");
							$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
							$nome_servico = $res2[0]['nome'];

							?>


							<tr>
								<td style="width:45%"><?php echo $nome_servico ?></td>
								<td style="width:15%"><?php echo $quantidade ?></td>
								<td style="width:20%">R$ <?php echo $valorF ?></td>
								<td style="width:20%">R$ <?php echo $totalF ?></td>


							</tr>

						<?php } ?>
					</tbody>

				</thead>
			</table>

		<?php } ?>

		<?php 
		$total_produtos = 0;
		$total_produtosF = 0;
		$query = $pdo->query("SELECT * from produtos_orc where os = '$id'");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		$linhas = @count($res);
		if($linhas > 0){
			?>
			<table id="cabecalhotabela" style="border-bottom-style: solid; font-size: 10px; margin-bottom:10px; width: 100%; table-layout: fixed; margin-top: 10px">
				<thead>

					<tr id="cabeca" style="margin-left: 0px; background-color:#CCC">
						<td style="width:45%">PRODUTO</td>
						<td style="width:15%">QUANTIDADE</td>
						<td style="width:20%">R$ VALOR</td>
						<td style="width:20%">TOTAL</td>


					</tr>
				</thead>
			</table>




			<table style="width: 100%; table-layout: fixed; font-size:10px; text-transform: uppercase; margin-top: -5px">
				<thead>
					<tbody>
						<?php 
						for($i=0; $i<$linhas; $i++){

							$produto = $res[$i]['produto'];
							$quantidade = $res[$i]['quantidade'];
							$valor = $res[$i]['valor'];
							$total = $res[$i]['total'];

							$valorF = number_format($valor, 2, ',', '.');
							$totalF = number_format($total, 2, ',', '.');

							$total_produtos += $total;
							$total_produtosF = number_format($total_produtos, 2, ',', '.');

							$query2 = $pdo->query("SELECT * from produtos where id = '$produto'");
							$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
							@$nome_produto = $res2[0]['nome'];

							?>


							<tr>
								<td style="width:45%"><?php echo $nome_produto ?></td>
								<td style="width:15%"><?php echo $quantidade ?></td>
								<td style="width:20%">R$ <?php echo $valorF ?></td>
								<td style="width:20%">R$ <?php echo $totalF ?></td>


							</tr>


						<?php } ?>
					</tbody>

				</thead>
			</table>

		<?php } ?>



		<hr style="margin-top: 15px">
		<div style="background:#f2f0f0; padding:5px; margin-top: 20px;">
			<?php if($total_servicos > 0){ ?>
				<div align="right" style="font-size:10px;">
					<span><b>TOTAL SERVIÇOS:</b> R$ <?php echo $total_servicosF ?></span>
				</div>
			<?php } ?>

			<?php if($total_produtos > 0){ ?>
				<div align="right" style="margin-top: 4px; font-size:10px;">
					<span><b>TOTAL PRODUTOS:</b> R$ <?php echo $total_produtosF ?></span>
				</div>
			<?php } ?>

			<?php if($mao_obra > 0){ ?>
				<div align="right" style="margin-top: 4px; font-size:10px;">
					<span><b>MÃO DE OBRA:</b> R$ <?php echo $mao_obraF ?></span>
				</div>
			<?php } ?>

			<?php if($desconto > 0){ ?>
				<div align="right" style="margin-top: 4px; font-size:10px;">
					<span><b>DESCONTO:</b> <?php echo $valor_reais ?> <?php echo $descontoF ?><?php echo $valor_porcent ?></span>
				</div>
			<?php } ?>

			<?php if($frete > 0){ ?>
				<div align="right" style="margin-top: 4px; font-size:10px;">
					<span><b>FRETE: </b>R$ <?php echo $freteF ?></span>
				</div>
			<?php } ?>

			<?php if($val_entrada > 0){ ?>
				<div align="right" style="margin-top: 4px; font-size:10px;">
					<span><b>ENTRADA: </b>R$ <?php echo $val_entradaF ?></span>
				</div>
			<?php } ?>

			<?php if($vall > 0){ ?>
				<div align="right" style="margin-top: 4px; font-size:10px;">
					<span><b>VALOR DO SERVIÇO: </b>R$ <?php echo $total_vallF ?></span>
				</div>
			<?php } ?>

		</div>

		<hr>
		<div align="right" style="margin-top: 4px; font-size:11px; background:#d9dbdb; padding:5px">
			<span><b>TOTAL: R$ <?php echo $subtotalF ?></b></span>
		</div>

		<?php 
	if($pago =='Sim'){ ?>

		<div align="" style="margin-top: 3px; font-size:15px; background:#d9dbdb; padding:4px">
			<span><b>Pago</b></span>
		</div>
	<?php } ?>


<?php 
$dias_garantia == 0;
	if($dias_garantia > 0){ ?>

		<div style="margin-top: 5px; ">
			 <label><b>Garantia</b></label> 
			<div style="text-align: left;" >
				<span style="font-size: 10px; margin-top: 3px"><?php echo @$garantia ?></span>
			</div>

		</div>
	<?php } ?>



	<?php 
$dias_garantia == 0;
	if($dias_garantia > 0){ ?>

		<div style="margin-top: 5px;">
			 <label style="margin-top: 5px"><b>Termos</b></label> 
			<div style="text-align: left;" >
				<span style="font-size: 10px; margin-top: 3px"><?php echo @$termos ?></span>
			</div>
		</div>
	<?php } ?>








		<div align="center" style="margin-top: 35px; font-size:10px; padding-top:15px; padding-bottom:5px">
			<span>_________________________________________________________________<br>
			ASSINATURA DO CLIENTE</span>
		</div>




		
		<?php if($imagens_pdf_os == 'Sim'){ ?>

			

			<?php 
				$query = $pdo->query("SELECT * FROM os_imagens where os = '$id' ");
				$res = $query->fetchAll(PDO::FETCH_ASSOC);
				$total_imgs = count($res);
				if($total_imgs > 0){
					
					echo '<div align="center" style="margin-top:45px">';
					

				for ($i=0; $i < $total_imgs; $i++) { 					
					$id = $res[$i]['id'];
					$foto = $res[$i]['foto'];
					$caminho_img = $url_sistema.'painel/images/os/'.$foto;
					
			 ?>

			 <img src="<?php echo $caminho_img ?>" width="170px" style="margin-top: 10px">

			<?php }
			echo '</div>';
			 } ?>

		<?php } ?>


	



	<div id="footer" class="row">
		<hr style="margin-bottom: 0;">
		<table style="width:100%;">
			<tr style="width:100%;">
				<td style="width:60%; font-size: 10px; text-align: left;"><?php echo $nome_sistema ?> Telefone: <?php echo $telefone_sistema ?></td>
				<td style="width:40%; font-size: 10px;"><p style="text-align: right;" class="page">Página </p></td>
			</tr>
		</table>
	</div>


	
</body>

</html>


