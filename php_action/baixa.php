<?php
session_start();
require_once 'db_connect.php';
$baixa=null;
if (isset($_POST['ckDoacao']))
    $baixa = $_POST['ckDoacao'];

if ($baixa != null){
    for ($i=0; $i < count($baixa); $i++)
    {
        //echo "<p>{$frutas[$i]}</p>";
        $cad=$baixa[$i];
        //echo "<p>{$cad}</p>";
        $sql = "DELETE FROM doacao WHERE codigodoacao ='$cad'";
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = 'Baixa dada com sucesso!';
            header('Location: ../ongAdm.php');
        else:
            $_SESSION['mensagem'] = 'Erro ao Dar baixa!';
            header('Location: ../ongAdm.php');
        endif;
        

    }
}


