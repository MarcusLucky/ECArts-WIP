<?php
  include_once("../classes/usuario.php");
  include_once("conexao.php");

  $extensao=strtolower(substr($_FILES['image']['name'], -4));
  $novo_nome=md5(time()).$extensao;

  $id = $_SESSION["usuario"]->getIdUsuario();

  $sql = "INSERT INTO imagem(imagem, id_usuario) VALUES ('$novo_nome', $id)";  

  if($conexao->query($sql)) {
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/posts/".$novo_nome);
    $_SESSION["usuario"]->setFotoPerfil($novo_nome);
    echo "funcionou";
  } 
  header("location: upload.php");
?>