
<?php

session_start();

include('conexao.php');

$id_anime = $_GET['id_anime'];

$comando = "SELECT id_genero, titulo_An, descr_An, eps_An, link, verMais, autor, imagem FROM anime WHERE id_anime = $id_anime";

$genero = "SELECT * FROM genero";

$detalharGenero = mysqli_query($conexao, $genero);

$linhaG = mysqli_fetch_assoc($detalharGenero);

$detalharConteudo = mysqli_query($conexao, $comando);

$linha = mysqli_fetch_assoc($detalharConteudo);

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
    <section class="containerDetalhes">
        <div class="text">

            <h1><?=$linha['titulo_An']?></h1>
            <div class="fotoConteudo">
                    <img src="upload/<?=$linha['imagem']?>" alt="imagem">
            </div>
            <p class="textTemp">Autor:  <?=$linha['autor']?></p>

            <p class="textTemp">Temporadas: <?=$linha['eps_An']?></p> 

            <p class="textTemp">Genero:   <?=$linhaG['descricao']?></p>

            <p class="textTemp textDesc">Descrição</p>
                <p><?=$linha['descr_An']?></p>
                <br>
                <div class="imgG">
                    <iframe src="<?=$linha['link']?>"></iframe>
                </div>
                <br><br>
                <h2>avalie-nos !</h2>
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <form method="POST" action="processaAvaliacao.php" enctype="multipart/form-data">
                    <div class="estrelas">
                        <input type="radio" id="vazio" name="estrela" value="" checked>
                        
                        <label for="estrela_um"><i class="fa"></i></label>
                        <input type="radio" id="estrela_um" name="estrela" value="1">
                        
                        <label for="estrela_dois"><i class="fa"></i></label>
                        <input type="radio" id="estrela_dois" name="estrela" value="2">
                        
                        <label for="estrela_tres"><i class="fa"></i></label>
                        <input type="radio" id="estrela_tres" name="estrela" value="3">
                        
                        <label for="estrela_quatro"><i class="fa"></i></label>
                        <input type="radio" id="estrela_quatro" name="estrela" value="4">
                        
                        <label for="estrela_cinco"><i class="fa"></i></label>
                        <input type="radio" id="estrela_cinco" name="estrela" value="5">
                        
                        <button class="btn" type="submit">Avaliar</button> 
                        
                    </div>
                </form>
             <br>
             <br>
            <p><a href="<?=$linha['verMais']?>" class="btn">Ver Mais</a></p>
        </div>
    </section>
</body>
</html>