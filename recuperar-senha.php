<?php 
require_once("conexao.php");

$email = $_POST['email'];

$query = $pdo->prepare("SELECT * from usuarios where email = :email");
$query->bindValue(":email", "$email");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){    
	$telefone = $res[0]['telefone'];

        $token = hash('sha256',time());

        $q = $pdo->prepare("UPDATE usuarios SET token=? WHERE email=?");
        $q->execute([$token,$email]);
        
        $reset_link = $url_sistema.'resetar-senha.php'.'?email='.$email.'&token='.$token;


    //envio do email
    $destinatario = $email;
    $assunto = utf8_decode($nome_sistema . ' - Recuperação de Senha');
    $mensagem = utf8_decode('Clique no Link ao lado para atualizar sua senha:' .$reset_link);
    $cabecalhos = "From: ".$email_sistema;
   
    @mail($destinatario, $assunto, $mensagem, $cabecalhos);

    //echo $reset_link;
    //exit();

      //disparar para o telefone do cliente a recuperação
    if($api_whatsapp != 'Não' and $telefone != ''){

    $telefone_envio = '55'.preg_replace('/[ ()-]+/' , '' , $telefone);
    $mensagem = '*'.$nome_sistema.'*%0A';
    $mensagem .= '🤩 _Link para Recuperação de Senha_ %0A%0A';
    $mensagem .= $reset_link;         
    
    require('painel/apis/texto.php');   
    }

    echo 'Recuperado com Sucesso';
}else{
    echo 'Esse email não está Cadastrado!';
}

?>