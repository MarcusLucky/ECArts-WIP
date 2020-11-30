<?php  
  include_once("../autenticate/autenticacao.php");
  include_once("conexao.php");

  $sql = "SELECT * FROM post";
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
            <img class="img-perfil" src="../uploads/users/'.$imagem['foto_perfil'].'" alt""/>
          </a>
            <h1 class="nome-post">'.$imagem['nome'].'<h1>
          </article>
          <footer>
            <form method="POST" action="avalia.php" enctype="multipart/form-data" class="star">
              <div class="estrelas">
                <input type="radio" id="vazio" name="estrela" value="" checked>

                <label for="estrela_um'.$imagem['id_img'].'"><i class="fa"></i></label>
                <input type="radio" id="estrela_um'.$imagem['id_img'].'" name="estrela" value="1">

                <label for="estrela_dois'.$imagem['id_img'].'"><i class="fa"></i></label>
                <input type="radio" id="estrela_dois'.$imagem['id_img'].'" name="estrela" value="2">

                <label for="estrela_tres'.$imagem['id_img'].'"><i class="fa"></i></label>
                <input type="radio" id="estrela_tres'.$imagem['id_img'].'" name="estrela" value="3">

                <label for="estrela_quatro'.$imagem['id_img'].'"><i class="fa"></i></label>
                <input type="radio" id="estrela_quatro'.$imagem['id_img'].'" name="estrela" value="4">

                <label for="estrela_cinco'.$imagem['id_img'].'"><i class="fa"></i></label>
                <input type="radio" id="estrela_cinco'.$imagem['id_img'].'" name="estrela" value="5">

                <input type="hidden" name="id" value="'.$imagem['id_img'].'" />
                <input type="hidden" name="estrelas" value="'.$imagem['avaliacao_img'].'" />

                <input type="submit" value="Avaliar" class="btn-avaliar">
                </div>
              </form>
          </footer>
      </div>';
    }

  ?>
 
</div>

</body>
<script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
<script src="../styles/main.js"></script>

</html>