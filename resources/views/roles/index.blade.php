@extends('layout')

@section('title', 'Roles')

@section('content')
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">
            <div class="d-flex justify-content-between align-items-end mb-2">
                <h4 class="pb-1">{{ $title }}</h4>
            </div>
            <div class="d-flex justify-content-between align-items-end mb-2">


                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-block">
                        <span class="oi oi-people"></span>   Nuevo Rol</a>


            </div>
        </div>
    </div>


    @if($roles->IsNotEmpty())

        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">
                <div class="table-responsive">
                    <table class="table table table-striped table-bordered table-condensed table-hover small">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <th scope="row">{{ $role->id }}</th>
                                <td>{{ $role->name }}</td>
                                <td>

                                    @can('roles.destroy')
                                        <form action="{{ route('roles.destroy',  $role) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            @can('roles.show')
                                                <a href="{{ route('roles.show', $role) }}" class="btn btn-link"> <span class="oi oi-eye"></span> </a>
                                            @endcan
                                            @can('roles.edit')
                                                <a href="{{ route('roles.edit',  $role) }}" class="btn btn-link"> <span class="oi oi-pencil"></span> </a>
                                                <button type="submit" class="btn btn-link"> <span class="oi oi-trash"></span> </button>
                                            @endcan
                                        </form>
                                    @endcan


                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    @else
        <p>No hay roles Registrados</p>
    @endif
@endsection


@section('sidebar')
    @parent


@endsection
