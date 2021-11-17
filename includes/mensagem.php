<?php
session_start();
//verifica se existe a mensagem
?>
<script>
  function funcao1() {
    alert("<?php echo $_SESSION['mensagem'];?>");
  }
</script>

<?php
if (isset($_SESSION['mensagem'])) : ?>
  <script>
    window.onload = funcao1();
  </script>



<?php
endif;
//encerra a sessão para apagar a mensagem
session_unset();
?>