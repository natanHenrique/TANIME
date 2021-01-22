
<?php

include('conexao.php');

$comando = "SELECT id_anime, titulo_An, imagem FROM anime";

$listarConteudos = mysqli_query($conexao, $comando);

$comandoNews = "SELECT id_news, imagem_News FROM noticia";

$listarNews = mysqli_query($conexao, $comandoNews);


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
        <div id="items-wrapper">
            <h1 class="text-title">Noticias</h1>
            <div id="items">
                <?php
                    while($linha_News = mysqli_fetch_assoc($listarNews)){
                ?>
                    <div class="item">
                    <a class="img" href="?p=desc_News&id_news=<?=$linha_News['id_news']?>"><img class="img" src="upload/<?=$linha_News['imagem_News']?>" alt="imagemCapaNews"></a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    
    <main class="container colecao">
        <h1 class="text-title">Coleção</h1>

        <article class="conteudos">
            <?php
                while($linha = mysqli_fetch_assoc($listarConteudos)){
            ?>
        <div class="conteudo">
            
            <a href="?p=desc-An-Mg&id_anime=<?=$linha['id_anime']?>"><img src="upload/<?=$linha['imagem']?>" alt="imagemCapa"></a>
            <div class="infoProduto inner">
                    <span id="corTitulo" class="nome-prod"><?=$linha['titulo_An']?></span>
            </div>
        </div>

        <?php
            }
        ?>
        </article>

    </main>
</body>
</html>