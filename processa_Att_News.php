<?php

    include('conexao.php');

    $id_news = $_POST['id_news'];
    $titulo_An = $_POST['titulo_News'];
    $fonte = $_POST['fonte'];
    $ver = $_POST['ver'];
    $imagem_News = $_POST['imagem_News'];
    $descr_News = $_POST['descr_News'];


    if($_FILES['imagem_News']['name'] == ""){

        $comando = "UPDATE noticia SET titulo_News = '$titulo_News', fonte = '$fonte', descr_News = '$descr_News', ver = '$ver', imagem_News = '$imagem_News' WHERE id_news = $id_news";

        
    }else{

        $imagem_News = $_FILES['imagem_News'];

        $extensao = pathinfo($imagem_News['name'], PATHINFO_EXTENSION);
        $novoNome = md5(uniqid($imagem_News['name'])).".".$extensao;
        $diretorio = "upload/";

        move_uploaded_file($imagem_News['tmp_name'], $diretorio.$novoNome);

        $comando = "UPDATE noticia SET titulo_News = '$titulo_News', fonte = '$fonte', descr_News = '$descr_News', ver = '$ver', imagem_News = '$novoNome' WHERE id_news = $id_news";

        
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