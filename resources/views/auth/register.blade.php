@extends('layouts.app2')

@section('content')

    <!-- Register -->

    <div class="register">

        <div class="container-fluid">

            <div class="row row-eq-height">
                <div class="col-lg-6 nopadding">

                    <!-- Registro -->

                    <div class="search_section d-flex flex-column align-items-center justify-content-center">
                        <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
                        <div class="search_content text-center">
                            <h1 class="search_title">Crear cuenta nueva</h1>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <input id="name" class="input_field search_form_name"
                                       type="name" placeholder="Nombre" required="required" data-error="@error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror




                                <input id="email" class="input_field search_form_name"
                                       type="email" placeholder="Email" required="required" data-error="@error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror



                                <input id="password" class="input_field password" type="password" name="password"
                                       placeholder="Contraseña" autocomplete="current-password" data-error="@error('password') is-invalid
                                        @enderror">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror



                                <input id="password-confirm" class="input_field password-confirm" type="password" name="password_confirmation"
                                       placeholder="Confirmar Contraseña" autocomplete="current-password-confirm" data-error="@error('password-confirm') is-invalid
                                        @enderror">
                                @error('password-confirm')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror

                                <button type="submit" class="search_submit_button trans_200"
                                        value="Submit">Registrar</button>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 nopadding">

                    <!-- Login -->

                    <div class="register_section d-flex flex-column align-items-center justify-content-center">
                        <div class="register_content text-center">
                            <h1 class="register_title">¿Ya tiene una cuenta?
                                <span>
                                </span>¡Accede!</h1>
                            <p class="register_text">
                                Ingresa con tu email y accedé a todas las actividades que tenemos disponibles, e inscribite ahora.
                            </p>
                            <div class="button button_1 register_button mx-auto trans_200"><a href="{{ route('login') }}">Ir y loguearme ahora</a></div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <!-- Registrar

    <div class="search_section d-flex flex-column align-items-center justify-content-center">
        <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
        <div class="search_content text-center">
            <h1 class="search_title">Nuevo Usuario</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Registrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    -->

@endsection
