

<?php

include('conexao.php');

$comando = "SELECT id_anime, titulo_An, imagem FROM anime";

$listarConteudos = mysqli_query($conexao, $comando);

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/colecao.css">
</head>
<body>  
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