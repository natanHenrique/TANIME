<?php
    function carregaPagina(){
        (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'main';
        if(file_exists($pagina.'.php')):
            require_once($pagina.'.php');
        else:
            require_once('main.php');
        endif;
    }
?>