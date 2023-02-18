<?php include_once "header.php"; ?>
<?php   include_once "validar_login.php";  ?>
<?php include_once "mensagens.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro de Perfil</title>
</head>
<body>
<main class="menu container-fluid">
<div class="menu">
<?php include_once "menu.php";?>
</div>
<div class="titulo">  
    <h1>CADASTRO DE PERFIL</h1><br>
</div>
<form class="align-items-center" action="perfil-salvar.php" method="post">

<div class="container text-left">
  <div class="row align-items-start">
    <div class="col">
    <div class="mb-3">
    <label  class="form-label"><b>Nome Completo:</b></label>
    <input type="text" name="nome"  class="form-control">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label class="form-label"><b>Email:</b></label>
    <input type="email" name="email"  class="form-control">
</div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label  class="form-label"><b>Profissão:</b></label>
    <input type="text" name="profissao"  class="form-control" >
</div>
    </div>
  </div>
</div> 
<br>

<div class="container text-left">
  <div class="row align-items-start">
    <div class="col">
    <div class="mb-3">
    <label  class="form-label"><b>Instagram:</b></label>
    <input type="text" name="instagram"  class="form-control" >
</div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label  class="form-label"><b>Twitter:</b></label>
    <input type="text" name="twitter"  class="form-control" >
</div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label  class="form-label"><b>Facebook:</b></label>
    <input type="text" name="facebook"  class="form-control">
</div>
    </div>
  </div>
</div>    

<div class="container text-left">
  <div class="row align-items-start">
    <div class="col">
    <div class="mb-3">
    <label  class="form-label"><b>Linkedin:</b></label>
    <input type="text" name="linkedin"  class="form-control" >
</div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label  class="form-label"><b>Youtube:</b></label>
    <input type="text" name="youtube"  class="form-control" >
</div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label  class="form-label"><b>Senha:</b></label>
    <input type="password" name="senhaperfil"  class="form-control" >
</div>
    </div>
  </div>
</div>  
<div class="container text-left">
  <div class="row align-items-start">
    <div class="col">
    <div class="mb-3">
    <label  class="form-label"><b>Foto:</b></label>
    <input type="text" name="foto"  class="form-control" >
</div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label  class="form-label"><b>Fundo:</b></label>
    <input type="text" name="fundo"  class="form-control">
</div>
    </div>
  </div>


<div class="mb-3">
  <label class="form-label"><b>Descrição</b></label>
  <textarea name="descricao" class="form-control" rows="3"></textarea>
</div>
<div class="container text-center">
    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
    
</div>

</form>
</body>
</html>