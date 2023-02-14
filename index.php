<?php include_once "header.php"; ?>
<?php include_once "mensagens.php"; ?>
<!-- inicio conteudo -->

<form class="d-flex justify-content-center align-items-center mb-4" action="inserir-tarefa.php" method="post">
    <div class="form-outline flex-fill">
        <input type="text" id="form2" class="form-control" placeholder="Nova tarefa" name="tarefa">
    </div>
    <div class="form-outline flex-fill">
        <input type="text" id="form2" class="form-control" placeholder="Responsável pela Tarefa" name="responsavel">
    </div>
    <div class="form-outline flex-fill">
    <select class="form-select" aria-label="Default select example" name="status">
    <option selected>Status</option>
    <option value="execucao">Em execução</option>
    <option value="concluido">Concluido</option>
    <option value="planejado">Planejado</option>
    </select>
    </div>
    <div class="form-outline flex-fill">
    <input type="text" class="form-control" name="inicio" placeholder="Data de Início" data-mask="00/00/0000" maxlength="10" autocomplete="off"> 
    </div>
    <div class="form-outline flex-fill">
    <input type="text" class="form-control"  placeholder="Data Final" name="fim" data-mask="00/00/0000" maxlength="10" autocomplete="off"> 
    </div>
    <button type="submit" class="btn btn-outline-success ms-2 ">
        <i class="bi bi-save-fill"></i> ADD</button>
</form>

<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Todas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?status=planejado">Planejado
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?status=execucao">Em execução</a>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?status=concluido">Concluído
        </a>
    </li>
    
</ul>

<table class="table mb-0 table-hover">
    <?php
    include "conexao.php";
    $condicao = "";
    $status = $_GET["status"] ?? "";
    if ($status != ""){
        $condicao = "where status = '$status'";
    }
    $sqlBusca = "select * from t_tarefas $condicao";
    $todasAsTarefas = mysqli_query($conexao, $sqlBusca);
    while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
    ?>
        <tr class="fw-lighter">
            <td><?php echo $umaTarefa['id']; ?> </td>
            <td><?php echo $umaTarefa['descricao']; ?></td>
            <td><?php echo $umaTarefa['responsavel']; ?></td>
            <td><?php echo $umaTarefa['inicio']; ?></td>
            <td><?php echo $umaTarefa['fim']; ?></td>
            <td>
            <span>
                <a class='btn btn-lg text-success' href="alterar-tarefa.php?id=<?php echo $umaTarefa['id']?>"><i class="bi bi-pencil-fill"></i></a>
                <a class='btn btn-lg text-danger' href="excluir-tarefa.php?id=<?php echo $umaTarefa['id']; ?>"><i class="bi bi-trash"></i></a>
            </span>
            </td>
        </li>
    <?php
    }
    mysqli_close($conexao);
    ?>
</table>
<!-- fim conteudo -->
<?php include_once "footer.php"; ?>