<?php 
include('data_formatada.php');

if ($token_rel != 'M543661') {
	echo '<script>window.location="../../"</script>';
	exit();
}

$dataInicialF = implode('/', array_reverse(@explode('-', $dataInicial)));
$dataFinalF = implode('/', array_reverse(@explode('-', $dataFinal)));

$texto_pago = "";
if($pago == 'Sim'){
	$texto_pago = ' PAGAS';
}	

if($pago == 'Não'){
	$texto_pago = ' PENDENTES';
}	

if($pago == 'Vencidas'){
	$texto_pago = ' VENCIDAS';
}	


if($tipo_data == ""){
	$tipo_data = "vencimento";
}

if($tipo_data == 'data_lanc'){
	$texto_tipo_data = 'Data de Lançamento';
}	

if($tipo_data == 'data_pgto'){
	$texto_tipo_data = 'Data de Pagamento';
}	

if($tipo_data == 'vencimento'){
	$texto_tipo_data = 'Data de Vencimento';
}	


$datas = "";
if($dataInicial == $dataFinal){
	$datas = $dataInicialF;
}else{
	$datas = $dataInicialF.' à '.$dataFinalF;
}

$texto_filtro = $texto_tipo_data.' : '.$datas;

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
	opacity:8%;
}

tr:nth-child(odd) { /* Linhas ímpares */
    background-color: #f2f2f2;
}

tr:nth-child(even) { /* Linhas pares */
    background-color: #ffffff;
}


</style>

</head>
<body>
	
<?php
if ($marca_dagua == 'Sim') { ?>
	<img class="marca" src="<?php echo $url_sistema ?>img/<?php echo $icone_sistema ?>">
<?php } ?>


<div id="header" >

	<div style="border-style: solid; font-size: 10px; height: 50px;">
		<table style="width: 100%; border: 0px solid #ccc;">
			<tr style="background:#FFF">
				<td style="width: 7%; text-align: left;">
					<img style="margin-top: 7px; margin-left: 7px;" id="imag" src="<?php echo $url_sistema ?>img/<?php echo $logo_rel ?>" width="150px">
				</td>
				<td style="width: 30%; text-align: left; font-size: 13px;">
					
				</td>
				<td style="width: 1%; text-align: center; font-size: 13px;">
				
				</td>
				<td style="width: 47%; text-align: right; font-size: 9px;padding-right: 10px;">
						<b><big>RELATÓRIO DE CONTAS À RECEBER <?php echo $texto_pago ?></big></b>
							<br>FILTRO: <?php echo mb_strtoupper($texto_filtro) ?> 
							<br> <?php echo mb_strtoupper($data_hoje) ?>
				</td>
			</tr>		
		</table>
	</div>

<br>


		<table id="cabecalhotabela" style="border-bottom-style: solid; font-size: 8px; margin-bottom:10px; width: 100%; table-layout: fixed;">
			<thead>
				
				<tr id="cabeca" style="margin-left: 0px; background-color:#CCC">
					<td style="width:22%">DESCRIÇÃO</td>
					<td style="width:10%">VALOR</td>
					<td style="width:17%">CLIENTE</td>
					<td style="width:12%">VENCIMENTO</td>
					<td style="width:12%">PAGAMENTO</td>
					<td style="width:15%">FORMA PGTO</td>	
					<td style="width:12%">FREQUÊNCIA</td>		
					
				</tr>
			</thead>
		</table>
</div>

<div id="footer" class="row">
<hr style="margin-bottom: 0;">
	<table style="width:100%;">
		<tr style="width:100%; background:#FFF">
			<td style="width:60%; font-size: 10px; text-align: left;"><?php echo $nome_sistema ?> Telefone: <?php echo $telefone_sistema ?></td>
			<td style="width:40%; font-size: 10px; text-align: right;"><p class="page">Página  </p></td>
		</tr>
	</table>
</div>

