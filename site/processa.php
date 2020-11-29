<?php  
  include_once("../classes/usuario.php");
  include_once("conexao.php");

  $nome = $_POST["nome"];
  $senha = $_POST["password"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  
  if(isset($_SESSION["usuario"])) {
    $id = $_SESSION["usuario"]->getIdUsuario();

    $sql = "UPDATE usuarios SET nome = '$nome', senha = '$senha', telefone = '$telefone', email = '$email' WHERE id_usuario = $id";
    
    if(mysqli_query($conexao, $sql)) {
      $_SESSION["usuario"]->setNome($nome);
      $_SESSION["usuario"]->setSenha($senha);
      $_SESSION["usuario"]->setTelefone($telefone);
      $_SESSION["usuario"]->setEmail($email);
    } 
    header("location: config.php");
    
  } else {
    $profissao = $_POST["profession"];

    $sql = "INSERT INTO usuarios(nome, email, senha, telefone, profissao ) VALUES ('$nome', '$email', '$senha', '$telefone', '$profissao')";

    if (mysqli_query($conexao, $sql)) {
      header("location: login.php");
    } else {
      header("location: ARegister.php");
    }
  }
  mysqli_close($conexao);
?>