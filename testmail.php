<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = "contato@altmoveismarcenaria.com.br";
    $subject = "Mensagem do site: ".$_POST['name'];
    $message = $_POST['message'];
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = "From:" . $from;
    mail($to,$subject,$message, implode("\r\n", $headers));
?>