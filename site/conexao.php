<?php 
	if(!isset($_SESSION)) {
		session_start();
	}

	$hostname = "localhost";
	$user = "root";
	$password = "";
	$database = "cadastro";
	$conexao = mysqli_connect($hostname, $user, $password, $database);

	if(!$conexao){
		print "Falha na conexao com Banco de Dados";
	}

?>