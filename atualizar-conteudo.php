<?php

    include('conexao.php');

    $id_anime = $_GET['id_anime'];

    $comandoInfo = "SELECT * FROM anime WHERE id_anime = $id_anime";

    $listarConteudos = mysqli_query($conexao, $comandoInfo);

    $conteudoInfo = mysqli_fetch_assoc($listarConteudos);

    $comandoGenero = "SELECT * FROM genero";

    $selectGenero = mysqli_query($conexao, $comandoGenero);
    
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

            
            <form action="?p=processa-Atualizar" method="POST" enctype="multipart/form-data">

                <h2>Atualizar Conteudo</h2>

                <input type="hidden" name="id_anime" value="<?=$conteudoInfo ['id_anime']?>">

                <label class="Boxlbl" for="nomeConteudo">Titulo</label>
                <input class="Boxlbl" id="nomeConteudo" type="text" value="<?=$conteudoInfo ['titulo_An']?>" required name="titulo_An" autocomplete="off" placeholder="titulo do conteudo">

                <label class="Boxlbl" for="legenda">Temporadas</label>
                <input class="Boxlbl" id="legenda" type="text" value="<?=$conteudoInfo ['eps_An']?>" required name="eps_An" autocomplete="off" placeholder="Temporadas">

                <label class="Boxlbl" for="link">LinK do trailer</label>
                <input class="Boxlbl" id="link" type="text" value="<?=$conteudoInfo ['link']?>" required name="link" autocomplete="off" placeholder="Trailer do conteudo">

                <label class="Boxlbl" for="autor">Autor</label>
                <input class="Boxlbl" id="autor" type="text" value="<?=$conteudoInfo ['autor']?>" required name="autor" autocomplete="off" placeholder="Autor">
                
                <label class="Boxlbl" for="verMais">LinK para ver mais</label>
                <input class="Boxlbl" id="verMais" type="text" value="<?=$conteudoInfo ['verMais']?>" required name="verMais" autocomplete="off" placeholder="ver mais do conteudo">

                <label class="Boxlbl" for="descricao">Descrição</label>
                <textarea id="descricao" required name="descr_An" rows="5" placeholder="Informações"><?=$conteudoInfo['descr_An']?></textarea>
                
                
                
                <label class="Boxlbl">Categoria</label>
                <select class="Boxlbl" name="genero">
                <?php
                    while($genero = mysqli_fetch_assoc($selectGenero)){
                        if($genero['id_genero'] ==  $conteudoInfo['id_genero']){
                ?>
                    <option class="Boxlbl" value="<?=$genero['id_genero']?>" selected><?=$genero['descricao']?></option>
                <?php
                        }else{
                ?>
                    <option class="Boxlbl" value="<?=$genero['id_genero']?>"><?=$genero['descricao']?></option>
                <?php
                }}
                ?>
                </select>

                <label class="Boxlbl">Imagem de Capa</label>
                <input class="Boxlbl" type="hidden" value="<?=$conteudoInfo['imagem']?>" name="imagem">
                <input class="Boxlbl" type="file" value="" name="imagem">

                <button class="BoxBtn" type="submit">Atualizar</button>

            </form>

        </div>

    </section>
</body>
</html>
