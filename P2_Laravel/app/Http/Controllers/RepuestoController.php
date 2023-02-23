<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App;

class RepuestoController extends Controller{
	public function ver($referencia){
		$repuestos = DB::select("select * from Repuestos where Referencia = $referencia");
		return view('repuestos.ver', ['repuestos' => $repuestos]);
	}

	public function update($referencia, $importe){
		App\Repuesto::where('Referencia', $referencia)->update(['Importe' => $importe]);
		return view('repuestos.update', ['referencia' => $referencia, 'importe' => $importe]);
	}
}

?>