@extends('layout')

@section('title', 'Usuarios')

@section('content')

    <div class="d-flex justify-content-between align-items-end mb-2">
        <h1 class="pb-1">{{ $title }}</h1>

        <p>
            <a href="{{ route('users.create') }}" class="btn btn-primary"> <span class="oi oi-people"></span>   Nuevo Usuario</a>
        </p>
    </div>


    @if($users->IsNotEmpty())

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"> <span class="oi oi-person"></span>   ID</th>
                <th scope="col"> <span class="oi oi-fire"></span>   Nombre</th>
                <th scope="col"> <span class="oi oi-envelope-closed"></span>   Email</th>
                <th scope="col"> <span class="oi oi-list"></span>   Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('users.destroy',  $user) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('users.show', $user) }}" class="btn btn-link"> <span class="oi oi-eye"></span> </a>
                                <a href="{{ route('users.edit',  $user) }}" class="btn btn-link"> <span class="oi oi-pencil"></span> </a>
                                <button type="submit" class="btn btn-link"> <span class="oi oi-trash"></span> </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <p>No hay usuarios Registrados</p>
    @endif
@endsection

@section('sidebar')
    @parent


@endsection
