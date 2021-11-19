<?php
//Header
include_once 'includes/header.php';

session_start();
require_once 'php_action/db_connect.php';
?>
<br>
<br>
<div class="container mt-5">
    <h1>Novo Cadastro</h1>
    <form class="row g-3" action="php_action/cadastraCombo.php" method="POST" enctype="multipart/form-data">
       
        <div class="col-md-12">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
        </div>
        <div class="col-md-12">
            <label for="valor" class="form-label">Custo</label>
            <textarea class="form-control" name="valor" id="valor" rows="3"></textarea>
        </div>
          
        <?php



    ?>
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
            <a href="comboAdm.php" class="btn btn-primary">Listar Ongs </a>


            </form>
           
        </div>
