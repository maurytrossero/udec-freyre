@extends('layout')

@section('title', "Docente {$docente->id}")

@section('content')

    <div class="card">
        <h4 class="card-header"> Detalles de Docente</h4>
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="table-responsive">

                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Atributo</th>
                                <th scope="col">Detalle</th>
                            </tr>
                            </thead>
                            <tbody>
                        </table>

                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="col">ID</th>
                                    <td>{{ $docente->getId()}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">   Nombre</th>
                                    <td>{{ $docente->getNombre()}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">   Nro.Documento</th>
                                    <td>{{ $docente->getDni()}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">   Telefono</th>
                                    <td>{{ $docente->getTelefono()}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">   Direccion</th>
                                    <td>{{ $docente->getDireccion()}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">   Actividad a cargo</th>
                                    <td>
                                        @foreach($actividades as $actividad)
                                            <li class="align-items-center"> {{ $actividad->nombre }} </li>
                                        @endforeach
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <a href="{{ url ('/docentes/')}}" class="btn btn-primary"> <span class="oi oi-action-undo"></span>  Regresar </a>

                            <a href="{{ route('docentes.edit',$docente)}}" class="btn btn-primary"> <span class="oi oi-action-undo"></span>  Editar detalles </a>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
