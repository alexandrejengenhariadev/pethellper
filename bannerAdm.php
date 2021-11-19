<?php

include_once 'includes/mensagem.php';
//adicionando a conexão com o banco de dados
include_once 'php_action/db_connect.php';
//Incluindo o cabeçalho
include_once 'includes/header.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<br>
<br>
<br>
<br>
<br>


    <?php

    if (isset($_POST['enviar'])) :
      $formatosPermitidos = array("png", "jpeg", "jpg");
      $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
      if (in_array($extensao, $formatosPermitidos)) :
        $pasta = "img/banner/";
        $temporario = $_FILES['imagem']['tmp_name'];
        $novoNome = uniqid() . ".$extensao";
        if (move_uploaded_file($temporario, $pasta . $novoNome)) :
          $mensagem = "Upload feito com sucesso";
        else :
          $mensagem = "Erro! Upload ";
        endif;

      else :
        $mensagem = "Formato invalido";
      endif;
      echo $mensagem;
    endif;

    ?>
    <body>
      
    <main >
    

    <form action="php_action/upBanner.php" method="POST" enctype="multipart/form-data">
    <label for="formFile" class="form-label">Tamanho 1140x250</label>
      <input type="file" name="imagem" class="form-control">
      <br>
      <label for="formFile" class="form-label">Descrição</label>
      <input type="text" name="descricao" class="form-control">
      <br>
      <button class=" btn btn-lg btn-primary" type="submit" name="enviar">Enviar</button>
    </form>
    </main>
</body>

</html>