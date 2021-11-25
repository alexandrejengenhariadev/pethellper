<?php
session_start();
require_once 'php_action/db_connect.php';

if (isset($_POST['btn-baixar'])):
    
    $id = mysqli_escape_string($connect,$_POST['id']);

    echo $id;
  
   
endif;