<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

/**
 * 
 */
class ClienteController extends Controller
{
	
	public function ver()
	{
		$clientes = DB::select('select * from clientes');

		return view('clientes.ver',['clientes' => $clientes]);
	}
}?>