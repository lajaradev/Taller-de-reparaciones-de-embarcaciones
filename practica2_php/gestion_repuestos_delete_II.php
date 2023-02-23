<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Repuestos Delete </title>
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
				<h2> ELIMINAR REPUESTOS </h2> <br>
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
							
		
						$array_borrados = $_POST['borrar'];
						$error = 0;
						
						for($i=0; $i<count($array_borrados); $i++){
							$SentenciaSQL = "DELETE from repuestos WHERE referencia = '$array_borrados[$i]'";
							$result = $conexion->query($SentenciaSQL);

							if(!$result){
								$error=1;
							}	
						}

						if($error ==0){
							echo "<br><br> El(Los) Repuesto(s) se ha(n) eliminado correctamente.";
						}						

		?>

		</section>

	</main>

	<footer>
		<br><a href="cerrar_sesion.php"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>