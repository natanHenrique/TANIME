<?php

    include('conexao.php');

    $id_news = $_GET['id_news'];

    $comandoInfo = "SELECT * FROM noticia WHERE id_news = $id_news";

    $listarNews = mysqli_query($conexao, $comandoInfo);

    $conteudoInfoNews = mysqli_fetch_assoc($listarNews);

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cad-An-Mg.css">
</head>
<body>
    <section class="containerCA">

        <div class="cadConteudo">

            
            <form action="?p=processa_Att_News" method="POST" enctype="multipart/form-data">

                <h2>Atualizar Noticia</h2>

                <input type="hidden" name="id_news" value="<?=$conteudoInfoNews['id_news']?>">
                <br>
                <label class="Boxlbl" for="titulo_News">Titulo</label>
                <input class="Boxlbl" id="titulo_News" type="text" value="<?=$conteudoInfoNews['titulo_News']?>" required name="titulo_News" autocomplete="off" placeholder="titulo da noticia">

                <label class="Boxlbl" for="legenda">Fonte:</label>
                <input class="Boxlbl" id="legenda" type="text" value="<?=$conteudoInfoNews['fonte']?>" required name="fonte" autocomplete="off" placeholder="Temporadas">

                <label class="Boxlbl" for="link">Link Ver Mais</label>
                <input class="Boxlbl" id="link" type="text" value="<?=$conteudoInfoNews['ver']?>" required name="ver" autocomplete="off" placeholder="Trailer do conteudo">

                <label class="Boxlbl" for="descricao">Descrição</label>
                <textarea id="descricao" required name="descr_News" rows="5" placeholder="Informações"><?=$conteudoInfoNews ['descr_News']?></textarea>
                
                <label class="Boxlbl">Imagem de Capa</label>
                <input class="Boxlbl" type="hidden" value="<?=$conteudoInfoNews ['imagem_News']?>" name="imagem_News">
                <input class="Boxlbl" type="file" value="" name="imagem_News">

                <button class="BoxBtn" type="submit">Atualizar</button>

            </form>

        </div>

    </section>
</body>
</html>
