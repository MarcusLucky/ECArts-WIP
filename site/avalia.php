<?php
	include_once("conexao.php");

	if($_POST["estrela"] == '') {
		die(header("location: index.php?erroEstrela"));
	}

	$id = $_POST["id"];
	$estrela = $_POST["estrela"];
	$avaliacao = $_POST["estrelas"];

	$result = $estrela + $avaliacao;

	$sql = "UPDATE imagem SET avaliacao_img = $result WHERE id_img = $id";
	$conexao->query($sql);
	$conexao->close();

	// echo $sql;
	die(header("location: index.php?sucesso"));
?>