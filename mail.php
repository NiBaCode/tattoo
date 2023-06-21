<?php

/*
$_POST[] => Recupera una variabile dalla POST
$_GET[] => Recupera una variabile dalla QUERYSTRING
$_REQUEST => Recupera una variabile sia dal POST che dal QUERYSTRING
*/

$messaggio = 
"<html><head><style>body {backgrond-color:#fff;}</style></head><body>"    
."<h1>Google ti ha scritto</h1>"
."<img src=\"https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png\">"

    ."<br><b>Nome</b>: ".$_REQUEST["nome"]
    ."<br>Email: ".$_REQUEST["email"]
    ."<br>Messaggio: ".$_REQUEST["messaggio"]

    ."<br><span style=\"color:red\">Personaggio:</span> ".$_REQUEST["personaggio"]
    ."<br>località: ".$_REQUEST["localita"]
    ;
$oggetto = "mail dal sito";
$to = "riccardo@ricpic.com";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: Bill Gates <bill@microsoft.com>' . "\r\n";

mail($to, $oggetto, $messaggio,$headers);

echo "Email inviata";


?>