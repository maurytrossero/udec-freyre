<?php

namespace App\Http\Controllers;

use App\Docente;
use App\User;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();
        $title= 'Listado de docentes';
        //dd($docentes);
        return view('docentes.index', compact('title', 'docentes'));
    }

    public function show($id)
    {
        $docente = Docente::findOrFail($id);
        $actividades = $docente->actividades()->get();

        return view('docentes.show')
            ->with('docente',$docente)
            ->with('actividades',$actividades);
    }

    public function create()
    {
        return view('docentes.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nombre' => 'required',
            'dni' => 'required|numeric|min:5',
        ],
            [
                'nombre.required' => 'El nombre es obligatorio',
                'dni.numeric' => 'El DNI debe contener solo números',
                'dni.required' => 'Debe ingresar el DNI del docente',
                'dni.min' => 'El DNI debe contener como mínimo 6 numeros',
            ]);

        $docente = new Docente();
        $docente->setNombre(request()->input('nombre'));
        $docente->setDni(request()->input('dni'));

        if(request()->input('direccion')!= null )
        {
            $docente->setDireccion(request()->input('direccion'));
        }

        if(request()->input('telefono'))
        {
            $docente->setTelefono(request()->input('telefono'));
        }

        $docente->save();


        return redirect('docentes')
            ->with('info', 'Docente registrado con éxito');;
    }

    public function edit(Docente $docente)
    {
        return view('docentes.edit', ['docente' => $docente]);
    }

    public function update(Docente $docente)
    {

        $data = request()->validate([
            'nombre' => 'required',
            'dni' => 'required|numeric|min:5',
        ],
            [
                'nombre.required' => 'El nombre es obligatorio',
                'dni.numeric' => 'El DNI debe contener solo números',
                'dni.required' => 'Debe ingresar el DNI del docente',
                'dni.min' => 'El DNI debe contener como mínimo 6 numeros',
            ]);

        $docente->setNombre(request()->input('nombre'));
        $docente->setDni(request()->input('dni'));

        if(request()->input('direccion')!= null )
        {
            $docente->setDireccion(request()->input('direccion'));
        }

        if(request()->input('telefono'))
        {
            $docente->setTelefono(request()->input('telefono'));
        }

        $docente->update();

        return redirect()->route('docentes.show', ['docente' => $docente])
            ->with('info', 'Docente actualizado con éxito');;
    }

    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index')
            ->with('info', 'Docente eliminado con éxito');;
    }
}
