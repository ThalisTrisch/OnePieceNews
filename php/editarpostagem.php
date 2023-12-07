<?php
var_dump($_POST);
include 'bdconnection.php';
session_start();
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$imagem = $_POST['imagem'];
$postagem = $_POST['postagem'];
$sql = "update tb_postagem set vl_titulo = '".$titulo."',vl_conteudo = '".$conteudo."',url_imagem = '".$imagem."' where id_postagem = '".$postagem."'";
try { 
    $conexao->query($sql);
    header('Location: ../pages/meuperfil.php');
} catch (\Throwable $th) {
    throw $th;
}
?>