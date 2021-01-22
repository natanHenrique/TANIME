
<?php

include('conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cad-An-Mg.css">
</head>
<body>
    <section class="containerCA">

            <div class="cadConteudo">

                <form action="?p=processa_News_Cad" method="POST" enctype="multipart/form-data">

                    <h2>Cadastro de Noticia</h2>

                    <label class="Boxlbl" for="titulo_News">Titulo:</label>
                    <input class="Boxlbl" id="titulo_News" type="text" required name="titulo_News" autocomplete="off" placeholder="Titulo do Conteúdo">

                    <label class="Boxlbl" for="fonte">fonte:</label>
                    <input class="Boxlbl" id="fonte" type="text" required name="fonte" autocomplete="off" placeholder="autor criador do conteudo">

                    <label class="Boxlbl" for="descr_News">Descrição:</label>
                    <textarea id="descr_News" required name="descr_News" rows="5" placeholder="Informações do Conteúdo"></textarea>

                    <label class="Boxlbl" for="ver">Link para ver:</label>
                    <input class="Boxlbl" id="ver" type="text" required name="ver" autocomplete="off" placeholder="link para ver...">

                    <label class="Boxlbl">Imagem de Exibição:</label>
                    <input class="Boxlbl" type="file" required name="imagem_News">
                    
                    <button class="BoxBtn" type="submit">Cadastrar</button>

                </form>

            </div>

    </section>
</body>
</html>