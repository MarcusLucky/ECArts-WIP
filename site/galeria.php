<?php  
  include_once("../autenticate/autenticacao.php");
  include_once("conexao.php");
  $id = $_SESSION["usuario"]->getIdUsuario();
  $sql = "SELECT * FROM post WHERE id_usuario = $id";
  $result = $conexao->query($sql);
  $imagens = array();
  $imagens = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - Galeria</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/galeria.css">
</head>

<body>
  <?php  include("nav.php"); ?>
  <?php  include("aside.php"); ?>

  
  <div class="layout-index">
  <?php 
    if(sizeof($imagens) == 0) {
      echo "Sem fotos no momento";
    }
    foreach($imagens as $imagem) {
      echo'
      <div class="post">
          <img class="img-posted" src="../uploads/posts/'.$imagem['imagem'].'" alt="">
      </div>';
    }

  ?>
  </div>
</body>

<script src="../styles/main.js"></script>

</html>