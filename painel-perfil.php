<?php include_once "mensagens.php"; ?>
<?php include_once "validar_login.php";
include_once "header.php"
    ?>
<main class="menu container-fluid">
    <div class="menu">
        <?php include_once "menu.php"; ?>
    </div>

    <h1>Painel</h1>
    
    
    <table class="table table-success table-hover">
        <tr>
            <td><strong>ID </strong></td>
            <td><strong>Nome</strong></td>
            <td><strong>Profissão</strong></td>
            <td><strong>E-mail</strong></td>
        </tr>

        <?php
        include "conexao.php";
        $sqlBusca = "select * from t_perfil";

        $todasAsTarefas = mysqli_query($conexao, $sqlBusca);

        while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
            ?>
            <tr>

                <td style='text-align:center'>
                    <?php echo $umaTarefa['id']; ?>
                </td>
                <td>
                    <?php echo $umaTarefa['nome']; ?>
                </td>
                <td style='text-align:center'>
                    <?php echo $umaTarefa['profissao']; ?>
                </td>
                <td>
                    <?php echo $umaTarefa['email']; ?>
                </td>
            </tr>
            <?php
        }
        mysqli_close($conexao);
        ?>








</main>
<?php include_once "footer.php"; ?>