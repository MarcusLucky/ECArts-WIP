<?php  
  include_once("../autenticate/autenticacao.php");
  include_once("conexao.php");

  $sql = "SELECT * FROM post ORDER BY avaliacao_img DESC";
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

    if(isset($_GET["sucesso"])) {
      echo  "<script>alert('Avaliação enviada com sucesso!');</script>";
    } else if (isset($_GET["erroEstrela"])) {
      echo  "<script>alert('Erro ao enviar avaliação! Selecione pelo menos uma estrela');</script>";
    }
  
    foreach($imagens as $imagem) {
      echo'
      <div class="post">
          <header>
            <img class="img-posted" src="../uploads/posts/'.$imagem['imagem'].'" alt="">
          </header>
          <article>
          <a href="Perfil.php?'.$imagem['id_usuario'].'" style="text-decoration: none">
            <img class="teste" src="../uploads/users/'.$imagem['foto_perfil'].'" alt""/>
          </a>
            '.$imagem['nome'].'
          </article>
          
          <p>'.$imagem['avaliacao_img'].' Estrelas</p>
      </div>';
    }

  ?>
 
</div>

</body>
<script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
<script src="../styles/main.js"></script>

</html> 