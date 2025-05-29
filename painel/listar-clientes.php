<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../conexao.php");

// Busca os clientes da empresa
$query = $pdo->prepare("SELECT id, nome FROM clientes WHERE empresa_id = :id ORDER BY nome");
$query->bindValue(":id", $id_empresa);
$query->execute();
$clientes = $query->fetchAll(PDO::FETCH_ASSOC);

// Retorna os clientes em formato JSON
header('Content-Type: application/json');
echo json_encode($clientes);
?> 