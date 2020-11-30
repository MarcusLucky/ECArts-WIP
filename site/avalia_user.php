<?php
	include_once("conexao.php");

	if($_POST["estrela"] == '') {
		die(header("location: index.php?erroEstrela"));
	}

	$id = $_POST["id"];
	$estrela = $_POST["estrela"];
	$avaliacao = $_POST["estrelas"];

  $result = $estrela + $avaliacao;

	$sql = "UPDATE usuarios SET avaliacao_user = $result WHERE id_usuario = $id";
	$conexao->query($sql);
	$conexao->close();

	echo $sql;
	die(header("location: perfil.php?id=$id&sucesso"));
?>