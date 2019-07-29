@extends('layout')

@section('title', "Crear actividad")

@section('content')
@role('admin')
    <div class="card">
        <h4 class="card-header"> Crear actividad</h4>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4> <span class="oi oi-warning"></span>  Por favor, revisa los siguientes errores</h4>
                </div>
            @endif


            <form method="POST" action="{{ url('/actividades/crear') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="nombre" >Nombre: </label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Curso/Capacitación/Taller/Elenco..."
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
                    <label for="fecha_inicio" >Fecha de Inicio: </label>
                    <input type="date" name="fecha_inicio" class="form-control" id="fecha_inicio" placeholder="01/01/2019"
                           value="{{ old('fecha_inicio')}}">
                </div>
                @if ($errors->has('fecha_inicio'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('fecha_inicio') }}</p>
                    </div>
                @endif




                <div class="form-group">
                    <label for="fecha_finalizacion" >Fecha de Finalización: </label>
                    <input type="date" name="fecha_finalizacion" class="form-control" id="fecha_finalizacion" placeholder="31/12/2019"
                           value="{{ old('fecha_finalizacion')}}">
                </div>
                @if ($errors->has('fecha_finalizacion'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('fecha_finalizacion') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="costo" >Costo Mensual: </label>
                    <input type="text" name="costo" class="form-control" id="costo" placeholder="400"
                           value="{{ old('costo')}}">
                </div>
                @if ($errors->has('costo'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('costo') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="dia_cursado" >Día de Cursado: </label>
                    <input type="text" name="dia_cursado" class="form-control" id="dia_cursado" placeholder="Miércoles"
                           value="{{ old('dia_cursado')}}">
                </div>
                @if ($errors->has('dia_cursado'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('dia_cursado') }}</p>
                    </div>
                @endif

                <div class="form-group">
                    <label for="horario" >Horario: </label>
                    <input type="time" name="horario" class="form-control" id="horario" placeholder="14:00..."
                           value="{{ old('horario')}}">
                </div>
                @if ($errors->has('horario'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('horario') }}</p>
                    </div>
                @endif



                <div class="form-group">
                    <label for="tipo_actividad" >Tipo de Actividad: </label>

                    <!-- Box Seleccionar tipo de Actividad
                    <div class="btn-group " role="group" aria-label="Button group with nested dropdown">

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" >
                                Seleccionar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                                @foreach($tipos_actividades as $tipo_actividad)
                                    <a class="dropdown-item" value="{{ $tipo_actividad->getId()}}"> {{$tipo_actividad->getNombre()}} </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    -->

                    <div class="form-group">
                        <select name="select_actividad_id" class="btn btn-light btn-group-vertical btn-block">
                            <option value="null" selected>-- Seleccionar tipo de Actividad -- </option>
                            @foreach($tipos_actividades as $tipo_actividad)

                                <option value="{{ $tipo_actividad->getId()}}"> {{ $tipo_actividad->getNombre() }} </option>

                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('select_actividad_id'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('select_actividad_id') }}</p>
                        </div>
                    @endif

                </div>


                <div class="form-group">
                    <label for="docente" >Docente: </label>

                    <div class="form-group">
                        <select name="select_docente_id" class="btn btn-light btn-group-vertical btn-block">
                            <option value="null" selected>-- Seleccionar docente a cargo -- </option>
                            @foreach($docentes as $docente)

                                <option value="{{ $docente->getId()}}"> {{ $docente->getNombre() }} </option>

                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('select_docente_id'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('select_docente_id') }}</p>
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="imagen" >Imagen: </label>
                    <input type="file" name="imagen" accept=".pdf,.jpg,.png" multiple>
                </div>
                @if ($errors->has('imagen'))
                    <div class="alert alert-danger">
                        <p>{{ $errors->first('imagen') }}</p>
                    </div>
                @endif

                <button type="submit" class="btn-primary"> <span class="oi oi-dashboard"></span>   Crear Actividad</button>
                <a href="{{ route('actividades.index') }}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
            </form>
        </div>
    </div>
@endrole
@endsection
