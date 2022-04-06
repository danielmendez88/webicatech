@extends('theme.main.index')
<!--llamar la plantilla -->
@section('title', 'Licitaciones | Icatech')
<!--tituto de la pestaña -->
@section('contenido')
<!--llama contenido de la pagina -->
<div class="container g-pt-25">
    <br>
    {{-- include social media --}}
    @include('theme.main.media')
    {{-- include social media END --}}

    <img src="Imagenes Pagina/Licitacionesyconcusos.jpg" class="img-responsive" width="100%" alig="center">
        <div class="masonry-grid row  row-eq-height">
            <div class="masonry-grid-sizer col-sm-12"></div>
            <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">
                    <p><h2><b>LICITACIONES:</b></h2></p><br>

                    <p><b><h5>LICITACIONES FEDERALES</h5></b></p><br>

                    <br><b><h6>INVITACIÓN A MENOS 3 PERSONAS</h6></b><br>

                    {{-- PROGRAMA ANUAL DE ADQUISICIONES --}}
                    <div class="card rounded-0 g-brd-none">
                      <div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                            <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-01" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-01">
                              <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                              </span>
                              <span class="g-pa-20">
                                Progama Anual de Adquisiciones
                              </span>
                            </a>
                        </h5>
                      </div>
                      <div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-01" data-parent="#accordion-07">
                        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                            <ul class="list-unstyled">
                              @foreach ($lic_anual_adquisiciones as $key => $value)
                                <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                  <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                  </div>
                                  <div class="d-flex justify-content-between">
                                      <ul class="u-list-inline"></ul>
                                      <div class="align-self-center">
                                        <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes Pagina/2.png"alt=""></a>
                                      </div>
                                  </div>
                                </li>
                              @endforeach 
                            </ul>
                          </div>
                      </div>
                    </div>
                    {{-- PROGRAMA ANUAL DE ADQUISICIONES END --}}

                  {{-- Acta de Apertura de Propuestas Técnicas --}}
                  <div class="card rounded-0 g-brd-none">
                    <div id="accordion-07-heading-02" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-02" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-02">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                              <i class="fa fa-plus"></i>
                              <i class="fa fa-minus"></i>
                            </span>
                            <span class="g-pa-20">
                              Acta de Fallo de Propuesta Técnica
                            </span>
                          </a>
                      </h5>
                    </div>
                    <div id="accordion-07-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
                      <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                          <ul class="list-unstyled">
                            @foreach ($acta_fallo_propuesta_tecnica as $key => $value)
                              <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                  <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                    <div class="align-self-center">
                                      <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes Pagina/2.png"alt=""></a>
                                    </div>
                                </div>
                              </li>
                            @endforeach 
                          </ul>
                        </div>
                    </div>
                  </div>
                  {{-- Acta de Apertura de Propuestas Técnicas END--}}
{{-- ACTA DE APERTURA PROPUESTA TÉCNICA --}}
                  <div class="card rounded-0 g-brd-none">
                    <div id="accordion-07-heading-03" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-03" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                              <i class="fa fa-plus"></i>
                              <i class="fa fa-minus"></i>
                            </span>
                            <span class="g-pa-20">
                              Acta de Apertura de Propuestas Técnicas
                            </span>
                          </a>
                      </h5>
                    </div>
                    <div id="accordion-08-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-03" data-parent="#accordion-07">
                      <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                          <ul class="list-unstyled">
                            @foreach ($acta_apertura_propuestas_tecnicas as $key => $value)
                              <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                  <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                    <div class="align-self-center">
                                      <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes Pagina/2.png"alt=""></a>
                                    </div>
                                </div>
                              </li>
                            @endforeach 
                          </ul>
                        </div>
                    </div>
                  </div>
{{-- ACTA DE APERTURA PROPUESTA TÉCNICA END --}}
            </div>           
        </div>   
  </div>
@stop