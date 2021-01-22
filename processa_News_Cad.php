<?php

include('conexao.php');

$titulo_News = $_POST['titulo_News'];
$fonte = $_POST['fonte'];
$descr_News = $_POST['descr_News'];
$imagem_News = $_FILES['imagem_News'];
$ver = $_POST['ver'];


if(empty($titulo_News) || empty($descr_News) || empty($imagem_News) || empty($fonte) || empty($ver)){
    header('?p=cad_News');
    exit();
}

$extensao = pathinfo($imagem_News['name'], PATHINFO_EXTENSION);
$novoNome = md5(uniqid($imagem_News['name'])).".".$extensao;
$diretorio = "upload/";

move_uploaded_file($imagem_News['tmp_name'], $diretorio.$novoNome);


$comando = "INSERT INTO noticia(titulo_News, descr_News, ver, fonte, imagem_News) VALUES ('$titulo_News', '$descr_News', '$ver', '$fonte', '$novoNome')";

$cadastrarNoticia = mysqli_query($conexao, $comando);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/processa-cad-conteudo.css">
</head>
 
<body>
    <section class="container validacao-cadastro">
            <?php
                if ($cadastrarNoticia){
            ?>
                <div class="resultado-cadastro">
                        <i class="fa fa-check-circle"></i>
                        <p class="resultado">Noticia Cadastrado com Sucesso!</p>
                        <p class="info-home-new">Volte para a pagina principal ou cadastre uma nova noticia.</p>
                        <div class="btn-home-new">
                            <button>
                                <a href="?p=main">Inicio</a>
                            </button>
                            <button>
                                <a href="?p=cad_News">+ News</a>
                            </button>
                        </div>
                    </div>
            <?php
                }else{
            ?>
                    <div class="resultado-cadastro">
                        <i class="fa fa-times-circle"></i>
                        <p class="resultado">Não foi possível cadastrar a Noticia!</p>
                        <p class="info-home-new">Verifique as informações e tente novamente.</p>
                        <div class="btn-home-new">
                            <button>
                                <a href="?p=main">Inicio</a>
                            </button>
                            <button>
                                <a href="?p=cad_News">Cadastrar News</a>
                            </button>
                        </div>
                    </div>
            <?php
                };
            ?>
    </section>
</body>
</html>
