<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Embarcaciones Delete </title>
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
				<h2> ELIMINAR EMBARCACIONES </h2> <br>
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
			<form method="post" action="gestion_embarcaciones_delete_II.php">
			<table border="1" align="center">

				<tr><td>SELECT</td><td>MATRICULA</td><td>LONGITUD</td><td>POTENCIA</td><td>MOTOR</td><td>AÑO</td><td>COLOR</td><td>MATERIAL</td><td>ID CLIENTE</td><td>FOTOGRAFIA</td></tr>
				
				<?php
							
						$sql = "SELECT * FROM EMBARCACIONES ORDER BY Id_Cliente";
						$consulta = $conexion->prepare($sql);
						$consulta->execute();
						$resultado = $consulta -> fetchAll();

							foreach ($resultado as $fila) {
								$matricula = $fila['Matricula'];
								$longitud = $fila['Longitud'];
								$potencia = $fila['Potencia'];
								$motor = $fila['Motor'];
								$año = $fila['Año'];
								$color = $fila['Color'];
					 			$material = $fila['Material'];
								$id_cliente = $fila['Id_Cliente'];
								$foto = $fila['Fotografia'];

								$imagen = basename(tempnam(getcwd()."/temporales","temp"));
								$imagen .= ".jpg";
								$fichero = fopen("./temporales/".$imagen, "w");
								fwrite($fichero, $foto);
								fclose($fichero);

								
							echo "<tr>";
							echo "<td><center><input type=checkbox name=borrar[] value=$matricula></center></td>";
							echo "<td><center><b>$matricula</b></center></td>";
							echo "<td>$longitud</td>";
							echo "<td>$potencia</td>";
							echo "<td>$motor</td>";
							echo "<td>$año</td>";
							echo "<td>$color</td>";
							echo "<td>$material</td>";
							echo "<td>$id_cliente</td>";
							echo "<td><center><a href = temporales/$imagen><img src = temporales/$imagen width=50 border=0></a></center></td>";
							echo "</tr>";
							}

							?>
					
			</table>

			<br><input type="submit" value="Eliminar Embarcacion(es) Seleccionada(s)">
			<br><input type="reset" value="Deseleccionar todos">

			</form>

		</section>

	</main>

	<footer>
		<br><a href="cerrar_sesion.php"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>