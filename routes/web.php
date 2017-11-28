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

Route::post('carpetastore', 'RegistroController@store')->name('carpeta.store');
Route::post('storedenunciante', 'RegistroController@storeDenunciante')->name('denunciante.store');


/*---------Rutas para los selects dinámicos-------------*/
Route::get('municipios/{id}', 'RegistroController@getMunicipios');
Route::get('localidades/{id}', 'RegistroController@getLocalidades');
Route::get('codigos/{id}', 'RegistroController@getCodigos');
Route::get('colonias/{cp}', 'RegistroController@getColonias');
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