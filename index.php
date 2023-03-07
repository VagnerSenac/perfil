<?php include_once "header.php"; ?>
<?php include_once "mensagens.php"; ?>
<!-- inicio conteudo -->
<div class="container">
  <div class="row pt-5" >
  <?php  
  include "conexao.php";
  $sqlBusca = "select * from t_perfil";
  $todosPerfis = mysqli_query($conexao, $sqlBusca);

  while ($umaPerfil = mysqli_fetch_assoc($todosPerfis)) {
  ?>
    <div class="col-12 col-sm-8 col-md-6 col-lg-3 mt-5">
      <div class="card" style="height:100%" >
        <img class="card-img-top" src="<?php echo $umaPerfil['fundo']; ?>" alt="Bologna">
        <div class="card-body text-center">
          <img class="avatar rounded-circle" src="img\<?php echo $umaPerfil['foto']; ?>">
          <h4 class="card-title"><?php echo $umaPerfil['nome']; ?></h4>
          <h6 class="card-subtitle mb-2 text-muted"> <?php echo $umaPerfil['profissao']; ?></h6>
          <p class="card-text"> <?php echo $umaPerfil['descricao']; ?></p>
          <p>
          <?php 
          if($umaPerfil['instagram'] != ""){?>
            <a href="<?php echo $umaPerfil['instagram']; ?>" class="btn"><i class="bi bi-instagram"></i></a>
            <?php
          } ?>

          <?php 
          if($umaPerfil['linkedin'] != ""){?>        
          <a href="<?php echo $umaPerfil['linkedin']; ?>" class="btn"><i class="bi bi-linkedin"></i></a>
          <?php
          } ?>

          <?php 
          if($umaPerfil['twitter'] != ""){?>  
          <a href="<?php echo $umaPerfil['twitter']; ?>" class="btn"><i class="bi bi-twitter"></i></a>
          <?php
          } ?>


          <?php 
          if($umaPerfil['facebook'] != ""){?>  
          <a href="<?php echo $umaPerfil['facebook']; ?>" class="btn"><i class="bi bi-facebook"></i></a>
          <?php
          } ?>

          <?php 
          if($umaPerfil['youtube'] != ""){?>
          <a href="<?php echo $umaPerfil['youtube']; ?>" class="btn"><i class="bi bi-youtube"></i></a>
          <?php
          } ?>
          </p>
        </div>
      </div>
    </div>
    <?php  
  }
  mysqli_close($conexao);
  ?>
  </div>
</div>



<!-- fim conteudo -->
<?php include_once "footer.php"; ?>