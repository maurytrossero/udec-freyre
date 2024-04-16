@extends('layout')

@section('title', "Crear actividad")

@section('content')
<div class="text-center mt-4 mb-4">
    <h2 class="text-primary font-weight-bold">Suscribirse a una actividad</h2>
</div>

    <div class="card">

        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4> <span class="oi oi-warning"></span>  Por favor, revisa los siguientes errores</h4>
                </div>
            @endif


            <form method="POST" action="{{ route('inscripciones.confirmar', ['actividad' => $actividad]) }}">
                {!! csrf_field() !!}


                <div class="form-group">
                    <label for="user_name" >Usuario que se suscribe:</label>
                    <input type="text" disabled="true" name="user_name" class="form-control" id="user_name" placeholder=""
                           value="{{ $usuario_logueado->name }}">
                </div>

                <div class="form-group">
                    <label for="actividad_name" >Actividad: </label>
                    <input type="text" disabled="true" name="actividad_name"  class="form-control" id="actividad_name"
                           value="{{ $actividad->getNombre() }}">
                </div>

                <button type="submit" class="btn-primary"> <span class="oi oi-dashboard"></span>   Suscribirse a esta actividad</button>
                <a href="{{ route('inscripciones.index') }}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
            </form>
        </div>
    </div>

@endsection
