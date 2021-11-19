<?php
session_start();
require_once 'db_connect.php';

if (isset($_POST['btn-editar'])):
    
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $cnpj = mysqli_escape_string($connect,$_POST['cnpj']);
    $responsavel = mysqli_escape_string($connect,$_POST['responsavel']);
    $email = mysqli_escape_string($connect,$_POST['email']);
    $endereco = mysqli_escape_string($connect,$_POST['endereco']);
    $estado = mysqli_escape_string($connect,$_POST['estado']);
    $descricao = mysqli_escape_string($connect,$_POST['descricao']);
    $id = mysqli_escape_string($connect,$_POST['id']);


    $sql = "UPDATE `ongs` SET 
    nome = '$nome', 
    cnpj = '$cnpj', 
    responsavel = '$responsavel',
    email = '$email', 
    endereco = '$endereco',
    estado = '$estado', 
    descricao='$descricao' 
    WHERE id= '$id'";
    mysqli_set_charset($connect,'utf8');

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = 'Atualizado com sucesso!';
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = 'Erro ao Atualizar!';
        header('Location: ../index.php');
    endif;
   
  
   
endif;