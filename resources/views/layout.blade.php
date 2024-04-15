<!DOCTYPE html>
<html lang="en">
<head>
    <title>UDEC</title>
    <meta charset="utf-8">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css')}}" integrity="sha256-CNwnGWPO03a1kOlAsGaH5g8P3dFaqFqqGFV/1nkX5OU=" crossorigin="anonymous" />


</head>
<body>

<div class="super_container">
   

<!-- Header -->
<header class="header d-flex flex-row justify-content-between align-items-center">
    <!-- Logo -->
    <div class="logo_container mr-auto">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
            <span></span>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="main_nav_container">
        <div class="main_nav">
            <ul class="main_nav_list d-flex flex-wrap justify-content-center align-items-center">
                <!-- Aquí va el código para la autenticación y las opciones de navegación -->
                @guest
                    <li class="main_nav_item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="main_nav_item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                    @endif
                @else
                    <li class="main_nav_item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="dropdown-item" href="{{ route('users.perfil-show', Auth::user()->id) }}">
                                Mi Perfil
                            </a>
                            <form id="logout-form" action="{{ route('users.perfil-show', Auth::user()->id) }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <!-- Opciones de navegación restantes -->
                <li class="main_nav_item"><a href="{{ url('/actividades/') }}">Actividades</a></li>
                @can('docentes.index')
                    <li class="main_nav_item"><a href="{{ url('/docentes/') }}">Docentes</a></li>
                @endcan
                @can('inscripciones.index')
                    <li class="main_nav_item"><a href="{{ url('/inscripciones/') }}">Inscripciones</a></li>
                @endcan
                @can('users.index')
                    <li class="main_nav_item"><a href="{{ url('/usuarios/') }}">Usuarios</a></li>
                @endcan
                @can('roles.index')
                    <li class="main_nav_item"><a href="{{ url('/roles/') }}">Roles</a></li>
                @endcan
                <li class="main_nav_item"><a href="{{ url('/programas/') }}">Programas</a></li>
                <li class="main_nav_item"><a href="{{ url('/puntosdeencuentros/') }}">Puntos de Encuentros</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hamburger -->
    <div class="hamburger_container mr-auto">
        <i class="fas fa-bars trans_200"></i>
    </div>
</header>



    <!-- Menu -->
    <div class="menu_container menu_mm">

        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>

        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <ul class="menu_list menu_mm">

                    <!-- Opciones de login -->

                @guest
                        <li class="menu_item menu_mm">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="menu_item menu_mm">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="menu_item menu_mm dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                <a class="dropdown-item" href="{{ route('users.perfil-show',Auth::user()->id) }}">
                                    Mi Perfil
                                </a>

                                <form id="logout-form" action="{{ route('users.perfil-show',Auth::user()->id) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    @endguest


                    <li class="menu_item menu_mm"><a href="{{ url ('/actividades/')}}">Actividades</a></li>

                    @can('inscripciones.index')
                        <li class="menu_item menu_mm"><a href="{{ url ('/inscripciones/')}}">Inscripciones</a></li>
                    @endcan

                    @can('docentes.index')
                        <li class="menu_item menu_mm"><a href="{{ url ('/docentes/')}}">Docentes</a></li>
                    @endcan

                    @role('admin')
                        @can('users.index')
                        <li class="menu_item menu_mm"><a href="{{ url ('/usuarios/')}}">Usuarios</a></li>
                        @endcan
                    @endrole

                    @role('admin')
                    @can('roles.index')
                        <li class="menu_item menu_mm"><a href="{{ url ('/roles/')}}">Roles</a></li>
                    @endcan
                    @endrole

                    <li class="menu_item menu_mm"><a href="{{ url ('/programas/')}}">Programas</a></li>

                    <li class="menu_item menu_mm"><a href="{{ url ('/puntosdeencuentros/')}}">Puntos de Encuentros</a></li>

                </ul>

                <!-- Menu Social

                <div class="menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                -->
            </div>

        </div>

    </div>

    <!-- Home -->

    <div class="home">

        <!-- Hero Slider -->
        <div class="hero_slider_container">
            <div class="hero_slider owl-carousel">

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url({{asset('images/slider_background.jpg')}})"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Más de 40 <span>Actividades</span> disponibles</h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url({{asset('images/slider_background.jpg')}})"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> <span>Inscribite</span> hoy mismo</h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200"> Ant... </span></div>
            <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200"> Sig... </span></div>
        </div>

    </div>

    <div class="hero_boxes">
        <div class="hero_boxes_inner">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="{{asset('images/earth-globe.svg')}}" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Actividades</h2>
                                <a href="{{ url ('/actividades/')}}" class="hero_box_link">ver más</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="{{asset('images/books.svg')}}" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Inscripciones</h2>
                                <a href="{{ url ('/inscripciones/')}}" class="hero_box_link">ver más</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="{{asset('images/professor.svg')}}" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Docentes</h2>
                                <a href="{{ url ('/actividades/')}}" class="hero_box_link">ver más</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="row mt-3">
            <div class="col-12">
                @if(session('info'))
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="alert alert-success">
                                    {{ session('info') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @yield('content')

            </div>
    </main>

<!-- Actividades -->
    <div class="events page_section">
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>
                            <a href="{{ route('actividades.index') }}">Actividades</a>

                        </h1>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Programas -->

    <div class="services page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>
                            <a href="{{ route('programas.index') }}">Programas</a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Puntos de encuentros -->

    <div class="events page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>
                            <a href="{{ route('puntosdeencuentros.index') }}">Puntos de encuentros</a>
                        </h1>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="container">



            <!-- Footer Content -->

            <div class="footer_content">
                <div class="row">

                    <!-- Footer Column - About -->
                    <div class="col-lg-3 footer_col">

                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo">
                                <img src="{{asset('images/logo.png')}}" alt="">
                                <span>udec</span>
                            </div>
                        </div>

                        <p class="footer_about_text">
                            Se trata de una propuesta que tiene como objetivo formar a las
                            personas para la generación de empleo e integrar comunitariamente.
                        </p>

                    </div>

                    <!-- Footer Column - Menu -->

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Menu</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_list_item"><a href="{{ url ('/home/')}}">Home</a></li>
                                <li class="footer_list_item"><a href="{{ url ('/actividades/')}}">Actividades</a></li>
                                <li class="footer_list_item"><a href="{{ url ('/programas/')}}">Programas</a></li>
                                <li class="footer_list_item"><a href="{{ url ('/puntosdeencuentros/')}}">Puntos de Encuentro</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column - Usefull Links

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Links</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_list_item"><a href="#">Actividades</a></li>
                                <li class="footer_list_item"><a href="#">Programas</a></li>
                                <li class="footer_list_item"><a href="#">Puntos de Encuentro</a></li>
                            </ul>
                        </div>
                    </div>
                    -->

                    <!-- Footer Column - Contact -->

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Contacto</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    Bv 25 de Mayo 728
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    03564 15560500
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>udec@freyre.gov.ar
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Copyright -->

            <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                <div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | UDEC </a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                </div>
                <div class="footer_social ml-sm-auto">
                    <ul class="menu_social">
                        <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>

</div>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>




</body>
</html>
