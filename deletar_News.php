<?php

    include('conexao.php');


    $id_news = $_GET['id_news'];

    $comando = "DELETE FROM noticia WHERE id_news = $id_news";

    $deletarProd = mysqli_query($conexao, $comando);

    header('Location: ?p=gerenciamento');

?>