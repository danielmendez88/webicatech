@extends('theme.main.index')

@section('title', 'Integridad | Icatech')

{{-- contenido --}}
@section('contenido')
    <div class="container-xl">
        <br>
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('Imagenes Pagina/bannericatechintegridad.png') }}" class="img-responsive" width="100%" alig="center">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <center>
                    <a target="_blank"href="codigos_conducta/codigodeetica.pdf" >
                        <img src="{{ asset('Imagenes Pagina/CODIGODEHONESTIDAD.jpg') }}" class="img-thumbnail"/>
                        <h3></h3>
                    </a>
                </center>
            </div>
            <div class="col-md-6">
                <center>
                    <a target="_blank"href="codigos_conducta/códigodeconductaicatech.pdf">
                        <img src="{{ asset('Imagenes Pagina/codigo_deconducta.jpg') }}" class="img-thumbnail">
                        <h3></h3>
                    </a>
                </center>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                {{-- acordeon --}}
                @foreach ($apartados as $itemApartados => $aparts)
                    <div class="card rounded-0 g-brd-none">
                        <div id="accordion-{{ $itemApartados  + 1}}-heading-01" class="u-accordion__header g-pa-0" role="tab">
                            <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                                <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-{{ $itemApartados  + 1}}-body-01" data-toggle="collapse" data-parent="#accordion-{{ $itemApartados  + 1}}" aria-expanded="false" aria-controls="accordion-{{ $itemApartados  + 1}}-body-01">
                                    <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </span>
                                    <span class="g-pa-20">
                                        {{ $aparts->titulo }}
                                    </span>
                                </a>
                            </h5>
                        </div>
                        <div id="accordion-{{ $itemApartados  + 1}}-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-{{ $itemApartados  + 1}}-heading-02" data-parent="#accordion-{{ $itemApartados  + 1}}">
                            <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                                <ul class="list-unstyled">
                                        <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                            <div class="d-flex justify-content-start">
                                                <h5 class="g-font-weight-600 g-color-black">{{ $aparts->nombre }}</h5>   
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <ul class="u-list-inline"></ul>
                                                    <div class="align-self-center">
                                                        <a class="" href="{{ $aparts->ruta_archivo }}" target="_blank"><img src="{{ asset('Imagenes Pagina/2.png') }}"alt=""></a>
                                                    </div>
                                            </div>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- acordeon END --}}
            </div>
        </div>
        <br>
    </div>
@endsection