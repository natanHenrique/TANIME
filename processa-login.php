<?php
session_start();
include('conexao.php');
require_once('conexao.php');
if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location:?p=login');
	exit();
}

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$query = "SELECT id_login, nome FROM loginAdm WHERE nome = '$nome' AND senha = md5('$senha')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

$registros  = mysqli_query($conexao, $query);

$linha = mysqli_fetch_assoc($registros);

if($row == 1){
	$_SESSION['nome'] = $nome;
	header('Location: ?p=perfil-painel&id_login='.$linha['id_login']);
} else {
	header('Location: ?p=login');
	exit();
}
