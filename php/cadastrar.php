<?php
var_dump($_POST);
include 'bdconnection.php';

$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM tb_usuario where vl_email = '$email'";
$stmt = $conexao->query($sql);
$data = $stmt->fetchAll();

if(!$data){
    // Não tem cadastro
    $sql = "insert into tb_usuario values('$email','$nome','Olá, sou novo aqui!','$senha')";
    $conexao->query($sql);

    $_SESSION['user_email'] = $email;
    header('location: ../page2.php');
}else{
    // Já cadastrado
    header('location: ../page1.php');
}
?>