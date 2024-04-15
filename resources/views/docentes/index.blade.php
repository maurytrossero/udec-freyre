@extends('layout')

@section('title', 'Docentes')

@section('content')
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">
            <div class="text-center mt-4 mb-4">
                <h2 class="text-primary font-weight-bold">{{ $title }}</h2>
            </div>
            
            <div class="d-flex justify-content-between align-items-end mb-2">

                    <a href="{{ route('docentes.create') }}" class="btn btn-primary btn-block"> <span class="oi oi-people"></span>   Nuevo Docente</a>

            </div>
        </div>
    </div>


    @if($docentes->isNotEmpty())
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($docentes as $docente)
                            <tr>
                                <td>{{ $docente->getId() }}</td>
                                <td>{{ $docente->getNombre() }}</td>
                                <td>{{ $docente->getDni() }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @can('docentes.show')
                                            <a href="{{ route('docentes.show', $docente) }}" class="btn btn-link mr-2">
                                                <span class="oi oi-eye"></span>
                                            </a>
                                        @endcan
                                
                                        <a href="{{ route('docentes.edit',  $docente) }}" class="btn btn-link mr-2">
                                            <span class="oi oi-pencil"></span>
                                        </a>
                                
                                        <form action="{{ route('docentes.destroy',  $docente) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-link">
                                                <span class="oi oi-trash"></span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@else
    <p>No hay docentes registrados</p>
@endif

@endsection

@section('sidebar')
    @parent


@endsection
