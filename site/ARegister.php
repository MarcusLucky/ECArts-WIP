
<!DOCTYPE html>
<html>

<head>
    <title>ECArts - Conta Profissional</title>
    <meta charset="utf-8" />
    <!--   <link href="ContatoEstilo.css" rel="stylesheet" media="all" />
    <script src="JavaScript1.js"></script>-->

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/profissional.css">
    <!--<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">-->
</head>

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

                <form action="processa.php" method="POST">



                    <div class="name">
                        <label class="label-input icon-modify" for="">
                            <i class="far fa-user image-change"></i>
                            <label for="nome">Nome Completo:</label>
                            <input type="text" name="nome" placeholder="Nome" maxlength="50" required
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

                    <div class="Cellphone">

                        <label class="label-input icon-modify" for="">
                            <i class="fab fa-whatsapp"></i>
                            <label for="telefone">Whatsapp:</label>
                            <input type="text" name="telefone" placeholder="+55(DDD)999999999" name="whatsapp" required>
                        </label>

                    </div>

                    <div class="profission">
                        <label class="label-input icon-modify profession-modify" for="">
                            <i class="fas fa-toolbox"></i>
                            <label for="label-profession"> Profissão:

                                <select name="profession">
                                    <option>Selecione:</option>
                                    <option value="artist">Artista</option>
                                    <option value="photographer">Fotógrafo(a)</option>
                                    <option value="illustrator">Ilustrador(a)</option>
                                    <option value="web-disigner">Web-Designer</option>
                                </select>
                            </label>
                        </label>
                    </div>

                    <input type="submit" value="Registrar-se" class="btn">

            </div>

        </div>

        <div class="second-field">
            <h1 class="title">O que é uma Conta Profissional? </h1><br><br><br><br><br>
            <h2 class="conteudo">
                Com essa conta você pode postar suas obras/fotos no site
                para que todos possam ver e avaliar, podendo até mesmo
                ganhar seu reconhecimento e contratos.
            </h2><br><br><br><br><br><br>

            <div class="change"> <a class="a-change" href=" PRegister.php">Conta Pessoal</a></div>

        </div>

        

        </form>

        </div>
		


    </header>
</body>

</html>