<?php
ob_start();

include_once 'includes/mensagem.php';
//adicionando a conexão com o banco de dados
include_once 'php_action/db_connect.php';
//Incluindo o cabeçalho
include_once 'includes/header.php';
//Botão enviar
if (isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect,$_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    if (empty($login) or empty($senha)):
      $_SESSION['mensagem'] = ' O campo login/senha precisa ser preenchido';
      
    else:
        $sql= "SELECT * FROM usuarios WHERE login = '$login' ";
        $resultado = mysqli_query($connect,$sql);
        if(mysqli_num_rows($resultado)>0):
          $senha=md5($senha);
          $sql= "SELECT * FROM usuarios WHERE login = '$login' and senha ='$senha' ";
          $resultado = mysqli_query($connect,$sql);
               if(mysqli_num_rows($resultado)==1):
                $dados= mysqli_fetch_array($resultado);
                $_SESSION['logado' ] = true;
                $_SESSION['id_usuario'] = $dados['id'];
               //header('Location:/administracao.php');
               echo'<script>window.location="administracao.php"</script>';
               exit();
            else:
                
                $_SESSION['mensagem'] = 'Usuário ou senha invalidos';
            endif;
           
        else:
           
            $_SESSION['mensagem'] = 'Usuario inexistente';
            
        endif;
    endif;

endif;

?>



<!doctype html>
<html lang="en">
  <head>
  
   
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="" method="POST">
   
    <h1 class="h3 mb-3 fw-normal">Login</h1>
    <?php
    if (!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;

    endif;
    ?>

    <div class="form-floating">
      <input type="text" class="form-control" id="login" placeholder="nome@exemplo.com" name="login">
      <label for="login">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="senha" placeholder="Password" name="senha">
      <label for="senha">Senha</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="btn-entrar">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>

    
  </body>

</html>
