<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1> Mostrando datos del cliente: </h1>

<?php 
	foreach ($cliente as $ficha_cliente)
	 {
		echo $ficha_cliente->Nombre." ".$ficha_cliente->Apellido1."<br>";
	}
?>
</body>
</html>