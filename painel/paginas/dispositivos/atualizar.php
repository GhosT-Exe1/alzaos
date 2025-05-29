<?php
@session_start();
header('Content-Type: application/json');

error_reporting(E_ALL);
ini_set('display_errors', 1);

$tabela = 'dispositivos';
require_once("../../../conexao.php");
$id_empresa = @$_SESSION['empresa'];
require_once("../../buscar_config.php");

$appkey = $_POST['appkey'];

$stmt = $pdo->prepare("UPDATE $tabela SET status = :status, status_api = :status_api WHERE appkey = :appkey");

if($stmt->execute([':status' => 'Ativo', ':status_api' => 'conectado', ':appkey' => $appkey ]))
{
    $response = json_encode(['status' => 200]);
}
else
{
     $response = json_encode(['status' => 500]);
}

echo $response;

?>