<div id="content" style="margin-top: 0;">



		<table style="width: 100%; table-layout: fixed; font-size:7px; text-transform: uppercase;">
			<thead>
				<tbody>
					<?php

$total_valor = 0;
$total_valorF = 0;
$total_pendentes = 0;
$total_pendentesF = 0;
$total_pagas = 0;
$total_pagasF = 0;
$pendentes = 0;
$pagas = 0;

if($mostrar_registros == 'Não'){
	if($pago == 'Vencidas'){
		$query = $pdo->query("SELECT * from receber where vencimento < curDate() and pago != 'Sim' and usuario_lanc = '$id_usuario' and empresa = '$id_empresa' order by id desc");
	}else{
	$query = $pdo->query("SELECT * from receber where $tipo_data >= '$dataInicial' and $tipo_data <= '$dataFinal' and pago LIKE '%$pago%' and usuario_lanc = '$id_usuario'  and empresa = '$id_empresa' order by id desc");
	}
}else{
	if($pago == 'Vencidas'){
		$query = $pdo->query("SELECT * from receber where vencimento < curDate() and pago != 'Sim' and empresa = '$id_empresa' order by id desc");
	}else{
	$query = $pdo->query("SELECT * from receber where $tipo_data >= '$dataInicial' and $tipo_data <= '$dataFinal' and pago LIKE '%$pago%' and empresa = '$id_empresa' order by id desc");
	}
}

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
for($i=0; $i<$linhas; $i++){
	$id = $res[$i]['id'];
	$descricao = $res[$i]['descricao'];
	$cliente = $res[$i]['cliente'];
	$valor = $res[$i]['valor'];
	$vencimento = $res[$i]['vencimento'];
	$data_pgto = $res[$i]['data_pgto'];
	$data_lanc = $res[$i]['data_lanc'];
	$forma_pgto = $res[$i]['forma_pgto'];
	$frequencia = $res[$i]['frequencia'];
	$obs = $res[$i]['obs'];
	$arquivo = $res[$i]['arquivo'];
	$referencia = $res[$i]['referencia'];
	$id_ref = $res[$i]['id_ref'];
	$multa = $res[$i]['multa'];
	$juros = $res[$i]['juros'];
	$desconto = $res[$i]['desconto'];
	$taxa = $res[$i]['taxa'];
	$subtotal = $res[$i]['subtotal'];
	$usuario_lanc = $res[$i]['usuario_lanc'];
	$usuario_pgto = $res[$i]['usuario_pgto'];
	$pago = $res[$i]['pago'];

	$vencimentoF = implode('/', array_reverse(@explode('-', $vencimento)));
	$data_pgtoF = implode('/', array_reverse(@explode('-', $data_pgto)));
	$data_lancF = implode('/', array_reverse(@explode('-', $data_lanc)));



	$valorF = @number_format($valor, 2, ',', '.');
	$multaF = @number_format($multa, 2, ',', '.');
	$jurosF = @number_format($juros, 2, ',', '.');
	$descontoF = @number_format($desconto, 2, ',', '.');
	$taxaF = @number_format($taxa, 2, ',', '.');
	$subtotalF = @number_format($subtotal, 2, ',', '.');

	if($pago == "Sim"){
		$valor_finalF = @number_format($subtotal, 2, ',', '.');
	}else{
		$valor_finalF = @number_format($valor, 2, ',', '.');
	}




$query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario_lanc'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_usu_lanc = $res2[0]['nome'];
}else{
	$nome_usu_lanc = 'Sem Usuário';
}


$query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario_pgto'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_usu_pgto = $res2[0]['nome'];
}else{
	$nome_usu_pgto = 'Sem Usuário';
}


$query2 = $pdo->query("SELECT * FROM frequencias where dias = '$frequencia' and empresa = '$id_empresa'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_frequencia = $res2[0]['frequencia'];
}else{
	$nome_frequencia = 'Sem Registro';
}

