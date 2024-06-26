@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')

<div class="text-center mt-4 mb-4">
    <h2 class="text-primary font-weight-bold">Detalles de Usuario</h2>
</div>

    <div class="card">

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

                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <tbody>
                            <tr>
                                <th scope="col">ID</th>
                                <td>{{ $user->id}}</td>
                            </tr>
                            <tr>
                                <th scope="col"> <span class="oi oi-fire"></span>  Nombre</th>
                                <td>{{ $user->name}}</td>
                            </tr>
                            <tr>
                                <th scope="col"> <span class="oi oi-envelope-closed"></span>  Email</th>
                                <td>{{ $user->email}}</td>
                            </tr>
                            <tr>
                                <th scope="col"> <span class="oi oi-location"></span>  Dirección</th>
                                <td>{{ $user->direccion}}</td>
                            </tr>
                            <tr>
                                <th scope="col"> <span class="oi oi-phone"></span>  Telefono</th>
                                <td>{{ $user->telefono}}</td>
                            </tr>
                            <tr>
                                <th scope="col"> <span class="oi oi-person"></span>  DNI</th>
                                <td>{{ $user->dni}}</td>
                            </tr>
                            <tr>
                                <th scope="col"> <span class="oi oi-person"></span>  Roles Asignados</th>
                                <td>
                                    @foreach($roles as $rol)
                                        <li>{{ $rol}}</li>
                                    @endforeach
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <a href="{{ url ('/usuarios/')}}" class="btn btn-primary"> <span class="oi oi-action-undo"></span>  Regresar </a>

                        <a href="{{ route('users.edit',$user)}}" class="btn btn-primary"> <span class="oi oi-action-undo"></span>  Editar detalles </a>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
