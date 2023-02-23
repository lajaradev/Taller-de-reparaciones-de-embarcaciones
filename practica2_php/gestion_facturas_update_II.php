<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Facturas Update </title>
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
				<h2> EDITAR FACTURAS II </h2> <br>
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
						$editar = $_POST['editar'];
						$error = 0;
						$sql = "SELECT * FROM FACTURA WHERE Numero_Factura = '$editar'";
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
						}

				?>
					
			
			<form method="post" action="gestion_facturas_update_III.php" enctype="multipart/form-data">
			
				Numero Factura: <input type="text" name="numero_factura" readonly value=<?php echo "$numero_factura" ?>><br>
				Matricula: 		<input type="text" name="matricula" 	 value="<?php echo "$matricula" ?>"><br>
				Mano de Obra: 	<input type="text" name="mano_de_obra" 	 value="<?php echo "$mano_de_obra" ?>"><br>
				Precio Hora: 	<input type="text" name="precio_hora" 	value="<?php echo "$precio_hora" ?>"><br>
				Fecha Emision:  <input type="text" name="fecha_emision" value="<?php echo "$fecha_emision" ?>"><br>
				Fecha Pago:     <input type="text" name="fecha_pago" value="<?php echo "$fecha_pago" ?>"><br>
				Bas Imponible:  <input type="text" name="base_imponible" value="<?php echo "$base_imponible" ?>"><br>
				IVA: 			<input type="text" name="iva" value="<?php echo "$iva" ?>"><br>
				Total: 			<input type="text" name="total" value="<?php echo "$total" ?>"><br>
				
				
				<input type="submit" value="Editar Facturas">
				
			</form>


		</section>

	</main>

	<footer>
		<br><a href="cerrar_sesion.php"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>