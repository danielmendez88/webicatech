{{-- DISEÑADO POR MIS. DANIEL MÉNDEZ CRUZ, ING. ADRIAN ANTONIO TEJEDA --}}

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <title>@yield('title', '404 | Página No Encontrada')</title>
        <!-- CSS Global Compulsory -->
        {{-- Global site tag (gtag.js) - Google Analytics --}}
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155200639-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-155200639-1');
            </script>
        {{-- Global site tag (gtag.js) - Google Analytics --}}
        <link rel="stylesheet" href="{{asset("assets/vendor/bootstrap/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{asset("assets/vendor/bootstrap/offcanvas.css")}}">
        <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>

                        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome-free/css/all.css') }}">
        <link rel="stylesheet" href="{{asset("assets/vendor/icon-line-pro/style.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/icon-line/css/simple-line-icons.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/icon-hs/style.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/hamburgers/hamburgers.min.css")}}">

        <link rel="stylesheet" href="{{asset("assets/css/unify-core.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/unify-components.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/unify-globals.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
        <link rel="stylesheet" href="{{ asset("assets/css/layout.css") }}">
        <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css">
            .error-main{
            background-color: #fff;
            box-shadow: 0px 10px 10px -10px #5D6572;
            }
            .error-main h1{
            font-weight: bold;
            color: #444444;
            font-size: 100px;
            text-shadow: 2px 4px 5px #6E6E6E;
            }
            .error-main h6{
            color: #42494F;
            }
            .error-main h2{
            font-weight: bold;
            color: #444444;
            font-size: 90px;
            text-shadow: 2px 4px 5px #6E6E6E; 
            }
            .error-main p{
            color: #9897A0;
            font-size: 14px; 
            }
        </style>
    </head>
    <body style="margin: 0px;">
            {{-- SECCIÓN CABECERA --}}
                <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section" data-header-fix-moment="300">	
                    <div class="u-header__section u-header__section--light  g-transition-0_3 g-bg-color-header" data-header-fix-moment-exclude="" data-header-fix-moment-classes="u-shadow-v18 g-py-0">
                        <nav class="navbar navbar-expand-lg g-pa-0 g-pt-4 g-pb-4">
                            <div class="container">
                                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                                    <span class="hamburger hamburger--slider">								
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </span>
                                </button>

                                <a href="http://www.chiapas.gob.mx" class="navbar-brand g-text-underline--hover"><img src="../../assets/logo/escudo-icono.png" alt=""></a>
                                <a href="http://www.chiapas.gob.mx" class="g-color-white-opacity-0_9 g-font-size-16 g-font-weight-300 g-font-secondary g-text-underline--hover">chiapas<span class="g-color-white-opacity-0_6">.gob.mx</span></a>

                                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                                    <ul class="navbar-nav ml-auto g-font-size-16 g-font-weight-100">
                                        <li class="nav-item g-mx-10--lg pl-3"><a href="http://www.chiapas.gob.mx/participa" class="nav-link g-color-white-opacity-0_9 g-text-underline--hover ">Participa</a></li>
                                        <li class="nav-item g-mx-10--lg pl-3"><a href="http://www.chiapas.gob.mx/tramites" class="nav-link g-color-white-opacity-0_9 g-text-underline--hover ">Trámites</a></li>
                                        <li class="nav-item g-mx-10--lg pl-3"><a href="http://www.chiapas.gob.mx/gobierno" class="nav-link g-color-white-opacity-0_9 g-text-underline--hover ">Gobierno</a></li>
                                        <li class="nav-item g-mx-10--lg pl-3"><a href="http://www.chiapas.gob.mx/transparencia" class="nav-link g-color-white-opacity-0_9 g-text-underline--hover ">Transparencia</a></li>
                                        <li class="nav-item g-mx-10--lg pl-3"><a href="http://www.chiapas.gob.mx/busquedas" class="nav-link g-color-white-opacity-0_9 g-text-underline--hover"><i class="fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
            {{-- SECCIÓN DE CABECERA END --}}
            <section  style="height: 50px">
            </section>
        {{-- MENU --}}
            <div class="g-brd-around  g-brd-1 g-brd-gray-light-v4-top g-brd-gray-light-v4-bottom g-bg-color-menu g-pt-4 g-pb-4" role="alert">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light g-pa-0 g-right-0 g-bg-color-menu g-pt-4 g-pb-4">
                        <a class="navbar-brand g-color-morado g-font-weight-600 g-font-size-16 d-none d-sm-none d-md-none d-lg-none d-xl-block g-text-underline--hover" href="{{ url('/') }}">ICATECH</a>
                        <a class="navbar-brand g-color-morado g-font-weight-600 g-font-size-16 d-sm-block d-md-block d-lg-block d-xl-none g-text-underline--hover" href="{{ url('/') }}"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav g-font-size-15 g-font-weight-100 ml-auto">

                                <li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="{{ route('conocenos') }}">Conócenos</a></li>
                                <li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="{{ route('cobertura') }}">Cobertura</a></li>
                                <li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="{{ route('oferta-educativa') }}">Cursos</a></li>
                                <li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="{{ route('transparencia') }}">Transparencia</a></li>
                                {{-- <li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="{{ url('/noticias') }}">Noticias</a></li> --}}
                                <li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="{{ route('normatividad') }}">Normatividad</a></li>
                                <li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="{{ route('integridad') }}">Integridad</a></li>
                                {{-- <li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="{{ route('instructores') }}">Instructores</a></li> --}}
                                <!--<li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="/aspirante">Nuevo Aspirante</a></li>-->
                                <li class="nav-item g-mx-5--lg"><a class="nav-link g-color-white--hover g-bg-morado--hover g-rounded-3 g-color-black-opacity-0_9" href="{{ route('convocatoria.instructores.externos') }}">Convocatoria</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        {{-- MENU END --}}
        {{-- CONTENIDO --}}
        <div class="container g-pt-25">
            <div class="masonry-grid row  row-eq-height text-center">
                <div class="col-lg-12 p-3 error-main">
                    <h2 class="m-0">PÁGINA NO ENCONTRADA</h2>
                </div>          
            </div>   
        </div>
        <br>
        {{-- CONTENIDO END --}}
        {{-- FOOTER DEPENDENCIA --}}
        @include("theme.main.footer_dependencia")
        {{-- FOOTER DEPENDENCIA END --}}
        
        {{-- FOOTER --}}
            @include('theme.main.footer')
        {{-- FOOTER END --}}
        
        {{-- CONTENIDO DEL SCRIPT JS --}}
        <script src="{{asset("assets/vendor/jquery/jquery.min.js")}}"></script>
        <script src="{{asset("assets/vendor/jquery-migrate/jquery-migrate.min.js")}}"></script>
        <script src="{{asset("assets/js/ticker.js")}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>

        <script src="{{asset("assets/js/uppercase.js")}}"></script>
    </body>
</html>