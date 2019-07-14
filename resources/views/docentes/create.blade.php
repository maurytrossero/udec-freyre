@extends('layout')

@section('title', "Crear Docente")

@section('content')
@role('admin')
    <div class="card">
        <h4 class="card-header"> Crear Docente</h4>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4>Por favor, revisa los siguientes errores</h4>
                </div>
            @endif


            <form method="POST" action="{{ url('/docentes/crear') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="nombre" >Nombre: </label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Juan Perez" value="{{ old('nombre')}}">
                </div>
                @if ($errors->has('nombre'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('nombre') }}</p>
                    </div>
                @endif


                <div class="form-group">
                    <label for="dni" >Nro.Documento: </label>
                    <input type="text" name="dni" class="form-control" id="dni" placeholder="35789874" value="{{ old('dni')}}">
                </div>
                @if ($errors->has('dni'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('dni') }}</p>
                    </div>
                @endif


                <div class="form-group">
                    <label for="direccion" >Direccion: </label>
                    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="juanperez@example.com" value="{{ old('direccion')}}">
                </div>
                @if ($errors->has('direccion'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('direccion') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="telefono" >Telefono: </label>
                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="0356415789874" value="{{ old('telefono')}}">
                </div>
                @if ($errors->has('telefono'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('telefono') }}</p>
                    </div>
                @endif

                <button type="submit" class="btn-primary"> <span class="oi oi-people"></span>   Crear Docente</button>
                <a href="{{ route('users.index') }}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
            </form>
        </div>
    </div>
@endrole
@endsection
