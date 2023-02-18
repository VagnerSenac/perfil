<?php
$nome = $_POST['nome'];
$email = $_POST['email']; 
$profissao = $_POST['profissao']; 
$instagram = $_POST['instagram']; 
$twitter = $_POST['twitter']; 
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$youtube = $_POST['youtube'];
$senhaperfil = $_POST['senhaperfil'];
$descricao = $_POST['descricao'];
$foto= $_POST['foto'];
$fundo = $_POST['fundo'];

include "conexao.php";
$sqlGravar = "insert into t_perfil(nome, email, profissao, instagram, twitter, facebook, linkedin, youtube, senha, descricao, foto, fundo) values('$nome', '$email', '$profissao', '$instagram', '$twitter', '$facebook', '$linkedin', '$youtube', '$senhaperfil', '$descricao', '$foto', '$fundo')";
mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);
header("location: perfil-novo.php?msg=inserido");
?>