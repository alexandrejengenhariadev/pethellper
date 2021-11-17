<?php
include_once 'includes/header.php';
include_once 'php_action/db_connect.php';
?>

<br>
<br>
<br>
<br>
<?php
include_once 'banner.php';
?>
<?php
$nome = [];
$cnpj = [];
$responsavel = [];
$endereco = [];
$estado = [];
$descricao = [];
$imagem = [];

$sql = "SELECT * FROM ongs";
$resultado = mysqli_query($connect, $sql);
?>
<!--DESTAQUES-->
<div class="container" id="featured-container">

    <div class="col-12" id="featured-images">

        <div class="row g-4">
            <?php
            //Verificando se a lista contem valores antes de começar o looping
            if (mysqli_num_rows($resultado) > 0) :

                while ($dados = mysqli_fetch_array($resultado)) :
            ?>
                    <!--IMAGEM DESTAQUE 1-->
                    <div class="col-12 col-md-4">
                        <img src="img/<?php echo $dados['imagem']; ?>" class="img-fluid">
                        <div class="banner-content">
                            <p class="secondary-color">ONG</p>
                            <h3><?php echo $dados['nome']; ?></h3>

                            <form action="doacao.php" method="POST">
                                <input type="hidden" name="nome" value="<?php echo $dados['nome']; ?>">
                                <button type="submit" name="btn-doar" class="btn btn-danger">DOAR</button>

                            </form>
                            
                        </div>
                    </div>



            <?php
                endwhile;
            endif;
            ?>





        </div>

    </div>
</div>
<!--INFO-->
<div class="container" id="info-container">
    <div class="col-12">
        <h2 class="title primary-color">Detalhes Importantes</h2>
        <p class="subtitle secondary-color">
            Saiba mais sobre o nosso projeto
        </p>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-md-5" id="info-banner">
                <img src="img/projeto.jpg" alt="Informações da Empresa" class="img-fluid">
            </div>
            <div class="col-12 col-md-7 bg-secondary-color" id="info-content">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title primary-color">Estes dados fazem a diferença</h2>
                        <p class="subtitle secondary-color">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum consectetur eos laborum
                            possimus suscipit commodi impedit animi ipsa molestiae quisquam, neque aperiam sequi
                            nobis reiciendis quos aspernatur, quasi eaque pariatur.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum consectetur eos laborum
                            possimus suscipit commodi impedit animi ipsa molestiae quisquam, neque aperiam sequi
                            nobis reiciendis quos aspernatur, quasi eaque pariatur.

                        </p>
                    </div>
                    <div class="col-12" id="info-numbers">
                        <div class="row">
                            <div class="col-4">
                                <h3 class="primary-color">180</h3>
                                <p class="secondary-color">Doações</p>
                            </div>

                            <div class="col-4">
                                <h3 class="primary-color">07</h3>
                                <p class="secondary-color">Adoções</p>
                            </div>

                            <div class="col-4">
                                <h3 class="primary-color">1800</h3>
                                <p class="secondary-color">Valores arrecadados</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="#" class="btn btn-dark">Saiba Mais</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<?php
include_once 'includes/footer.php';

?>