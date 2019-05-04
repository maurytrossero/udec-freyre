@extends('layout')

@section('title', "Editar Usuario")

@section('content')

    <div class="card">
        <h4 class="card-header"> Editar Usuario</h4>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4>Por favor, revisa los siguientes errores</h4>
                </div>
            @endif


            <form method="POST" action="{{ url("/usuarios/{$user->id}") }}">

                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" >Nombre: </label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Juan Perez" value="{{ old('name', $user->name) }}">
                </div>
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('name') }}</p>
                    </div>
                @endif


                <div class="form-group">
                    <label for="email" >Email: </label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="juanperez@example.com" value="{{ old('email', $user->email)}} ">

                </div>
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('email') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="password" >Contraseña: </label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Mayor a 8 caracteres" >
                </div>
                @if ($errors->has('password'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('password') }}</p>
                    </div>
                @endif

                <button type="submit" class="btn btn-primary"> <span class="oi oi-data-transfer-upload"></span>   Actualizar Usuario</button>
                <a href="{{ url ('/usuarios/')}}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
            </form>

@endsection
