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
    <form class="row g-3" action="php_action/createOng.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required maxlength="50">
        </div>

        <div class="col-md-6">
            <label for="site" class="form-label">Site</label>
            <input type="text" class="form-control" name="site" id="site" required maxlength="50">
        </div>

        <div class="col-md-6">
            <label for="fone" class="form-label">Fone</label>
            <input type="text" class="form-control" name="fone" id="fone" required maxlength="50">
        </div>
        <div class="col-md-6">
            <label for="responsaveis" class="form-label">Responsáveis</label>
            <input type="text" class="form-control" name="responsaveis" id="responsaveis" required maxlength="50">
        </div>

        <div class="col-md-6">
            <label for="suprimento1" class="form-label">Suprimentos 1</label>
            <input type="text" class="form-control" name="suprimento1" id="suprimento1" >
        </div>
        <div class="col-md-6">
            <label for="suprimento2" class="form-label">Suprimentos 2</label>
            <input type="text" class="form-control" name="suprimento2" id="suprimento2" >
        </div>
        <div class="col-md-6">
            <label for="suprimento3" class="form-label">Suprimentos 3</label>
            <input type="text" class="form-control" name="suprimento3" id="suprimento3" >
        </div>
        <div class="col-md-6">
            <label for="suprimento4" class="form-label">Suprimentos 4</label>
            <input type="text" class="form-control" name="suprimento4" id="suprimento4" >
        </div>
          
        <?php



    ?>
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
           


            </form>
           
        </div>
