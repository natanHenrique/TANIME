

<?php

include('conexao.php');

$comando = "SELECT id_genero, descricao FROM genero";

$listarGenero = mysqli_query($conexao, $comando);

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WEBSITE de leitura de 
    conteudos sobre Anime e Mangas.">
    <meta name="keiwords" content="Anime, Mangá, Site de leitura, desenhos">
    <meta name="robots" content="header, follow">
    <meta name="author" content="Natan Henrique">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="css/header.css">
    <title>TANIME</title>
</head>
<body>
    <header class="cabecalho">
        <a href="?p="><h1 class="logo">TANIME - Conteudos Sobre Animes e Mangas.</h1></a>
        <button class=" btn-menu"><i class="fa fa-bars fa-lg"></i></button>

        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
            <ul>
                <li><a href="?p=">Inicio</a></li>
                <li><a href="?p=colecao">Coleção</a></li>
                <li><a href="?p=login">Login Admin</a></li>
            </ul>
        </nav>
    </header>
    <section class="barra">
        <form action="?p=pesquisar" method="POST">
            <div class="barraBusca">
                <input class=" radius" type="text" name="titulo_An" placeholder="Buscar...">
                <button type="submit" class="radius bg">    
                    <i class=" fa fa-search"></i>
               </button>
            </div> 
        </form>
    </section>
    
    <!-- JQUERY-->
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

    <script>
        $(".btn-menu").click(function(){
            $(".menu").show();
        });

        $(".btn-close").click(function(){
            $(".menu").hide();
        });
    </script>
</body>
</html>