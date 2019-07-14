@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">UDEC</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido a la página oficial de UDEC.
                    A continuación podrá ver y/o inscribirse a nuestros Talleres, Elencos, Cursos y Capacitaciones
                    que tenemos para ofrecerle.

                    <a href="{{ route('actividades.index') }}" class="btn btn-link btn btn-block">Ver Actividades </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
