<?php
//Header


session_start();
require_once 'db_connect.php';
?>
<br>
<br>

<?php


if (isset($_POST['btn-doar1'])) :
   

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    
    $combo = mysqli_escape_string($connect, $_POST['id']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
   
   
    $sql = "INSERT INTO `doacao` (`id`, `ong`, `combo`, `valor`) 
    VALUES (NULL,'$nome','$combo', '$valor' )";
    mysqli_set_charset($connect, 'utf8');

    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = 'cadastro feito com sucesso!';
        header('Location: ../comboAdm.php');
            else :
        $_SESSION['mensagem'] = 'Erro ao cadastrar !';
        header('Location: ../comboAdm.php');
    endif;
  

endif;
include_once 'includes/header.php';


?>
<div class="col-md-12">
    <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
    <a href="comboAdm.php" class="btn btn-primary">Listar Ongs </a>


    </form>

</div>
<?php
//Footer
include_once 'includes/footer.php';
?>