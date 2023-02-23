<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include("eliminar_temporales.php");
?>


<!DOCTYPE html>
<html>

<head>
	<title> Taller Embarcaciones Consultas Facturas II </title>
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
				<h2> CONSULTAS FACTURAS II </h2>



				<h5>FACTURAS EMITIDAS</h5>

				<table border="1" align="center">

				<tr><td>NUM FACTURA</td><td>MATRICULA</td><td>MANO DE OBRA</td><td>PRECIO/HORA</td><td>FECHA/EMISION</td><td>FECHA/PAGO</td><td>BASE IMPONIBLE</td><td>IVA</td><td>TOTAL</td></tr>

			<?php 

					$sql = "SELECT * FROM FACTURA WHERE 1 = 1";

					if(isset($_POST["fecha_emitida_1"]) && isset($_POST["fecha_emitida_2"]))
						{
							$fecha_emitida_1 = $_POST["fecha_emitida_1"];
							$fecha_emitida_2 = $_POST["fecha_emitida_2"];

							$sql .= " AND (Fecha_Emision BETWEEN '$fecha_emitida_1' AND '$fecha_emitida_2')";
						}

					else if(isset($_POST["fecha_pagada_1"]) && isset($_POST["fecha_pagada_2"]))
						{
							$fecha_pagada_1 = $_POST["fecha_pagada_1"];
							$fecha_pagada_2 = $_POST["fecha_pagada_2"];

							$sql .= " AND (Fecha_Pago BETWEEN '$fecha_pagada_1' AND '$fecha_pagada_2')";
						}


					$consulta = $conexion->prepare($sql);
					$consulta->execute();
					$resultado = $consulta->fetchAll();

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
		</section>
	</main>

	<footer>
		<a href="cerrar_sesion.php" align="center"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>