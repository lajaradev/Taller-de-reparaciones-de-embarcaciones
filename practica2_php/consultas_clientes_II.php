<?php 
	include("seguridad_2.php");
	include("conexionPDO.php");
	include("eliminar_temporales.php");
?>


<!DOCTYPE html>
<html>

<head>
	<title> Taller Embarcaciones Consultas Clientes II</title>
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
					<h2> CONSULTAS DE CLIENTES II</h2>
				<table border="1">
				<tr><td>NOMBRE</td><td>APELLIDO 1</td><td>APELLIDO 2</td><td>POBLACIÓN</td><td>PROVINCIA</td><td>TELÉFONO</td></tr>
			<?php 

				$sql = "SELECT * FROM CLIENTES WHERE 1 = 1";

					$nombre = "";
					$apellido1 = "";
					$apellido2 = "";
					$poblacion = "";
					$provincia = "";
					$telefono = "";

					if(isset($_POST["nombre"])){
						$nombre = $_POST['nombre']; }
	
					if(isset($_POST["apellido1"])){
						$apellido1 = $_POST['apellido1']; }
	
					if(isset($_POST["apellido2"])){
						$apellido2 = $_POST['apellido2'];}
					
					if(isset($_POST["poblacion"])){
						$poblacion = $_POST['poblacion'];}
					
					if(isset($_POST["provincia"])){
						$provincia = $_POST['provincia'];}
					
					if(isset($_POST["telefono"])){
						$telefono = $_POST['telefono'];}


					if($nombre != ""){
						$sql .= " AND Nombre = '$nombre'";}
					
					if($apellido1 != ""){
						$sql .= " AND Apellido1 = '$apellido1'";}
					
					if($apellido2 != ""){
						$sql .= " AND Apellido2 = '$apellido2'";}
					
					if($poblacion != ""){
						$sql .= " AND Poblacion = '$poblacion'";}
					
					if($provincia != ""){
						$sql .= " AND Provincia = '$provincia'";}

					if($telefono != ""){
						$sql .= " AND Telefono = '$telefono'";}


					$consulta = $conexion->prepare($sql);
					$consulta->execute();
					$resultado = $consulta->fetchAll();

					foreach ($resultado as $fila) {
								
								
								$nombre = $fila['Nombre'];
								$apellido1 = $fila['Apellido1'];
								$apellido2 = $fila['Apellido2'];
					 			$poblacion = $fila['Poblacion'];
								$provincia = $fila['Provincia'];
								$telefono = $fila['Telefono'];
								

								
							echo "<tr>";
							echo "<td>$nombre</td>";
							echo "<td>$apellido1</td>";
							echo "<td>$apellido2</td>";
							echo "<td>$poblacion</td>";
							echo "<td>$provincia</td>";
							echo "<td>$telefono</td>";
							echo "</tr>";
							}
			?>
			</table><br>
		</section>
	</main>

	<footer>
		<a href="cerrar_sesion.php" align="center"> CERRAR SESIÓN  </a>
	</footer>
</body>
</html>