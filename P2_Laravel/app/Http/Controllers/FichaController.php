<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;


class FichaController extends Controller
{
	public function ver($Id_Cliente)
	{
		$cliente = DB::select("select * from Clientes where Id_Cliente = $Id_Cliente");
		return view('ficha/ver',['cliente' => $cliente]);
	}
}?>