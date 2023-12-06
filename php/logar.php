<?php
include 'bdconnection.php';
session_start();
if (!$conexao) {
    die("Não foi possível se conectar ao banco de dados.");
}
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "SELECT vl_email FROM tb_usuario where vl_email = '$email' and vl_senha = '$senha'";

$stmt = $conexao->query($sql);
$data = $stmt->fetchAll();
if($data){
    //logado
    $_SESSION['user_email'] = $email;
    header('Location: ../pages/postagem.php');
}else{
    //Não logado
    header('Location: ../pages/welcome.php');
}

?>