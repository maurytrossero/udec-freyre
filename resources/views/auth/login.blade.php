@extends('layouts.app2')

@section('content')

    <!-- Register -->

    <div class="register">

        <div class="container-fluid">

            <div class="row row-eq-height">
                <div class="col-lg-6 nopadding">

                    <!-- Login -->

                    <div class="search_section d-flex flex-column align-items-center justify-content-center">
                        <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
                        <div class="search_content text-center">
                            <h1 class="search_title">Entrar a mi cuenta</h1>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <input id="email" class="input_field email"
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


                                <button type="submit" class="search_submit_button trans_200"
                                        value="Submit">Login</button>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 nopadding">

                    <!-- Register -->

                    <div class="register_section d-flex flex-column align-items-center justify-content-center">
                        <div class="register_content text-center">
                            <h1 class="register_title">¿No tiene una cuenta?
                                <span>
                                </span>¡Registrare!</h1>
                            <p class="register_text">
                                Crea una nueva una cuenta, y accedé a todas las actividades que tenemos disponibles
                            </p>
                            <div class="button button_1 register_button mx-auto trans_200"><a href="{{ route('register') }}">Ira registrarme ahora</a></div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

<!-- Nuevo login
<div class="search_section d-flex flex-column align-items-center justify-content-center">
    <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
    <div class="search_content text-center">
        <h1 class="search_title">Acceso</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid
                                @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            Recordar
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Olvidé mi contraseña
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>

    -->

@endsection
