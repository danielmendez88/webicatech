{{-- DISEÑADO Y MODIFICADO POR MIS DANIEL MÉNDEZ CRUZ --}}
@extends('theme.main.index')
{{-- titulo de la plantilla --}}

@section('title', 'Cuenta Pública | Icatech')

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
        <br>
        <div class="masonry-grid row g-mb-0 row-eq-height">
            <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-12 g-mb-30">	
                <img src="{{ asset('Imagenes Pagina/cuenta-publica.jpg') }}" class="img-responsive" width="100%" alig="center">
            </div>
        </div>
        {{-- secciones --}}
        <section class="text-left">
            <div class="card rounded-0 g-brd-none">
                @foreach ($queryCuentaPublica as $itemcuentaPublica => $collective)
                    <h5><b>{{ $collective->nombre }}</b></h5>
                    <div id="accordion-{{ $collective->id }}-heading-01}" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                            <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-{{ $collective->id }}-body-01" data-toggle="collapse" data-parent="#accordion-{{ $collective->id }}" aria-expanded="false" aria-controls="accordion-{{ $collective->id }}-body-01">
                                <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </span>
                                <span class="g-pa-20">
                                    {{ $collective->titulo }}
                                </span>
                            </a>
                        </h5>
                    </div>
                    <div id="accordion-{{ $collective->id }}-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-{{ $collective->id }}-heading-02" data-parent="#accordion-{{ $collective->id }}">
                        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                            <ul class="list-unstyled">
                                @foreach ($subQueryCuentaPublica as $item)
                                    @if ($collective->id == $item->apartados_id)
                                        <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                            <div class="d-flex justify-content-start">
                                                <h6 class="g-font-weight-600 g-color-black">{{ $item->titulo_documento }}</h6>   
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <ul class="u-list-inline"></ul>
                                                    <div class="align-self-center">
                                                        <a class="" href="{{ $item->ruta_archivo }}" target="_blank"><img src="{{ asset('Imagenes Pagina/2.png') }}"alt=""></a>
                                                    </div>
                                            </div>
                                        </li> 
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        {{-- secciones end --}}
        <br>
    </div>
@endsection
{{-- contenido end --}}
