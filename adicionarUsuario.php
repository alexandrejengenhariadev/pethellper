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
    <form class="row g-3" action="php_action/cadastraUsuario.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required maxlength="50">
        </div>

        <div class="col-md-6">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="login" required maxlength="18">
        </div>

        <div class="col-md-6">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" required maxlength="50">
        </div>
        
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
            <a href="usuarioAdm.php" class="btn btn-primary">Listar Usuarios </a>


            </form>
           
        </div>
