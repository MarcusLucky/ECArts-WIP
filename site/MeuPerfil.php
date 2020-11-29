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
    <link rel="stylesheet" href="../styles/MeuPerfil.css">
</head>

<body>

<?php  include("nav.php"); ?>

    <?php  include("aside.php"); ?>
<!-- -------------------------------------------------------------------------------------------- -->
    <div class="LayoutProfile">
        

    <img class="img-profile" src="../uploads/users/<?php echo $_SESSION["usuario"]->getFotoPerfil(); ?>" alt="perfil">

    <label class="indProfile">
    <h1><?php echo $_SESSION["usuario"]->getNome(); ?></h1>
    <h3>ID: <?php echo $_SESSION["usuario"]->getIdUsuario(); ?></h3>
    
    </label>


    <button class="edit btn-edit">
    <a href="config.php" class="edit a-edit">
    <i class="fas fa-pen"></i>
        </a>
    </button>

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