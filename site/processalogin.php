<?php 
  include_once("conexao.php");
  include_once("../classes/usuario.php");

  if(!$conexao){
    echo "Falha na conexao com Banco de Dados";
  }
  $email = $_POST["email"];
  $senha = $_POST["password"];

  $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha = '$senha'";
  $result = $conexao->query($sql);


    $outp = array();
    $outp = $result->fetch_all(MYSQLI_ASSOC);

    if(!empty($outp)) {
      $_SESSION["usuario"] = new Usuario($outp[0]['id_usuario'], $outp[0]['nome'], $outp[0]['email'], $outp[0]['senha'], $outp[0]['telefone'], $outp[0]['foto_perfil'], $outp[0]['profissao'], $outp[0]['avalicao_user']);
      
      echo "<br>";
      header("location: index.php");
    } else {
      header("location: login.php");
	  echo "a";
    }

?>