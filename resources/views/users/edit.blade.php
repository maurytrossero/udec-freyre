@extends('layout')

@section('title', "Editar Usuario")

@section('content')
    <h1>Editar Usuario</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <h4>Por favor, revisa los siguientes errores</h4>
        </div>
    @endif


    <form method="POST" action="{{ url("/usuarios/{$user->id}") }}">

        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="name" >Nombre: </label>
        <input type="text" name="name" id="name" placeholder="Juan Perez" value="{{ old('name', $user->name) }}">
        <br>
        @if ($errors->has('name'))
            <div class="alert alert-danger">
                <p>{{ $errors->first('name') }}</p>
            </div>
        @endif



        <label for="email" >Email: </label>
        <input type="text" name="email" id="email" placeholder="juanperez@example.com" value="{{ old('email', $user->email)}} ">
        <br>
        @if ($errors->has('email'))
            <div class="alert alert-danger">
                <p>{{ $errors->first('email') }}</p>
            </div>
        @endif


        <label for="password" >Contraseña: </label>
        <input type="password" name="password" id="password" placeholder="mayor a 8 caracteres" >
        <br>
        @if ($errors->has('password'))
            <div class="alert alert-danger">
                <p>{{ $errors->first('password') }}</p>
            </div>
        @endif


        <button type="submit">Actualizar Usuario</button>
        <a href="{{ url ('/usuarios/')}}"> Regresar </a>
    </form>


@endsection
