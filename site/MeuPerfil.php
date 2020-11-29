<?php
    session_start();
    
    print_r($_SESSION);
    if(!isset($_SESSION["usuario"])){
        header("location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - Principal</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/myprofile.css">
</head>

<body>

<nav class="nav-main">
        <div class="btn-toggle-nav" onclick="toggleNav()"></div>
        <ul class="top">
            <li><a href="index.php">Principal</a></li>
            <li><a href="TopRating.php">Melhores Avaliados</a></li>
            <li class="help"><a href="help.php">Ajuda</a></li>
            <li class="abous"><a href="AboutUs.php">Sobre Nós</a></li>
        </ul>
    </nav>

    <?php  include("aside.php"); ?>
<!-- -------------------------------------------------------------------------------------------- -->

    <h1 class="myprofileTitle">Meu Perfil</h1>

    <div class="LayoutProfile">
        
    <label class="imgProfile">
        <input type="file" name="image" required />
    </label>

    <label class="indProfile">
    <h1><?php echo $_SESSION["usuario"]["nome"]; ?></h1>
    <h3>ID: <?php echo $_SESSION["usuario"]["id_usuario"]; ?></h3>

    </label>

    <form method="POST" action="processa.php" enctype="multipart/form-data" class="star">
            <div class="estrelas">
                <input type="radio" id="vazio" name="estrela" value="" checked>

                <label for="estrela_um"><i class="fa"></i></label>
                <input type="radio" id="estrela_um" name="estrela" value="1">

                <label for="estrela_dois"><i class="fa"></i></label>
                <input type="radio" id="estrela_dois" name="estrela" value="2">

                <label for="estrela_tres"><i class="fa"></i></label>
                <input type="radio" id="estrela_tres" name="estrela" value="3">

                <label for="estrela_quatro"><i class="fa"></i></label>
                <input type="radio" id="estrela_quatro" name="estrela" value="4">

                <label for="estrela_cinco"><i class="fa"></i></label>
                <input type="radio" id="estrela_cinco" name="estrela" value="5"><br>

                <input type="submit" value="Avaliar" class="btn-avaliar">
                <br>
                Media de Rating
            </div>
        </form>

    <input type="button" value="Conversar" class="btn-whatsapp">

    </div>

    <div class="LayoutProfile-2">

        <label class="SocialMidia">

        <h1 class="profissao">Profissão:</h1>
        <h1 class="telefone">Whatsapp: <?php echo $_SESSION["usuario"]["telefone"]; ?></h1>

        </label>

    </div>



</body>

<script src="../styles/main.js"></script>

</html>