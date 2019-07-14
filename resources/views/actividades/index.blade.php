@extends('layout')

@section('title', 'Actividades')

@section('content')
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">
            <div class="d-flex justify-content-between align-items-end mb-2">
                <h4 class="pb-1">{{ $title }}</h4>
            </div>
            <div class="d-flex justify-content-between align-items-end mb-2">
                @role('admin')
                    @can('actividades.create')
                        <a href="{{ route('actividades.create') }}" class="btn btn-primary btn-block">  <span class="oi oi-dashboard"></span> Crear Nueva Actividad</a>
                    @endcan
                @endrole
            </div>
        </div>
    </div>


    @if($actividades->IsNotEmpty())

        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">
                <div class="table-responsive">
                    <table class="table table table-striped table-bordered table-condensed table-hover small">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($actividades as $actividad)
                            <tr>
                                <th scope="row">{{ $actividad->id }}</th>
                                <td>{{ $actividad->getNombre() }}</td>
                                <td>{{ $actividad->getDescripcion() }}</td>
                                <td>

                                    <a href="{{ route('actividades.show', $actividad) }}" class="btn btn-link"> <span class="oi oi-eye"></span> </a>

                                    @role('admin')
                                        <a href="{{ route('actividades.edit',  $actividad) }}" class="btn btn-link"> <span class="oi oi-pencil"></span> </a>
                                    @endrole

                                    @role('admin')
                                        <form action="{{ route('actividades.destroy',  $actividad) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-link"> <span class="oi oi-trash"></span> </button>
                                        </form>
                                    @endrole

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    @else
        <p>No hay actividades Registradas</p>
    @endif
@endsection

@section('sidebar')
    @parent


@endsection
