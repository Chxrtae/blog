<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>
<body>
    <h1>Lista de Contatos<h1>
    <form>
        <fieldset>
            <legend>Dados</legend>
            <label>
                Nome
                <input type="text" name="nome" />
            </label> <br>
            <label>
                Telefone
                <input type="text" name="numero" />
            </label> <br>
            <label>
                E-mail
                <input type="e-mail" name="e-mail" />
            </label> <br>
            <input type="submit" value="cadastrar" /> 
        </fieldset>
    </form>

    <table>
    <tr>
      <td>Contatos:</td>
    </tr>
    <?php
      if (isset($_GET['nome']) && isset($_GET['numero']) && isset($_GET['e-mail'])){
        $contato = array(
          'nome' => $_GET['nome'],
          'numero' => $_GET['numero'],
          'e-mail' => $_GET['e-mail']
        );
        $_SESSION['listaContatos'][] = $contato;
      }
      $listaContatos = array();
      if (isset($_SESSION['listaContatos'])){
        $listaContatos = $_SESSION['listaContatos'];
      }
      foreach ($listaContatos as $contato) : ?>
    <tr>
      <td><?php echo $contato['nome'] ?></td>
      <td><?php echo $contato['numero'] ?></td>
      <td><?php echo $contato['e-mail'] ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>