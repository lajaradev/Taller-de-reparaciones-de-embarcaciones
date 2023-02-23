<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include("eliminar_temporales.php");
?>


<!DOCTYPE html>
<html>

<head>
	<title> Taller Embarcaciones Consultas Clientes </title>
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
				<h2> PÁGINA DE INICIO ADMINISTRADOR </h2> <br>
				<nav>
					<ul>
						<li><a href="gestion_clientes.php"> GESTIÓN DE CLIENTES </a></li>
						<li><a href="gestion_embarcaciones.php"> GESTIÓN DE EMBARCACIONES  </a></li><br>
						<li><a href="gestion_repuestos.php"> GESTIÓN DE REPUESTOS  </a></li>
						<li><a href="gestion_facturas.php"> GESTIÓN DE FACTURAS  </a></li><br>
						<li><a href="consultas_clientes.php"> CONSULTAS CLIENTES  </a></li>
						<li><a href="consultas_facturas.php"> CONSULTAS FACTURAS  </a></li>
					</ul>
				</nav>
			</section>
		<br>
				
		<section>
					<h2> CONSULTAS DE CLIENTES </h2>

				<form method="post" action="consultaS_clientes_II.php">

					Nombre:     <input type="text" name="nombre"><br>
					Apellido 1: <input type="text" name="apellido1"><br>
					Apellido 2: <input type="text" name="apellido2"><br>
					Población:  <input type="text" name="poblacion"><br>
					Provincia:	<input type="text" name="provincia"><br>
					Teléfono:   <input type="number" name="telefono"><br><br>
		
		
	
					<input type="submit" value="Consultar Clientes"><br>
					<input type="reset" value="Borrar"><br>

				</form>	

		</section>
	</main>

	<footer>
		<a href="cerrar_sesion.php" align="center"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>