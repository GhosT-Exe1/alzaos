<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'os';

$id_usuario = $_SESSION['id'];

$data_hoje = date('Y-m-d');

$id = $_POST['id_da_os'];
$status = @$_POST['status'];

$pdo->query("UPDATE $tabela SET status = '$status', funcionario = '$id_usuario' WHERE id = '$id'");

echo 'Alterado com Sucesso';

$query = $pdo->query("SELECT * from os where id = '$id' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$cliente = $res[0]['cliente'];
	$frete = $res[0]['frete'];
	$subtotal = $res[0]['subtotal'];
	$subtotalF = number_format($subtotal, 2, ',', '.');
	$total_servicos = $res[0]['total_servicos'];
	$mao_obra = $res[0]['mao_obra'];
	$tecnico = $res[0]['tecnico'];
	$val_entrada = $res[0]['val_entrada'];
	$val_entradaF = number_format($val_entrada, 2, ',', '.');
	$laudo = $res[0]['laudo'];
	$pago = $res[0]['pago'];
	$forma_pgto = $res[0]['forma_pgto'];



	if($val_entrada == ""){
		$val_entrada = "0";
	}

	if($total_servicos == ""){
		$total_servicos = "0";
	}

	$total = $val_entrada + $subtotal;
	$totalF = number_format($total, 2, ',', '.');



	if($mao_obra == ""){
		$mao_obra = "0";
	}
	$total_servicos_geral = $total_servicos + $mao_obra;
	$equipamento = $res[0]['equipamento'];



if($status == 'Finalizada'){
	//api whats
if($api_whatsapp != 'Não'){
	
	$query = $pdo->query("SELECT * from clientes where id = '$cliente' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$telefone = $res[0]['telefone'];
	$nome_cliente = $res[0]['nome'];

	$telefone_envio = '55'.preg_replace('/[ ()-]+/' , '' , $telefone);
	
		$mensagem = '*'.$nome_sistema.'* %0A%0A';
		$mensagem = '_Serviço Finalizado_ %0A%0A';
		
		if($frete > 0){
			$mensagem .= 'Olá '.$nome_cliente.', seu Serviço foi Concluído, seguem abaixo os detalhes! %0A';
		}else{
			$mensagem .= 'Olá '.$nome_cliente.', seu Serviço foi Concluído, pode vir retirar seu aparelho traga a Notinha que recebeu quando deixou seu aparelho! %0A%0A';
		}
		
		
		if($val_entrada > 0){
		$mensagem .= 'Valor: *R$ '.$total.'* %0A';
		$mensagem .= 'Entrada: *R$ '.$val_entradaF.'* %0A';
		$mensagem .= 'Restante: *R$ '.$subtotalF.'* %0A%0A';
		}else{
			if($subtotal > 0){
		$mensagem .= 'Valor: *R$ '.$subtotalF.'* %0A%0A';
		}
		}
		if($pago == 'Sim'){
			$mensagem .= 'Pago:  '.$pago.'* %0A%0A';
		}

		if($dados_pagamento != "" and $subtotal > 0 and $pago == 'Não' || $pago == ''){
			$mensagem .= 'Dados Pagamento: *'.$dados_pagamento.'* %0A';
		}		
		

	require('../../apis/texto.php');
}	
}


$data_hoje = date('Y-m-d');
$data_mes = date('Y/m/d', strtotime("+30 days",strtotime($data_hoje)));

if($status == 'Entregue'){
	$descrição = 'Serviço '.$equipamento;

	//Remover valor da entrada e adicionar o resto da contas à pagar
	if($pago != 'Sim'){

		$pdo->query("INSERT INTO receber SET descricao = 'Novo Serviço', valor = '$subtotal', vencimento = curDate(), data_lanc = curDate(), data_pgto = curDate(),  usuario_lanc = '$id_usuario', usuario_pgto = '$id_usuario', arquivo = 'sem-foto.png', pago = 'Sim', cliente = '$cliente', referencia = 'Serviço', hora = curTime(), forma_pgto = '$forma_pgto', id_ref = '$id', empresa = '$id_empresa', hora_alerta = '$hora_random'");
		
	}

		

		//abater os produtos no estoque
		$query2 = $pdo->query("SELECT * from produtos_orc where os = '$id'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		$linhas2 = @count($res2);
		if($linhas2 > 0){
			for($i=0; $i<$linhas2; $i++){
			$id_pro_orc = $res2[$i]['id'];
			$id_produto = $res2[$i]['produto'];
			$quantidade = $res2[$i]['quantidade'];
			$valor_prod = $res2[$i]['valor'];
			$total_prod = $res2[$i]['total'];
		

			$query7 = $pdo->query("SELECT * from produtos where id = '$id_produto'");
			$res7 = $query7->fetchAll(PDO::FETCH_ASSOC);
			$estoque = $res7[0]['estoque'];
			$tem_estoque = $res7[0]['tem_estoque'];
			$vendas = $res7[0]['vendas'];

			if($tem_estoque == 'Sim'){
				$novo_estoque = $estoque - $quantidade;
				$vendas = $vendas + $quantidade;
				//remove o produto do estoque
				$pdo->query("UPDATE produtos SET estoque = '$novo_estoque', vendas = '$vendas' WHERE id = '$id_produto'"); 
			}
		}
	}


	//gerar a comissão do técnico
	
		if($total_servicos_geral > 0){
			$query = $pdo->query("SELECT * from usuarios where id = '$tecnico' ");
			$res = $query->fetchAll(PDO::FETCH_ASSOC);
			$comissao_tec = @$res[0]['comissao'];
			
			if($comissao_tec > 0){
			$comissao = $comissao_tec;
			

			$total_comissao = ($total_servicos_geral * $comissao) / 100;
			$data_venc = date('Y/m/d', strtotime("+$dias_comissao days",strtotime($data_hoje)));

			$pdo->query("INSERT INTO pagar SET descricao = 'Comissão', funcionario = '$tecnico', valor = '$total_comissao', subtotal = '$total_comissao', vencimento = '$data_venc', frequencia = '0', data_lanc = curDate(), usuario_lanc = '$id_usuario', arquivo = 'sem-foto.png', pago = 'Não', referencia = 'Comissão', id_ref='$id', empresa = '$id_empresa', hora_alerta = '$hora_random'");
		}
	}

	//Atualizar a data de Entrega
	$pdo->query("UPDATE os SET data_entrega = '$data_hoje' where id = '$id'");

 }


?>

