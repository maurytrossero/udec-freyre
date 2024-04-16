@extends('layout')

@section('title', "Crear Programa")

@section('content')

<div class="text-center mt-4 mb-4">
    <h2 class="text-primary font-weight-bold">Crear programa nuevo</h2>
</div>

    <div class="card">

        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4> <span class="oi oi-warning"></span>  Por favor, revisa los siguientes errores</h4>
                </div>
            @endif

            <form method="POST" action="{{ url('/programas/crear') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="nombre" >Nombre: </label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Programa..."
                           value="{{ old('nombre')}}">
                </div>
                @if ($errors->has('nombre'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('nombre') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="descripcion" >Descripcion: </label>
                    <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="El programa x ..."
                           value="{{ old('descripcion')}}">
                </div>
                @if ($errors->has('descripcion'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('descripcion') }}</p>
                    </div>
                @endif


                <button type="submit" class="btn-primary"> <span class="oi oi-dashboard"></span>   Crear programa</button>
                <a href="{{ route('programas.index') }}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
            </form>
        </div>
    </div>



@endsection
