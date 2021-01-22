<?php

    include('conexao.php');


    $id_anime = $_GET['id_anime'];

    $comando = "DELETE FROM anime WHERE id_anime = $id_anime";

    $deletarProd = mysqli_query($conexao, $comando);

    header('Location: ?p=gerenciamento');

?>