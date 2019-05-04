@extends('layout')

@section('title', 'Actividades')

@section('content')

    <div class="d-flex justify-content-between align-items-end mb-2">
        <h1 class="pb-1">{{ $title }}</h1>

        <p>
            <a href="{{ route('actividades.create') }}" class="btn btn-primary">  <span class="oi oi-dashboard"></span> Crear Nueva Actividad</a>
        </p>
    </div>


    @if($actividades->IsNotEmpty())

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"> ID</th>
                <th scope="col"> Nombre</th>
                <th scope="col"> Descripcion</th>
                <th scope="col"> Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach($actividades as $actividad)
                    <tr>
                        <th scope="row">{{ $actividad->id }}</th>
                        <td>{{ $actividad->getNombre() }}</td>
                        <td>{{ $actividad->getDescripcion() }}</td>
                        <td>
                            <form action="{{ route('actividades.destroy',  $actividad) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('actividades.show', $actividad) }}" class="btn btn-link"> <span class="oi oi-eye"></span> </a>
                                <a href="{{ route('actividades.edit',  $actividad) }}" class="btn btn-link"> <span class="oi oi-pencil"></span> </a>
                                <button type="submit" class="btn btn-link"> <span class="oi oi-trash"></span> </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <p>No hay actividades Registradas</p>
    @endif
@endsection

@section('sidebar')
    @parent


@endsection
