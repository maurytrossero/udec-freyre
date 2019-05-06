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
    return view('welcome');
});


//RUTAS DE USUARIOS
Route::get('/usuarios','UserController@index')
    ->name('users');

Route::get('/usuarios/{id}','UserController@show')
    ->where('id', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo','UserController@create')
    ->name('users.create');

Route::post('/usuarios/crear', 'UserController@store');

Route::get('/usuarios/{user}/editar','UserController@edit')
    ->name('users.edit');

Route::put('/usuarios/{user}', 'UserController@update');

Route::delete('/usuarios/{user}', 'UserController@destroy')
    ->name('users.destroy');


//RUTAS DE ACTIVIDADES
Route::get('/actividades','ActividadController@index')
    ->name('actividades');

Route::get('/actividades/{id}','ActividadController@show')
    ->where('id', '[0-9]+')
    ->name('actividades.show');

Route::get('/actividades/nuevo','ActividadController@create')
    ->name('actividades.create');

Route::post('/actividades/crear', 'ActividadController@store');

Route::get('/actividades/{actividad}/editar','ActividadController@edit')
    ->name('actividades.edit');

Route::put('/actividades/{actividad}', 'ActividadController@update');

Route::delete('/actividades/{actividad}', 'ActividadController@destroy')
    ->name('actividades.destroy');


//RUTAS DE DOCENTEs
Route::get('/docentes','DocenteController@index')
    ->name('docentes');

Route::get('/docentes/{id}','DocenteController@show')
    ->where('id', '[0-9]+')
    ->name('docentes.show');

Route::get('/docentes/nuevo','DocenteController@create')
    ->name('docentes.create');

Route::post('/docentes/crear', 'DocenteController@store');

Route::get('/docentes/{docente}/editar','DocenteController@edit')
    ->name('docentes.edit');

Route::put('/docentes/{docente}', 'DocenteController@update');

Route::delete('/docentes/{docente}', 'DocenteController@destroy')
    ->name('docentes.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
