<!DOCTYPE html>
<html>

<head>
    <title>ECArts - Conta Profissional</title>
    <meta charset="utf-8" />
    <!--   <link href="ContatoEstilo.css" rel="stylesheet" media="all" />
    <script src="JavaScript1.js"></script>-->

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../styles/pessoal.css">
    <!--<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">-->
</head>
<script>

</script>
<script>
    function funcao() {
        alert("cadastro feito com sucesso");
    }
</script>

<body>


    <div class="root">
        <a href="index.php">
            <img src="../imagens/ecarts.png" alt="logo">
        </a>
    </div>

    <h1 class="Register-Text">Registra-se</h1>


    </div>

    <header class="layout-principal">

        <div class="principal">

            <div class="field">

                <form method="POST" action="processa.php" class="Layout-register">



                    <div class="name">
                        <label class="label-input icon-modify" for="">
                            <i class="far fa-user image-change"></i>
                            <label for="name">Nome Completo:</label>
                            <input type="text" name="name" placeholder="Nome" name="name" maxlength="40" required
                                autofocus>
                        </label>
                    </div>

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

                    <input type="submit" value="Registrar-se" class="btn">
            </div>

        </div>

        <div class="second-field">
            <h1 class="title">O que é uma Conta Pessoal? </h1><br><br><br><br><br><br><br>
            <h2 class="conteudo">
                Nessa conta o usuario tem o direito de visualizar as imagens postadas pelos
                Profissionais, Avaliar, e conversar com o profissional para contrata-lo
            </h2><br><br><br><br><br><br><br>

            <div class="change"> <a class="a-change" href=" ARegister.php">Conta Profissional</a></div>

        </div>

        

        </form>

        </div>


    </header>
</body>

</html>