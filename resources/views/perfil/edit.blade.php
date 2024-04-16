@extends('layout')

@section('title', "Editar mis datos")

@section('content')

<div class="text-center mt-4 mb-4">
    <h2 class="text-primary font-weight-bold">Editar mis datos personales</h2>
</div>

    <div class="card">
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4>Por favor, revisa los siguientes errores</h4>
                </div>
            @endif


            <form method="POST" action="{{ route('users.perfil-update', Auth::user()->id) }}">

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
                    <input type="text" name="email" class="form-control" id="email" placeholder="juanperez@example.com"
                           value="{{ old('email', $user->email)}} ">

                </div>
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('email') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="dni" >Dni: </label>
                    <input type="text" name="dni" class="form-control" id="dni" placeholder="35478987" value="{{ old('dni', $user->dni)}} ">

                </div>
                @if ($errors->has('dni'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('dni') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="telefono" >Teléfono: </label>
                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="03564 607490" value="{{ old('telefono', $user->telefono)}} ">
                </div>
                @if ($errors->has('telefono'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('telefono') }}</p>
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
                <a href="{{ url ('usuarios/perfil',Auth::user()->id)}}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
            </form>

@endsection
