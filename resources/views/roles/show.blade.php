@extends('layout')

@section('title', "Docente {$role->id}")

@section('content')
@role('admin')
    <div class="card">
        <h4 class="card-header"> Detalles de Role</h4>
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="table-responsive">

                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Detalle</th>
                            </tr>
                            </thead>
                            <tbody>
                        </table>

                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="col">ID</th>
                                    <td>{{ $role->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <td>{{ $role->name}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Descripcion</th>
                                    <td>{{ $role->description}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Permiso especial</th>
                                    <td>{{ $role->special}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Permisos</th>
                                    <td>
                                        @foreach($permisos as $permiso)
                                            <li>{{ $permiso->name}}</li>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="{{ url ('/roles/')}}" class="btn btn-primary"> <span class="oi oi-action-undo"></span>  Regresar </a>
                        <a href="{{ route('roles.edit',$role)}}" class="btn btn-primary"> <span class="oi oi-action-undo"></span>  Editar detalles </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endrole
@endsection
