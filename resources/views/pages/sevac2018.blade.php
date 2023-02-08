@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Sevac | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->
    <div class="container g-pt-25">
        <div class="masonry-grid row  row-eq-height">
            <div class="masonry-grid-sizer col-sm-12"></div>
            <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">

                <p><b><h5>INFORMACION SEVAC</h5></b></p><br>


                <b><h4>SEVAC 2018</h4></b><br>
                <b><h5>PRIMER TRIMESTRE 2018</h5></b><br>

                <div class="card rounded-0 g-brd-none">
                    <div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
                     <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                      <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-01" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-01">
                       <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                         <i class="fa fa-plus"></i>
                         <i class="fa fa-minus"></i>
                         </span>
                           <span class="g-pa-20">
                                 Primer Trimestre
                            </span>
                      </a>
                     </h5>
                    </div>
                         <div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
                           <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                            <ul class="list-unstyled">
                              @foreach ($trim2018 as $key => $value)
                                <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                  <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                    <span class="ml-auto small g-color-primary g-px-10">PDF</span>
                                  </div>
                                    <div class="d-flex justify-content-between">
                                      <ul class="u-list-inline"></ul>
                                      <div class="align-self-center">
                                        <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="{{ $value }}" target="_blank">Descargar</a>
                                      </div>
                                    </div>
                                </li>
                               @endforeach 
                            </ul>
                            </div>
                          </div>
                    </div>
                               

                <b><h5>SEGUNDO TRIMESTRE 2018</h5></b> <hr>

                <!--Unidad ejecutiva!-->
             <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-02" class="u-accordion__header g-pa-0" role="tab">
                 <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                  <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-02" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-02">
                   <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                     <i class="fa fa-plus"></i>
                     <i class="fa fa-minus"></i>
                     </span>
                       <span class="g-pa-20">
                             Segundo Trimestre
                        </span>
                  </a>
                 </h5>
                </div>
                     <div id="accordion-07-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
                       <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                          @foreach ($segtrim as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                              <div class="d-flex justify-content-start">
                                <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                <span class="ml-auto small g-color-primary g-px-10">PDF</span>
                              </div>
                                <div class="d-flex justify-content-between">
                                  <ul class="u-list-inline"></ul>
                                  <div class="align-self-center">
                                    <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="{{ $value }}" target="_blank">Descargar</a>
                                  </div>
                                </div>
                            </li>
                           @endforeach 
                        </ul>
                        </div>
                      </div>
                </div>
                                   
                <b><h5>TERCER TRIMESTRE 2018</h5></b> <hr>

                <!--Unidad Juridica!-->
             <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-03" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                  <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-03" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
                  <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-minus"></i>
                  </span>
                  <span class="g-pa-20">
                      Tercer Trimestre
                  </span>
                  </a>
                </h5>
                </div>
                <div id="accordion-07-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-03" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                  <ul class="list-unstyled">
                      @foreach ($tertrim as $key => $value)
                      <!--Area de Informatica-->
                      <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                        <div class="d-flex justify-content-start">
                          <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                          <span class="ml-auto small g-color-primary g-px-10">PDF</span>
                        </div>
                        <div class="d-flex justify-content-between">
                          <ul class="u-list-inline">
                                              
                          </ul>
                          <div class="align-self-center">
                            <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="{{ $value }}" target="_blank">Descargar</a>
                          </div>
                        </div>
                      </li>
                    @endforeach 
                  </ul>
                
                </div>
                </div>
              </div>
              <!--fin!-->
               
            </div>
        </div>
    </div>
@stop