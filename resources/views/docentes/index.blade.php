@extends('layout')

@section('title', 'Docentes')

@section('content')

    <div class="d-flex justify-content-between align-items-end mb-2">
        <h1 class="pb-1">{{ $title }}</h1>

        <p>
            <a href="{{ route('docentes.create') }}" class="btn btn-primary"> <span class="oi oi-people"></span>   Nuevo Docente</a>
        </p>
    </div>


    @if($docentes->IsNotEmpty())

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"> ID</th>
                <th scope="col"> Nombre</th>
                <th scope="col"> Documento</th>
                <th scope="col"> <span class="oi oi-list"></span> Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach($docentes as $docente)
                    <tr>
                        <th scope="row">{{ $docente->getId() }}</th>
                        <td>{{ $docente->getNombre() }}</td>
                        <td>{{ $docente->getDni() }}</td>
                        <td>
                            <form action="{{ route('docentes.destroy',  $docente) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('docentes.show', $docente) }}" class="btn btn-link"> <span class="oi oi-eye"></span> </a>
                                <a href="{{ route('docentes.edit',  $docente) }}" class="btn btn-link"> <span class="oi oi-pencil"></span> </a>
                                <button type="submit" class="btn btn-link"> <span class="oi oi-trash"></span> </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <p>No hay docentes Registrados</p>
    @endif
@endsection

@section('sidebar')
    @parent


@endsection
