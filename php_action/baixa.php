<?php
session_start();
require_once 'db_connect.php';

$baixa=null;
if (isset($_POST['ckDoacao']))
    $baixa = $_POST['ckDoacao'];

if ($baixa != null){
    for ($i=0; $i < count($baixa); $i++)
    {
       
        $baixa[$i] = $baixa[$i];
        //echo $baixa[$i]."<br>";
    }
}



if (isset($_POST['btnSubmit'])):
    
    $id = mysqli_escape_string($connect,$_POST['id']);

    $sql = "DELETE FROM doacao WHERE codigodoacao ='$baixa[$i];'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = 'Baixa dada com sucesso!';
        header('Location: ../ongAdm.php');
    else:
        $_SESSION['mensagem'] = 'Erro ao Dar baixa!';
        header('Location: ../listaDoacao.php');
    endif;
   
  
   
endif;