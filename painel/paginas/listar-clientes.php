<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../conexao.php");

// Busca os clientes da empresa
$query = $pdo->prepare("SELECT id, nome FROM clientes WHERE empresa = :empresa ORDER BY nome");
$query->bindValue(":empresa", $id_empresa);
$query->execute();
$clientes = $query->fetchAll(PDO::FETCH_ASSOC);

// Retorna os clientes em formato JSON
header('Content-Type: application/json');
echo json_encode($clientes);
?> 