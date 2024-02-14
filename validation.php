<?php
$nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST,"telefone",FILTER_VALIDATE_INT);
$msg = filter_input(INPUT_POST,"msg",FILTER_SANITIZE_STRING);

$to = "nathael.rocha@gmail.com";
$subject = "Novo contato pelo site";
$message = "Nome: $nome
            Telefone: $telefone
            Mensagem: $msg";
$headers =  'From: nathael.rocha@gmail.com'."\r\n".
            'Reply-To: nathael.rocha@gmail.com'."\r\n".
            'X-Mailer: PHP/' . phpversion();
$enviarEmail = mail($to,$subject,$message,$headers);

if($enviarEmail){
    echo"email enviado com sucesso";
} else {
    echo"erro ao enviar sua menssagem";
}
