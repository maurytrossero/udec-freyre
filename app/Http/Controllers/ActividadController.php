<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\Docente;
use App\TipoActividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::orderBy('nombre', 'asc')->get();
        //$actividades->paginate(10);
        $title = 'Listado de actividades';

        return view('actividades.index', compact('title', 'actividades'));
    }

    public function show($id)
    {
        $actividad = Actividad::findOrFail($id);
        $tipo_actividad = TipoActividad::findOrFail($actividad->getTipoActividadId());

        $docentes = $actividad->docentes()->get();

        return view('actividades.show')
            ->with('actividad',$actividad)
            ->with('tipo_actividad',$tipo_actividad)
            ->with('docentes', $docentes);
    }

    public function create()
    {
        $tipos_actividades = TipoActividad::all();
        $docentes = Docente::all();

        return view('actividades.create')
            ->with('tipos_actividades',$tipos_actividades)
            ->with('docentes',$docentes);
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

        if(request()->input('select_docente_id')!='null')
        {
            $docente_id=request()->input('select_docente_id');

            $actividad->docentes()->syncWithoutDetaching([$docente_id]);
        }


        return redirect('actividades')
            ->with('info', 'Actividad creada con éxito');
    }

    public function edit(Actividad $actividad)
    {
        $tipos_actividades = TipoActividad::all();
        $docentes = Docente::all();

        return view('actividades.edit', ['actividad' => $actividad,
            'tipos_actividades'=> $tipos_actividades,
            'docentes'=> $docentes]);
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
            $actividad->setTipoActividadId((request()->input('select_actividad_id')));

        }

        if(request()->input('select_estado_inscripcion')!='null')
        {
            $actividad->setEstadoInscripcion((request()->input('select_estado_inscripcion')));
        }

        $actividad->setNombre(request()->input('nombre'));
        $actividad->setDescripcion(request()->input('descripcion'));
        $actividad->setFechaInicio(request()->input('fecha_inicio'));
        $actividad->setFechaFinalizacion(request()->input('fecha_finalizacion'));
        $actividad->setCostoMensual(request()->input('costo'));
        $actividad->setDiaCursado(request()->input('dia_cursado'));
        $actividad->setHorario(request()->input('horario'));

        if(request()->input('select_docente_id')!='null')
        {
            $docente_id=request()->input('select_docente_id');
            $actividad->docentes()->syncWithoutDetaching([$docente_id]);

        }

        $actividad->update();

        return redirect()->route('actividades.show', ['actividad' => $actividad])
            ->with('info', 'Actividad actualizada exitosamente');
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividades.index')
            ->with('info', 'Actividad eliminada con éxito');
    }
}
