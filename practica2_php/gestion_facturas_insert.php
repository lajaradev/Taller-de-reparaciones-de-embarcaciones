<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Facturas Insert </title>
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
				<h2> AÑADIR FACTURA  </h2> <br>
				<nav>
					<ul>
						<li><a href="gestion_facturas.php"> LISTA </a></li>
						<li><a href="gestion_facturas_insert.php"> AÑADIR  </a></li>
						<li><a href="gestion_facturas_delete.php"> ELIMINAR  </a></li>
						<li><a href="gestion_facturas_update.php"> EDITAR  </a></li>
					</ul>
				</nav>
			</section>
		<br>
			
		<section>

			<?php

			$sql = "SELECT Matricula FROM EMBARCACIONES";
			$consulta = $conexion->prepare($sql);
			$consulta->execute();
			$matriculas = $consulta->fetchAll();

	?>
			
			<form method="post" action="gestion_facturas_insert_II.php" enctype="multipart/form-data">
			
				Numero Factura: <input type="text" name="numero_factura"><br>
				Matricula: <select name="matricula">
							<?php 
								foreach ($matriculas as $matricula) {					
									echo "<option value='$matricula[0]'>$matricula[0]</option>";
								}
							?>			
							</select><br>
				Mano de Obra: <input type="text" name="mano_de_obra"><br>
				Precio Hora: <input type="text" name="precio_hora"><br>
				Fecha Emision: <input type="text" name="fecha_emision"><br>
				Fecha Pago: <input type="text" name="fecha_pago"><br>
				Bas Imponible: <input type="text" name="base_imponible"><br>
				IVA: <input type="text" name="iva"><br>
				Total: <input type="text" name="total"><br>
				
				
				<input type="submit" value="Introducir Facturas">
				<input type="reset" value="Borrar">
			</form>
		</section>

	</main>

	<footer>
		<a href="cerrar_sesion.php" align="center"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>