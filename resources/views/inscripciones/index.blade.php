@extends('layout')

@section('title', 'Inscripciones')

@section('content')
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">
            <div class="text-center mt-4 mb-4">
                <h2 class="text-primary font-weight-bold">{{ $title }}</h2>
            </div>
            

            <div class="d-flex justify-content-between align-items-end mb-2">
                @can('inscripciones.create')
                    <a href="{{ route('actividades.index') }}" class="btn btn-primary btn-block">  <span class="oi oi-dashboard"></span> Ver e Inscribir Actividad</a>
                @endcan
            </div>
        </div>
    </div>


    @if(!is_null($actividades) && $actividades->isNotEmpty())

        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">
                <div class="table-responsive">
                    <table class="table table table-striped table-bordered table-condensed table-hover small">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID inscripción</th>
                            <th scope="col">Actividad Nombre</th>
                            <th scope="col">Fecha de inscripción</th>
                            <th scope="col">Opciones</th>

                        </tr>
                        </thead>

                        <tbody>

                        @foreach($actividades as $actividad)
                            <tr>

                                <th scope="row">{{ $actividad->pivot->id }}</th>

                                <th scope="row">{{ $actividad->getNombre() }}</th>


                                <th scope="row">{{ \Carbon\Carbon::parse($actividad->pivot->fecha_inscripcion)->format('d/m/Y') }}</th>

                                <td>
                                    <form action="{{ route('inscripciones.destroy',  $actividad->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-link"> <span class="oi oi-trash"></span> </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    @else
        <p>No hay inscripciones Registradas</p>
    @endif
@endsection

@section('sidebar')
    @parent


@endsection
