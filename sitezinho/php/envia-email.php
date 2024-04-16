<?php

if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {

    $emailsender = 'welligtommonteiro@gmail.com';

} else {

    $emailsender = "wellgato@" . $_SERVER[HTTP_HOST];

}

if (PHP_OS == "Linux") {

    $quebra_linha = "\n";

} elseif (PHP_OS == "WINNT") {

    $quebra_linha = "\r\n";

} else {

    die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");

}

$nomeremetente = $_POST['nomeremetente'];

$emailremetente = trim($_POST['emailremetente']);

$telefoneremetente = $_POST['telefoneremetente'];

$emaildestinatario = 'welligtommonteiro@gmail.com';

$comcopia = trim($_POST['comcopia']);

$comcopiaoculta = trim($_POST['comcopiaoculta']);

$assunto = "Email enviado pelo seu site";

$mensagem = $_POST['mensagem'];

//$captcha_data = $_POST['g-recaptcha-response'];

$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdzPyIUAAAAALbI4tW1vUvZWGPrxpRmn4Wbf8_s&response=" . $captcha_data . "&remoteip=" . $_SERVER['REMOTE_ADDR']);

$mensagemHTML = '<p><b>Oi chegou um novo email enviado pelo seu site.</b></p>

<br />

<b>Nome</b>: ' . $nomeremetente . '<br />

<b>Email</b>: ' . $emailremetente . '<br />

<b>Telefone</b>: ' . $telefoneremetente . '<br />

<b>Assunto</b>: ' . $assunto . '<br /><br />

<b>Mensagem</b>: ' . $mensagem . '<br />

<br /><br /><br /><br />

Criado por <a target="_blank" href="http://www.vanguardati.com.br"><b>vanguardati.com.br</b></a>';

$headers = "MIME-Version: 1.1" . $quebra_linha;

$headers .= "Content-type: text/html; charset=iso-8859-1" . $quebra_linha;

$headers .= "From: " . $emailsender . $quebra_linha;

$headers .= "Return-Path: " . $emailsender . $quebra_linha;

if (strlen($comcopia) > 0) {

    $headers .= "Cc: " . $comcopia . $quebra_linha;

}

if (strlen($comcopiaoculta) > 0) {

    $headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;

}

$headers .= "Reply-To: " . $emailremetente . $quebra_linha;

if ($resposta . success) {

    mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r" . $emailsender);

} else {

    exit;

}



