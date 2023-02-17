<!DOCTYPE html>
<html lang="en">


    <head>
        <title>@yield('title', 'Noticias | Icatech')</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
                        
        <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet"> 
        
        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="{{asset("assets/vendor/bootstrap/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{asset("assets/vendor/bootstrap/offcanvas.css")}}">
        
        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <link rel="stylesheet" href="{{asset("assets/css/trumbowyg.min.css")}}">
        @yield("content_script_css")
        <!-- Icons -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        
    </head>

    <body>
        @include("theme.lte.header_news")
        <!--fin seccion-->
        <!--seccion menu-->
        @include("theme.lte.menu")
        <!-- PAGINA -->
        @yield("content")
        <!-- PAGINA FIN -->

        <!-- FOOTER DEPENDENCIA -->
        @include("theme.lte.footer_dependency")
    
        <!-- FOOTER PORTAL DE GOBIERNO -->
        @include("theme.lte.footer")

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script src="{{asset("assets/vendor/jquery/jquery.min.js")}}"></script>
            <script src="{{asset("assets/vendor/jquery-migrate/jquery-migrate.min.js")}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
            
            <script src="{{asset("assets/vendor/hs-megamenu/src/hs.megamenu.js")}}"></script>
            <script src="{{asset("assets/vendor/dzsparallaxer/dzsparallaxer.js")}}"></script>
            <script src="{{asset("assets/vendor/dzsparallaxer/dzsscroller/scroller.js")}}"></script>
            <script src="{{asset("assets/vendor/dzsparallaxer/advancedscroller/plugin.js")}}"></script>
            <script src="{{asset("assets/vendor/fancybox/jquery.fancybox.min.js")}}"></script>
            <script src="{{asset("assets/vendor/slick-carousel/slick/slick.js")}}"></script>
            
            <script src="{{asset("assets/assets/js/hs.core.js")}}"></script>
            <script src="{{asset("assets/vendor/typedjs/typed.min.js")}}"></script>
            <script src="{{asset("assets/js/components/hs.header.js")}}"></script>
            <script src="{{asset("assets/js/helpers/hs.hamburgers.js")}}"></script>
            <script src="{{asset("assets/js/components/hs.dropdown.js")}}"></script>
            <script src="{{asset("assets/js/components/hs.popup.js")}}"></script>
            <script src="{{asset("assets/js/components/hs.carousel.js")}}"></script>
            <script src="{{asset("assets/js/components/hs.go-to.js")}}"></script>
            <script src="{{asset("assets/js/responsiveslides.js")}}"></script>
            <script src="{{asset("assets/js/validates.js")}}"></script>
            <script src="{{asset("assets/js/scripts/jquery.smartmarquee.js")}}"></script>
            <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5d51c3873387b20012d77a1a&product='inline-share-buttons" async='async'></script>
            <!--plug in facebook-->
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0&appId=2084976248184121&autoLogAppEvents=1"></script>
            <!--plug in facebook END-->
            <!--plug trumbowyg-->
            <!--plug trumbowyg END-->
            @yield('script_content_js')
            
    </body>
</html>