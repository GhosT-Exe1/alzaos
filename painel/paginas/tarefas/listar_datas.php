<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$usuario = @$_POST['usuario'];
$array_datas = '';

$query = $pdo->query("SELECT * from tarefas where usuario = '$usuario' and status = 'Agendada' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);


$datas = '';
if($linhas > 0){
for($i=0; $i<$linhas; $i++){
  $data_tarefa = $res[$i]['data'];  
  $datas .= $data_tarefa;
}

}

echo $datas;

?>