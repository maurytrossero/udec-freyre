<?php

namespace App\Http\Controllers;

use App\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {

        $actividades = Actividad::all();
        $title = 'Listado de actividades';

        return view('actividades.index', compact('title', 'actividades'));
    }

    public function show($id)
    {
        $actividad = Actividad::findOrFail($id);

        return view('actividades.show',compact('actividad'));
    }

    public function create()
    {
        return view('actividades.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_inicio' => 'required',
            'fecha_finalizacion' => 'required',
            'costo' => 'required',
            'dia_cursado' => 'required',
            'horario' => 'required',
        ],
            [
                'nombre.required' => 'El nombre es obligatorio',
                'descripcion.required' => 'Se requiere una breve descripcion',
                'fecha_inicio.required' => 'Debe ingresar la fecha de inicio de la actividad',
                'fecha_finalizacion.required' => 'Debe ingresar una fecha de finalizacion estimada',
                'costo.required' => 'Debe ingresar el costo mensual',
                'dia_cursado.required' => 'Debe ingresar el dia de cursado de la actividad',
                'horario.required' => 'Debe ingresar el horario de la actividad',
            ]);

        $actividad = new Actividad();
        $actividad->setNombre(request()->input('nombre'));
        $actividad->setDescripcion(request()->input('descripcion'));
        $actividad->setFechaInicio(request()->input('fecha_inicio'));
        $actividad->setFechaFinalizacion(request()->input('fecha_finalizacion'));
        $actividad->setCostoMensual(request()->input('costo'));
        $actividad->setDiaCursado(request()->input('dia_cursado'));
        $actividad->setHorario(request()->input('horario'));
        $actividad->setEstadoInscripcion('abierta');

        $actividad->save();


        return redirect('actividades');
    }

    public function edit(Actividad $actividad)
    {
        return view('actividades.edit', ['actividad' => $actividad]);
    }

    public function update(Actividad $actividad)
    {

        $data = request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_inicio' => 'required',
            'fecha_finalizacion' => 'required',
            'costo' => 'required',
            'dia_cursado' => 'required',
            'horario' => 'required',
        ],
            [
                'nombre.required' => 'El nombre es obligatorio',
                'descripcion.required' => 'Se requiere una breve descripcion',
                'fecha_inicio.required' => 'Debe ingresar la fecha de inicio de la actividad',
                'fecha_finalizacion.required' => 'Debe ingresar una fecha de finalizacion estimada',
                'costo.required' => 'Debe ingresar el costo mensual',
                'dia_cursado.required' => 'Debe ingresar el dia de cursado de la actividad',
                'horario' => 'Debe ingresar el horario de la actividad',
            ]);

        $actividad->update($data);

        return redirect()->route('actividades.show', ['actividad' => $actividad]);
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividades');
    }
}
