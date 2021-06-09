{{-- DISEÑADO POR MIS. DANIEL MÉNDEZ CRUZ AÑO 2021 --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Plantilla de tablero de Administración')</title>
    {{-- estilos layouts --}}
    <link rel="stylesheet" href="{{ asset('assets/css_/dashboard/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css_/shared/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css_/dashboard/table.css') }}">
    {{-- estilos layouts END --}}
    {{-- estilos vendor --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icons-css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ionicons/ionicons.css') }}">
    {{-- estilos vendor END --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-5.0.1/css/bootstrap.css') }}">
    
    {{-- iconos --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    {{-- iconos END --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome-free/css/all.css') }}">
    @yield('contentSyles')
</head>
<body>
    {{-- CONTENEDOR DE SCROLLER --}}
    <div class="container-scroller">
        {{-- SECCIONES NAV--}}
        @include('theme.dashboard.nav')
        {{-- SECCIONES NAV END --}}
        {{-- SECCIONES CONTENEDOR--}}
        <div class="container-fluid page-body-wrapper">
          {{-- SIDEBAR --}}
            @include('theme.dashboard.sidebar')
          {{-- SIDEBAR END --}}
          {{-- SECCION CONTENEDOR PANEL PRINCIPAL--}}
            <div class="main-panel">
              <div class="content-wrapper">
                {{-- INICIO DEL ENCABEZADO DEL TITULO DE LA PÁGINA --}}
                <div class="row page-title-header">
                  <div class="col-12">
                    <div class="page-header">
                      <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                        <ul class="quick-links ml-auto">
                          <li><a href="#">Tablero de Control</a></li>
                          <li><a href="#">Indice</a></li>
                          <li><a href="#">Principal</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="page-header-toolbar">
                      <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                      </div>
                      <div class="filter-wrapper">
                        <div class="dropdown toolbar-item">
                          <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                            
                          </div>
                        </div>
                      </div>
                      <div class="sort-wrapper">
                        <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- FINAL DEL ENCABEZADO DEL TITULO DE LA PÁGINA --}}
                @yield('contenido')
              </div>
              {{-- SECCION CONTENEDOR PIE DE PÁGINA --}}
              @include('theme.dashboard.footer')
              {{-- SECCION CONTENEDOR PIE DE PAGINA END --}}
              
            </div>
          {{-- SECCION CONTENEDOR PANEL PRINCIPAL END --}}
        </div>
        {{-- SECCIONES CONTENEDOR END --}}
    </div>
    {{-- CONTENEDOR DE SCROLLER END --}}
    {{-- SECCIÓN DE CONTENIDO JAVASCRIPT --}}
    <script src="{{asset("assets/vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{ asset('assets/js_/dashboard/dashboard.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-5.0.1/js/bootstrap.js') }}"></script>
    {{-- SECCIÓN DE CONTENIDO JAVASCRIPT --}}
    @yield('contentScriptJs')
</body>
</html>