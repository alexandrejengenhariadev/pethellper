<?php
session_start();
require_once 'php_action/db_connect.php';
include_once 'includes/header.php';
if (isset($_POST['btn-doar'])) :

  $nome = mysqli_escape_string($connect, $_POST['nome']);
endif;
?>

<br>
<br>
<br>
<br>
<div class="col-12 col-md-4">
  <div class="banner-content">
    <br>

    <h3><?php echo $nome; ?></h3>
  </div>
</div>


<main>
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white bg-primary border-primary">
          <h4 class="my-0 fw-normal">COMBO 1</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">R$50<small class="text-muted fw-light">,00</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>5 KILOS DE RAÇÃO</li>
            <li>2 VERMIFUGO</li>

          </ul>
          <form action="finaliza.php" method="POST">
            <input type="hidden" name="nome" value="<?php echo $nome; ?>">
            <button type="submit" name="btn-doar1" class="btn btn-primary">DOAR</button>

          </form>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white bg-primary border-primary">
          <h4 class="my-0 fw-normal">COMBO 2</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$100<small class="text-muted fw-light">,00</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>10 KILOS DE RAÇÃO</li>
            <li>2 VERMIFUGO</li>

          </ul>
          <form action="finaliza.php" method="POST">
            <input type="hidden" name="nome" value="">
            <button type="submit" name="btn-doar2" class="btn btn-primary">DOAR</button>

          </form>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white bg-primary border-primary">
          <h4 class="my-0 fw-normal">COMBO 3</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">R$150<small class="text-muted fw-light">,00</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>15 KILOS DE RAÇÃO</li>
            <li>5 VERMIFUGO</li>
          </ul>
          <form action="finaliza.php" method="POST">
            <input type="hidden" name="nome" value="">
            <button type="submit" name="btn-doar3" class="btn btn-primary">DOAR</button>

          </form>
        </div>
      </div>
    </div>
  </div>


</main>


<?php
include_once 'includes/footer.php';

?>