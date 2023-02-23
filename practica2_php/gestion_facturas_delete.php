<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Facturas Delete </title>
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
				<h2> ELIMINAR FACTURAS </h2> <br>
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
			<form method="post" action="gestion_facturas_delete_II.php">
			<table border="1" align="center">

				<tr><td>SELECT</td><td>NUM FACTURA</td><td>MATRICULA</td><td>MANO DE OBRA</td><td>PRECIO/HORA</td><td>PRECIO/EMISION</td><td>FECHA PAGO</td><td>BASE IMPONIBLE</td><td>IVA</td><td>TOTAL</td></tr>
				
				<?php
							
						$sql = "SELECT * FROM FACTURA ORDER BY Numero_Factura";
						$consulta = $conexion->prepare($sql);
						$consulta->execute();
						$resultado = $consulta -> fetchAll();

							foreach ($resultado as $fila) {
								$numero_factura = $fila['Numero_Factura'];
								$matricula = $fila['Matricula'];
								$mano_de_obra = $fila['Mano_de_Obra'];
								$precio_hora = $fila['Precio_Hora'];
								$fecha_emision = $fila['Fecha_Emision'];
								$fecha_pago = $fila['Fecha_Pago'];
								$base_imponible = $fila['Base_Imponible'];
					 			$iva = $fila['IVA'];
								$total = $fila['Total'];
								


								
							echo "<tr>";
							echo "<td><center><input type=checkbox name=borrar[] value=$numero_factura></center></td>";
							echo "<td><center><b>$numero_factura</b></center></td>";
							echo "<td>$matricula</td>";
							echo "<td>$mano_de_obra</td>";
							echo "<td>$precio_hora</td>";
							echo "<td>$fecha_emision</td>";
							echo "<td>$fecha_pago</td>";
							echo "<td>$base_imponible</td>";
							echo "<td>$iva</td>";
							echo "<td>$total</td>";
							echo "</tr>";
							}

							?>
					
			</table>

			<br><input type="submit" value="Eliminar Factura(s) Seleccionada(s)">
			<br><input type="reset" value="Deseleccionar todas">
			</form>
		</section>

	</main>

	<footer>
		<br><a href="cerrar_sesion.php"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>