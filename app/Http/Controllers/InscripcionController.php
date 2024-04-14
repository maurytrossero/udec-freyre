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
            $usuario_logueado = auth()->user();
            $actividades = $usuario_logueado->actividades()->get();
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

        if(Auth::check())
        {
            $usuario_logueado = auth()->user();

            $usuario_logueado->actividades()->syncWithoutDetaching([$actividad->getId(),['fecha_inscripcion' => $fecha_actual]]);

            return redirect('inscripciones')
                ->with('info', 'Inscripto a la actividad exitosamente');;
        }

        else
        {
            //$usuario_logueado->actividades()->attach($actividad->getId(),['fecha_inscripcion' => $fecha_actual]);

            return view('home');

        }


    }


    public function destroy($id)
    {

        if(Auth::check())
        {
            $usuario_logueado = auth()->user();

            $usuario_logueado->actividades()->detach($id);

            return redirect()->route('inscripciones.index')
                ->with('info', 'Se dio de baja a la inscripción con éxito');;
        }
        else
        {
            return view('home');
        }

    }
}
