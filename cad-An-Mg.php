
<?php

include('conexao.php');

$comando = "SELECT id_genero, descricao FROM genero";

$listarGenero = mysqli_query($conexao, $comando);

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

            <form action="?p=processa-Cadastro" method="POST" enctype="multipart/form-data">

                <h2>Cadastro do Conteúdo</h2>

                <label class="Boxlbl" for="nomeConteudo">Titulo</label>
                <input class="Boxlbl" id="titulo" type="text" required name="titulo_An" autocomplete="off" placeholder="Titulo do Conteúdo">

                <label class="Boxlbl" for="autor">Autor/Criador</label>
                <input class="Boxlbl" id="autor" type="text" required name="autor" autocomplete="off" placeholder="autor criador do conteudo">

                <label class="Boxlbl" for="descricao">Temporadas</label>
                <input class="Boxlbl" id="eps_An" type="text" required name="eps_An" autocomplete="off" placeholder="informe os episodios e as temp...">

                <label class="Boxlbl" for="descricao">Descrição</label>
                <textarea class="Boxlbl" id="descricao" required name="descr_An" rows="5" placeholder="Informações do Conteúdo"></textarea>
                
                <label class="Boxlbl" for="link">Link do Trailer</label>
                <input class="Boxlbl" id="link" type="text" required name="link" autocomplete="off" placeholder="link do youtube...">

                <label class="Boxlbl" for="verMais">Link para ver</label>
                <input class="Boxlbl" id="verMais" type="text" required name="verMais" autocomplete="off" placeholder="link para ver...">
                
                <label class="Boxlbl">Genero</label>
                <select class="Boxlbl" name="genero">
                    <option class="Boxlbl">Genero</option>
                <?php
                    while($linha = mysqli_fetch_assoc($listarGenero)){
                ?>
                    <option class="Boxlbl" value="<?=$linha['id_genero']?>"><?=$linha['descricao']?></option>
                <?php
                    };
                ?>
                </select>

                <label class="Boxlbl">Imagem de Capa</label>
                <input class="Boxlbl" type="file" required name="imagem">
                
                <button class="BoxBtn" type="submit">Cadastrar</button>

            </form>

        </div>

    </section>
</body>
</html>