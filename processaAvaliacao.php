<?php
session_start();
include_once("conexao.php");
$id_anime = $_GET['id_anime'];

$comando = "SELECT * FROM anime WHERE id_anime = $id_anime";

$detalharConteudo = mysqli_query($conexao, $comando);

$linha = mysqli_fetch_assoc($detalharConteudo);

if(!empty($_POST['estrela'])){
	$estrela = $_POST['estrela'];
	
	//Salvar no banco de dados
	$result_avaliacos = "INSERT INTO avaliacos (qnt_estrela, created) VALUES ('$estrela', NOW())";
	$resultado_avaliacos = mysqli_query($conexao, $result_avaliacos);
	
	if(mysqli_insert_id($conexao)){
		$_SESSION['msg'] = "Agradecemos sua Avaliação";
		header("Location: index.php");
	}else{
		$_SESSION['msg'] = "Erro na avaliação";
		header("Location: index.php");
	}
	
}else{
	$_SESSION['msg'] = "Necessário selecionar pelo menos 1 estrela";
	header("Location: index.php");
}