<?php
$baixa=null;
if (isset($_POST['ckDoacao']))
    $baixa = $_POST['ckDoacao'];

if ($baixa != null){
    for ($i=0; $i < count($baixa); $i++)
    {
        //echo "<p>{$frutas[$i]}</p>";
        $cad=$baixa[$i];
        echo "<p>{$cad}</p>";
    }
}

