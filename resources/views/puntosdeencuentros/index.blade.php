@extends('layout')

@section('title', 'Puntos de encuentros')

@section('content')
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-12">

            <div class="d-flex justify-content-between align-items-end mb-2">
                @role('admin')
                    @can('puntosdeencuentros.create')
                        <a href="{{ route('puntosdeencuentros.create') }}"
                           class="btn btn-primary btn-block">
                            <span class="oi oi-dashboard"></span> Crear nuevo Punto de Encuentro</a>
                    @endcan
                @endrole
            </div>
        </div>
    </div>


    @if($puntosencuentros->IsNotEmpty())

        <div class="events page_section">
            <div class="container">

                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1>Puntos de encuentros</h1>
                        </div>
                    </div>
                </div>

                <div class="event_items">

                    <!-- Event Item -->
                    @foreach($puntosencuentros as $puntoencuentro)
                    <div class="row event_item">
                        <div class="col">
                            <div class="row d-flex flex-row align-items-end">

                                <div class="col-lg-2 order-lg-1 order-2">
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">{{ \Carbon\Carbon::parse($puntoencuentro->getFechaRealizacion())->format('d')}}</div>
                                        <div class="event_month">{{ \Carbon\Carbon::parse($puntoencuentro->getFechaRealizacion())->format('m')}}</div>
                                    </div>
                                </div>

                                <div class="col-lg-6 order-lg-2 order-3">
                                    <div class="event_content">
                                        <div class="event_name"><a class="trans_200" href="#">{{ $puntoencuentro->getNombre()}}</a></div>
                                        <div class="event_location">{{ $puntoencuentro->getLugar()}}</div>
                                        <p>{{ $puntoencuentro->getDescripcion()}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 order-lg-3 order-1">
                                    <div class="event_image">
                                        <img src="{{asset('images/event_1.jpg')}}" alt="https://unsplash.com/@theunsteady5">
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
        <p>No hay Puntos de Encuentros Registrados</p>
    @endif
@endsection

@section('sidebar')
    @parent

@endsection
