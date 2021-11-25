<?php
//Header



require_once 'db_connect.php';
include_once '../includes/mensagem.php';
?>
<br>
<br>

<?php


if (isset($_POST['btn-doar'])) :
   
    $idong = mysqli_escape_string($connect, $_POST['idong']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);    
    $combo = mysqli_escape_string($connect, $_POST['id']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $codigoDoacao = uniqid();
   
   
    $sql = "INSERT INTO `doacao` (`id`, `ong`, `combo`, `valor`, `codigodoacao`,`idong`) 
    VALUES (NULL,'$nome','$combo', '$valor','$codigoDoacao','$idong' )";
    mysqli_set_charset($connect, 'utf8');

    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = 'Doação concluida com sucesso!';
        header('Location: ../home.php');
            else :
        $_SESSION['mensagem'] = 'Erro !';
        header('Location: ../home.php');
    endif;
  

endif;

include_once 'includes/header.php';


?>
<div class="col-md-12">
    <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
    <a href="comboAdm.php" class="btn btn-primary">Listar Ongs </a>


  

</div>
<?php
//Footer
include_once 'includes/footer.php';
?>