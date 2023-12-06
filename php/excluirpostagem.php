<?php
include 'bdconnection.php';
session_start();
if (!$conexao) {
    die("Não foi possível se conectar ao banco de dados.");
}
$sql = "delete from tb_postagem where id_postagem = ".$_POST['postagem']."";
$conexao->query($sql);
header('Location: ../pages/meuperfil.php');
?>