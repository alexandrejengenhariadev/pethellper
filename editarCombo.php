<?php
//conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//select verificando se existe o id
if(isset($_GET['id'])):
    $id=mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM combo WHERE id = '$id'";
    $resultado = mysqli_query($connect,$sql);
    $dados = mysqli_fetch_array($resultado);
endif;

?>
<div class="container mt-5">
    <h1>Editar Cadastro</h1>
    <form class="row g-3" action="php_action/updateCombo.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <div class="col-md-6">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" value="<?php echo $dados['descricao']; ?>" required>
        </div>

        <div class="col-md-6">
            <label for="valor" class="form-label">Custo</label>
            <input type="text" class="form-control" name="valor" id="valor" value="<?php echo $dados['valor']; ?>" required>
        </div>

        
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="btn-editar">Atualizar</button>
            <a href="comboAdm.php" class="btn btn-primary">Listar Cadastro</a>
        </div>
       
    </form>
</div>
