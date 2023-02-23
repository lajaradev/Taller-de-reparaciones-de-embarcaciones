<!DOCTYPE html>
<html>
<head>
	<title>Embarcaciones</title>
</head>
<body>
	<h1>DATOS DE LA EMBARCACION</h1><br>
	Matrícula: {{$matricula}}<br>
	Longitud: {{$longitud}}<br>
	Potencia: {{$potencia}}<br>
	Motor: {{$motor}}<br>
	Año: {{$anyo}}<br>
	Color: {{$color}}<br>
	Material: {{$material}}<br>
	Cliente: {{$id_cliente}}<br>
	<img src="/P2_Laravel/public/temporales/{{$foto}}" style="width: 250px;">
</body>
</html>