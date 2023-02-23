<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Repuestos Update </title>
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
				<h2> EDITAR REPUESTOS </h2> <br>
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
			<form method="post" action="gestion_repuestos_update_II.php">
			<table border="1" align="center">

				<tr><td>SELECT</td><td>REFERENCIA</td><td>DESCRIPCIÓN</td><td>IMPORTE</td><td>GANANCIA</td></tr>
				
				<?php
							
						$sql = "SELECT * FROM REPUESTOS ORDER BY Referencia";
						$consulta = $conexion->prepare($sql);
						$consulta->execute();
						$resultado = $consulta -> fetchAll();

							foreach ($resultado as $fila) {
								$referencia = $fila['Referencia'];
								$descripcion = $fila['Descripcion'];
								$importe = $fila['Importe'];
								$ganancia = $fila['Ganancia'];
								

								
							echo "<tr>";
							echo "<td><center><input type=radio name=editar value=$referencia></center></td>";
							echo "<td><center><b>$referencia</b></center></td>";
							echo "<td>$descripcion</td>";
							echo "<td>$importe</td>";
							echo "<td>$ganancia</td>";
							echo "</tr>";
							}

							?>
					
			</table>
			<br><input type="submit" value="Editar Repuesto Seleccionado">
		</form>
		</section>

	</main>

	<footer>
		<br><a href="cerrar_sesion.php"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>