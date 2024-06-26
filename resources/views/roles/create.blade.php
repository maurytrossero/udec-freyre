@extends('layout')

@section('title', "Crear Rol")

@section('content')

<div class="text-center mt-4 mb-4">
    <h2 class="text-primary font-weight-bold">Crear Rol</h2>
</div>

    <div class="card">
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4>Por favor, revisa los siguientes errores</h4>
                </div>
            @endif


            <form method="POST" action="{{ url('/roles/store') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name" >Nombre: </label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Admin" value="{{ old('name')}}">
                </div>
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('name') }}</p>
                    </div>
                @endif


                <div class="form-group">
                    <label for="description" >Descripción: </label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Este rol permite" value="{{ old('description')}}">
                </div>
                @if ($errors->has('description'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('description') }}</p>
                    </div>
                @endif

                <button type="submit" class="btn-primary"> <span class="oi oi-people"></span>   Crear Rol</button>
                <a href="{{ route('roles.index') }}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
            </form>
        </div>
    </div>

@endsection
