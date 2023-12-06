<?php
// var_dump($_POST);
include 'bdconnection.php';
session_start();
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$imagem = $_POST['imagem'];

$sql = "insert into tb_postagem values('$conteudo','$titulo','".$_SESSION['user_email']."','$imagem')";
try {
    $conexao->query($sql);
    header('Location: ../pages/postagem.php');
} catch (\Throwable $th) {
    throw $th;
}
?>