<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Clientes Insert </title>
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
		<section>
				<h2> AÑADIR CLIENTES  </h2> <br>
				<nav>
					<ul>
						<li><a href="gestion_clientes.php"> LISTA </a></li>
						<li><a href="gestion_clientes_insert.php"> AÑADIR  </a></li>
						<li><a href="gestion_clientes_delete.php"> ELIMINAR  </a></li>
						<li><a href="gestion_clientes_update.php"> EDITAR  </a></li>
					</ul>
				</nav>
			</section>
		<br>
			
		<section>

		
			
			<form method="post" action="gestion_clientes_insert_II.php" enctype="multipart/form-data">
			
				DNI: <input type="text" name="dni"><br>
				Nombre: <input type="text" name="nombre"><br>
				Apellido 1: <input type="text" name="apellido1"><br>
				Apellido 2: <input type="text" name="apellido2"><br>
				Direccion: <input type="text" name="direccion"><br>
				C.P: <input type="text" name="cp"><br>
				Población: <input type="text" name="poblacion"><br>
				Provincia: <input type="text" name="provincia"><br>
				Teléfono: <input type="text" name="telefono"><br>
				Email: <input type="text" name="email"><br>
				Fotografia:	<input type="file" name="foto"><br><br>
				
				<input type="submit" value="Introducir Cliente">
				<input type="reset" value="Borrar">
			</form>
		</section>

	</main>

	<footer>
		<a href="cerrar_sesion.php" align="center"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>