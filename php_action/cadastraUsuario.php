<?php
//Header


session_start();
require_once 'db_connect.php';
?>
<br>
<br>

<?php


if (isset($_POST['btn-cadastrar'])) :
   

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $sql = "INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`) 
    VALUES (NULL, '$nome', '$login', '$senha')";
    mysqli_set_charset($connect, 'utf8');

    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = 'cadastro feito com sucesso!';
        header('Location: ../usuarioAdm.php');
            else :
        $_SESSION['mensagem'] = 'Erro ao cadastrar !';
        header('Location: ../usuarioAdm.php');
    endif;
  

endif;
include_once 'includes/header.php';


?>
<div class="col-md-12">
    <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
    <a href="usuarioAdm.php" class="btn btn-primary">Listar Ongs </a>


    </form>

</div>
<?php
//Footer
include_once 'includes/footer.php';
?>