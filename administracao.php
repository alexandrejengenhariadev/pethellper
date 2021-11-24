
<?php
include_once 'includes/mensagem.php';
//adicionando a conexão com o banco de dados
include_once 'php_action/db_connect.php';
//Incluindo o cabeçalho//
include_once 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administração</title>
</head>

<body>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <main class="container">
    <h1 class="text-center">Administração</h1>
    <br>
    <br>
    <div class="row text-center">
      <div class="col-md-3 opcoes">
        <a href="ongAdm.php">
          <i class="bi bi-building"></i>
          <p>Cadastrar Ong</p>
        </a>
      </div>
      <div class="col-md-3 opcoes">
        <a href="usuarioAdm.php">
          <i class="bi bi-person-plus-fill"></i>
          <p>Cadastrar Usuario</p>
        </a>
      </div>
      <div class="col-md-3 opcoes">
        <a href="listarBanner.php">
          <i class="bi bi-bookmarks"></i>
          <p>Cadastrar Banner</p>
        </a>
      </div>
      <div class="col-md-3 opcoes">
        <a href="comboAdm.php">
          <i class="bi bi-upc-scan"></i>
          <p>Cadastrar Combo</p>
        </a>
      </div>
    </div>


  </main>

</body>

</html>