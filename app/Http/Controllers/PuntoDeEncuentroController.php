<?php

namespace App\Http\Controllers;

use App\PuntoDeEncuentro;
use Illuminate\Http\Request;

class PuntoDeEncuentroController extends Controller
{
    public function index()
    {

        $puntosencuentros = PuntoDeEncuentro::all();
        $title= 'Listado de puntos de encuentros';

        return view('puntosdeencuentros.index', compact('title', 'puntosencuentros'));
    }

    public function show($id)
    {
        $puntoencuentro = PuntoDeEncuentro::findOrFail($id);

        return view('puntosdeencuentros.show')
            ->with('puntoencuentro',$puntoencuentro);
    }

    public function create()
    {
        return view('puntosdeencuentros.create');
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

        $puntoencuentro = new PuntoDeEncuentro();
        $puntoencuentro->setNombre(request()->input('nombre'));
        $puntoencuentro->setDescripcion(request()->input('descripcion'));
        $puntoencuentro->setFechaRealizacion(request()->input('fecha_realizacion'));

        $puntoencuentro->setImagen(request()->input('imagen'));

        $puntoencuentro->save();


        return redirect('puntosdeencuentros.index')
            ->with('info', 'Punto De Encuentro registrado con éxito');;
    }

    public function edit(PuntoDeEncuentro $puntoencuentro)
    {
        return view('puntosdeencuentros.edit', ['puntoencuentro' => $puntoencuentro]);
    }

    public function update(PuntoDeEncuentro $puntoencuentro)
    {

        $data = request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ],
            [
                'nombre.required' => 'El nombre es obligatorio',
                'descripcion.required' => 'La descripcion es obligatoria',
            ]);

        $puntoencuentro->setNombre(request()->input('nombre'));
        $puntoencuentro->setDescripcion(request()->input('descripcion'));
        $puntoencuentro->setFechaRealizacion(request()->input('fecha_realizacion'));

        $puntoencuentro->setImagen(request()->input('imagen'));

        $puntoencuentro->update();

        return redirect()->route('puntosdeencuentros.show', ['puntoencuentro' => $puntoencuentro])
            ->with('info', 'Punto De Encuentro actualizado con éxito');;
    }

    public function destroy(PuntoDeEncuentro $puntoencuentro)
    {
        $puntoencuentro->delete();
        return redirect()->route('puntosdeencuentros.index')
            ->with('info', 'Punto De Encuentro eliminado con éxito');;
    }
}
