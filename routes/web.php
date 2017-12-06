<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::get('/registrar-carpeta', 'RegistroController@showRegisterForm')->name('registro')->middleware('auth');
Route::post('storecarpeta', 'RegistroController@storeCarpeta')->name('store.carpeta');
Route::post('storedenunciante', 'RegistroController@storeDenunciante')->name('store.denunciante');
Route::post('storedenunciado', 'RegistroController@storeDenunciado')->name('store.denunciado');
Route::post('storeautoridad', 'RegistroController@storeAutoridad')->name('store.autoridad');
Route::post('storeabogado', 'RegistroController@storeAbogado')->name('store.abogado');
Route::post('storefamiliar', 'RegistroController@storeFamiliar')->name('store.familiar');
Route::post('storedelito', 'RegistroController@storeDelito')->name('store.delito');
Route::post('storevehiculo', 'RegistroController@storeVehiculo')->name('store.vehiculo');
Route::post('storeacusacion', 'RegistroController@storeAcusacion')->name('store.acusacion');
*/

Route::get('/iniciar-carpeta', 'CarpetaController@showForm')->name('inicio')->middleware('auth');
Route::post('storecarpeta', 'CarpetaController@storeCarpeta')->name('store.carpeta');
Route::get('/carpeta-inicial/{id}', 'CarpetaController@index')->name('carpeta')->middleware('auth');

Route::get('denunciante/{idCarpeta}', 'DenuncianteController@showForm')->name('denunciante');
Route::post('storedenunciante', 'DenuncianteController@storeDenunciante')->name('store.denunciante');

Route::get('denunciado/{idCarpeta}', 'DenunciadoController@showForm')->name('denunciado');
Route::post('storedenunciado', 'DenunciadoController@storeDenunciado')->name('store.denunciado');

Route::get('abogado/{idCarpeta}', 'AbogadoController@showForm')->name('abogado');
Route::post('storeabogado', 'AbogadoController@storeAbogado')->name('store.abogado');

Route::get('autoridad/{idCarpeta}', 'AutoridadController@showForm')->name('autoridad');
Route::post('storeautoridad', 'AutoridadController@storeAutoridad')->name('store.autoridad');

Route::get('familiar/{idCarpeta}', 'FamiliarController@showForm')->name('familiar');
Route::post('storefamiliar', 'FamiliarController@storeFamiliar')->name('store.familiar');

Route::get('delito/{idCarpeta}', 'DelitoController@showForm')->name('delito');
Route::post('storedelito', 'DelitoController@storeDelito')->name('store.delito');

Route::get('acusacion/{idCarpeta}', 'AcusacionController@showForm')->name('acusacion');
Route::post('storeacusacion', 'AcusacionController@storeAcusacion')->name('store.acusacion');

Route::get('vehiculo/{idCarpeta}', 'VehiculoController@showForm')->name('vehiculo');
Route::post('storevehiculo', 'VehiculoController@storeVehiculo')->name('store.vehiculo');

Route::get('carpeta/{id}', [
	'uses' => 'CarpetaController@verDetalle',
	'as' => 'view.carpeta'
]);


/*---------Rutas para los selects dinámicos-------------*/
Route::get('municipios/{id}', 'RegistroController@getMunicipios');
Route::get('localidades/{id}', 'RegistroController@getLocalidades');
Route::get('codigos/{id}', 'RegistroController@getCodigos');
Route::get('colonias/{cp}', 'RegistroController@getColonias');
Route::get('submarcas/{id}', 'RegistroController@getSubmarcas');
Route::get('tipoVehiculos/{id}', 'RegistroController@getTipoVehiculos');
Route::get('armas/{id}', 'RegistroController@getArmas');

Route::get('denunciantes/{idCarpeta}', 'RegistroController@getDenunciantes');
Route::get('denunciados/{idCarpeta}', 'RegistroController@getDenunciados');
/*
Route::get('/registrar-carpeta', function () {
	return view('registro');
})->middleware('auth');


Route::middleware(['auth'])->group(function () {
	Route::get('/', function () {
	    return view('auth.login');
	});

	Route::get('articles/{id}/destroy',[
		'uses' => 'ArticlesController@destroy',
		'as' => 'articles.destroy'
	]);
	Route::get('/', 'RegistroController@index')->name('registro');
});
*/