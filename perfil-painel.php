<?php
session_start();
include('conexao.php');
include('verifica_login.php');

$id_login = $_GET['id_login'];

$comando =  "SELECT nome FROM loginAdm WHERE id_login = $id_login";

$registros  = mysqli_query($conexao, $comando);

$linha = mysqli_fetch_assoc($registros);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
</head>
<body>

<section class="containerP">
        
        <div class="info-perfil">
            <span class="legenda-perfil">Bem vindo</span>
            <p><?=$linha['nome']?></p>
        </div>
        <div class="btn-perfil">
            <a href="?p=logout"><button class="btn-logout">Sair<button></a>
            <a href="?p=gerenciamento"><button><i class="fa fa-edit"></i>Gerenciamento</button></a>
        </div>
</section>

</body>
</html>
