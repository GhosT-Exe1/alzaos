<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$tabela = 'pagar';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$id = $_POST['id'];

$query = $pdo->query("SELECT * FROM $tabela where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_recorrencia = @$res[0]['id_recorrencia'];



	$query = $pdo->query("SELECT * from $tabela where id_recorrencia = '$id_recorrencia' and pago != 'Sim' and empresa = '$id_empresa'");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		$total_reg = @count($res);
		if($total_reg > 0){
			for($i=0; $i < $total_reg; $i++){
				$hash = @$res[$i]['hash'];
				$id_conta = @$res[$i]['id'];

				
				$pdo->query("DELETE FROM $tabela WHERE id = '$id_conta'");

			}
		}

echo 'Cancelado com Sucesso';
?>