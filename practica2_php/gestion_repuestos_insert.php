<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Repuestos Insert </title>
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
				<h2> AÑADIR REPUESTOS  </h2> <br>
				<nav>
					<ul>
						<li><a href="gestion_repuestos.php"> LISTA </a></li>
						<li><a href="gestion_repuestos_insert.php"> AÑADIR  </a></li>
						<li><a href="gestion_repuestos_delete.php"> ELIMINAR  </a></li>
						<li><a href="gestion_repuestos_update.php"> EDITAR  </a></li>
					</ul>
				</nav>
			</section>
		<br>
			
		<section>

		
			
			<form method="post" action="gestion_repuestos_insert_II.php" enctype="multipart/form-data">
			
				Referencia: <input type="text" name="referencia"><br>
				Descripción: <input type="text" name="descripcion"><br>
				Importe: <input type="text" name="importe"><br>
				Ganancia: <input type="text" name="ganancia"><br>
				
				
				<input type="submit" value="Introducir Repuesto">
				<input type="reset" value="Borrar">
			</form>
		</section>

	</main>

	<footer>
		<a href="cerrar_sesion.php" align="center"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>