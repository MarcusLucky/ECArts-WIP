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
    <title>ECArts - Melhores Avaliados</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>

<?php  include("nav.php"); ?>

    <?php  include("aside.php"); ?>



</body>

<script src="../styles/main.js"></script>

</html>