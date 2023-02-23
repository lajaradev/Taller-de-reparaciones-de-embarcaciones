<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include "eliminar_temporales.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title> Gestion de Clientes Delete </title>
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
				<h2> ELIMINAR CLIENTES </h2> <br>
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
			
			<form method="post" action="gestion_clientes_delete_II.php">
			
			<table border="1" align="center">

			<tr><td>SELECT</td><td>ID</td><td>DNI</td><td>NOMBRE</td><td>APELLIDO1</td><td>APELLIDO2</td><td>DIRECCIÓN</td><td>C.P</td><td>POBLACIÓN</td><td>PROVINCIA</td><td>TELÉFONO</td><td>EMAIL</td><td>FOTOGRAFIA</td></tr>
				
			<?php
							
					$sql = "SELECT * FROM CLIENTES ORDER BY Id_Cliente";
					$consulta = $conexion->prepare($sql);
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
								
						echo "<tr>";
						echo "<td><center><input type=checkbox name=borrar[] value=$id_cliente></center></td>";
						echo "<td><center><b>$id_cliente</b></center></td>";
						echo "<td>$dni</td>";
						echo "<td>$nombre</td>";
						echo "<td>$apellido1</td>";
						echo "<td>$apellido2</td>";
						echo "<td>$direccion</td>";
						echo "<td>$cp</td>";
						echo "<td>$poblacion</td>";
						echo "<td>$provincia</td>";
						echo "<td>$telefono</td>";
						echo "<td>$email</td>";
						echo "<td><center><a href = temporales/$imagen><img src = temporales/$imagen width=50 border=0></a></center></td>";
						echo "</tr>";
						}
					?>
					
			</table>
			

				<br><input type="submit" value="Eliminar Cliente(s) Seleccionado(s)">
				<br><input type="reset" value="Deseleccionar todos">

			</form>
		</section>

	</main>

	<footer>
		<a href="cerrar_sesion.php" align="center"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>