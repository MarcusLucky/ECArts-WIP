<?php  
  include_once("../autenticate/autenticacao.php");
?>

<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<title> ECArts - Configuração </title>
	<h1 align="center"> config </h1>

	<script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../styles/styles.css">
	<link rel="stylesheet" href="../styles/config.css">
</head>

<Script>
	function voltar() {

	}
</Script>

<body>


	<?php  include("nav.php"); ?>
	<?php  include("aside.php"); ?>


	<div class="up-div">

		<form method="POST" action="salvarImagem.php"  enctype="multipart/form-data">
			<p><input class="up chage-image" type="file" name="image" value="Troca de imagem" required></p>
			<button type="submit" class="salvar">
			<i class="fas fa-share-square"></i>
			Salvar Imagem

			</button>
		</form>	

		<p><Button class="up delete-perfil" onclick="Apagar">
		<i class="fas fa-trash-alt"></i>
		Apagar conta
		</button>
			
	</div>
	<form class="dados" method="POST" action="processa.php">
		<table class="table-dados" align="center"  width="600" height="300">
			<tr>
				<th align="left"> Dados Pessoais</th>
			</tr>
			<tr>
				<td align="right"> Nome: </td>
				<td> <input class="input-form" type="text" required="" name="nome" size="30" placeholder="Nome completo"
						maxlength="40"  value="<?php echo $_SESSION["usuario"]->getNome(); ?>"> </td>
			</tr>

			<tr>
				<td align="right"> senha:</td>
				<td><input class="input-form password" type="password" name="password" size="30" maxlength="8" value="<?php echo $_SESSION["usuario"]->getSenha(); ?>" /> </td>
			</tr>

			<tr>
				<td align="right"> Tel:</td>
				<td><input class="input-form" type="text" size="30" name="telefone" value="<?php echo $_SESSION["usuario"]->getTelefone(); ?>"/> </td>
			</tr>

			<tr>
				<td align="right"> E-Mail:</td>
				<td><input class="input-form" type="text" name="email" value="<?php echo $_SESSION["usuario"]->getEmail(); ?>" size="30"/></td>
			</tr>
		</table>

		<p align="center">
			<br />
			<label>
				<input class="button save" type="submit" name="Enviar" value="Salvar" />
			</label>

			<label>
				<input class="button clear" type="reset" name="limpar" value="Limpar Campos" />
			</label>
	</form>
</body>

<script src="../styles/main.js"></script>

</html>