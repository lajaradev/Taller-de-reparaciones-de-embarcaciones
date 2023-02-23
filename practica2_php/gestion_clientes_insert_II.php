<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Clientes Insert II </title>
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
				<h2> AÑADIR CLIENTES II</h2> <br>
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
		
			$dni = $_POST['dni'];
			$nombre = $_POST['nombre'];
			$apellido1 = $_POST['apellido1'];
			$apellido2 = $_POST['apellido2'];
			$direccion = $_POST['direccion'];
			$cp = $_POST['cp'];
			$poblacion = $_POST['poblacion'];
			$provincia = $_POST['provincia'];
			$telefono = $_POST['telefono'];
			$email = $_POST['email'];

			if(is_uploaded_file($_FILES['foto']['tmp_name'])){
				$foto = $_FILES['foto']['tmp_name'];
				$fotografia = imagecreatefromjpeg($foto);
				ob_start();
				imagejpeg($fotografia);
				$jpg = ob_get_contents();
				ob_end_clean();
				$intermedio = addslashes((trim($jpg)));
				$jpg = str_replace('##', '\##', $intermedio);
			}

			$SentenciaSQL = "INSERT INTO CLIENTES (DNI, Nombre, Apellido1, Apellido2, Direccion, CP, Poblacion, Provincia, Telefono, Email, Fotografia) values ('$dni', '$nombre', '$apellido1', '$apellido2', '$direccion', '$cp', '$poblacion', '$provincia', '$telefono', '$email', '$jpg')";

			$result = $conexion->query($SentenciaSQL);

			if(!$result){
				echo "<br/>Error al introducir el cliente en la DB";
			}
			else{
				echo "<br/>Cliente introducido con éxito";
			}

		?>
		</section>

	</main>

	<footer>
		<a href="cerrar_sesion.php" align="center"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>