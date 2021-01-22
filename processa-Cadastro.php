<?php

include('conexao.php');

$titulo_An = $_POST['titulo_An'];
$eps_An = $_POST['eps_An'];
$autor = $_POST['autor'];
$descr_An = $_POST['descr_An'];
$genero = $_POST['genero'];
$imagem = $_FILES['imagem'];
$link = $_POST['link'];
$verMais = $_POST['verMais'];


if(empty($titulo_An) || empty($eps_An) || empty($descr_An) || empty($imagem) || empty($verMais) || empty($link) || empty($autor)){
    header('?p=cad-An-Mg');
    exit();
}

$extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);
$novoNome = md5(uniqid($imagem['name'])).".".$extensao;
$diretorio = "upload/";

move_uploaded_file($imagem['tmp_name'], $diretorio.$novoNome);


$comando = "INSERT INTO anime(id_genero, titulo_An, eps_An, descr_An, link, verMais, autor, imagem) VALUES ('$genero', '$titulo_An', '$eps_An', '$descr_An', '$link', '$verMais', '$autor', '$novoNome')";

$cadastrarConteudo = mysqli_query($conexao, $comando);

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
                if ($cadastrarConteudo){
            ?>
                <div class="resultado-cadastro">
                        <i class="i" class="fa fa-check-circle"></i>
                        <p class="resultado">Conteudo Cadastrado com Sucesso!</p>
                        <p class="info-home-new">Volte para a pagina principal ou cadastre um novo conteudo.</p>
                        <div class="btn-home-new">
                            <button class="btn">
                                <a class="a" href="?p=main">Inicio</a>
                            </button>
                            <button class="btn">
                                <a class="a" href="?p=cad-An-Mg">+Conteudo</a>
                            </button>
                        </div>
                    </div>
            <?php
                }else{
            ?>
                    <div class="resultado-cadastro">
                        <i class="i" class="fa fa-times-circle"></i>
                        <p class="resultado">Não foi possível cadastrar o Conteudo!</p>
                        <p class="info-home-new">Verifique as informações e tente novamente.</p>
                        <div class="btn-home-new">
                            <button class="btn">
                                <a class="a" href="?p=main">Inicio</a>
                            </button>
                            <button class="btn">
                                <a class="a" href="?p=cad-An-Mg">Cadastrar</a>
                            </button>
                        </div>
                    </div>
            <?php
                };
            ?>
    </section>
</body>
</html>
