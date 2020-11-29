<?php  
  include_once("../autenticate/autenticacao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - Upload</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/upload.css">
</head>

<body>
    <?php  include("nav.php"); ?>
    <?php  include("aside.php"); ?>
    
    <div class="layout-upload">
        <h1>FAÇA O UPLOAD DA IMAGEM</h1>
    <form method="POST" action="salvarImagempost.php"  enctype="multipart/form-data" class="form-enviar">
			<p><input class="up chage-image" type="file" name="image" value="Troca de imagem" required></p>
			<button type="submit" class="salvar">
			<i class="fas fa-share-square"></i>
			Salvar Imagem
			</button>
    </form>
    </div>

</body>

<script src="../styles/main.js"></script>

</html>