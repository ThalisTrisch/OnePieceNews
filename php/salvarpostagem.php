<?php
var_dump($_POST);
include 'bdconnection.php';
session_start();
$postagem = $_POST['postagem'];
$user = $_SESSION['user_email'];

$sql = "insert into tb_postagemsalva values('".$postagem."','".$user."')";
try { 
    $conexao->query($sql);
    header('Location: ../pages/postagem.php');
} catch (\Throwable $th) {
    throw $th;
}
?>