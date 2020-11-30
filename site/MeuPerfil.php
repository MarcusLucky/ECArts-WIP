<?php  
    include_once("../autenticate/autenticacao.php");      
    include_once("conexao.php");

    $id = $_SESSION["usuario"]->getIdUsuario();

    $sql = "SELECT * FROM post where id_usuario = $id";
    $result = $conexao->query($sql);
    $imagens = array();
    $imagens = $result->fetch_all(MYSQLI_ASSOC);

    $sql = "SELECT * FROM usuarios where id_usuario = $id";
    $result = $conexao->query($sql);
    $usuario = array();
    $usuario = $result->fetch_all(MYSQLI_ASSOC);
    $usuario = $usuario[0];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - Meu Perfil</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/MeuPerfil.css">
</head>

<body>

<?php  include("nav.php"); ?>

    <?php  include("aside.php"); ?>
<!-- -------------------------------------------------------------------------------------------- -->
    <div class="LayoutProfile">
        

    <img class="img-profile" src="../uploads/users/<?php echo $usuario["foto_perfil"] ?>" alt="perfil">

    <label class="indProfile">
    <h1><?php echo $usuario["nome"] ?></h1>
    <h3>ID: <?php echo $usuario["id_usuario"] ?></h3>
    
    </label>


    <button class="edit btn-edit">
    <a href="config.php" class="edit a-edit">
    <i class="fas fa-pen"></i>
        </a>
    </button>

   <h1 class="star-rating"><i class="fas fa-star"></i><?php echo $usuario["avaliacao_user"] ?></h1>

    </div>

    <div class="LayoutProfile-2">

        <label class="SocialMidia">

        <h1 class="profissao">Profissão: <?php echo $usuario["profissao"] ?></h1>
        <h1 class="telefone">Whatsapp: <?php echo $usuario["telefone"] ?></h1>

        </label>

<div class="layout-img">
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

    </div>



</body>

<script src="../styles/main.js"></script>

</html>