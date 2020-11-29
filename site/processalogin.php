<?php 
  include_once("conexao.php");

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

      $_SESSION["usuario"]["id_usuario"] = $outp[0]['id_usuario'];
      $_SESSION["usuario"]["nome"] = $outp[0]['nome'];
      $_SESSION["usuario"]["email"] = $outp[0]['email'];
      $_SESSION["usuario"]["senha"] = $outp[0]['senha'];
      $_SESSION["usuario"]["telefone"] = $outp[0]['telefone'];
	  
	    echo $_SESSION["usuario"]["id_usuario"];
	    echo $_SESSION["usuario"]["nome"];
	    echo $_SESSION["usuario"]["email"];
	    echo $_SESSION["usuario"]["senha"];
	    echo $_SESSION["usuario"]["telefone"];


      print_r($_SESSION);
      //print_r($outp[0]);
      echo "<br>";
      header("location: index.php");
    } else {
      header("location: login.php");
	  echo "a";
    }



  // $_SESSION["usuario"]["id"] = $outp[0]['id'];

  // echo json_encode($outp);
?>