<?php
//Header


session_start();
require_once 'db_connect.php';
?>
<br>
<br>

<?php


if (isset($_POST['btn-cadastrar'])) :
   

    $produto1 = mysqli_escape_string($connect, $_POST['produto1']);
    $produto2 = mysqli_escape_string($connect, $_POST['produto2']);
    $produto3 = mysqli_escape_string($connect, $_POST['produto3']);
    $produto4 = mysqli_escape_string($connect, $_POST['produto4']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
   
    $sql = "INSERT INTO `combo` (`id`, `produto1`, `produto2`, `produto3`, `produto4`,`valor`) 
    VALUES (NULL, '$produto1','$produto2','$produto3','$produto4', '$valor')";
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