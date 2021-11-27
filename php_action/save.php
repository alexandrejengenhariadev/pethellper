<?php
$baixa=null;
if (isset($_POST['ckDoacao']))
    $baixa = $_POST['ckDoacao'];

if ($baixa != null){
    for ($i=0; $i < count($baixa); $i++)
    {
       
        $baixa[$i] = $baixa[$i];
        echo $baixa[$i]."<br>";
    }
}

