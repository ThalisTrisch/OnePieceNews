<?php
var_dump($_POST);
include 'bdconnection.php';

$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "insert into tb_noticia values('$email','$nome','Olá, sou novo aqui!','$senha')";
$conexao->query($sql);

?>