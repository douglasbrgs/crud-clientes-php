<?php
// Sessão
session_start();

if (isset($_SESSION['mensagem'])) :
?>

  <script>
    window.onload = function() {
      M.toast({
        html: '<?php echo $_SESSION['mensagem']; ?>'
      });
    }
  </script>

<?php
endif;
// Limpa sessão
session_unset();
?>