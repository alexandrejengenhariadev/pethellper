<?php
include_once 'includes/mensagem.php';
//adicionando a conexão com o banco de dados
include_once 'php_action/db_connect.php';
//Incluindo o cabeçalho
include_once 'includes/header.php';
?>


<div class="container mt-5">
  <h1>Novo Cadastro</h1>

  <table class="table">

    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">OSCIP</th>
        <th scope="col">Responsável</th>
        <th scope="col">Email</th>
        <th scope="col">Endereço</th>
        <th scope="col">Estado</th>
        <th scope="col">Descrição</th>
        <th scope="col">Imagem</th>


      </tr>
    </thead>
    <tbody>
      <!--Exibindo dados do banco de dados-->
      <?php
      $sql = "SELECT * FROM ongs";
      $resultado = mysqli_query($connect, $sql);
      //Verificando se a lista contem valores antes de começar o looping
      if (mysqli_num_rows($resultado) > 0) :

        while ($dados = mysqli_fetch_array($resultado)) :

      ?>
          <tr>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['cnpj']; ?></td>
            <td><?php echo $dados['responsavel']; ?></td>
            <td><?php echo $dados['email']; ?></td>
            <td><?php echo $dados['endereco']; ?></td>
            <td><?php echo $dados['estado']; ?></td>
            <td><?php echo $dados['descricao']; ?></td>
            <td><?php echo $dados['imagem']; ?></td>
            <!--Botão editar-->
            <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-success">
                <i class="bi bi-pencil-fill"></i></a></td>
            <!--Botão delete-->
            <td><a href="modal<?php echo $dados['id']; ?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal<?php echo $dados['id']; ?>">
                <i class="bi bi-trash-fill"></i></a></td>


          </tr>


          <!-- Modal -->
          <div class="modal fade" id="modal<?php echo $dados['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deseja realmente deletar esse Cadastro?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                  <form action="php_action/delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                    <button type="submit" name="btn-deletar" class="btn btn-danger">Sim quero deletar</button>

                  </form>
                </div>
              </div>
            </div>
          </div>

      <?php
        endwhile;
      endif;
      ?>
    </tbody>
  </table>
  <div class="col-md-12">
    <a href="adicionar.php" class="btn btn-primary">Adicionar Cadastro</a>
  </div>
 