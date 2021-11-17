<?php
session_start();
require_once 'php_action/db_connect.php';

if (isset($_POST['btn-doar1'])):
    
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    /*$cnpj = mysqli_escape_string($connect,$_POST['cnpj']);
    $responsavel = mysqli_escape_string($connect,$_POST['responsavel']);
    $endereco = mysqli_escape_string($connect,$_POST['endereco']);
    $estado = mysqli_escape_string($connect,$_POST['estado']);
    $descricao = mysqli_escape_string($connect,$_POST['descricao']);
    $id = mysqli_escape_string($connect,$_POST['id']);*/


    /*$sql = "UPDATE `ongs` SET 
    nome = '$nome', 
    cnpj = '$cnpj', 
    responsavel = '$responsavel', 
    endereco = '$endereco',
    estado = '$estado', 
    descricao='$descricao' 
    WHERE id= '$id'";
    mysqli_set_charset($connect,'utf8');

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = 'Atualizado com sucesso!';
        header('Location: home.php');
    else:
        $_SESSION['mensagem'] = 'Erro ao Atualizar!';
        header('Location: home.php');
    endif;*/
    if(isset($_POST['btn-doar1'])):
        $_SESSION['mensagem'] = 'Atualizado com sucesso!';
        header('Location: home.php');
    else:
        $_SESSION['mensagem'] = 'Erro ao Atualizar!';
        header('Location: home.php');
    endif;
  
   
endif;