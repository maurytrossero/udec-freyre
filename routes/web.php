<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuntoDeEncuentroController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});
  



// Define tus rutas protegidas por el middleware 'guest'
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisterController::class, 'register'])
    ->middleware('guest');


/*
// Definir rutas protegidas por el middleware web (para la autenticación)
Route::middleware('web')->group(function () {
    // Otras rutas...

    Auth::routes();
});*/

// Rutas de usuarios
Route::get('/usuarios/nuevo', [UserController::class, 'create'])->name('users.create');
Route::post('/usuarios/crear', [UserController::class, 'store']);

// Rutas de actividades
Route::get('/actividades', [ActividadController::class, 'index'])->name('actividades.index');

// Rutas de programas
Route::get('/programas', [ProgramaController::class, 'index'])->name('programas.index');

// Rutas de puntos de encuentros
Route::get('/puntosdeencuentros', [PuntoDeEncuentroController::class, 'index'])->name('puntosdeencuentros.index');

Auth::routes();

Route::middleware(['auth'])->group(function() {
    //Roles
    Route::post('/roles/store' , [RoleController::class, 'store'])->name('roles.store')
        ->middleware('can:roles.create');

    Route::get('/roles' , [RoleController::class, 'index'])->name('roles.index')
        ->middleware('can:roles.index');

    Route::get('/roles/create' , [RoleController::class, 'create'])->name('roles.create')
        ->middleware('can:roles.create');

    Route::put('/roles/{role}' , [RoleController::class, 'update'])->name('roles.update')
        ->middleware('can:roles.edit');

    Route::get('/roles/{role}' , [RoleController::class, 'show'])->name('roles.show')
        ->middleware('can:roles.show');

    Route::delete('/roles/eliminar/{role}' , [RoleController::class, 'destroy'])->name('roles.destroy')
        ->middleware('can:roles.destroy');

    Route::get('roles/{role}/edit' , [RoleController::class, 'edit'])->name('roles.edit')
        ->middleware('can:roles.edit');

    //Actividades
    Route::post('/actividades/crear' , [ActividadController::class, 'store'])->name('actividades.store')
        ->middleware('can:actividades.create');

    Route::get('/actividades/create' , [ActividadController::class, 'create'])->name('actividades.create')
        ->middleware('can:actividades.create');

    Route::put('/actividades/{actividad}' , [ActividadController::class, 'update'])->name('actividades.update')
        ->middleware('can:actividades.edit');

    Route::get('/actividades/{actividad}/edit' , [ActividadController::class, 'edit'])->name('actividades.edit')
        ->middleware('can:actividades.edit');

    Route::get('/actividades/ver/{actividad}' , [ActividadController::class, 'show'])->name('actividades.show')
        ->middleware('can:actividades.show');

    Route::delete('/actividades/eliminar/{actividad}' , [ActividadController::class, 'destroy'])->name('actividades.destroy')
        ->middleware('can:actividades.destroy');


    //Programas
    Route::post('/programas/store' , [ProgramaController::class, 'store'])->name('programas.store')
        ->middleware('can:programas.create');

    Route::get('/programas/create' , [ProgramaController::class, 'create'])->name('programas.create')
        ->middleware('can:programas.create');

    Route::put('/programas/{programa}' , [ProgramaController::class, 'update'])->name('programas.update')
        ->middleware('can:programas.edit');

    Route::get('/programas/{programa}/edit' , [ProgramaController::class, 'edit'])->name('programas.edit')
        ->middleware('can:programas.edit');

    Route::delete('/programas/eliminar/{programa}' , [ProgramaController::class, 'destroy'])->name('programas.destroy')
        ->middleware('can:programas.destroy');

    //Puntos de Encuentros
    Route::post('/puntosdeencuentros/store' , [PuntoDeEncuentroController::class, 'store'])->name('puntosdeencuentros.store')
        ->middleware('can:puntosdeencuentros.create');

    Route::get('/puntosdeencuentros/create' , [PuntoDeEncuentroController::class, 'create'])->name('puntosdeencuentros.create')
        ->middleware('can:puntosdeencuentros.create');

    Route::put('/puntosdeencuentros/{puntodeencuentro}' , [PuntoDeEncuentroController::class, 'update'])->name('puntosdeencuentros.update')
        ->middleware('can:puntosdeencuentros.edit');

    Route::get('/puntosdeencuentros/{puntodeencuentro}/edit' , [PuntoDeEncuentroController::class, 'edit'])->name('puntosdeencuentros.edit')
        ->middleware('can:puntosdeencuentros.edit');

    Route::delete('/puntosdeencuentros/eliminar/{puntodeencuentro}' , [PuntoDeEncuentroController::class, 'destroy'])->name('puntosdeencuentros.destroy')
        ->middleware('can:puntosdeencuentros.destroy');


    //Usuarios
    Route::get('usuarios/' , [UserController::class, 'index'])->name('users.index')
        ->middleware('can:users.index');

    Route::get('usuarios/{user}' , [UserController::class, 'show'])->name('users.show')
        ->middleware('can:users.show');

    Route::delete('usuarios/eliminar/{user}' , [UserController::class, 'destroy'])->name('users.destroy')
        ->middleware('can:users.destroy');

    Route::get('usuarios/{user}/edit' , [UserController::class, 'edit'])->name('users.edit')
        ->middleware('can:users.edit');

    Route::put('usuarios/{user}' , [UserController::class, 'update'])->name('users.update')
        ->middleware('can:users.edit');

    //perfil de usuario
    Route::get('usuarios/perfil-edit/{user}' , [UserController::class, 'editPerfil'])->name('users.perfil-edit')
        ->middleware('can:users.perfil-edit');

    Route::put('usuarios/perfil-update/{user}' , [UserController::class, 'updatePerfil'])->name('users.perfil-update')
        ->middleware('can:users.-perfil-update');

    Route::get('usuarios/perfil/{user}' , [UserController::class, 'showPerfil'])->name('users.perfil-show')
        ->middleware('can:users.perfil-show');

    //Docentes
    Route::post('docentes/store' , [DocenteController::class, 'store'])->name('docentes.store')
        ->middleware('can:docentes.create');

    Route::get('docentes/' , [DocenteController::class, 'index'])->name('docentes.index')
        ->middleware('can:docentes.index');

    Route::get('docentes/create' , [DocenteController::class, 'create'])->name('docentes.create')
        ->middleware('can:docentes.create');

    Route::put('docentes/{docente}' , [DocenteController::class, 'update'])->name('docentes.update')
        ->middleware('can:docentes.edit');

    Route::get('docentes/{docente}' , [DocenteController::class, 'show'])->name('docentes.show')
        ->middleware('can:docentes.show');

    Route::delete('docentes/eliminar/{docente}' , [DocenteController::class, 'destroy'])->name('docentes.destroy')
        ->middleware('can:docentes.destroy');

    Route::get('docentes/{docente}/edit' , [DocenteController::class, 'edit'])->name('docentes.edit')
        ->middleware('can:docentes.edit');


    //Inscripciones
    //dd('Estoy aquí rutas incripciones');
    Route::post('inscripciones/crear' , [InscripcionController::class, 'confirmar'])->name('inscripciones.confirmar')
        ->middleware('can:inscripciones.confirmar');

    Route::get('inscripciones/' , [InscripcionController::class, 'index'])->name('inscripciones.index')
        ->middleware('can:inscripciones.index');

    Route::get('inscripciones/{actividad}/nuevo' , [InscripcionController::class, 'create'])->name('inscripciones.create')
        ->middleware('can:inscripciones.create');

    Route::delete('inscripciones/eliminar/{inscripcion}' , [InscripcionController::class, 'destroy'])->name('inscripciones.destroy')
        ->middleware('can:inscripciones.destroy');

});
