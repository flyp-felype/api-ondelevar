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

Route::get('/', function () {
    return view('index');
});

Route::get('/busca', function() {
    return view('busca');
});

Route::get('tipo/delete/{id}', "TipoController@destroy");
Route::get('oficina/delete/{id}', "OficinaController@destroy");

Route::prefix('admin')->group(function () {
  Auth::routes();
  Route::resource('oficina', 'OficinaController');
  Route::resource('tipo', 'TipoController');
  Route::resource('especialidades', 'EspecialidadesController');
  Route::resource('foto', 'FotoController');
  Route::get('/home', 'HomeController@index');
});
