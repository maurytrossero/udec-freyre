@extends('layout')

@section('title', 'Usuarios')

@section('content')

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">
            <div class="d-flex justify-content-between align-items-end mb-2">
                <h4 class="pb-1">{{ $title }}</h4>
            </div>
            <div class="d-flex justify-content-between align-items-end mb-2">
                <a href="{{ route('users.create') }}" class="btn btn-primary btn btn-block"> <span class="oi oi-people"></span>   Nuevo Usuario</a>
            </div>
        </div>
    </div>


    @if($users->IsNotEmpty())

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover small">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col ">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name  }}        
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @can('users.destroy')
                                        <form action="{{ route('users.destroy',  $user) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            @can('users.show')
                                                <a href="{{ route('users.show', $user) }}" class="btn btn-link"> <span class="oi oi-eye"></span> </a>
                                            @endcan
                                            @can('users.edit')
                                                <a href="{{ route('users.edit',  $user) }}" class="btn btn-link"> <span class="oi oi-pencil"></span> </a>
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
        <p>No hay usuarios Registrados</p>
    @endif

@endsection

@section('sidebar')
    @parent

@endsection
