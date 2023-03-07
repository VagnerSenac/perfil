<?php

require_once "dompdf/autoload.inc.php";

use Dompdf\Dompdf;

$dompdf = new Dompdf();


$conteudo ="";
$conteudo .= "<table border='2' style=width:100%>";
$conteudo .= "<tr style='background:Gainsboro , text-align:center'>";        
$conteudo .=  "<td><strong>ID </strong></td>";           
$conteudo .=  "<td><strong>Nome</strong></td>";         
$conteudo .=  "<td><strong>Profissão</strong></td>";           
$conteudo .=  "<td><strong>E-mail</strong></td>";           
$conteudo .=  "</tr>";  

        include "conexao.php";
        $sqlBusca = "select * from t_perfil";

        $todosPerfil = mysqli_query($conexao, $sqlBusca);

        while ($umaPerfil = mysqli_fetch_assoc($todosPerfil)) {
            
            $conteudo .=  "<tr>";
            $conteudo .=  "<td style='text-align:center'>";
            $conteudo .=  $umaPerfil['id']; 
            $conteudo .=  "</td>";
            $conteudo .=  "<td>";
            $conteudo .=  $umaPerfil['nome'];
            $conteudo .=  "</td>";
            $conteudo .=  "<td style='text-align:center'>";
            $conteudo .=  $umaPerfil['profissao'];
            $conteudo .=  "</td>";
            $conteudo .=  "<td>";
            $conteudo .=  $umaPerfil['email']; 
            $conteudo .=  "</td>";
            $conteudo .=  "</tr>";
           
        }
        mysqli_close($conexao);
$dompdf -> loadHTML ($conteudo);     




$dompdf->stream("relatorio_de_perfil.pdf", array("Attachment" =>true)); 
$dompdf->setPaper('A4','portrait');
$dompdf->render();
$dompdf->stream();


?>