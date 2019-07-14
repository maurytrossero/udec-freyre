@extends('layout')

@section('title', "Editar Docente")

@section('content')
@role('admin')
    <div class="card">
        <h4 class="card-header"> Editar Docente</h4>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4>Por favor, revisa los siguientes errores</h4>
                </div>
            @endif


            <form method="POST" action="{{ url("/docentes/{$docente->id}") }}">

                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nombre" >Nombre: </label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Juan Perez" value="{{ old('nombre', $docente->nombre) }}">
                </div>
                @if ($errors->has('nombre'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('nombre') }}</p>
                    </div>
                @endif


                <div class="form-group">
                    <label for="dni" >Nro. Documento: </label>
                    <input type="text" name="dni" class="form-control" id="dni" placeholder="juanperez@example.com" value="{{ old('dni', $docente->dni)}} ">

                </div>
                @if ($errors->has('dni'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('dni') }}</p>
                    </div>
                @endif


                <div class="form-group">
                    <label for="direccion" >Direccion: </label>
                    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="juanperez@example.com" value="{{ old('direccion', $docente->direccion)}} ">

                </div>
                @if ($errors->has('direccion'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('direccion') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="telefono" >Telefono: </label>
                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="juanperez@example.com" value="{{ old('telefono', $docente->telefono)}} ">

                </div>
                @if ($errors->has('telefono'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('telefono') }}</p>
                    </div>
                @endif


                <button type="submit" class="btn btn-primary"> <span class="oi oi-data-transfer-upload"></span>   Actualizar Docente</button>
                <a href="{{ url ('/docentes/')}}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
            </form>
@endrole
@endsection
