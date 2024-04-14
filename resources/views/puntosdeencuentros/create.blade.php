@extends('layout')

@section('title', "Crear Punto de Encuentro")

@section('content')

    <div class="card">
        <h4 class="card-header"> Crear punto de encuentro</h4>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4> <span class="oi oi-warning"></span>  Por favor, revisa los siguientes errores</h4>
                </div>
            @endif


            <form method="POST" action="{{ url('/puntosdeencuentros/crear') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="nombre" >Nombre: </label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Punto de encuentro en..."
                           value="{{ old('nombre')}}">
                </div>
                @if ($errors->has('nombre'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('nombre') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="descripcion" >Descripcion: </label>
                    <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="La actividad consiste en..."
                           value="{{ old('descripcion')}}">
                </div>
                @if ($errors->has('descripcion'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('descripcion') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="fecha_realización" >Fecha de Realizacion: </label>
                    <input type="date" name="fecha_realización" class="form-control" id="fecha_realización" placeholder="01/01/2019"
                           value="{{ old('fecha_realización')}}">
                </div>
                @if ($errors->has('fecha_realización'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('fecha_realización') }}</p>
                    </div>
                @endif


                <div class="form-group">
                    <label for="lugar" >Lugar: </label>
                    <input type="text" name="lugar" class="form-control" id="lugar" placeholder=""
                           value="{{ old('lugar')}}">
                </div>
                @if ($errors->has('lugar'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('lugar') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="imagen" >Imagen: </label>
                    <input type="file" name="imagen" accept=".pdf,.jpg,.png" multiple>
                </div>
                @if ($errors->has('imagen'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('imagen') }}</p>
                    </div>
                @endif


                <button type="submit" class="btn-primary"> <span class="oi oi-dashboard"></span>   Crear punto de encuentro</button>
                <a href="{{ route('puntosdeencuentros.index') }}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
            </form>
        </div>
    </div>



@endsection
