<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\TipoActividad;
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
        $tipo_actividad = TipoActividad::findOrFail($actividad->getTipoActividadId());

        return view('actividades.show')
            ->with('actividad',$actividad)
            ->with('tipo_actividad',$tipo_actividad);

    }

    public function create()
    {

        $tipos_actividades = TipoActividad::all();

        return view('actividades.create')
            ->with('tipos_actividades',$tipos_actividades);
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
            'select_actividad_id' => 'numeric',

        ],
            [
                'nombre.required' => 'El nombre es obligatorio',
                'descripcion.required' => 'Se requiere una breve descripcion',
                'fecha_inicio.required' => 'Debe ingresar la fecha de inicio de la actividad',
                'fecha_finalizacion.required' => 'Debe ingresar una fecha de finalizacion estimada',
                'costo.required' => 'Debe ingresar el costo mensual',
                'dia_cursado.required' => 'Debe ingresar el dia de cursado de la actividad',
                'horario.required' => 'Debe ingresar el horario de la actividad',
                'select_actividad_id.numeric' => 'Debe elegir  un tipo de actividad',
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

        if(request()->input('select_actividad_id')!='null')
        {
            $actividad->setTipoActividadId((request()->input('select_actividad_id')));

        }

        $actividad->save();


        return redirect('actividades');
    }

    public function edit(Actividad $actividad)
    {
        $tipos_actividades = TipoActividad::all();


        return view('actividades.edit', ['actividad' => $actividad,'tipos_actividades'=> $tipos_actividades]);
    }

    public function update(Actividad $actividad)
    {

        request()->validate([
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

        if(request()->input('select_actividad_id')!='null')
        {
           // dd((request()->input('select_actividad_id')));
            $actividad->setTipoActividadId((request()->input('select_actividad_id')));

        }

        if(request()->input('select_estado_inscripcion')!='null')
        {
            //dd((request()->input('select_estado_inscripcion')));

            $actividad->setEstadoInscripcion((request()->input('select_estado_inscripcion')));

        }

        $actividad->setNombre(request()->input('nombre'));
        $actividad->setDescripcion(request()->input('descripcion'));
        $actividad->setFechaInicio(request()->input('fecha_inicio'));
        $actividad->setFechaFinalizacion(request()->input('fecha_finalizacion'));
        $actividad->setCostoMensual(request()->input('costo'));
        $actividad->setDiaCursado(request()->input('dia_cursado'));
        $actividad->setHorario(request()->input('horario'));

        $actividad->update();

        return redirect()->route('actividades.show', ['actividad' => $actividad]);
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividades');
    }
}
