@extends('theme.main.index')
<!--llamar la plantilla -->
@section('title', 'Integridad | Icatech')
{{-- contenido css --}}
@section('csscontent')
    <style>
        .container-xl .row {
            color: #555;
        }
        .accordion button {
            color: #555;
            text-decoration: none;
            text-align: left;
        }
        ul li {
            text-align: left;
            right: 15px;
        }
        .accordion ul {
            list-style: none;
            position: relative;
            left: 15px;
        }
        ul li a {
            color: #621132;
            outline: none;
        }
        .text-center {
            text-align: center!important;
        }
        p{
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }
        tbody tr td a.docpdf i {
            color: #000000;
        }
        tbody tr td a.docletter {
            color: #621132;
            outline: none;
        }
        .avatar {
            vertical-align: middle;
            width: 95px;
            height: 115px;
            margin-top: 1.2em;
        }
    </style>
@endsection
{{-- contenido css END --}}
<!--tituto de la pestaña -->
@section('contenido')
<!--llama contenido de la pagina -->

<div class="container-xl">
    <br><br>
    {{-- include social media --}}
    @include('theme.main.media')
    {{-- include social media END --}}
    {{-- <div class="row">
        <div class="col-md-12">
            <img src="{{ asset('Imagenes Pagina/bannericatechintegridad.png') }}" class="img-responsive" width="100%" alig="center">
        </div>
    </div> --}}
    {{-- <div class="row">
        <div class="col-md-6">
            <center>
                <a target="_blank" href="{{ asset('codigos_conducta/codigo_de_honestidad_etica_2021.pdf') }}" >
                    <img src="{{ asset('Imagenes Pagina/CODIGODEHONESTIDAD.jpg') }}" class="img-thumbnail">
                </a>
            </center>
        </div>
        <div class="col-md-6">
            <center>
                <a target="_blank" href="{{ asset('codigos_conducta/codigodeconductaicatech.pdf') }}">
                    <img src="{{ asset('Imagenes Pagina/codigo_deconducta.jpg') }}" class="img-thumbnail">
                </a>
            </center>
        </div>
    </div> --}}
    
    
{{-- MODIFICACIONES AL BLOQUE INTEGRIDAD --}}
    <div class="row">
        <div class="col-lg-4 col-xs-4 g-mb-25">
            <aside class="u-shadow-v11 rounded g-pa-30">
                <div class="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h5>
                                        <i class="fas fa-angle-double-down"></i>
                                        Integridad
                                    </h5>
                                </button>
                            </h2>
                        </div>
                       {{-- collapse --}}
                       <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                           <div class="card-body">
                               <ul>
                                   <li>
                                       <a href="{{ route('integridad') }}"><i class="mr-2 fas fa-angle-right"></i>Normatividad</a>
                                   </li>
                                   <li>
                                        <a href="{{ route('integridad.introduccion') }}"><i class="mr-2 fas fa-angle-right"></i>Introducción</a>
                                   </li>
                                   <li>
                                        <a href="{{ route('integridad.objetivo') }}"><i class="mr-2 fas fa-angle-right"></i>Objetivo</a>
                                   </li>
                                   <li>
                                        <a href="{{ route('integridad.acta.instalacion') }}"><i class="mr-2 fas fa-angle-right"></i>Acta de Instalación</a>
                                   </li>
                                   <li>
                                        <a href="{{ route('integridad.directorio.cepci') }}"><i class="mr-2 fas fa-angle-right"></i>Directorio del CEPCI</a>
                                   </li>
                                   <li>
                                        <a href="{{ route('integridad.codigo.conducta') }}"><i class="mr-2 fas fa-angle-right"></i>Código de Conducta</a>
                                   </li>
                                   <li>
                                        <a href="{{ route('integridad.quejas.denuncias') }}"><i class="mr-2 fas fa-angle-right"></i>Protocolo de Atención a Quejas o Denuncias</a>
                                   </li>
                                   <li>
                                       <a href="{{ route('integridad.pronunciamiento') }}"><i class="mr-2 fas fa-angle-right"></i>Pronunciamiento</a>
                                   </li>
                                   <li>
                                       <a href="{{ route('integridad.directorio.consejeros') }}"><i class="mr-2 fas fa-angle-right"></i>Directorio Consejeros</a>
                                   </li>
                                   <li>
                                       <a href="{{ route('integridad.directorio.asesores') }}"><i class="mr-2 fas fa-angle-right"></i>Directorio Asesores</a>
                                   </li>
                                   <li>
                                       <a href="{{ route('integridad.informe.anual.actividades') }}"><i class="mr-2 fas fa-angle-right"></i>Informe Anual de Actividades</a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                      {{-- collapse END --}}
                    </div>
                </div>
            </aside>
        </div>
        <div class="col-lg-8 g-mb-30 g-mb-0--lg">
            @yield('contenido_integridad')
        </div>
    </div>
{{-- MODIFICACIONES AL BLOQUE INTEGRIDAD END --}}
    <br>
</div>
@stop