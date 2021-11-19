<?php
require_once '../public_html/php_action/db_connect.php';


$sql = "SELECT * FROM banner";
$resultado = mysqli_query($connect, $sql);

?>
<div id="meuBanner" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#meuBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#meuBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#meuBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#meuBanner" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#meuBanner" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
    <?php
            //Verificando se a lista contem valores antes de começar o looping
            if (mysqli_num_rows($resultado) > 0) :

                while ($dados = mysqli_fetch_array($resultado)) :
                    $banner [] = $dados['nome'];
            ?>
             <?php
                endwhile;
            endif;
            ?>
        <!--BANNER 1-->
        <div class="carousel-item active">
            <?php if(!$banner[0]):
                $exibe = 'sem_imagem.jpg';
            else:
                $exibe= $banner[0];
            endif;
                 ?>
            <img src="img/banner/<?php echo $exibe;?>" alt="banner de boas vindas" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777">

                <div class="container">
                    <div class="carousel-caption text-start">

                    </div>
                </div>
        </div>
        <!--BANNER 2-->
        <div class="carousel-item">
        <?php if(!$banner[1]):
                $exibe = 'sem_imagem.jpg';
            else:
                $exibe= $banner[1];
            endif;
                 ?>
            <img src="img/banner/<?php echo $exibe; ?>" alt="banner de boas vindas" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777">

                <div class="container">
                    <div class="carousel-caption text-start">

                    </div>
                </div>
        </div>
         <!--BANNER 3-->
         <div class="carousel-item">
         <?php if(!$banner[2]):
                $exibe = 'sem_imagem.jpg';
            else:
                $exibe= $banner[2];
            endif;
                 ?>
            <img src="img/banner/<?php echo $exibe; ?>" alt="banner de boas vindas" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777">

                <div class="container">
                    <div class="carousel-caption text-start">

                    </div>
                </div>
        </div>
         <!--BANNER 4-->
         <div class="carousel-item">
         <?php if(!$banner[3]):
                $exibe = 'sem_imagem.jpg';
            else:
                $exibe= $banner[3];
            endif;
                 ?>
            <img src="img/banner/<?php echo $exibe; ?>" alt="banner de boas vindas" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777">

                <div class="container">
                    <div class="carousel-caption text-start">

                    </div>
                </div>
        </div>
      
        
       
        
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#meuBanner" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#meuBanner" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>