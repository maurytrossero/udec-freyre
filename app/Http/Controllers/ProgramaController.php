<?php

namespace App\Http\Controllers;

use App\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    public function index()
    {

        $programas = Programa::all();
        $title= 'Listado de programas';

        return view('programas.index', compact('title', 'programas'));
    }

    public function show($id)
    {
        $programa = Programa::findOrFail($id);

        return view('programas.show')
            ->with('programa',$programa);
    }

    public function create()
    {
        return view('programas.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ],
            [
                'nombre.required' => 'El nombre es obligatorio',
                'descripcion.required' => 'La descripcion es obligatoria',
            ]);

        $programa = new Programa();
        $programa->setNombre(request()->input('nombre'));
        $programa->setDescripcion(request()->input('descripcion'));

        $programa->save();


        return redirect('programas')
            ->with('info', 'Programa registrado con éxito');
    }

    public function edit(Programa $programa)
    {
        return view('programas.edit', ['programa' => $programa]);
    }

    public function update(Programa $programa)
    {

        $data = request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ],
            [
                'nombre.required' => 'El nombre es obligatorio',
                'descripcion.required' => 'La descripcion es obligatoria',
            ]);

        $programa->setNombre(request()->input('nombre'));
        $programa->setDescripcion(request()->input('descripcion'));

        $programa->update();

        return redirect('programas')
            ->with('info', 'Programa actualizado con éxito');
    }

    public function destroy(Programa $programa)
    {
        $programa->delete();
        return redirect()->route('programas.index')
            ->with('info', 'Programa eliminado con éxito');;
    }
}
