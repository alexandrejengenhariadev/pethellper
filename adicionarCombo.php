<?php
//Header
include_once 'includes/header.php';

session_start();
require_once 'php_action/db_connect.php';
?>
<br>
<br>
<br>
<br>
<div class="container mt-5">
    <h1>Novo Cadastro</h1>
    <form class="row g-3" action="php_action/cadastraCombo.php" method="POST" enctype="multipart/form-data">
       
        <div class="col-md-6">
            <label for="produto1" class="form-label">Produto 1</label>
            <input class="form-control" name="produto1" id="produto1" rows="3" maxlength="20"></input>
        </div>
        <div class="col-md-6">
            <label for="produto2" class="form-label">Produto 2</label>
            <input class="form-control" name="produto2" id="produto2" rows="3" maxlength="20"></input>
        </div>
        <div class="col-md-6">
            <label for="produto3" class="form-label">Produto 3</label>
            <input class="form-control" name="produto3" id="produto3" rows="3" maxlength="20"></input>
        </div>
        <div class="col-md-6">
            <label for="produto4" class="form-label">Produto 4 </label>
            <input class="form-control" name="produto4" id="produto4" rows="3" maxlength="20"></input>
        </div>
        <div class="col-md-6">
            <label for="valor" class="form-label">Custo</label>
            <input class="form-control" name="valor" id="valor" rows="3"></input>
        </div>
          
        <?php



    ?>
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
            <a href="comboAdm.php" class="btn btn-primary">Listar Ongs </a>


            </form>
           
        </div>
