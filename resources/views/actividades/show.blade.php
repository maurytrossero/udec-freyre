@extends('layout')

@section('title', "Actividad {$actividad->id}")

@section('content')

<div class="text-center mt-4 mb-4">
    <h2 class="text-primary font-weight-bold">Detalles de actividad</h2>
</div>

<div class="card">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr>
                        <th>Nombre:</th>
                        <td>{{ $actividad->getNombre() }}</td>
                    </tr>
                    <tr>
                        <th>Descripción:</th>
                        <td>{{ $actividad->getDescripcion() }}</td>
                    </tr>
                    <tr>
                        <th>Tipo de Actividad:</th>
                        <td>{{ $tipo_actividad->getNombre() }}</td>
                    </tr>
                    <tr>
                        <th>Fecha de inicio:</th>
                        <td>{{ \Carbon\Carbon::parse($actividad->getFechaInicio())->format('d/m/Y') }}</td>
                    </tr>
                    <tr>
                        <th>Fecha de finalización estimada:</th>
                        <td>{{ \Carbon\Carbon::parse($actividad->getFechaFinalizacion())->format('d/m/Y') }}</td>
                    </tr>
                    <tr>
                        <th>Día de Cursado:</th>
                        <td>{{ $actividad->getDiaCursado() }}</td>
                    </tr>
                    <tr>
                        <th>Horario:</th>
                        <td>{{ $actividad->getHorario() }}</td>
                    </tr>
                    <tr>
                        <th>Docente:</th>
                        <td>
                            <ul class="list-unstyled">
                                @foreach($docentes as $docente)
                                <li>{{ $docente->nombre }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Inscripciones:</th>
                        <td>{{ $actividad->getEstadoInscripcion() }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="buttons mt-4 text-center"> <!-- Añadido 'text-center' para centrar los botones horizontalmente -->
            <div class="d-flex flex-column flex-md-row justify-content-center"> <!-- Agregado un contenedor flexible -->
                @if($actividad->getEstadoInscripcion() == 'abierta')
                <a href="{{ route('inscripciones.create', $actividad) }}" class="btn btn-primary mr-md-2 mb-2 mb-md-0"> <!-- Agregadas clases para disposición responsiva -->
                    <span class="oi oi-action-undo"></span> Inscribir actividad</a>
                @endif
        
                @can('actividades.edit')
                <a href="{{ route('actividades.edit',$actividad)}}" class="btn btn-primary mr-md-2 mb-2 mb-md-0"> <!-- Agregadas clases para disposición responsiva -->
                    <span class="oi oi-pencil"></span> Editar detalles</a>
                @endcan
        
                @can('actividades.edit')
                <form action="{{ route('actividades.destroy',  $actividad) }}" method="POST" class="mr-md-2 mb-2 mb-md-0"> <!-- Agregadas clases para disposición responsiva -->
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger w-100"> <!-- Añadida clase 'w-100' para ocupar todo el ancho en dispositivos móviles -->
                        <span class="oi oi-trash"></span> Eliminar Actividad
                    </button>
                </form>
                @endcan
        
                <a href="{{ route('actividades.index') }}" class="btn btn-secondary"> <!-- Agregado el botón "Regresar" al contenedor flexible -->
                    <span class="oi oi-arrow-left"></span> Regresar
                </a>
            </div>
        </div>
        

    </div>
</div>

@endsection
