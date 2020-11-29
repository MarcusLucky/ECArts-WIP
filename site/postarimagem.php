<?php
  include_once("../classes/usuario.php");
  include_once("conexao.php");

  $extensao=strtolower(substr($_FILES['postar']['name'], -4));
  $novo_nome=md5(time()).$extensao;

  $id = $_SESSION["imagens"]->getIdUsuario();

  $sql = "UPDATE imagens SET imagem = '$novo_nome' WHERE id_usuario = $id";  

  if($conexao->query($sql)) {
    move_uploaded_file($_FILES["postar"]["tmp_name"], "../uploads/posts/".$novo_nome);
    echo "funcionou";
  } 
  header("location: upload.php");
?>