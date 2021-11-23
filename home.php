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
            
            //VERIFICANDO SE A LISTA CONTEM VALORES ANTES DE COMEÇAR O LOOPING 
            if (mysqli_num_rows($resultado) > 0) :

                while ($dados = mysqli_fetch_array($resultado)) :
            ?>
                    <!--IMAGEM COM O LOGOTIPO DAS ONGS-->
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
                        <h3 class="text-center"><?php echo $dados['nome']; ?></h3>
                    </div>



            <?php
                endwhile;
            endif;
            ?>





        </div>

    </div>
</div>
<!--INFORMAÇÕES -->
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
                        O projeto surgiu como uma solução para as dificuldades encontradas pelas Ongs na arrecadação 
                        de suprimentos e captação de recursos para a manutenção da Organização, situação que se agravou
                        com a pandemia. Atualmente o projeto consta com mais de 10 organizações cadastradas e pretende 
                        elevar esse numero a um patamar muito mais elevado, podendo assim contribuir com ajuda para causa 
                        animal.      
                      

                        </p>
                    </div>
                    <?php
    $sql2 = "SELECT SUM(valor) as 'somaRes' FROM doacao"; 
    $res = mysqli_query($connect, $sql2);
    $data = mysqli_fetch_array($res);
    $sql3  = "SELECT COUNT(*) as 'somaRes2' FROM doacao";
    $res2 = mysqli_query($connect, $sql3);
    $data2 = mysqli_fetch_array($res2);
    $sql4  = "SELECT COUNT(*) as 'somaRes3' FROM ongs";
    $res3 = mysqli_query($connect, $sql4);
    $data3 = mysqli_fetch_array($res3);
    ?>
  
                    <div class="col-12" id="info-numbers">
                        <div class="row">
                            <div class="col-4">
                                <h2 class="text-center">DOAÇÕES</h2>
                                <h3 class="primary-color text-center"><?php echo $data2['somaRes2'];?></h3>
                                <p class="secondary-color text-center">Doações</p>
                            </div>

                            <div class="col-4">
                            <h2 class="text-center">ONGS</h2>
                                <h3 class="primary-color text-center"><?php echo $data3['somaRes3'];?></h3>
                                <p class="secondary-color text-center">ONGS Cadastradas</p>
                            </div>

                            <div class="col-4">
                            <h2 class="text-center">VALORES</h2>
                                <h3 class="primary-color text-center"><?php echo $data['somaRes'];?></h3>
                                <p class="secondary-color text-center">Valores arrecadados</p>
                            </div>
                        </div>
                    </div>
                   

                </div>
                <div class="col-12" id="info-contato">
                       
                       </div>

            </div>
        </div>
    </div>
</div>


<?php
include_once 'includes/footer.php';

?>