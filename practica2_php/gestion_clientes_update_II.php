<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Clientes Update II </title>
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
				<h2> EDITAR CLIENTES II </h2> <br>
				<nav>
					<ul>
						<li><a href="gestion_clientes.php"> LISTA </a></li>
						<li><a href="gestion_clientes_insert.php"> AÑADIR  </a></li>
						<li><a href="gestion_clientes_delete.php"> ELIMINAR  </a></li>
						<li><a href="gestion_clientes_update.php"> EDITAR  </a></li>
					</ul>
				</nav>
			</section>
		<br>
			
		<section>
			
			<?php
		
					$editar = $_POST['editar'];
					$error = 0;
						
					$SentenciaSQL = "SELECT * FROM CLIENTES WHERE Id_Cliente = '$editar'";
					$consulta = $conexion->prepare($SentenciaSQL);
					$consulta->execute();
					$resultado = $consulta -> fetchAll();

					
					
					

					foreach ($resultado as $fila) {
						$id_cliente = $fila['Id_Cliente'];
						$dni = $fila['DNI'];
						$nombre = $fila['Nombre'];
						$apellido1 = $fila['Apellido1'];
						$apellido2 = $fila['Apellido2'];
						$direccion = $fila['Direccion'];
						$cp = $fila['CP'];
						$poblacion = $fila['Poblacion'];
						$provincia = $fila['Provincia'];
						$telefono = $fila['Telefono'];
						$email = $fila['Email'];
						$foto = $fila['Fotografia'];

						$imagen = basename(tempnam(getcwd()."/temporales","temp"));
						$imagen .= ".jpg";
						$fichero = fopen("./temporales/".$imagen, "w");
						fwrite($fichero, $foto);
						fclose($fichero);
								
						}
					?>
					
				<form method="post" action="gestion_clientes_update_III.php" enctype="multipart/form-data">
					ID Cliente: <input type="text" name="id_cliente" readonly value=<?php echo "$id_cliente" ?>><br>
					DNI: <input type="text" name="dni" value="<?php echo "$dni" ?>"><br>
					Nombre: <input type="text" name="nombre" value="<?php echo "$nombre" ?>"><br>
					Apellido 1: <input type="text" name="apellido1" value="<?php echo "$apellido1" ?>"><br>
					Apellido 2: <input type="text" name="apellido2" value="<?php echo "$apellido2" ?>"><br>
					Direccion: <input type="text" name="direccion" value="<?php echo "$direccion" ?>"><br>
					C.P: <input type="text" name="cp" value="<?php echo "$cp" ?>"><br>
					Población: <input type="text" name="poblacion" value="<?php echo "$poblacion" ?>"><br>
					Provincia: <input type="text" name="provincia" value="<?php echo "$provincia" ?>"><br>
					Teléfono: <input type="text" name="telefono" value="<?php echo "$telefono" ?>"><br>
					Email: <input type="text" name="email" value="<?php echo "$email" ?>"><br>
					Fotografia:	<a href = 'temporales/<?php echo "$imagen" ?>'> <img src = 'temporales/<?php echo "$imagen" ?>' width='100' border='0'></a>
					Cambiar foto:<input type="file" name="foto"><br>
					
				
					<input type="submit" value="Editar Cliente Seleccionado">
					
				</form>
			
				
			
		</section>

	</main>

	<footer>
		<a href="cerrar_sesion.php" align="center"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>