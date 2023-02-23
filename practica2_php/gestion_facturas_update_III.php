<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Facturas Update III </title>
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
				<h2> EDITAR FACTURAS III </h2> <br>
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
						$numero_factura = $_POST['numero_factura'];
						$matricula = $_POST['matricula'];
						$mano_de_obra = $_POST['mano_de_obra'];
						$precio_hora = $_POST['precio_hora'];
						$fecha_emision = $_POST['fecha_emision'];
						$fecha_pago = $_POST['fecha_pago'];
						$base_imponible = $_POST['base_imponible'];
						$iva = $_POST['iva'];
						$total = $_POST['total'];

						$SentenciaSQL = "UPDATE factura SET Matricula = '$matricula', Mano_de_Obra = '$mano_de_obra', Precio_Hora = '$precio_hora', Fecha_Emision = '$fecha_emision', Fecha_Pago = '$fecha_pago', Base_Imponible = '$base_imponible', IVA = '$iva', Total = '$total' WHERE `Numero_Factura` = $numero_factura";

						$result = $conexion->query($SentenciaSQL);

						if(!$result){
							echo "<br/>Error al editar la factura en la DB";
						}
						else{
							echo "<br/>Factura editada con éxito";
						}
			?>
					
			

		</section>

	</main>

	<footer>
		<br><a href="cerrar_sesion.php"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>