<?php  
  
  include_once("conexao.php");

  $nome = $_POST["nome"];
  $senha = $_POST["password"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $profissao = $_POST["profession"];

  $sql = "INSERT INTO usuarios(nome, email, senha, telefone, profissao ) VALUES ('$nome', '$email', '$senha', '$telefone', '$profissao')";

  if (mysqli_query($conexao, $sql)) {
    echo "New record created successfully";
	header("location: login.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
  header("location: ARegister.php");
  }

  mysqli_close($conexao);

  


?>