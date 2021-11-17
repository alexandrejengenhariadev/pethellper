
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


if (isset($_POST['enviar'])):
    $formatosPermitidos=array("png","jpeg","jpg");
    $extensao = pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION);
    if (in_array($extensao,$formatosPermitidos)):
        $pasta = "img/";
        $temporario = $_FILES['imagem']['tmp_name'];
        $novoNome=uniqid().".$extensao";
        if (move_uploaded_file($temporario,$pasta.$novoNome)):
            $mensagem="Upload feito com sucesso";
        else:
            $mensagem="Erro! Upload ";
        endif;

    else:
        $mensagem = "Formato invalido";
    endif;
    echo $mensagem;
endif;

    ?>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" >
            <input type="file" name="imagem" >
            <input type="submit" name="enviar">
        </form>
    </body>
    </html>