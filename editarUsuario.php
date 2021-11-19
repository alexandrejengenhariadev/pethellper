<?php
//conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//select verificando se existe o id
if(isset($_GET['id'])):
    $id=mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($connect,$sql);
    $dados = mysqli_fetch_array($resultado);
endif;

?>
<div class="container mt-5">
    <h1>Editar Cadastro</h1>
    <form class="row g-3" action="php_action/updateUsuario.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" required>
        </div>

        <div class="col-md-6">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="login" value="<?php echo $dados['login']; ?>" required>
        </div>

        <div class="col-md-6">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" value="<?php echo $dados['senha']; ?>" required>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="btn-editar">Atualizar</button>
            <a href="usuarioAdm.php" class="btn btn-primary">Listar Cadastro</a>
        </div>
       
    </form>
</div>
