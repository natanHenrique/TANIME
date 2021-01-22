<?php

    include('conexao.php');

    $id_anime = $_POST['id_anime'];
    $titulo_An = $_POST['titulo_An'];
    $link = $_POST['link'];
    $verMais = $_POST['verMais'];
    $eps_An = $_POST['eps_An'];
    $genero = $_POST['genero'];
    $imagem = $_POST['imagem'];
    $descr_An = $_POST['descr_An'];


    if($_FILES['imagem']['name'] == ""){

        $comando = "UPDATE anime SET id_genero = '$genero', titulo_An = '$titulo_An', link = '$link', eps_An = '$eps_An', descr_An = '$descr_An', verMais = '$verMais', imagem = '$imagem' WHERE id_anime = $id_anime";

        
    }else{

        $imagem = $_FILES['imagem'];

        $extensao = pathinfo($imagem['name'], PATHINFO_EXTENSION);
        $novoNome = md5(uniqid($imagem['name'])).".".$extensao;
        $diretorio = "upload/";

        move_uploaded_file($imagem['tmp_name'], $diretorio.$novoNome);

        $comando = "UPDATE anime SET titulo_An = '$titulo_An', eps_An = '$eps_An', descr_An = '$descr_An', id_genero = '$genero', verMais = '$verMais', imagem = '$novoNome' WHERE id_anime = $id_anime";

        
    }



    $atualizarConteudo = mysqli_query($conexao, $comando);

    if($atualizarConteudo){
        header('Location: ?p=gerenciamento');
    }else{

?>
    <section class="validacao-cadastro">
        <div class="resultado-cadastro">
            <i class="fas fa-times-circle"></i>
            <p class="resultado">Não foi possível atualizar o produto!</p>
            <p class="info-home-new">Verifique as informações e tente novamente.</p>
            <div class="btn-tentar-novamente">
                <button>
                    <a href="?p=gerenciamento">Tentar Novamente</a>
                </button>
            </div>
        </div>
    </section>






<?php
    }
?>