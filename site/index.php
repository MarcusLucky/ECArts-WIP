<?php  
  include_once("../autenticate/autenticacao.php");
  include_once("conexao.php");

  $sql = "SELECT * FROM imagem";
  $result = $conexao->query($sql);
  $imagens = array();
  $imagens = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - Principal</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/index.css">
</head>

<body>
	<?php  include("nav.php"); ?>
	<?php  include("aside.php"); ?>

<div class="layout-index">

  <?php 
    foreach($imagens as $imagem) {
      echo'
      <div class="post">
          <header>
            <img class="img-posted" src="../uploads/posts/'.$imagem['imagem'].'" alt="">
          </header>
          <article>
            
          </article>
      </div>';
    }

  ?>
 
</div>

</body>

<script src="../styles/main.js"></script>

</html>