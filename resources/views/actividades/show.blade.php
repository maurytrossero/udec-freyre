@extends('layout')

@section('title', "Actividad {$actividad->id}")

@section('content')




    <div class="card">
        <h4 class="card-header"> Detalles de actividad</h4>
        <div class="card-body">

            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">
                    <div class="table-responsive">
                        <table class="table table table-striped table-bordered table-condensed table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Atributo</th>
                                <th scope="col">Detalle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="col"> Nombre</th>
                                <td>{{ $actividad->getNombre()}}</td>
                            </tr>

                            <tr>
                                <th scope="col"> Descripcion</th>
                                <td>{{ $actividad->getDescripcion()}}</td>
                            </tr>

                            <tr>
                                <th scope="col"> Tipo de Actividad</th>
                                <td>{{ $tipo_actividad->getNombre()}}</td>
                            </tr>

                            <tr>
                                <th scope="col"> Fecha de inicio</th>

                                <td>{{ \Carbon\Carbon::parse($actividad->getFechaInicio())->format('d/m/Y')}}</td>
                            </tr>

                            <tr>
                                <th scope="col"> Fecha de finalización estimada</th>
                                <td>{{ \Carbon\Carbon::parse($actividad->getFechaFinalizacion())->format('d/m/Y')}}</td>
                            </tr>

                            <tr>
                                <th scope="col"> Día de Cursado</th>
                                <td>{{ $actividad->getDiaCursado()}}</td>
                            </tr>

                            <tr>
                                <th scope="col"> Horario</th>
                                <td>{{ $actividad->getHorario()}}</td>
                            </tr>

                            <tr>
                                <th scope="col"> Docente: </th>
                                <td>
                                    @foreach($docentes as $docente)
                                        <li class="align-items-center"> {{ $docente->nombre }} </li>
                                    @endforeach
                                </td>
                            </tr>

                            <tr>
                                <th scope="col"> Inscripciones</th>
                                <td>{{ $actividad->getEstadoInscripcion()}}</td>
                            </tr>
                            </tbody>
                        </table>


                        @if($actividad->getEstadoInscripcion() == 'abierta')
                            <a href="{{ route('inscripciones.create', $actividad) }}" class="btn btn-primary">
                                <span class="oi oi-action-undo"></span>   Inscribir actividad</a>
                        @endif


                            <a href="{{ route('actividades.edit',$actividad)}}" class="btn btn-primary">
                                <span class="oi oi-action-undo"></span>  Editar detalles </a>



                        <form action="{{ route('actividades.destroy',  $actividad) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-link"> <span class="oi oi-trash"> Eliminar Actividad</span> </button>
                        </form>


                        <a href="{{ route('actividades.index') }}" class="btn btn-primary">
                            <span class="oi oi-action-undo"></span>   Regresar </a>

                    </div>
                </div>
            </div>

@endsection
