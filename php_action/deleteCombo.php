<?php
session_start();
require_once 'db_connect.php';

if (isset($_POST['btn-deletar'])):
    
    $id = mysqli_escape_string($connect,$_POST['id']);

    $sql = "DELETE FROM combo WHERE id='$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = 'Deletado com sucesso!';
        header('Location: ../comboAdm.php');
    else:
        $_SESSION['mensagem'] = 'Erro ao Deletar!';
        header('Location: ../comboAdm.php');
    endif;
   
  
   
endif;