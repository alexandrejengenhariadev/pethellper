<?php
//conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//select verificando se existe o id
if(isset($_GET['id'])):
    $id=mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM ongs WHERE id = '$id'";
    $resultado = mysqli_query($connect,$sql);
    $dados = mysqli_fetch_array($resultado);
endif;

?>
<div class="container mt-5">
    <h1>Editar Cadastro</h1>
    <form class="row g-3" action="php_action/update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" required>
        </div>

        <div class="col-md-6">
            <label for="sobrenome" class="form-label">CNPJ</label>
            <input type="text" class="form-control" name="cnpj" id="cnpj" value="<?php echo $dados['cnpj']; ?>" required>
        </div>

        <div class="col-md-8">
            <label for="email" class="form-label">Responsável</label>
            <input type="text" class="form-control" name="responsavel" id="responsavel" value="<?php echo $dados['responsavel']; ?>" required>
        </div>

        <div class="col-md-4">
            <label for="telefone" class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo $dados['endereco']; ?>" >
        </div>
        <div class="col-md-4">
            <label for="telefone" class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" value="<?php echo $dados['estado']; ?>" >
        </div>

        <div class="col-md-12">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" value="<?php echo $dados['descricao']; ?>" rows="3"></textarea>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="btn-editar">Atualizar</button>
            <a href="index.php" class="btn btn-primary">Listar Cadastro</a>


    </form>
</div>
<?php
//Footer
include_once 'includes/footer.php';
?>