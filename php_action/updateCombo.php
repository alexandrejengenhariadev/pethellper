<?php
session_start();
require_once 'db_connect.php';

if (isset($_POST['btn-editar'])):
    
    $descricao = mysqli_escape_string($connect,$_POST['descricao']);
    $valor = mysqli_escape_string($connect,$_POST['valor']);
   
   
    $id = mysqli_escape_string($connect,$_POST['id']);


    $sql = "UPDATE `combo` SET 
    descricao = '$descricao', 
    
    valor = '$valor'
   
    WHERE id= '$id'";
    mysqli_set_charset($connect,'utf8');

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = 'Atualizado com sucesso!';
        header('Location: ../comboAdm.php');
    else:
        $_SESSION['mensagem'] = 'Erro ao Atualizar!';
        header('Location: ../comboAdm.php');
    endif;
   
  
   
endif;