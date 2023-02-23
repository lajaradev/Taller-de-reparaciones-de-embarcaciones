<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1> Mostrando clientes: </h1>

<?php 
	foreach ($clientes as $cliente)
	 {
		echo $cliente->Nombre." ".$cliente->Apellido1."<br>";
	}
?>
</body>
</html>