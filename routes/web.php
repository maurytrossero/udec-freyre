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
});


//RUTAS DE USUARIOS
/*
Route::get('/usuarios','UserController@index')
    ->name('users');

Route::get('/usuarios/{id}','UserController@show')
    ->where('id', '[0-9]+')
    ->name('users.show');
*/
Route::get('/usuarios/nuevo','UserController@create')
    ->name('users.create');

Route::post('/usuarios/crear', 'UserController@store');
/*
Route::get('/usuarios/{user}/editar','UserController@edit')
    ->name('users.edit');

Route::put('/usuarios/{user}', 'UserController@update');

Route::delete('/usuarios/{user}', 'UserController@destroy')
    ->name('users.destroy');
*/

//RUTAS DE ACTIVIDADES

    Route::get('actividades/' , 'ActividadController@index')
        ->name('actividades.index');
/*
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
*/

//RUTAS DE PROGRAMAS
Route::get('programas/' , 'ProgramaController@index')
    ->name('programas.index');

//RUTAS DE PUNTOS DE ENCUENTROS

Route::get('puntosdeencuentros/' , 'PuntoDeEncuentroController@index')
    ->name('puntosdeencuentros.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function() {
    //Roles
    Route::post('roles/store' , 'RoleController@store')->name('roles.store')
        ->middleware('can:roles.create');

    Route::get('roles/' , 'RoleController@index')->name('roles.index')
        ->middleware('can:roles.index');

    Route::get('roles/create' , 'RoleController@create')->name('roles.create')
        ->middleware('can:roles.create');

    Route::put('roles/{role}' , 'RoleController@update')->name('roles.update')
        ->middleware('can:roles.edit');

    Route::get('roles/{role}' , 'RoleController@show')->name('roles.show')
        ->middleware('can:roles.show');

    Route::delete('roles/eliminar/{role}' , 'RoleController@destroy')->name('roles.destroy')
        ->middleware('can:roles.destroy');

    Route::get('roles/{role}/edit' , 'RoleController@edit')->name('roles.edit')
        ->middleware('can:roles.edit');

    //Actividades

    Route::post('actividades/crear' , 'ActividadController@store')->name('actividades.store')
        ->middleware('can:actividades.create');

    Route::get('actividades/create' , 'ActividadController@create')->name('actividades.create')
        ->middleware('can:actividades.create');

    Route::put('actividades/{actividad}' , 'ActividadController@update')->name('actividades.update')
        ->middleware('can:actividades.edit');

    Route::get('actividades/{actividad}/edit' , 'ActividadController@edit')->name('actividades.edit')
        ->middleware('can:actividades.edit');

    Route::get('actividades/ver/{actividad}' , 'ActividadController@show')->name('actividades.show')
        ->middleware('can:actividades.show');

    Route::delete('actividades/eliminar/{actividad}' , 'ActividadController@destroy')->name('actividades.destroy')
        ->middleware('can:actividades.destroy');


    //Programas
    /**/
    Route::post('programas/store' , 'ProgramaController@store')->name('programas.store')
        ->middleware('can:programas.create');

    Route::get('programas/create' , 'ProgramaController@create')->name('programas.create')
        ->middleware('can:programas.create');

    Route::put('programas/{programa}' , 'ProgramaController@update')->name('programas.update')
        ->middleware('can:programas.edit');

    Route::get('programas/{programa}/edit' , 'ProgramaController@edit')->name('programas.edit')
        ->middleware('can:programas.edit');

    Route::delete('programas/eliminar/{programa}' , 'ProgramaController@destroy')->name('programas.destroy')
        ->middleware('can:programas.destroy');

    //Puntos de Encuentros
    Route::post('puntosdeencuentros/crear' , 'PuntoDeEncuentroController@store')->name('puntosdeencuentros.store')
        ->middleware('can:puntosdeencuentros.create');

    Route::get('puntosdeencuentros/create' , 'PuntoDeEncuentroController@create')->name('puntosdeencuentros.create')
        ->middleware('can:puntosdeencuentros.create');

    Route::put('puntosdeencuentros/{puntodeencuentro}' , 'PuntoDeEncuentroController@update')->name('puntosdeencuentros.update')
        ->middleware('can:puntosdeencuentros.edit');

    Route::get('puntosdeencuentros/{puntodeencuentro}/edit' , 'PuntoDeEncuentroController@edit')->name('puntosdeencuentros.edit')
        ->middleware('can:puntosdeencuentros.edit');

    Route::delete('puntosdeencuentros/eliminar/{puntodeencuentro}' , 'PuntoDeEncuentroController@destroy')->name('puntosdeencuentros.destroy')
        ->middleware('can:puntosdeencuentros.destroy');


    //Usuarios

    Route::get('usuarios/' , 'UserController@index')->name('users.index')
        ->middleware('can:users.index');

    Route::get('usuarios/{user}' , 'UserController@show')->name('users.show')
        ->middleware('can:users.show');

    Route::delete('usuarios/eliminar/{user}' , 'UserController@destroy')->name('users.destroy')
        ->middleware('can:users.destroy');

    Route::get('usuarios/{user}/edit' , 'UserController@edit')->name('users.edit')
        ->middleware('can:users.edit');

    Route::put('usuarios/{user}' , 'UserController@update')->name('users.update')
        ->middleware('can:users.edit');

    //perfil de usuario
    Route::get('usuarios/perfil-edit/{user}' , 'UserController@editPerfil')->name('users.perfil-edit')
        ->middleware('can:users.perfil-edit');

    Route::put('usuarios/perfil-update/{user}' , 'UserController@updatePerfil')->name('users.perfil-update')
        ->middleware('can:users.-perfil-update');

    Route::get('usuarios/perfil/{user}' , 'UserController@showPerfil')->name('users.perfil-show')
        ->middleware('can:users.perfil-show');

    //Docentes
    Route::post('docentes/crear' , 'DocenteController@store')->name('docentes.store')
        ->middleware('can:docentes.create');

    Route::get('docentes/' , 'DocenteController@index')->name('docentes.index')
        ->middleware('can:docentes.index');

    Route::get('docentes/create' , 'DocenteController@create')->name('docentes.create')
        ->middleware('can:docentes.create');

    Route::put('docentes/{docente}' , 'DocenteController@update')->name('docentes.update')
        ->middleware('can:docentes.edit');

    Route::get('docentes/{docente}' , 'DocenteController@show')->name('docentes.show')
        ->middleware('can:docentes.show');

    Route::delete('docentes/eliminar/{docente}' , 'DocenteController@destroy')->name('docentes.destroy')
        ->middleware('can:docentes.destroy');

    Route::get('docentes/{docente}/edit' , 'DocenteController@edit')->name('docentes.edit')
        ->middleware('can:docentes.edit');


    //Inscripciones
    Route::post('inscripciones/crear' , 'InscripcionController@store')->name('inscripciones.confirmar')
        ->middleware('can:inscripciones.confirmar');

    Route::get('inscripciones/' , 'InscripcionController@index')->name('inscripciones.index')
        ->middleware('can:inscripciones.index');

    Route::get('inscripciones/{actividad}/nuevo' , 'InscripcionController@create')->name('inscripciones.create')
        ->middleware('can:inscripciones.create');

/*
    Route::get('inscripciones/{inscripcion}' , 'InscripcionController@show')->name('inscripciones.show')
        ->middleware('can:inscripciones.show');*/

    Route::delete('inscripciones/eliminar/{inscripcion}' , 'InscripcionController@destroy')->name('inscripciones.destroy')
        ->middleware('can:inscripciones.destroy');


});
