<?php

$pasta = "img/";
$nomeDoArquivo = $_FILES["arquivo"] ["name"];
$extensao = explode(".",$nomeDoArquivo);
$nomeNovo = round(microtime(true)) . "." . end($extensao);


move_uploaded_file($_FILES["arquivo"]["tmp_name"], $pasta . $nomeNovo);


?>