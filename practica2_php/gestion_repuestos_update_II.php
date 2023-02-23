<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Repuestos Update II </title>
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
				<h2> EDITAR REPUESTOS II </h2> <br>
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
		
				
				<?php
					
					$editar = $_POST['editar'];
					$error = 0;
						
					

						$sql = "SELECT * FROM REPUESTOS  WHERE Referencia = '$editar'";
						$consulta = $conexion->prepare($sql);
						$consulta->execute();
						$resultado = $consulta -> fetchAll();

							foreach ($resultado as $fila) {
								$referencia = $fila['Referencia'];
								$descripcion = $fila['Descripcion'];
								$importe = $fila['Importe'];
								$ganancia = $fila['Ganancia'];
							}

				?>


		<form method="post" action="gestion_repuestos_update_III.php" enctype="multipart/form-data">
			
				Referencia: <input type="text" name="referencia" readonly value="<?php echo "$referencia" ?>"><br>
				Descripción: <input type="text" name="descripcion" value="<?php echo "$descripcion" ?>"><br>
				Importe: <input type="text" name="importe" value="<?php echo "$importe" ?>"><br>
				Ganancia: <input type="text" name="ganancia" value="<?php echo "$ganancia" ?>"><br>
				
				
				<input type="submit" value="Editar Repuesto">
				
			</form>
		
		
		</section>

	</main>

	<footer>
		<br><a href="cerrar_sesion.php"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>