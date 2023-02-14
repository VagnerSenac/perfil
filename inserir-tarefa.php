<?php
$tarefa = $_POST['tarefa'];
$responsavel = $_POST['responsavel']; 
$status = $_POST['status']; 
$inicio = $_POST['inicio']; 
$fim = $_POST['fim']; 
include "conexao.php";
$sqlGravar = "insert into t_tarefas(descricao, responsavel, status, inicio, fim) values('$tarefa', '$responsavel', '$status', '$inicio', '$fim')";
mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);
header("location: index.php?msg=inserido");
?>