@extends('layout')

@section('title', 'Programas')

@section('content')
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">

            <div class="d-flex justify-content-between align-items-end mb-2">
                @role('admin')
                    @can('programas.create')
                        <a href="{{ route('programas.create') }}" class="btn btn-primary btn-block">
                            <span class="oi oi-dashboard"></span> Crear Nuevo Programa</a>
                    @endcan
                @endrole
            </div>
        </div>
    </div>


    @if($programas->IsNotEmpty())

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

                @foreach($programas as $programa)

                <div class="row services_row">
                    <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                        <div class="icon_container d-flex flex-column justify-content-end">
                            <img src="{{asset('images/earth-globe.svg')}}" alt="">
                        </div>
                        <h3>{{ $programa->getNombre()}}</h3>
                        <p>{{ $programa->getDescripcion()}}</p>
                    </div>

                </div>
                @endforeach
            </div>
        </div>

    @else
        <p>No hay programas Registrados</p>
    @endif
@endsection

@section('sidebar')
    @parent

@endsection
