<?php

include_once 'includes/header.php';
include_once 'php_action/db_connect.php';
include_once 'includes/mensagem.php';
?>

<br>
<br>
<br>
<br>

<?php

$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query($connect, $sql);
?>
<!--DESTAQUES-->
<div class="container" id="featured-container">

    <div class="col-12" id="featured-images">

        <div class="row g-4">
            <?php

            //VERIFICANDO SE A LISTA CONTEM VALORES ANTES DE COMEÇAR O LOOPING 

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
                    <!--IMAGEM COM O LOGOTIPO DAS ONGS-->
                    <div class="col-12 col-md-4 ">
                        <div class="card text-center " style="width: 27rem;">
                            <div class="card-header  py-3 text-white bg-primary border-primary text-center">
                                <h3><?php echo $dados['nome']; ?></h3>
                                <p><?php echo $dados['fone']; ?></p>
                            </div>
                            <h3><?php echo $dados['site']; ?></h3>
                            <h3>NECESSIDADES:</h3>
                            <hr>

                            <ul class="text-start">
                                <li>
                                    <h3><?php echo $dados['suprimento1']; ?></h3>
                                </li>
                                <li>
                                    <h3><?php echo $dados['suprimento2']; ?></h3>
                                </li>
                                <li>
                                    <h3><?php echo $dados['suprimento3']; ?></h3>
                                </li>
                                <li>
                                    <h3><?php echo $dados['suprimento4']; ?></h3>
                                </li>
                            </ul>
                            <hr>
                            <div>
                                <a href="modal<?php echo $dados['id']; ?>" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#modal<?php echo $dados['id']; ?>">
                                    <i class="bi bi-trash-fill"></i></a>
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

                                                <form action="php_action/deleteSuprimentos.php" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                                    <button type="submit" name="btn-deletar" class="btn btn-danger">Sim quero deletar</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>



                        </div>
                    </div>




            <?php
                endwhile;
            endif;
            ?>