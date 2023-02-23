<!DOCTYPE html>
<html>

<head>
	<title> Cerrar Sesion </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<header>
		<section class="cabecera">
			<img class="logo" src="img/barco.png">
			<h1> TALLER EMBARCACIONES LAJARA </h1>
			<a class="admin" href="menu_inicial.php"> INICIO </a>
			
		</section>
			
	</header>

	<main>
		<h1>Cerrar sesión</h1>

		<?php
			session_start();
			session_destroy();

			echo "<p>Se ha cerrado la sesión</p>";
		?>
	</main>

</body>
</html>

