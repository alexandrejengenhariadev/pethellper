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
    $site = mysqli_escape_string($connect, $_POST['site']);
    $fone = mysqli_escape_string($connect, $_POST['fone']);
    $responsaveis = mysqli_escape_string($connect, $_POST['responsaveis']);
    $suprimento1= mysqli_escape_string($connect, $_POST['suprimento1']);
    $suprimento2= mysqli_escape_string($connect, $_POST['suprimento2']);
    $suprimento3= mysqli_escape_string($connect, $_POST['suprimento3']);
    $suprimento4= mysqli_escape_string($connect, $_POST['suprimento4']);
    
    $sql = "INSERT INTO `cadastro` (`id`, `nome`, `site`, `fone`, `responsaveis`, `suprimento1`,`suprimento2`, `suprimento3`, `suprimento4`) 
            VALUES (NULL, '$nome', '$site', '$fone', '$responsaveis','$suprimento1', '$suprimento2', '$suprimento3', '$suprimento4')";
            mysqli_set_charset($connect, 'utf8');

    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = 'cadastro feito com sucesso!';
        header('Location: ../home.php');
        else :
        $_SESSION['mensagem'] = 'Erro ao cadastrar !';
        header('Location: ../cadastrarOng.php');
        endif;
   
endif;
include_once '../includes/header.php';


?>
<div class="col-md-12">
    <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
    


    </form>

</div>
<?php
//Footer
include_once '../includes/footer.php';
?>