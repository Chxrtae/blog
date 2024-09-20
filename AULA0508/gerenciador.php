<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas</title>
</head>
<body>
    <h1>Gerenciador de tarefas<h1>
    <form>
        <fieldset>
            <legend>Nova Mamoré</legend>
            <label>
                tarefa: 
                <input type="text" name="nome" />
            </label>
            <input type="submit" value="cadastrar" />
        </fieldset>
    </form>

    <?php 
    if(isset($_GET["nome"])){
        $_SESSION['lista_tarefas'][] = $_GET['nome'];
    }
    $lista_tarefas = array();

    if(isset($_SESSION['lista_tarefas'])){
        $lista_tarefas = $_SESSION['lista_tarefas'];
    }
    ?>

    <table>
        <tr> 
            <td> tarefa </td>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa): ?>
        <tr> 
            <td><?php echo $tarefa ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>