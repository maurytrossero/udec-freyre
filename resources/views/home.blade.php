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

                        Udec apunta a la constitución del «Polo Educativo Freyre», para brindar acceso a
                        carreras terciarias, universitarias y secretariados ejecutivos mediante la modalidad a
                        distancia a través de convenios con la Universidad Belgrano de Buenos Aires,
                        Universidad Fasta y AES a los fines de evitar que los vecinos se deban trasladar
                        a otras ciudades.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
