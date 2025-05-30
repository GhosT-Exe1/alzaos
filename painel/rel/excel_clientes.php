<?php
@session_start();
$mostrar_registros = @$_SESSION['registros'];
$id_empresa = @$_SESSION['empresa'];
$id_usuario = @$_SESSION['id'];
require_once("../../conexao.php");

$dadosXls = "";
$dadosXls .= " <table border='1' >";

$dadosXls .= " <tr>";
$dadosXls .= " <th>Nome</th>";
$dadosXls .= " <th>Telefone</th>";
$dadosXls .= " <th>Email</th>";
$dadosXls .= " <th>CPF / CNPJ</th>";
$dadosXls .= " <th>Tipo Pessoa</th>";
$dadosXls .= " <th>Data Cadastro</th>";
$dadosXls .= " <th>Data Nascimento</th>";
$dadosXls .= " <th>".@utf8_decode('Endereço')."</th>";
$dadosXls .= " <th>".@utf8_decode('Número')."</th>";
$dadosXls .= " <th>CEP</th>";
$dadosXls .= " <th>Birro</th>";
$dadosXls .= " <th>Cidade</th>";
$dadosXls .= " <th>Estado</th>";
$dadosXls .= " </tr>";


if($mostrar_registros == 'Não'){
	$query = $pdo->query("SELECT * from clientes where usuario = '$id_usuario' and empresa = '$id_empresa' order by id desc");
}else{
	$query = $pdo->query("SELECT * from clientes where empresa = '$id_empresa' order by id desc");
}
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
for($i=0; $i<$linhas; $i++){
	$id = $res[$i]['id'];
	$nome = $res[$i]['nome'];
	$telefone = $res[$i]['telefone'];
	$email = $res[$i]['email'];	
	$endereco = $res[$i]['endereco'];
	$tipo_pessoa = $res[$i]['tipo_pessoa'];
	$cpf = $res[$i]['cpf'];
	
	$data_cad = $res[$i]['data_cad'];
	$data_nasc = $res[$i]['data_nasc'];

	$endereco = $res[$i]['endereco'];
	$numero = $res[$i]['numero'];
	$cep = $res[$i]['cep'];
	$bairro = $res[$i]['bairro'];
	$cidade = $res[$i]['cidade'];
	$estado = $res[$i]['estado'];


	$data_cadF = implode('/', array_reverse(@explode('-', $data_cad)));
	$data_nascF = implode('/', array_reverse(@explode('-', $data_nasc)));

	$tel_whatsF = '55'.preg_replace('/[ ()-]+/' , '' , $telefone);

$dadosXls .= " <tr>";
$dadosXls .= " <td>".@utf8_decode($nome)."</td>";
$dadosXls .= " <td>".$telefone."</td>";
$dadosXls .= " <td>".$email."</td>";
$dadosXls .= " <td>".$cpf."</td>";
$dadosXls .= " <td>".@utf8_decode($tipo_pessoa)."</td>";
$dadosXls .= " <td>".$data_cadF."</td>";
$dadosXls .= " <td>".$data_nascF."</td>";
$dadosXls .= " <td>".@utf8_decode($endereco)."</td>";
$dadosXls .= " <td>".$numero."</td>";
$dadosXls .= " <td>".$cep."</td>";
$dadosXls .= " <td>".@utf8_decode($bairro)."</td>";
$dadosXls .= " <td>".@utf8_decode($cidade)."</td>";
$dadosXls .= " <td>".@utf8_decode($estado)."</td>";


$dadosXls .= " </tr>";

}
}


$dadosXls .= " </table>";

$arquivo = "rel-clientes.xls";

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$arquivo.'"');
header('Cache-Control: max-age=0');

echo $dadosXls;
exit;

?>