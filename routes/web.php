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

Route::get('/listados/proyectosactuales', 'ProyectoController@indexActuales')->name('indexActuales');
Route::get('/sinproyecto', 'EmpleadoController@sinproyecto')->name('sinproyecto');
Route::get('/multi','EmpleadoController@multiproyecto')->name('multi');
Route::get('/asignarProyecto/{id}','AsignarController@asignarProyecto')->name('asignarProyecto');
Route::post('/trabajarProyecto/{id}', 'AsignarController@trabajarProyecto')->name('trabajarProyecto');
Route::get('/form', 'AsignarController@formempleado')->name('formempleado');
Route::post('/asignarEmpleado', 'AsignarController@asignarEmpleado')->name('asignarempleado');

Route::resource('departamentos','DepartamentoController')->only(['index','show']);
Route::resource('proyectos','ProyectoController');
Route::resource('empleados','EmpleadoController')->only(['index','show']);
