<?php
session_start();
require_once 'db_connect.php';

if (isset($_POST['btn-editar'])):
    
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $login = mysqli_escape_string($connect,$_POST['login']);
    $senha = mysqli_escape_string($connect,$_POST['senha']);
   
    $id = mysqli_escape_string($connect,$_POST['id']);


    $sql = "UPDATE `usuarios` SET 
    nome = '$nome', 
    login = '$login', 
    senha = '$senha'
   
    WHERE id= '$id'";
    mysqli_set_charset($connect,'utf8');

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = 'Atualizado com sucesso!';
        header('Location: ../usuarioAdm.php');
    else:
        $_SESSION['mensagem'] = 'Erro ao Atualizar!';
        header('Location: ../usuarioAdm.php');
    endif;
   
  
   
endif;