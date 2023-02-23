<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tienda/productos/{id_producto}', function($id_producto){ 
    return "Mostrando el producto $id_producto de la tienda";
});


Route::get('agenda/{mes}/{anyo}', function($mes,$anyo){
    return "Viendo la agenda de $mes de $anyo";
});

Route::get('categoria/{categoria}/{pagina?}', function($categoria, $pagina = 1){
    return "Viendo categoria $categoria y pagina $pagina";
});

Route::get('colaboradores/{nombre}', function($nombre){
    return "Mostrando el colaborador $nombre";
})->where(array('nombre' => '[a-zA-Z] +'));

Route ::get('algo',function(){
    return view('algo');
});

Route::get('/samu', function (){
    return view('saludo', ['nombre' => 'samuel']);
});

Route::get('articulos/{id}','ArticulosController@ver');

Route::get('clientes', 'ClienteController@ver');

Route::get('repuestos/{referencia}','RepuestoController@ver');

Route::get('ficha/{Id_Cliente}', 'FichaController@ver');

Route::get('listarclientes', function(){
    return view('listarclientes');
});



//////////////////////////////////

Route::get('datos_embarcacion/{matricula}', 'EmbarcacionController@ver');

Route::get('actualizar_repuesto/{referencia}/{importe}', 'RepuestoController@update');