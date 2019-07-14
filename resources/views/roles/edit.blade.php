@extends('layout')

@section('title', "Editar Docente")

@section('content')
@role('admin')

    <div class="card">
        <h4 class="card-header"> Editar Rol</h4>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4>Por favor, revisa los siguientes errores</h4>
                </div>
            @endif


            <form method="POST" action="{{ url("/roles/{$role->id}") }}">

                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" >Nombre: </label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Admin"
                           value="{{ old('name', $role->name)}}">
                </div>
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('name') }}</p>
                    </div>
                @endif


                <div class="form-group">
                    <label for="description" >Descripción: </label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Este rol permite"
                           value="{{ old('description', $role->description)}}">
                </div>
                @if ($errors->has('description'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('description') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="password" >Seleccionar permisos especiales para el usuario </label>

                    <div class="form-check">
                        <input type="checkbox" name="select_special_permission_id" value="{{ 'all-access' }}"> Acceso total
                    </div>

                    <div class="form-check">
                        <input type="checkbox" name="select_special_permission_id" value="{{ 'no-access' }}"> Ningún acceso
                    </div>

                </div>

                <!-- Permisos
                <div class="form-group">
                    <label for="password" >Seleccionar permisos para el usuario </label>


                    @foreach($permissions as $permission)
                        <div class="form-check">
                            <input type="checkbox" name="select_permissions_id[]" value="{{ $permission->id }}">{{ $permission->name }}
                        </div>
                    @endforeach
                </div>
                -->

                <button type="submit" class="btn btn-primary"> <span class="oi oi-data-transfer-upload"></span>   Actualizar Rol</button>
                <a href="{{ url ('/roles/')}}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
            </form>
@endrole
@endsection
