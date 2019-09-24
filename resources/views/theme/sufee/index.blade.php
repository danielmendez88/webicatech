<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset("assets/vendors/bootstrap/dist/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/font-awesome/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/themify-icons/css/themify-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/flag-icon-css/css/flag-icon.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/selectFX/css/cs-skin-elastic.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/jqvmap/dist/jqvmap.min.css") }}">


    <link rel="stylesheet" href="{{ asset("assets/css_/style.css") }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->
    @include("theme.sufee.leftpanel")
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include("theme.sufee.header")
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            @yield('contenido')
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ asset("assets/vendors/jquery/dist/jquery.min.js") }} "></script>
    <script src="{{ asset("assets/vendors/popper.js/dist/umd/popper.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/js_/main.js") }}"></script>


    <script src="{{ asset("assets/vendors/chart.js/dist/Chart.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/js_/dashboard.js") }}"></script>
    <script src="{{ asset("assets/js_/widgets.js") }}"></script>
    <script src="{{ asset("assets/vendors/jqvmap/dist/jquery.vmap.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js") }}"></script>
    <script src="{{ asset("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js") }}"></script>

</body>

</html>
