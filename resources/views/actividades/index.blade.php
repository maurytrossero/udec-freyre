@extends('layout')

@section('title', 'Actividades')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="d-flex justify-content-between align-items-end mb-2">
            @can('actividades.create')
            <a href="{{ route('actividades.create') }}" class="btn btn-primary btn-block">
                <span class="oi oi-dashboard"></span> Crear Nueva Actividad
            </a>
            @endcan
        </div>
    </div>
</div>

@if($actividades->isNotEmpty())
<!-- Popular -->
<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Actividades</h1>
                </div>
            </div>
        </div>

        <div class="row course_boxes">
            <!-- Popular Course Item -->
            @foreach($actividades as $actividad)
            <div class="col-lg-4 course_box mb-4">
                <div class="card h-100">
                    @if($actividad->getImagen()==null)
                    <img class="card-img-top" src="images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
                    @else
                    <img class="card-img-top" src="imagenes/{{$actividad->getImagen()}}" alt="https://unsplash.com/@kellybrito">
                    @endif
                    <div class="card-body text-center d-flex flex-column">
                        <div class="card-title">
                            <a href="{{ route('actividades.show', $actividad) }}">{{ $actividad->getNombre() }}</a>
                        </div>
                        <div class="card-text flex-grow-1">{{ $actividad->getDescripcion() }}</div>
                        <div class="mt-auto">
                            <div class="price_box d-flex flex-row align-items-center justify-content-center align-items-end">
                                <div class="course_author_image">
                                    <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                                </div>
                                <div class="course_author_name">Michael Smith, <span>Docente</span></div>
                                <div class="course_price d-flex flex-column align-items-center justify-content-center" style="background-color:#13547d;">
                                    <span>{{ $actividad->getCostoMensual() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@else
<p>No hay actividades Registradas</p>
@endif
@endsection

@section('sidebar')
@parent
@endsection


