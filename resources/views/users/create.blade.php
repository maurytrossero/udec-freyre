@extends('layout')

@section('title', "Crear Usuario")

@section('content')

<div class="text-center mt-4 mb-4">
    <h2 class="text-primary font-weight-bold">Crear Usuario</h2>
</div>

    <div class="card">
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4>Por favor, revisa los siguientes errores</h4>
                </div>
            @endif


            <form method="POST" action="{{ url('/usuarios/crear') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name" >Nombre: </label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Juan Perez" value="{{ old('name')}}">
                </div>
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('name') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="email" >Email: </label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="juanperez@example.com" value="{{ old('email')}}">
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


                <button type="submit" class="btn-primary"> <span class="oi oi-people"></span>   Crear Usuario</button>
                <a href="{{ route('users.index') }}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
            </form>
        </div>
    </div>

@endsection
