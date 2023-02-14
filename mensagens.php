<?php
$msg = $_GET['msg'] ?? "";
if($msg == ""){
    //echo "<div id='my-alert' class='alert alert-info alert-dismissible fade show' role='altert'>Tarefa alterada com sucesso!<button data-bs-target='#my-alert' type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    $msg = "Seja Bem Vindo!";
}
if($msg == "alterado"){
    //echo "<div id='my-alert' class='alert alert-info alert-dismissible fade show' role='altert'>Tarefa alterada com sucesso!<button data-bs-target='#my-alert' type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    $msg = "Tarefa alterada com sucesso!";
}
if($msg == "inserido"){
    //echo "<div id='my-alert' class='alert alert-info alert-dismissible fade show' role='altert'>Tarefa cadastrada!<button data-bs-target='#my-alert' type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    $msg = "Tarefa cadastrada com sucesso!";
}
if($msg == "excluido"){
    //echo "<div id='my-alert' class='alert alert-info alert-dismissible fade show' role='altert'>Tarefa Excluida!<button data-bs-target='#my-alert' type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    $msg = "Tarefa excluida com sucesso!";
}
?>
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="https://png.vector.me/files/images/2/8/287808/warning_icon_preview" width="20" class="rounded me-2" alt="...">
      <strong class="me-auto">Aviso importante</strong>
      <small></small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
    <?php echo $msg?>
    </div>
  </div>
</div>