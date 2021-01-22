<?php

    include('conexao.php');

    $comando = "SELECT id_anime, titulo_An, imagem FROM anime";

    $listarConteudos = mysqli_query($conexao, $comando);

?>

    <section class="produtos">
        
        <?php
            while($linha = mysqli_fetch_assoc($listarConteudos)){
        ?>

        <div class="produto">
            <a href="?p=desc-An-Mg&id_anime=<?=$linha['id_anime']?>"><img src="upload/<?=$linha['imagem']?>" alt="imagemCapa"></a>
            <div class="infoProduto">
                <div class="nome-legenda">
                    <span class="nome-prod"><?=$linha['titulo_An']?></span>
                </div>
            </div>
        </div>

        <?php
            }
        ?>
    </section>