<?php
session_start();
require_once 'db_connect.php';

if (isset($_POST['btnSubmit'])):
    
    $id = mysqli_escape_string($connect,$_POST['id']);

    $sql = "DELETE FROM doacao WHERE idong ='$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = 'Baixa dada com sucesso!';
        header('Location: ../listaDoacao.php');
    else:
        $_SESSION['mensagem'] = 'Erro ao Dar baixa!';
        header('Location: ../listaDoacao.php');
    endif;
   
  
   
endif;