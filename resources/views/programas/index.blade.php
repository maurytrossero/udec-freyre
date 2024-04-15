@extends('layout')

@section('title', 'Programas')

@section('content')
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">
            <div class="d-flex justify-content-between align-items-end mb-2">
                @can('programas.create')
                    <a href="{{ route('programas.create') }}" class="btn btn-primary btn-block">
                        <span class="oi oi-dashboard"></span> Crear un Nuevo Programa</a>
                @endcan
            </div>
        </div>
    </div>

    @if($programas->isNotEmpty())
        <!-- Programas -->
        <div class="services page_section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1>Programas</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($programas as $programa)
                    <div class="col-lg-4 mb-4">
                        <div class="service_item text-center border border-warning rounded p-3">
                            <div class="icon_container d-flex justify-content-center align-items-center">
                                <img src="{{asset('images/earth-globe.svg')}}" alt="">
                            </div>
                            <h3>{{ $programa->getNombre()}}</h3>
                            <p>{{ $programa->getDescripcion()}}</p>

                            <div class="d-flex justify-content-center">
                                @can('programas.edit')
                                <a href="{{ route('programas.edit',  $programa) }}" class="btn btn-link mr-2">
                                    <span class="oi oi-pencil"></span> Editar Programa
                                </a>
                                @endcan

                                @can('programas.destroy')
                                <form action="{{ route('programas.destroy',  $programa) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-link">
                                        <span class="oi oi-trash"></span> Eliminar Programa
                                    </button>
                                </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p class="text-center">No hay programas registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection
