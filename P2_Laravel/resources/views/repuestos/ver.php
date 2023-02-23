<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1> Lista de Repuestos: </h1>

<?php 
	foreach ($repuestos as $repuesto)
	 {
		echo $repuesto->Referencia . " " .$repuesto->Descripcion . " " . $repuesto->Importe."<br />";
	}
?>
</body>
</html>