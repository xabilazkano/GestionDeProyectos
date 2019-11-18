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

Route::get('/empleados', function () {
    return view('empleados/index');
})->name('empleados');

Route::get('/proyectos', function () {
    return view('proyectos/index');
})->name('proyectos');

Route::get('/departamentos', function () {
    return view('departamentos/index');
})->name('departamentos');

Route::get('/addproyecto', function(){
	return view('proyectos/addproyecto');
})->name('addproyecto');

Route::get('/updateproyecto/{id}', function($id){
	return view('proyectos/updateproyecto',['id'=>$id]);
})->name('modificarproyecto');


Route::get('/buscarempleados','EmpleadoController@index')->name('buscarempleados');
Route::get('/buscarproyectos','ProyectoController@index')->name('buscarproyectos');
Route::get('/buscardepartamentos','DepartamentoController@index')->name('buscardepartamentos');
Route::get('/showempleados/{id}','EmpleadoController@show')->name('showempleados');
Route::get('/showdepartamentos/{id}','DepartamentoController@show')->name('showdepartamentos');
Route::get('/showproyectos/{id}','ProyectoController@show')->name('showproyectos');
Route::get('/deleteproyecto/{id}','ProyectoController@delete')->name('deleteproyecto');

Route::post('/addproyecto1','ProyectoController@store')->name('enviarproyecto');
Route::post('/updateproyecto1','ProyectoController@update')->name('updateproyecto');