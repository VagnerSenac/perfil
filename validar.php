<?php 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
include_once "conexao.php";
$sql = "SELECT * FROM `t_perfil` WHERE email = '$usuario' and senha = '$senha'";
$dados = mysqli_query($conexao,$sql);

if($dados->num_rows >0){
    session_start();
    $_SESSION["usuario"] = $usuario;
    echo $_SESSION[$usuario];
    header('Location: painel-perfil.php');
}else{
    include_once "mensagens.php";
    header('Location: login.php?msg=loginerro');
}

?>