<?php
session_start();
var_dump($_POST);
include 'bdconnection.php';

if (!$conexao) {
    die("Não foi possível se conectar ao banco de dados.");
}
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "SELECT vl_email FROM tb_usuario where vl_email = '$email' and vl_senha = '$senha'";
// echo("$sql\n");

$stmt = $conexao->query($sql);
$data = $stmt->fetchAll();
if($data){
    //logado
    $_SESSION['user_email'] = $email;
    header('Location: ../page2.php');
}else{
    //Não logado
    header('Location: ../page1.php');
}

?>