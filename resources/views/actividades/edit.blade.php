@extends('layout')

@section('title', "Editar Actividad")

@section('content')

    <div class="card">
        <h4 class="card-header"> Editar Actividad</h4>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <h4>Por favor, revisa los siguientes errores</h4>
                </div>
            @endif


                <form method="POST" action="{{ url("/actividades/{$actividad->id}") }}">

                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="nombre" >Nombre: </label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Curso/Capacitación/Taller/Elenco..."
                               value="{{ old('nombre', $actividad->getNombre())}}">
                    </div>
                    @if ($errors->has('nombre'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('nombre') }}</p>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="descripcion" >Descripción: </label>
                        <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="La actividad consiste en..."
                               value="{{ old('descripcion', $actividad->getDescripcion())}}">
                    </div>
                    @if ($errors->has('descripcion'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('descripcion') }}</p>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="fecha_inicio" >Fecha de Inicio: </label>
                        <input type="date" name="fecha_inicio" class="form-control" id="fecha_inicio" placeholder="01/01/2019"
                               value="{{ old('fecha_inicio', date('Y-m-d', strtotime($actividad->getFechaInicio() ) ) )}}">
                    </div>
                    @if ($errors->has('fecha_inicio'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('fecha_inicio') }}</p>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="fecha_finalizacion" >Fecha de Finalización: </label>
                        <input type="date" name="fecha_finalizacion" class="form-control" id="fecha_finalizacion" placeholder="31/12/2019"
                               value="{{ old('fecha_finalizacion',  date('Y-m-d', strtotime($actividad->getFechaFinalizacion())))}}">
                    </div>
                    @if ($errors->has('fecha_finalizacion'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('fecha_finalizacion') }}</p>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="costo" >Costo Mensual: </label>
                        <input type="text" name="costo" class="form-control" id="costo" placeholder="400"
                               value="{{ old('costo', $actividad->getCostoMensual())}}">
                    </div>
                    @if ($errors->has('costo'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('costo') }}</p>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="dia_cursado" >Día de Cursado: </label>
                        <input type="text" name="dia_cursado" class="form-control" id="dia_cursado" placeholder="Miércoles"
                               value="{{ old('dia_cursado', $actividad->getDiaCursado())}}">
                    </div>
                    @if ($errors->has('dia_cursado'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('dia_cursado') }}</p>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="horario" >Horario: </label>
                        <input type="time" name="horario" class="form-control" id="horario" placeholder="14:00..."
                               value="{{ old('horario', $actividad->getHorario())}}">
                    </div>
                    @if ($errors->has('horario'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('horario') }}</p>
                        </div>
                    @endif


                    <button type="submit" class="btn-primary"> <span class="oi oi-dashboard"></span>   Actualizar Actividad</button>
                    <a href="{{ route('actividades') }}" class="btn btn-link"> <span class="oi oi-action-undo"></span>   Regresar </a>
                </form>
        </div>
    </div>

@endsection
