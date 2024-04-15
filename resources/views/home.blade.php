@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 rounded shadow-lg">
                <div class="card-header bg-dark text-white text-center font-weight-bold"><h1 class="display-4">¡Bienvenido a UDEC!</h1></div>

                <div class="card-body bg-light">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-5 mt-5">
                        <p class="text-center mb-3 h4 text-primary">Descubre todo lo que UDEC tiene para ofrecerte.</p>
                        <p class="text-center mb-4 lead">Estamos comprometidos con la excelencia académica y el desarrollo integral de nuestros estudiantes.</p>
                        <p class="text-center mb-4 lead">En UDEC, ofrecemos una amplia gama de programas educativos diseñados para prepararte para el éxito en el mundo profesional.</p>
                        <p class="text-center mb-4 lead">Nuestro objetivo es brindarte las herramientas y los conocimientos necesarios para que puedas alcanzar tus metas personales y profesionales.</p>
                        <p class="text-center mb-0 lead">¡Únete a nosotros y descubre todo lo que UDEC puede hacer por ti!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
