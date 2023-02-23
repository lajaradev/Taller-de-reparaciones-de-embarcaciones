<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Embarcaciones Insert </title>
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
				<h2> AÑADIR EMBARCACIONES  </h2> <br>
				<nav>
					<ul>
						<li><a href="gestion_embarcaciones.php"> LISTA </a></li>
						<li><a href="gestion_embarcaciones_insert.php"> AÑADIR  </a></li>
						<li><a href="gestion_embarcaciones_delete.php"> ELIMINAR  </a></li>
						<li><a href="gestion_embarcaciones_update.php"> EDITAR  </a></li>
					</ul>
				</nav>
			</section>
		<br>
			
		<section>

			<?php
				$sql = "SELECT Id_Cliente, Nombre, Apellido1 FROM CLIENTES ORDER BY Id_Cliente";
				$consulta = $conexion->prepare($sql);
				$consulta->execute();
				$clientes = $consulta->fetchAll();
			?>
				
			<form method="post" action="gestion_embarcaciones_insert_II.php" enctype="multipart/form-data">
			
				Matricula: <input type="text" name="matricula"><br>
				Longitud: <input type="text" name="longitud"><br>
				Potencia: <input type="text" name="potencia"><br>
				Motor: <input type="text" name="motor"><br>
				Año: <input type="text" name="año"><br>
				Color: <input type="text" name="color"><br>
				Material: <input type="text" name="material"><br>
				ID Cliente: <select name="id_cliente">
							<?php 
								foreach ($clientes as $cliente) {
									$id_cliente = $cliente['Id_Cliente'];
									$nombre = $cliente['Nombre'].' '.$cliente['Apellido1'];

									echo "<option value='$id_cliente'>$nombre</option>";
								}
							?>
							</select><br>			
				Fotografia:	<input type="file" name="foto"><br><br>
				
				<input type="submit" value="Introducir Embarcacion">
				<input type="reset" value="Borrar">
			</form>
		</section>

	</main>

	<footer>
		<a href="cerrar_sesion.php" align="center"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>