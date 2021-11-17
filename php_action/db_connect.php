<?php
$servername = "sql10.freesqldatabase.com";
$username = "sql10451331";
$password = "RvuXZRpufs";
$db_name = "sql10451331";

$connect = mysqli_connect($servername, $username,$password, $db_name);
mysqli_set_charset($connect,"utf8");
//se usar if(): , usar endif;
//se usar if(){}; não precisa endif;

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;

    