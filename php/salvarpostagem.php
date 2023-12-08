<?php
var_dump($_POST);
include 'bdconnection.php';
session_start();
$postagem = $_POST['postagem'];
$user = $_SESSION['user_email'];
$sql = "SELECT * from tb_postagemsalva where vl_email = '".$user."' and id_postagem = ".$postagem." ";

$stmt = $conexao->query($sql);
$data = $stmt->fetchAll();
if($data){
    $sqldeletar = "DELETE from tb_postagemsalva where vl_email = '".$user."' and id_postagem = ".$postagem." ";
    try { 
        $conexao->query($sqldeletar);
        header('Location: ../pages/postagem.php');
    } catch (\Throwable $th) {
        throw $th;
    }
}else{
    $sqlinserir = "insert into tb_postagemsalva values(".$postagem.",'".$user."')";
    try { 
        $conexao->query($sqlinserir);
        header('Location: ../pages/postagem.php');
    } catch (\Throwable $th) {
        throw $th;
    }
}


?>