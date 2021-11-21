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
        <th scope="col">Ong</th>
        <th scope="col">Doação</th>
        <th scope="col">Valor</th>
        <th scope="col">Codigo</th>
       

      </tr>
    </thead>
    <tbody>
      <!--Exibindo dados do banco de dados-->
      <?php
      $sql = "SELECT * FROM doacao";
      $resultado = mysqli_query($connect, $sql);
      //Verificando se a lista contem valores antes de começar o looping
      if (mysqli_num_rows($resultado) > 0) :

        while ($dados = mysqli_fetch_array($resultado)) :

      ?>
          <tr>
            <td><?php echo $dados['ong']; ?></td>
            <td><?php echo $dados['combo']; ?></td>
            <td><?php echo $dados['valor']; ?></td>
            <td><?php echo $dados['codigodoacao']; ?></td>
           
      
          </tr>


       
      <?php
        endwhile;
      endif;
      ?>
    </tbody>
  </table>
 