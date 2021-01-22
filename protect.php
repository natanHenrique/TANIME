<?php

if(!function_exists("protect")){

    function protect(){

        if(!isset($_SESSION))

        if(!isset($_SESSION['nome']) || !is_numeric($_SESSION['nome'])){
            header('Location: ?p=login');
        }

    }

}

/*
include('protect.php');
protect();*/
?>