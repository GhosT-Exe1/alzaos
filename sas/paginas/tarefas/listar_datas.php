<?php 

require_once("../../../conexao.php");

$usuario = @$_POST['usuario'];
$array_datas = '';

$query = $pdo->query("SELECT * from tarefas_sas where usuario = '$usuario' and status = 'Agendada'");
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