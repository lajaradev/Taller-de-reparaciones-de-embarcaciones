<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;

class EmbarcacionController extends Controller{
	public function ver($matricula){
		$embarcaciones = App\Embarcacion::where('Matricula', $matricula)->get();
		foreach ($embarcaciones as $barco) {
		$clientes = App\Cliente::where('Id_Cliente', $barco["Id_Cliente"])->get();
				foreach ($clientes as $cliente) {
				$imagen = basename(tempnam(getcwd()."/temporales","temp"));
				$imagen .= ".jpg";
				$fichero = fopen("./temporales/".$imagen, "w");
				fwrite($fichero, $barco["Fotografia"]);
				fclose($fichero);

				return view('embarcaciones.ver', ['matricula' => $matricula, 'longitud' => $barco["Longitud"],'potencia' => $barco["Potencia"],'motor' => $barco["Motor"], 'anyo' => $barco["Año"],'color' => $barco["Color"], 'material' => $barco["Material"],'id_cliente' => $cliente["Nombre"]." ".$cliente["Apellido1"]." ".$cliente["Apellido2"],  'foto' => $imagen,	]);
				}
		}
	}
}

?>