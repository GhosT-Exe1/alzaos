<?php 
@session_start();
$id_usuario = @$_SESSION['id'];
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'saidas';


$quantidade_saida = $_POST['quantidade_saida'];
$motivo_saida = $_POST['motivo_saida'];
$id_produto = $_POST['id'];
$estoque = $_POST['estoque'];


$total_produtos = $estoque - $quantidade_saida;

$query = $pdo->prepare("INSERT INTO $tabela SET produto = '$id_produto', quantidade = '$quantidade_saida', motivo = :motivo, usuario = '$id_usuario', data = curDate(), empresa = '$id_empresa' ");

$query->bindValue(":motivo", "$motivo_saida");
$query->execute();

$pdo->query("UPDATE produtos SET estoque = '$total_produtos' where id = '$id_produto' ");

echo 'Salvo com Sucesso';

?>