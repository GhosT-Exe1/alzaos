<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$tabela = 'receber';

$id_usuario = $_SESSION['id'];

$id = $_POST['id-baixar'];
$data_atual = date('Y-m-d');
	$dia = date('d');
	$mes = date('m');
	$ano = date('Y');

$valor = $_POST['valor-baixar'];
$valor = str_replace(',', '.', $valor);

$subtotal = $_POST['subtotal'];
$subtotal = str_replace(',', '.', $subtotal);

$saida = $_POST['saida-baixar'];
$data_baixar = $_POST['data-baixar'];

$query = $pdo->query("SELECT * FROM $tabela where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$descricao = $res[0]['descricao'];
$cliente = $res[0]['cliente'];
$valor_antigo = $res[0]['valor'];
$data_lanc = $res[0]['data_lanc'];
$data_venc = $res[0]['vencimento'];
$data_pgto = $res[0]['data_pgto'];
$usuario_lanc = $res[0]['usuario_lanc'];
$usuario_pgto = $res[0]['usuario_pgto'];
$frequencia = $res[0]['frequencia'];
$saida_antiga = $res[0]['forma_pgto'];
$arquivo = $res[0]['arquivo'];
$pago = $res[0]['pago'];


if($valor > $valor_antigo){
	echo 'O valor a ser pago não pode ser superior ao valor da conta! O valor da conta é de R$ '.$valor_antigo;
	exit();
}

if($valor <= 0){
	echo 'O precisa ser maior que 0 ';
	exit();
}



if($valor == $valor_antigo){

	$pdo->query("UPDATE $tabela set forma_pgto = '$saida', usuario_pgto = '$id_usuario', pago = 'Sim', valor = '$subtotal', data_pgto = '$data_baixar' where id = '$id'");

	//CRIAR A PRÓXIMA CONTA A PAGAR
	$dias_frequencia = $frequencia;

	if($dias_frequencia == 30 || $dias_frequencia == 31){		
		$nova_data_vencimento = date('Y/m/d', strtotime("+1 month",strtotime($data_venc)));

	}else if($dias_frequencia == 90){
		$nova_data_vencimento = date('Y/m/d', strtotime("+3 month",strtotime($data_venc)));

	}else if($dias_frequencia == 180){ 
		$nova_data_vencimento = date('Y/m/d', strtotime("+6 month",strtotime($data_venc)));

	}else if($dias_frequencia == 360 || $dias_frequencia == 365){
		$nova_data_vencimento = date('Y/m/d', strtotime("+1 year",strtotime($data_venc)));

	}else{		
		$nova_data_vencimento = date('Y/m/d', strtotime("+$dias_frequencia days",strtotime($data_venc))); 
	}


	if(@$dias_frequencia > 0){
		$pdo->query("INSERT INTO $tabela set descricao = '$descricao', cliente = '$cliente', valor = '$valor_antigo', data_lanc = curDate(), vencimento = '$nova_data_vencimento', frequencia = '$frequencia', forma_pgto = '$saida_antiga', arquivo = '$arquivo', pago = 'Não', empresa = '$id_empresa', hora_alerta = '$hora_random'");
				$id_ult_registro = $pdo->lastInsertId();				
	}

	

}else{

	$descricao = '(Resíduo) ' . $descricao;
	//PEGAR RESIDUOS DA CONTA
	$total_resid = 0;
	$query = $pdo->query("SELECT * FROM receber WHERE id_ref = '$id' and residuo = 'Sim'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	if (@count($res) > 0) {

		for ($i = 0; $i < @count($res); $i++) {
			foreach ($res[$i] as $key => $value) {
			}
			$valor_resid = $res[$i]['valor'];
			$total_resid += $valor_resid;
		}
	}

	$valor_antigo = $valor_antigo - $subtotal;



	//verificar caixa aberto
$query1 = $pdo->query("SELECT * from caixas where operador = '$id_usuario' and data_fechamento is null order by id desc limit 1");
$res1 = $query1->fetchAll(PDO::FETCH_ASSOC);
if (@count($res1) > 0) {
	$id_caixa = @$res1[0]['id'];
} else {
	$id_caixa = 0;
}
//  

	$pdo->query("INSERT INTO receber set id_ref = '$id', referencia = 'Venda', valor = '$subtotal', data_pgto = curDate(), vencimento = curDate(), data_lanc = curDate(), descricao = 'Resíduo Venda', usuario_lanc = '$id_usuario', usuario_pgto = '$id_usuario', cliente = '$cliente', forma_pgto = '$saida', frequencia = '0', arquivo = 'sem-foto.png', subtotal = '$subtotal', pago = 'Sim', residuo = 'Sim', caixa = '$id_caixa', hora = curTime(), empresa = '$id_empresa', hora_alerta = '$hora_random', subtotal = '$subtotal'");

	

	$pdo->query("UPDATE $tabela set forma_pgto = '$saida', usuario_pgto = '$id_usuario', valor = '$valor_antigo', data_pgto = curDate() where id = '$id'");

}

echo 'Baixado com Sucesso';

?>

