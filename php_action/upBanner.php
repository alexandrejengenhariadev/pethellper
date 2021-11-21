<?php
//Header


session_start();
require_once 'db_connect.php';
?>
<br>
<br>

<?php


if (isset($_POST['enviar'])) :
    $formatosPermitidos = array("png", "jpeg", "jpg");
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);

    $nome = mysqli_escape_string($connect, $_POST['nome']);
   
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    if (in_array($extensao, $formatosPermitidos)) :
        $pasta = "../img/banner/";
        $temporario = $_FILES['imagem']['tmp_name'];
        $novoNome = uniqid() . ".$extensao";
        if (move_uploaded_file($temporario, $pasta . $novoNome)) :
            $sql = "INSERT INTO `banner` (`id`, `nome`, `descricao`) 
            VALUES (NULL,'$novoNome', '$descricao')";
            mysqli_set_charset($connect, 'utf8');

            if (mysqli_query($connect, $sql)) :
                $_SESSION['mensagem'] = 'Banner carregado com sucesso!';
                header('Location: ../listarBanner.php');
            else :
                $_SESSION['mensagem'] = 'Erro ao carregar Banner !';
                header('Location: ../listarBanner.php');
            endif;
            $mensagem = "Upload feito com sucesso";
        else :
            $mensagem = "Erro! Upload ";
        endif;

    else :
        $mensagem = "Formato invalido";
    endif;



endif;
include_once 'includes/header.php';


?>
<div class="col-md-12">
    <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
    <a href="index.php" class="btn btn-primary">Listar Ongs </a>


    </form>

</div>
<?php
//Footer
include_once 'includes/footer.php';
?>