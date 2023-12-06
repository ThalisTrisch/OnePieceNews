<?php
// var_dump($_POST);
include 'bdconnection.php';
session_start();
$nome = $_POST['nome'];
$biografia = $_POST['biografia'];
$foto = $_POST['foto'];
$sql = "update tb_usuario set nm_usuario = '".$nome."',vl_biografia = '".$biografia."',url_foto = '".$foto."' where vl_email = '".$_SESSION['user_email']."'";
try { 
    $conexao->query($sql);
    header('Location: ../pages/meuperfil.php');
} catch (\Throwable $th) {
    throw $th;
}
?>