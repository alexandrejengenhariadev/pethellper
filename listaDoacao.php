<?php
include_once 'includes/mensagem.php';
//adicionando a conexão com o banco de dados
include_once 'php_action/db_connect.php';
//Incluindo o cabeçalho
include_once 'includes/header.php';

?>
<br>
<br>
<br>
<br>



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
     if(isset($_GET['id'])):
      $id=mysqli_escape_string($connect, $_GET['id']);
      $sql = "SELECT * FROM ongs WHERE id = '$id'";
      $resultado = mysqli_query($connect,$sql);
      $dados = mysqli_fetch_array($resultado);
     
     

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
 