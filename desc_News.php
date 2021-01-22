
<?php

session_start();

include('conexao.php');

$id_news = $_GET['id_news'];

$comando = "SELECT titulo_News, descr_News, fonte, ver, imagem_News FROM noticia WHERE id_news = $id_news";

$detalharNews = mysqli_query($conexao, $comando);

$linha_News = mysqli_fetch_assoc($detalharNews);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/desc-An-Mg.css">
</head>
<body>
</section>
    <section class="containerDetalhes">
        <div class="text">

            <h1><?=$linha_News['titulo_News']?></h1>
            <div class="fotoConteudo">
                    <img src="upload/<?=$linha_News['imagem_News']?>" alt="imagem_News">
            </div>
            <p class="textTemp">Fonte:  <?=$linha_News['fonte']?></p> 

            <p class="textTemp textDesc">Descrição</p>
                <p><?=$linha_News['descr_News']?></p>
                <br>
                <br>
                <br>
            <p><a href="<?=$linha_News['ver']?>" class="btn">Ver Mais</a></p>
        </div>
    </section>
    </div>
</body>
</html>