<?php
require_once '../public_html/php_action/db_connect.php';


$sql = "SELECT * FROM combo";
$resultado = mysqli_query($connect, $sql);

            //Verificando se a lista contem valores antes de começar o looping
            if (mysqli_num_rows($resultado) > 0) :

                while ($dados = mysqli_fetch_array($resultado)) :
                    $id [] = $dados['id'];
                    $banner [] = $dados['descricao'];
                    $valor [] = $dados ['valor'];
                endwhile;
            endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $banner[0], $valor[0], $id[0];
    
     ?>
     <br>
      <?php
    echo $banner[1];
     ?>
     <br>
      <?php
    echo $banner[2];
     ?>

</body>
</html>