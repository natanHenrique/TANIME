
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel.css">
</head>
<body>
    
<?php
    include('conexao.php');

    $comando = "SELECT id_anime, titulo_An, id_genero, imagem FROM anime";

    $listarConteudosCad = mysqli_query($conexao, $comando);

?>

            <section class="containerG">
               
                    <div class="alteracao">
                        
                    <div class="tituloAdd">
                        <h2>Conteudos Cadastrados</h2>
                        <a href="?p=cad-An-Mg"><i class="fa fa-plus-square"></i></a>
                    </div>

                    <div class="legendaCadastrados">

                        <div class="legenda-foto">
                            <span>Foto</span>
                        </div>

                        <div class="legenda-categoria">
                            <span>Titulo</span>
                        </div>

                        <div class="legenda-categoria">
                            <span>genero</span>
                        </div>

                        <div class="legenda-editar-excluir">
                            <span>Editar</span>
                        </div>
                        <div class="legenda-editar-excluir">
                            <span>Excluir</span>
                        </div>

                    </div>

                    <?php
                        while($linha = mysqli_fetch_assoc($listarConteudosCad)){
                    ?>
                        <div class="conteudoCadastrado">

                            <div class="conteudo-cadastrado-foto">
                                <img src="upload/<?=$linha['imagem']?>" alt="anime/manga">
                            </div>

                            <div class="legenda-nome">
                                <span><?=$linha['titulo_An']?></span>
                            </div>

                            <div class="legenda-nome">
                                <span><?=$linha['id_genero']?></span>
                            </div>
                            
                            
                            <div class="legenda-nome">
                                <button class="btnB">
                                    <a href="?p=atualizar-conteudo&id_anime=<?=$linha['id_anime']?>"><i class="fa fa-edit"></i></a>
                                    </button>
                            </div>
                            <div class="legenda-nome">    
                                <button class="btnB">
                                    <a href="?p=deletar-conteudo&id_anime=<?=$linha['id_anime']?>"><i class="fa fa-trash"></i></a>
                                    </button>
                            </div>
                            
                        <?php
                            }
                        ?>

                    </div>
                </div>
            </section>    
            
        <?php
            include('conexao.php');

            $comandoNews = "SELECT id_news, titulo_News, imagem_News FROM noticia";

            $listarCadNews = mysqli_query($conexao, $comandoNews);

        ?>

            <section class="containerG">
               
               <div class="alteracao">
                   
               <div class="tituloAdd">
                   <h2>Noticias Cadastradas</h2>
                   <a href="?p=cad_News"><i class="fa fa-plus-square"></i></a>
               </div>

               <div class="legendaCadastrados">

                   <div class="legenda-foto">
                       <span>Foto</span>
                   </div>

                   <div class="legenda-categoria">
                       <span>Titulo</span>
                   </div>

                   <div class="legenda-editar-excluir">
                       <span>Editar</span>
                   </div>
                   <div class="legenda-editar-excluir">
                       <span>Excluir</span>
                   </div>

               </div>

               <?php
                   while($linhaNews = mysqli_fetch_assoc($listarCadNews)){
               ?>
                   <div class="conteudoCadastrado">

                       <div class="conteudo-cadastrado-foto">
                           <img src="upload/<?=$linhaNews['imagem_News']?>" alt="news">
                       </div>

                       <div class="legenda-nome">
                           <span><?=$linhaNews['titulo_News']?></span>
                       </div>
                       
                       <div class="legenda-nome">
                           <button class="btnB">
                               <a href="?p=atualizar_News&id_news=<?=$linhaNews['id_news']?>"><i class="fa fa-edit"></i></a>
                               </button>
                       </div>
                       <div class="legenda-nome">    
                           <button class="btnB">
                               <a href="?p=deletar_News&id_news=<?=$linhaNews['id_news']?>"><i class="fa fa-trash"></i></a>
                               </button>
                       </div>
                       
                   <?php
                       }
                   ?>

                   </div>
           </div>
       </section> 
    </body>
</html>

