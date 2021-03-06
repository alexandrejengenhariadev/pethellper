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
    <form class="row g-3" action="php_action/create.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required maxlength="50">
        </div>

        <div class="col-md-6">
            <label for="cnpj" class="form-label">OSCIP</label>
            <input type="text" class="form-control" name="cnpj" id="cnpj" required maxlength="18">
        </div>

        <div class="col-md-6">
            <label for="responsavel" class="form-label">Responsável</label>
            <input type="text" class="form-control" name="responsavel" id="responsavel" required maxlength="50">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required maxlength="50">
        </div>

        <div class="col-md-6">
            <label for="endereco" class="form-label">Endereco</label>
            <input type="text" class="form-control" name="endereco" id="endereco" required>
        </div>
        <div class="col-md-4">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado">
        </div>

        <div class="col-md-12">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
        </div>
        <input type="file" name="imagem" id="imagem" required>
          
        <?php



    ?>
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
            <a href="index.php" class="btn btn-primary">Listar Ongs </a>


            </form>
           
        </div>
