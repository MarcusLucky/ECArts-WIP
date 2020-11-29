<?php  
  include_once("../autenticate/autenticacao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - login</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/login.css">

</head>
<script>

</Script>

<body>

<div class="root">
        <a href="index.php">
            <img src="../imagens/ecarts.png" alt="logo">
        </a>
    </div>

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