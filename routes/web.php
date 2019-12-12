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
    return view('home');
})->name('home');

Route::get('/listados', function () {
	return view('listados');
})->name('listados');

Route::get('/addproyecto', 'ProyectoController@create')->name('addproyecto');
Route::get('/updateproyecto/{id}', 'ProyectoController@edit')->name('modificarproyecto');
Route::get('/buscarempleados','EmpleadoController@index')->name('buscarempleados');
Route::get('/buscarproyectos','ProyectoController@index')->name('buscarproyectos');
Route::get('/buscardepartamentos','DepartamentoController@index')->name('buscardepartamentos');
Route::get('/showempleados/{id}','EmpleadoController@show')->name('showempleados');
Route::get('/showdepartamentos/{id}','DepartamentoController@show')->name('showdepartamentos');
Route::get('/showproyectos/{id}','ProyectoController@show')->name('showproyectos');
Route::get('/deleteproyecto/{id}','ProyectoController@delete')->name('deleteproyecto');
Route::get('/listados/proyectosactuales', 'ProyectoController@indexActuales')->name('indexActuales');
Route::get('/sinproyecto', 'EmpleadoController@sinproyecto')->name('sinproyecto');
Route::get('/multi','EmpleadoController@multiproyecto')->name('multi');

Route::post('/addproyecto1','ProyectoController@store')->name('enviarproyecto');
Route::post('/updateproyecto1','ProyectoController@update')->name('updateproyecto');