
<?php
    include('conexao.php');
    
    $titulo_An = $_POST['titulo_An'];
?>

<!DOCTYPE html>
<html lang=pt-BR>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pesquisar.css">
</head>
<body>
    
        <?php
            if($titulo_An){
                $titulo_An = filter_input(INPUT_POST, 'titulo_An', FILTER_SANITIZE_STRING);
                $result_conteudo = "SELECT * FROM anime WHERE titulo_An LIKE '%$titulo_An%'";
                $resultado_conteudo = mysqli_query($conexao, $result_conteudo);
                while($linha = mysqli_fetch_assoc($resultado_conteudo)){
                    ?>
                        <div class="conteudo">
                            <div class="info">
                                <a href="?p=desc-An-Mg&id_anime=<?=$linha['id_anime']?>"><img class="imagen" src="upload/<?=$linha['imagem']?>" alt="imagemCapa"></a>
                                <span class="nomeC"><?=$linha['titulo_An']?></span>
                            </div>
                        </div>
                    <?php    
                }
            } else{
                ?>
                    <section class="container validacao-cadastro">
                        <div class="resultado-cadastro">
                            <i class="fa fa-times-circle"></i>
                            <p class="resultado">Não foi possível encontrar nenhum conteudo!</p>
                            <p class="info-home-new">Verifique as informações e tente novamente.</p>
                            <div class="btn-tentar-novamente">
                                <button>
                                    <a href="?p=">Tentar Novamente</a>
                                </button>
                            </div>
                        </div>
                    </section>
                <?php
            }
		?>
</body>
</html>