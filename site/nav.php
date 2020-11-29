<nav class="nav-main">
	<!-- <div class="btn-toggle-nav" onclick="toggleNav()"></div> -->
  <div class="btn-toggle-nav" onclick="toggleNav()">
    <img class="teste" src="../uploads/users/<?php echo $_SESSION["usuario"]->getFotoPerfil(); ?>" alt="">
  </div>
	<ul class="top">
			<li><a href="index.php">Principal</a></li>
			<li><a href="TopRating.php">Melhores Avaliados</a></li>
			<li class="help"><a href="help.php">Ajuda</a></li>
			<li class="abous"><a href="AboutUs.php">Sobre Nós</a></li>
	</ul>
</nav>