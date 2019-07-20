@extends('layout')

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
                    <h3>
                        Bienvenido a la página oficial de UDEC.
                        A continuación podrá ver y/o inscribirse a nuestros Talleres, Elencos, Cursos y Capacitaciones
                        que tenemos para ofrecerle.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
