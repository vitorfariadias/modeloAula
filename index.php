<?php
    //operador ternário:
    $conteudo = isset($_GET['pagina'])? $_GET['pagina']:'';

    require 'config.php';
    require 'lib/functions.php';
    require 'template/header.php';
    require 'template/menu.php';

?>

<div class="container">

    <?php
    
        rotas($conteudo);
    
    ?>
</div> <!-- /container -->

<?php

    require 'template/footer.php';

?>