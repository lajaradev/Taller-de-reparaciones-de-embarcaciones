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
		
			$referencia = $_POST['referencia'];
			$descripcion = $_POST['descripcion'];
			$importe = $_POST['importe'];
			$ganancia = $_POST['ganancia'];
		


			$SentenciaSQL = "UPDATE repuestos SET  Descripcion = '$descripcion', Importe = '$importe', Ganancia = '$ganancia' WHERE `Referencia` = $referencia";

			$result = $conexion->query($SentenciaSQL);

			if(!$result){
				echo "<br/>Error al editar el repuesto en la DB";
			}
			else{
				echo "<br/>Repuesto editar con éxito";
			}

		?>
				
			
		
		</section>

	</main>

	<footer>
		<br><a href="cerrar_sesion.php"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>