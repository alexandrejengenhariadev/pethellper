<?php
session_start();
require_once 'php_action/db_connect.php';
include_once '../public_html/includes/header.php';
if (isset($_POST['btn-doar'])) :

  $nome = mysqli_escape_string($connect, $_POST['nome']);
endif;
$sql = "SELECT * FROM combo";
$resultado = mysqli_query($connect, $sql);

//Verificando se a lista contem valores antes de começar o looping
if (mysqli_num_rows($resultado) > 0) :

  while ($dados = mysqli_fetch_array($resultado)) :
    $id[] = $dados['id'];
    if( $dados['produto1']):
      $produto1[] = $dados['produto1'];
    else:
      $produto1[]='';
    endif;

      if( $dados['produto2']):
    $produto2[] = $dados['produto2'];
  else:
    $produto2[]='';
  endif;
    if( $dados['produto3']):
    $produto3[] = $dados['produto3'];
  else:
    $produto3[]='';
  endif;
    if( $dados['produto4']):
    $produto4[] = $dados['produto4'];
  else:
    $produto4[]='';
  endif;
    $valor[] = $dados['valor'];
  endwhile;
endif;

?>

<br>
<br>
<br>
<br>
<div class="col-12 col-md-4">
  <div class="banner-content">
    <br>

    <h3>DOAÇÃO PARA A ONG: <?php echo $nome; ?></h3>
  </div>
</div>


<main>
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <!--COMBO 1-->
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white bg-primary border-primary">
          <h4 class="my-0 fw-normal">COMBO <?php echo $id[0]; ?></h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title"><?php echo $valor[0]; ?></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li><?php echo $produto1[0]; ?></li>
            <li><?php echo $produto2[0]; ?></li>
            <li><?php echo $produto3[0]; ?></li>
            <li><?php echo $produto4[0]; ?></li>


          </ul>
          <form action="php_action/cadastraDoacao.php" method="POST">
            <input type="hidden" name="nome" value="<?php echo $nome; ?>">
            <input type="hidden" name="id" value="<?php echo $id[0]; ?>">
            <input type="hidden" name="valor" value="<?php echo $valor[0]; ?>">


            <button type="submit" name="btn-doar" class="btn btn-primary">DOAR</button>
            <a href="home.php" class="btn btn-danger">Voltar</a>

          </form>
        </div>
      </div>
    </div>
    <!--COMBO 2-->
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white bg-primary border-primary">
          <h4 class="my-0 fw-normal">COMBO <?php echo $id[1]; ?></h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title"><?php echo $valor[1]; ?></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li><?php echo $produto1[1]; ?></li>
            <li><?php echo $produto2[1]; ?></li>
            <li><?php echo $produto3[1]; ?></li>
            <li><?php echo $produto4[1]; ?></li>



          </ul>
          <form action="php_action/cadastraDoacao.php" method="POST">
            <input type="hidden" name="nome" value="<?php echo $nome; ?>">
            <input type="hidden" name="id" value="<?php echo $id[1]; ?>">
            <input type="hidden" name="valor" value="<?php echo $valor[1]; ?>">


            <button type="submit" name="btn-doar" class="btn btn-primary">DOAR</button>
            <a href="home.php" class="btn btn-danger">Voltar</a>

          </form>
        </div>
      </div>
    </div>
    <!--COMBO 3-->
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white bg-primary border-primary">
          <h4 class="my-0 fw-normal">COMBO <?php echo $id[2]; ?></h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title"><?php echo $valor[2]; ?></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li><?php echo $produto1[2]; ?></li>
            <li><?php echo $produto2[2]; ?></li>
            <li><?php echo $produto3[2]; ?></li>
            <li><?php echo $produto4[2]; ?></li>



          </ul>
          <form action="php_action/cadastraDoacao.php" method="POST">
            <input type="hidden" name="nome" value="<?php echo $nome; ?>">
            <input type="hidden" name="id" value="<?php echo $id[2]; ?>">
            <input type="hidden" name="valor" value="<?php echo $valor[2]; ?>">


            <button type="submit" name="btn-doar" class="btn btn-primary">DOAR</button>
            <a href="home.php" class="btn btn-danger">Voltar</a>

          </form>
        </div>
      </div>
    </div>


</main>