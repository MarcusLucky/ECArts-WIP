<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - Meu Perfil</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/login.css">

</head>
<script>

</Script>

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

    <form action="processalogin.php" method="POST">

        <h1>Entrar na Conta</h1>

        
        <legend>
        <div class="email">
            <label class="label-input icon-modify" for="">
                <i class="fas fa-envelope image-change"></i>
                <label for="Email">Email:</label>
                <input type="text" placeholder="Email" name="email" required>
             </label>
        </div>

        <div class="Password">
            <label class="label-input icon-modify" for="">
                <i class="fas fa-lock image-change"></i>
                <label for="Password">Senha:</label>
                <input type="password" name="password" placeholder="Senha" name="password" required>
            </label>
        </div>

        </legend>


        <button type="submit" value="validar" class="sing-in">
        <i class="fas fa-sign-in-alt"></i>
           Entrar
        </button><br><br>

        <a class="register" href="PRegister.php">Ainda não tem conta?</a>
    </form>
    </div>
</body>

<script src="../styles/main.js"></script>

</html>