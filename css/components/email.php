<?php

if(isset($_POST['email'])) && !empty($_POST['email']) {

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['message']);

$to = "rivaldodowneyy@gmail.com";
$subject = "Contato - Portfólio";
$bory = "Nome: ".$nome. "/r/n".
        "Email: ".$email. "/r/n".
        "Mensagem: ".$mensagem;
$header = "From:rivaldodowneyy@gmail.com"."/r/n".
        "Reply-to:".$email."/r/n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$bory,$header)){

        echo("Email enviado com sucesso!");
}else{
        echo("O Email não pode ser enviado!");
}


}

?>