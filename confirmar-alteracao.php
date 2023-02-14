<?php
include_once "conexao.php";
$id = $_POST['id'];
$descricao = $_POST['descricao'];
$responsavel = $_POST['responsavel']; 
$status = $_POST['status']; 
$inicio = $_POST['inicio']; 
$fim = $_POST['fim'];
$sqlAlterar = "update t_tarefas set descricao = '$descricao', responsavel = '$responsavel', status = '$status', inicio = '$inicio', fim = '$fim'  where id = $id";
mysqli_query($conexao, $sqlAlterar);
mysqli_close($conexao);
header("location: index.php?msg=alterado");
?>