<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Embarcaciones Update II</title>
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
				<h2> 	EDITAR EMBARCACIONES II</h2> <br>
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
		
			<?php
		
					$editar = $_POST['editar'];
					$error = 0;
						
					$SentenciaSQL = "SELECT * FROM EMBARCACIONES WHERE matricula = '$editar'";
					$consulta = $conexion->prepare($SentenciaSQL);
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
					}
			?>

				<form method="post" action="gestion_embarcaciones_update_III.php" enctype="multipart/form-data">
			
				Matricula: <input type="text" name="matricula" readonly value="<?php echo "$matricula" ?>"><br>
				Longitud: <input type="text" name="longitud" value="<?php echo "$longitud" ?>"><br>
				Potencia: <input type="text" name="potencia" value="<?php echo "$potencia" ?>"><br>
				Motor: <input type="text" name="motor" value="<?php echo "$motor" ?>"><br>
				Año: <input type="text" name="año" value="<?php echo "$año" ?>"><br>
				Color: <input type="text" name="color" value="<?php echo "$color" ?>"><br>
				Material: <input type="text" name="material" value="<?php echo "$material" ?>"><br>
				ID Cliente: <input type="text" name="id_cliente" value="<?php echo "$id_cliente" ?>"><br>
				Fotografia:	<a href = 'temporales/<?php echo "$imagen" ?>'> <img src = 'temporales/<?php echo "$imagen" ?>' width='100' border='0'></a>
				Cambiar foto:<input type="file" name="foto"><br>
				
				<input type="submit" value="Editar Embarcacion">
				<input type="reset" value="Borrar">
			</form>


		</section>

	</main>

	<footer>
		<br><a href="cerrar_sesion.php"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>