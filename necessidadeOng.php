<?php
session_start();
require_once 'php_action/db_connect.php';
include_once '../public_html/includes/header.php';



?>
<br>
<br>
<br>
<br>
<br>

<main>
    <?php
    $sql = "SELECT * FROM cadastro";
    $resultado = mysqli_query($connect, $sql);

    //Verificando se a lista contem valores antes de começar o looping
    if (mysqli_num_rows($resultado) > 0) :

        while ($dados = mysqli_fetch_array($resultado)) :
            $id[] = $dados['id'];
            $nome[] = $dados['nome'];
            $site[] = $dados['site'];
            $fone[] = $dados['fone'];
            $suprimento1[] = $dados['suprimento1'];
            $suprimento2[] = $dados['suprimento2'];
            $suprimento3[] = $dados['suprimento3'];
            $suprimento4[] = $dados['suprimento4'];

    ?>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center ">
                <!--ONGS CADASTRADAS E SUPRIMENTOS-->
                <div class="card" style="width: 38rem;">
                <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal"><?php echo  $dados['nome'];; ?></h4>
                            
                        </div>
                    
                    <div class="card-body">
                    <h1 class="card-title pricing-card-title"><?php echo $dados['site']; ?></h1>
                    <h4>SUPRIMENTOS:</h4>
                        <ul class="list-group list-group-flush">
                                <li class="list-group-item text-start"><i class="bi bi-check-lg"></i>  <?php echo $dados['suprimento1']; ?></li>
                                <li class="list-group-item text-start"><i class="bi bi-check-lg"></i>  <?php echo $dados['suprimento2']; ?></li>
                                <li class="list-group-item text-start"><i class="bi bi-check-lg"></i>  <?php echo $dados['suprimento3']; ?></li>
                                <li class="list-group-item text-start"><i class="bi bi-check-lg"></i>  <?php echo $dados['suprimento4']; ?></li>

                            </ul>
                        <a href="<?php echo $dados['site'];?>" class="btn btn-primary">Visitar o ste</a>
                    </div>
                </div>
        <?php
        endwhile;
    endif;
        ?>
            </div>




</main>






<br>
<br>
<br>
<br>