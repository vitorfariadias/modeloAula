<?php

    function rotas($pagina){
        
        switch ($pagina){
            case 'orcamentos':
                require 'paginas/orcamentos.php';
            break;
            case 'criar':
                require 'paginas/criar.php';
            break;
            case 'sobre':
                require 'paginas/sobre.php';
            break;
            default:
                require 'paginas/home.php';
        }
    }

    function active($pagina, $link=''){ 
        //se $link não tiver nada, significa que vai para a home
        if($pagina == $link){
            return 'class="active"';
        }
        return '';
        
    }

    function conecta(){

        $conexao = mysqli_connect(HOST, USER, PASSWORD, BANCO);
        
        return $conexao;
    }

?>