<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\Inscripcion;
use App\TipoActividad;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class InscripcionController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            $id = auth()->user()->id;

            $usuario_logueado = User::findOrFail($id);//obligamos a usar el modelo user en cuestion, y no el que trae laravel por defecto

            $actividades = $usuario_logueado->actividades;

            //dd($actividades);
            $title = 'Listado de actividades inscriptas';

            return view('inscripciones.index')
                ->with('title', $title)
                ->with('usuario_logueado', $usuario_logueado)
                ->with ('actividades',$actividades);
        }
        else
        {
            return view('home');
        }
    }

    public function show($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        return view('inscripciones.show')
            ->with('inscripcion',$inscripcion);

    }

    public function create(Actividad $actividad)
    {

        $usuario_logueado = auth()->user();

        return view('inscripciones.create')
            ->with('actividad',$actividad)
            ->with('usuario_logueado', $usuario_logueado);
    }

    public function store(Request $request)
    {
        $fecha_actual = Carbon::now()->format('Y-m-d');

        $actividad = Actividad::findOrFail($request->input('actividad'));

        

        if(Auth::check()) {
            $id = auth()->user()->id;

            $usuario_logueado = User::findOrFail($id);
        
            // Verifica si el usuario ya está inscrito en la actividad
            if(!$usuario_logueado->actividades->contains($actividad->id)) {
                // Si no está inscrito, crea una nueva inscripción
                $usuario_logueado->actividades()->attach($actividad->id, ['fecha_inscripcion' => $fecha_actual]);
            } else {
                // Si ya está inscrito, actualiza la fecha de inscripción
                $usuario_logueado->actividades()->updateExistingPivot($actividad->id, ['fecha_inscripcion' => $fecha_actual]);
            }
        
            return redirect('inscripciones')->with('info', 'Inscripto a la actividad exitosamente');
        }
        

        else
        {

            return view('home');

        }


    }


    public function destroy($id)
    {
        if(Auth::check())
        {
            $idUser = auth()->user()->id;
            $usuario_logueado = User::findOrFail($idUser);
    
            // Aquí, $id es el id de la actividad que se desea eliminar de las inscripciones del usuario
            $usuario_logueado->actividades()->detach($id);
    
            return redirect()->route('inscripciones.index')
                ->with('info', 'Se dio de baja a la inscripción con éxito');
        }
        else
        {
            return view('home');
        }
    }
    
}
