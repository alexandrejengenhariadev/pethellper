<?php
//Header


session_start();
require_once 'db_connect.php';
?>
<br>
<br>

<?php


if (isset($_POST['btn-cadastrar'])) :
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
   
    $formatosPermitidos = array("png", "jpeg", "jpg");
   
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
    $responsavel = mysqli_escape_string($connect, $_POST['responsavel']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $estado = mysqli_escape_string($connect, $_POST['estado']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    if (in_array($extensao, $formatosPermitidos)) :
        $pasta = "../img/";
        $temporario = $_FILES['imagem']['tmp_name'];
       
        $novoNome = uniqid() . ".$extensao";
        if (move_uploaded_file($temporario, $pasta . $novoNome)) :
            $sql = "INSERT INTO `ongs` (`id`, `nome`, `cnpj`, `responsavel`, `email`, `endereco`,`estado`, `descricao`, `imagem`) 
            VALUES (NULL, '$nome', '$cnpj', '$responsavel','$email', '$endereco','$estado', '$descricao', '$novoNome')";
            mysqli_set_charset($connect, 'utf8');

            if (mysqli_query($connect, $sql)) :
                $_SESSION['mensagem'] = 'cadastro feito com sucesso!';
                header('Location: ../index.php');
            else :
                $_SESSION['mensagem'] = 'Erro ao cadastrar !';
                header('Location: ../index.php');
            endif;
            $mensagem = "Upload feito com sucesso";
        else :
            $mensagem = "Erro! Upload ";
        endif;

    else :
        $mensagem = "Formato invalido";
    endif;



endif;
include_once '../includes/header.php';


?>
<div class="col-md-12">
    <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
    <a href="index.php" class="btn btn-primary">Listar Ongs </a>


    </form>

</div>
<?php
//Footer
include_once '../includes/footer.php';
?>