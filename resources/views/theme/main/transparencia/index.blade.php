@extends('theme.main.index')
@section('csscontent')
    <style>
        .imgRedonda {
            width:230px;
            height:230px;
            border-radius:160px;
            margin-right: 7em;
            margin-left: 5em;
            padding: 2em;
        }
    </style>
@endsection
{{-- contenido --}}
@section('contenido')
    <div class="container-xl">
        <br><br>
        {{-- include social media --}}
		@include('theme.main.media')
		{{-- include social media END --}}
        <div class="masonry-grid row g-mb-0 row-eq-height">
            <div class="masonry-grid-sizer col-sm-12"></div><br>
            <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-12 g-mb-30">					
                <img src="{{ asset('Imagenes Pagina/banner icatechtransparencia4.png') }}" class="img-responsive" width="100%">
            </div>
            <div class="row mb-3">
                <div class="col-md-2 g-mb-30">
                    <a href="http://icatech.transparencia.chiapas.gob.mx" target="_new">
                        <img src="{{ asset('Imagenes Pagina/transparencia-icatech.png') }}" class="imgRedonda">
                    </a>
                </div>
                <div class=" col-md-2 g-mb-30">
                    <a href="{{ route('cuenta-publica') }}">
                        <img src="{{ asset('Imagenes Pagina/cuentapublica-icatech.png') }}" class="imgRedonda">
                    </a>
                </div>
                <div class=" col-md-2  g-mb-30">
                    <a href="{{ route('sevac') }}">
                        <img src="{{ asset('Imagenes Pagina/sevac-icatech.png') }}" class="imgRedonda">
                    </a>
                </div>
                <div class=" col-md-2 g-mb-30">
                    <a href="{{ route('integridad') }}">
                        <img src="{{ asset('Imagenes Pagina/codigodecondcuta-icatech.png') }}" class="imgRedonda">
                    </a>
                </div>
                <div class=" col-md-2  g-mb-30">
                    <a href="{{ route('licitaciones') }}">
                        <img src="{{ asset('Imagenes Pagina/licitaciones-icatech.png') }}" class="imgRedonda">
                    </a>
                </div>
            </div>
        </div>

        <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-01" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-01">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                            <span class="g-pa-20">
                                PLAN ANUAL DE DESARROLLO ARCHIVISTICO
                            </span>
                        </a>
                    </h5>
                </div>
                
                {{-- acordion --}}
                <div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-01" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                           @foreach ($programactividades_codigo as $k => $v)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $k }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                    <div class="align-self-center">
                                      <a class="" href="{{ $v }}" target="_blank"><img src="{{ asset('Imagenes Pagina/2.png') }}"alt=""></a>
                                    </div>
                                </div>
                            </li>  
                           @endforeach
                        </ul>
                    </div>
                </div>
                {{-- acordion END --}}
        </div>
        <br>
        <hr>
        <div class="masonry-grid row g-mb-0 row-eq-height">
            <div class="row mb-3">
                <div class="col-md-2 g-mb-30">
                    <a href="http://inicio.inai.org.mx/SitePages/ifai.aspx" title="Inai" target="_blank"><img src="{{ asset('Imagenes Pagina/inai.png') }}" alt="Inai" width="100%" height="60"><span></span></a>
                </div>
                <div class="col-md-2 g-mb-30">
                    <a href="http://www.iaipchiapas.org.mx/" title="Iaip" target="_blank"><img src="{{ asset('Imagenes Pagina/iaip.png') }}" alt="Pnt" width="100%" height="60"><span></span></a>
                </div>
                <div class="col-md-2 g-mb-30">
                    <a href="http://consultapublicamx.inai.org.mx:8080/vut-web/?idSujetoObigadoParametro=1184&amp;idEntidadParametro=07&amp;idSectorParametro=21" title="Consulta Ciudadana" target="_blank"><img src="{{ asset('Imagenes Pagina/banner_consulta.jpg') }}" alt="Pnt" width="100%" height="60"><span></span></a>
                </div>
                <div class="col-md-2 g-mb-30">
                    <a href="https://www.plataformadetransparencia.org.mx/web/guest/inicio" title="PNT" target="_blank"><img src="{{ asset('Imagenes Pagina/banner_pnt.jpg') }}" alt="Pnt" width="100%" height="60"><span></span></a>
                </div>
                <div class="col-md-2 g-mb-30">
                    <a href="https://www.plataformadetransparencia.org.mx/web/guest/sac" title="Ssci" target="_blank"><img src="{{ asset('Imagenes Pagina/sisai.png') }}" alt="Pnt" width="100%" height="60"><span></span></a>
                </div>
                <div class="col-md-2 g-mb-30">
                    <a href="https://www.plataformadetransparencia.org.mx/web/guest/inicio?p_p_id=58&p_p_lifecycle=1&p_p_state=maximized&p_p_mode=view&_58_struts_action=%2Flogin%2Fcreate_account" title="Sipot" target="_blank"><img src="{{ asset('Imagenes Pagina/sipot.png') }}" alt="Pnt" width="100%" height="60"><span></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- contenido end --}}
