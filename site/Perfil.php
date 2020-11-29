<?php  
  include_once("../autenticate/autenticacao.php");      
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - Perfil</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/profile.css">
</head>

<body>

<?php  include("nav.php"); ?>

    <?php  include("aside.php"); ?>
<!-- -------------------------------------------------------------------------------------------- -->
    <div class="LayoutProfile">
        

    <img class="img-profile" src="../uploads/users/<?php echo $_SESSION["usuario"]->getFotoPerfil(); ?>" alt="perfil">
    <!-- <label class="imgProfile">
        <input type="file" name="image" required />
    </label> -->

    <label class="indProfile">
    <h1><?php echo $_SESSION["usuario"]->getNome(); ?></h1>
    <h3>ID: <?php echo $_SESSION["usuario"]->getIdUsuario(); ?></h3>

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

        <h1 class="profissao">Profissão: <?php echo $_SESSION["usuario"]->getProfissao(); ?></h1>
        <h1 class="telefone">Whatsapp: <?php echo $_SESSION["usuario"]->getTelefone(); ?></h1>

        </label>


    

    </div>



</body>

<script src="../styles/main.js"></script>

</html>