$query2 = $pdo->query("SELECT * FROM formas_pgto where id = '$forma_pgto'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_pgto = $res2[0]['nome'];
	$taxa_pgto = $res2[0]['taxa'];
}else{
	$nome_pgto = 'Sem Registro';
	$taxa_pgto = 0;
}


$query2 = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_cliente = $res2[0]['nome'];
}else{
	$nome_cliente = 'Sem Registro';
}


if($pago == 'Sim'){
	$classe_pago = 'verde.jpg';
	$pagas += 1;
	$total_pagas += $subtotal;
}else{
	$classe_pago = 'vermelho.jpg';
	$pendentes += 1;
	$total_pendentes += $valor;
}	

$valor_multa = 0;
$valor_juros = 0;
$classe_venc = '';
if(strtotime($vencimento) < strtotime($data_hoje)){
	$classe_venc = 'text-danger';
	$valor_multa = $multa_atraso;

	//pegar a quantidade de dias que o pagamento está atrasado
	$dif = strtotime($data_hoje) - strtotime($vencimento);
	$dias_vencidos = floor($dif / (60*60*24));

	$valor_juros = ($valor * $juros_atraso / 100) * $dias_vencidos;
}

$total_pendentesF = @number_format($total_pendentes, 2, ',', '.');
$total_pagasF = @number_format($total_pagas, 2, ',', '.');

$taxa_conta = $taxa_pgto * $valor / 100;




//PEGAR RESIDUOS DA CONTA
	$total_resid = 0;
	$valor_com_residuos = 0;
	$query2 = $pdo->query("SELECT * FROM receber WHERE id_ref = '$id' and residuo = 'Sim' and empresa = '$id_empresa'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	if(@count($res2) > 0){

		$descricao = '(Resíduo) - ' .$descricao;

		for($i2=0; $i2 < @count($res2); $i2++){
			foreach ($res2[$i2] as $key => $value){} 
				$id_res = $res2[$i2]['id'];
			$valor_resid = $res2[$i2]['valor'];
			$total_resid += $valor_resid - $res2[$i2]['desconto'];
		}


		$valor_com_residuos = $valor + $total_resid;
	}
	if($valor_com_residuos > 0){
		$vlr_antigo_conta = '('.$valor_com_residuos.')';
		$descricao_link = '';
		$descricao_texto = 'd-none';
	}else{
		$vlr_antigo_conta = '';
		$descricao_link = 'd-none';
		$descricao_texto = '';
	}

  	 ?>

  	 
      <tr>
<td style="width:22%">
<img style="margin-top: 0px" src="<?php echo $url_sistema ?>painel/images/<?php echo $classe_pago ?>" width="8px">
	<?php echo $descricao ?></td>
<td style="width:10%">R$ <?php echo $valor_finalF ?></td>
<td style="width:17%"><?php echo $nome_cliente ?></td>
<td style="width:12%"><?php echo $vencimentoF ?></td>
<td style="width:12%"><?php echo $data_pgtoF ?></td>
<td style="width:12%"><?php echo $nome_pgto ?></td>
<td style="width:12%"><?php echo $nome_frequencia ?></td>

    </tr>

<?php } } ?>
				</tbody>
	
			</thead>
		</table>
	


</div>
<hr>
		<table>
			<thead>
				<tbody>
					<tr>

						<td style="font-size: 10px; width:300px; text-align: right;"></td>

						

						<td style="font-size: 10px; width:70px; text-align: right;"><b>Pendentes: <span style="color:red"><?php echo $pendentes ?></span></td>
							<td style="font-size: 10px; width:70px; text-align: right;"><b>Pagas: <span style="color:green"><?php echo $pagas ?></span></td>
								<td style="font-size: 10px; width:140px; text-align: right;"><b>Pendentes: <span style="color:red">R$ <?php echo $total_pendentesF ?></span></td>
									<td style="font-size: 10px; width:120px; text-align: right;"><b>Pagas: <span style="color:green">R$ <?php echo $total_pagasF ?></span></td>
						
					</tr>
				</tbody>
			</thead>
		</table>

</body>

</html>




 