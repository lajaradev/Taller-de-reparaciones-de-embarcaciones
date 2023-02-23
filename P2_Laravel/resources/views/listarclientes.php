<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
	
		$clientes= App\Cliente::all();

		foreach ($clientes as $cliente) {
			echo $cliente->Nombre;
			echo "<br>";
		}
?>
</body>
</html>