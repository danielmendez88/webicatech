{{-- DISEÑADO POR MIS. DANIEL MÉNDEZ CRUZ, ING. ADRIAN ANTONIO TEJEDA --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>@yield('title', 'Instituto de Capacitación y Vinculación Tecnológica del Estado de Chiapas | Icatech')</title>
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
    <style>
        .redes_sociales {
            text-align: right;
            top: -2.2em;
            position: relative;
        }
    </style>
    {{-- yield script css --}}
    @yield('csscontent')
    {{-- yield script css --}}
</head>
<body style="margin: 0px;">
        @include("theme.main.header")
    {{-- SECCION MENU --}}
        @include("theme.main.menu")
    {{-- SECCION MENU END --}}
    
    {{-- CONTENIDO --}}
        @yield('contenido')
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
    {{-- CONTENIDO DEL SCRIPT JS --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    {{-- YIELD SCRIPT --}}
    @yield('contentScriptJs')
    {{-- YIELD SCRIPT END --}}
</body>
</html>