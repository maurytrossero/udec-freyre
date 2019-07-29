<?php

namespace App\Http\Controllers;

use App\PuntoDeEncuentro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PuntoDeEncuentroController extends Controller
{
    public function index()
    {

        $puntosdeencuentros = PuntoDeEncuentro::orderBy('fecha_realización', 'asc')->get();
        $title= 'Listado de puntos de encuentros';

        return view('puntosdeencuentros.index', compact('title', 'puntosdeencuentros'));
    }

    public function show($id)
    {
        $puntodeencuentro = PuntoDeEncuentro::findOrFail($id);

        return view('puntosdeencuentros.show')
            ->with('puntodeencuentro',$puntodeencuentro);
    }

    public function create()
    {
        return view('puntosdeencuentros.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nombre' => 'required',
            'fecha_realización' => 'required',
        ],
            [
                'nombre.required' => 'El nombre es obligatorio',
                'fecha_realización.required' => 'La fecha es obligatoria',
            ]);

        $puntoencuentro = new PuntoDeEncuentro();
        $puntoencuentro->setNombre(request()->input('nombre'));
        $puntoencuentro->setDescripcion(request()->input('descripcion'));
        $puntoencuentro->setFechaRealizacion(request()->input('fecha_realización'));



        if(request()->hasFile('imagen'))
        {
            $archivo = request()->file('imagen');
            $name = time().$archivo->getClientOriginalName();
            $archivo->move(public_path().'/imagenes/', $name);
            $puntoencuentro->setImagen($name);
        }

        $puntoencuentro->save();

        return redirect()->route('puntosdeencuentros.index')
            ->with('info', 'Punto De Encuentro registrado con éxito');
    }

    public function edit(PuntoDeEncuentro $puntodeencuentro)
    {
        return view('puntosdeencuentros.edit', ['puntodeencuentro' => $puntodeencuentro]);
    }

    public function update(PuntoDeEncuentro $puntodeencuentro)
    {

        $data = request()->validate([
            'nombre' => 'required',
        ],
            [
                'nombre.required' => 'El nombre es obligatorio',
            ]);

        $puntodeencuentro->setNombre(request()->input('nombre'));
        $puntodeencuentro->setDescripcion(request()->input('descripcion'));

        if(request()->input('fecha_realización')!=null)
        {
            $puntodeencuentro->setFechaRealizacion(request()->input('fecha_realización'));

        }

        if(request()->hasFile('imagen'))
        {
            $archivo = request()->file('imagen');
            $name = time().$archivo->getClientOriginalName();
            $archivo->move(public_path().'/imagenes/', $name);
            $puntodeencuentro->setImagen($name);

        }


        $puntodeencuentro->update();

        return redirect()->route('puntosdeencuentros.index')
            ->with('info', 'Punto De Encuentro actualizado con éxito');
    }

    public function destroy(PuntoDeEncuentro $puntodeencuentro)
    {
        $puntodeencuentro->delete();
        return redirect()->route('puntosdeencuentros.index')
            ->with('info', 'Punto De Encuentro eliminado con éxito');;
    }
}
