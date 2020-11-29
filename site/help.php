<?php  
  include_once("../autenticate/autenticacao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ECArts - Ajuda</title>

	<script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../styles/styles.css">
	<link rel="stylesheet" href="../styles/help.css">
</head>

<body>

<?php  include("nav.php"); ?>

    <?php  include("aside.php"); ?>
    
<div class="conteiner-externo">
        <h1 class="question">Podemos lhe Ajudar?</h1>
        <div class="conteiner-interno">
            <li>Principal:
                <br>
            <h2>No Principal, tem as ultimas postagens feita no site</h2>
        </li>
        <br>
        <br>
        <li>Melhores Avaliados:
            <br>
            <h2>No Melhores Avaliados, tem as iamgens com maior rating</h2>

        </li>
        <br>
        <br>
        <li>Ajuda:
            <br>
           <h2>No Ajuda, tem um pequeno texto falando sobre o site</h2>
        </li>
        <br>
        <br>
        <li>Sobre nós:
            <br>
           <h2>No Sobre Nós, tem um texto falando sobre os criadores do site, e o intuito</h2>
        </li>
        <br>
        <br>
        <li>Meu Perfil:
            <br>
           <h2>No meu perfil, tem suas informações para todos verem, e algumas fotos, na conta pessoal tem apenas informaçoes basicas</h2>
        </li>
        <br>
        <br>
        <li>Galeria
            <br>
           <h2>A Galeria, tem as iamgens que o profissional fez upload</h2>
        </li>
        <br>
        <br>
        <li>configurações:
            <br>
           <h2>No configuração, tem a possibilidade de modificar algumas informaçoes</h2>
        </li>
        <br>
        <br>
        <li>Sair
            <br>
           <h2>Saia do perfil atual</h2>
        </li>
        </div>
        <p> <input class="up back" type="button" value="voltar" onclick="history.back()"></p>
    </div>

</body>

<script src="../styles/main.js"></script>

</html>