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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::get('/registrar-carpeta', 'RegistroController@showRegisterForm')->name('registro')->middleware('auth');

Route::post('storecarpeta', 'RegistroController@storeCarpeta')->name('store.carpeta');
Route::post('storedenunciante', 'RegistroController@storeDenunciante')->name('store.denunciante');
Route::post('storedenunciado', 'RegistroController@storeDenunciado')->name('store.denunciado');
Route::post('storeautoridad', 'RegistroController@storeAutoridad')->name('store.autoridad');
Route::post('storeabogado', 'RegistroController@storeAbogado')->name('store.abogado');
Route::post('storefamiliar', 'RegistroController@storeFamiliar')->name('store.familiar');
Route::post('storedelito', 'RegistroController@storeDelito')->name('store.delito');
Route::post('storevehiculo', 'RegistroController@storeVehiculo')->name('store.vehiculo');


/*---------Rutas para los selects dinámicos-------------*/
Route::get('municipios/{id}', 'RegistroController@getMunicipios');
Route::get('localidades/{id}', 'RegistroController@getLocalidades');
Route::get('codigos/{id}', 'RegistroController@getCodigos');
Route::get('colonias/{cp}', 'RegistroController@getColonias');
Route::get('submarcas/{id}', 'RegistroController@getSubmarcas');
Route::get('tipoVehiculos/{id}', 'RegistroController@getTipoVehiculos');
Route::get('armas/{id}', 'RegistroController@getArmas');
/*
Route::get('/registrar-carpeta', function () {
	return view('registro');
})->middleware('auth');
*/
/*
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