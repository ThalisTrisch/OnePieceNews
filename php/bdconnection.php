<?php
    $if = false;
    $servidor;
    $if ?  $servidor = "192.168.20.18" :  $servidor = "200.19.1.18";
    $porta = 5432;
    $bancoDeDados = "thalistrisch";
    $usuario = "thalistrisch";
    $senha = "123456";

    $conexao = new PDO("pgsql:host=$servidor;port=$porta;dbname=$bancoDeDados", $usuario, $senha);
?>