<!DOCTYPE html>
<html lang="es">


    <head>
        <title>@yield('title', 'Instituto de Capacitación y Vinculación Tecnológica del Estado de Chiapas | Icatech')</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">


        <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">

        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="{{asset("assets/vendor/bootstrap/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{asset("assets/vendor/bootstrap/offcanvas.css")}}">
        <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{asset("assets/fonts/font-awesome/css/font-awesome.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/icon-line-pro/style.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/icon-line/css/simple-line-icons.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/icon-hs/style.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/dzsparallaxer/dzsparallaxer.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/dzsparallaxer/dzsscroller/scroller.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/dzsparallaxer/advancedscroller/plugin.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/animate.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/typedjs/typed.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/hamburgers/hamburgers.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/fancybox/jquery.fancybox.css")}}">
        <link rel="stylesheet" href="{{asset("assets/vendor/slick-carousel/slick/slick.css")}}">

        <link rel="stylesheet" href="{{asset("assets/css/unify-core.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/unify-components.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/unify-globals.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/principal.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("assets/css/slider_unidad.css")}}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{ asset("assets/stacktable/stacktable.css")}}">
        <link rel="stylesheet" href="{{ asset('assets/css/flavor-lightbox.css') }}">

        <!-- Recaptcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

         <!-- Icons -->
         <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    </head>

    <body>
        @include("theme.convocatorias.header")
        <!--fin seccion-->
        <!-- PAGINA -->
        @yield("content")
        <!-- PAGINA FIN -->

        <!-- FOOTER PORTAL DE GOBIERNO -->
        @include("theme.convocatorias.footer")

            <script src="{{asset("assets/vendor/jquery/jquery.min.js")}}"></script>
            <script src="{{asset("assets/vendor/jquery-migrate/jquery-migrate.min.js")}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            <script src="{{asset("assets/vendor/hs-megamenu/src/hs.megamenu.js")}}"></script>
            <script src="{{asset("assets/vendor/dzsparallaxer/dzsparallaxer.js")}}"></script>
            <script src="{{asset("assets/vendor/dzsparallaxer/dzsscroller/scroller.js")}}"></script>
            <script src="{{asset("assets/vendor/dzsparallaxer/advancedscroller/plugin.js")}}"></script>
            <script src="{{asset("assets/vendor/fancybox/jquery.fancybox.min.js")}}"></script>
            <script src="{{asset("assets/vendor/slick-carousel/slick/slick.js")}}"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

            <script src="{{asset("assets/assets/js/hs.core.js")}}"></script>
            <script src="{{asset("assets/vendor/typedjs/typed.min.js")}}"></script>
            <script src="{{asset("assets/js/components/hs.header.js")}}"></script>
            <script src="{{asset("assets/js/helpers/hs.hamburgers.js")}}"></script>
            <script src="{{asset("assets/js/components/hs.dropdown.js")}}"></script>
            <script src="{{asset("assets/js/components/hs.popup.js")}}"></script>
            <script src="{{asset("assets/js/components/hs.carousel.js")}}"></script>
            <script src="{{asset("assets/js/components/hs.go-to.js")}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
            <script src="{{asset("assets/js/responsiveslides.js")}}"></script>
            <script src="{{ asset("assets/js/scripts/jquery.smartmarquee.js")}}"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
            <script src="{{asset("assets/js/aspirante.js")}}"></script>
            <script src="{{asset("assets/js/uppercase.js")}}"></script>
            <script src="{{asset("assets/js/validate.js")}}"></script>
            <script src="{{ asset("assets/stacktable/stacktable.js") }}"></script>
            <script src="{{ asset('assets/js/jquery.flavor.js') }}"></script>

            <script>
                $('#tblconvocatoria').stacktable({myClass:'table'});
           </script>
           @yield('jquerytype')
    </body>
</html>
