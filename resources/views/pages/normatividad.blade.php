@extends('theme.main.index')
<!--llamar la plantilla -->
@section('title', 'Normatividad | Icatech')
<!--tituto de la pestaña -->
@section('contenido')
<!--llama contenido de la pagina -->
    <div class="container g-pt-25">
      <br>
      {{-- include social media --}}
      @include('theme.main.media')
      {{-- include social media END --}}

      <img src="Imagenes Pagina/bannernormatividad.jpg" class="img-responsive" width="100%" alig="center">
     <section class="text-left">
                 <!--nuevo!-->
         <div class="card rounded-0 g-brd-none">
             <div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
                 <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                     <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-01" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-01">
                         <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                         </span>
                         <span class="g-pa-20">
                           Decretos
                         </span>
                     </a>
                 </h5>
             </div>

         <div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
             <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                 <ul class="list-unstyled">
                     @foreach ($deccrea as $key => $value)
                         <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                             <div class="d-flex justify-content-start">
                                 <h6 class="g-font-weight-600 g-color-black">{{ $key }}</h6>
                                     
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
                  <!--decretos!-->

                  <!--reglamentos!-->
                  <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-02" class="u-accordion__header g-pa-0" role="tab">
                         <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-02" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-02">
                           <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                             <i class="fa fa-plus"></i>
                             <i class="fa fa-minus"></i>
                             </span>
                               <span class="g-pa-20">
                                     Reglamento
                                </span>
                          </a>
                         </h5>
                        </div>
                             <div id="accordion-07-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
                               <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                                <ul class="list-unstyled">
                                  @foreach ($reglam as $key => $value)
                                    <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                      <div class="d-flex justify-content-start">
                                        <h6 class="g-font-weight-600 g-color-black">{{ $key }}</h6>
                                        
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
                        <!--fin Reglamentios!-->

                        <!--manual de induccion!-->
                        <div class="card rounded-0 g-brd-none">
                                <div id="accordion-07-heading-03" class="u-accordion__header g-pa-0" role="tab">
                                 <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                                  <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-03" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
                                   <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                     <i class="fa fa-plus"></i>
                                     <i class="fa fa-minus"></i>
                                     </span>
                                       <span class="g-pa-20">
                                             Manual de Inducción
                                        </span>
                                  </a>
                                 </h5>
                                </div>
                                     <div id="accordion-07-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-03" data-parent="#accordion-07">
                                       <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                                        <ul class="list-unstyled">
                                          @foreach ($manual as $key => $value)
                                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                              <div class="d-flex justify-content-start">
                                                <h6 class="g-font-weight-600 g-color-black">{{ $key }}</h6>
                                                
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
                       <!--fin manual!--> 
                  <!--manual de organizacion!-->
                      <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-05" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-05" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-05">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                            </span>
                            <span class="g-pa-20">
                                  Manual de Organización
                            </span>
                          </a>
                        </h5>
                        </div>
                        <div id="accordion-07-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-05" data-parent="#accordion-07">
                          <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                          <ul class="list-unstyled">
                            @foreach ($manualorga as $key => $value)
                              <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                  <h6 class="g-font-weight-600 g-color-black">{{ $key }}</h6>
                                  
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
                  <!--fin manual!-->


                  <!--manual de procedimientos!-->
                      <div class="card rounded-0 g-brd-none">
                          <div id="accordion-07-heading-04" class="u-accordion__header g-pa-0" role="tab">
                            <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                            <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-04" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-04">
                              <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                              </span>
                                  <span class="g-pa-20">
                                        Manual de Procedimientos
                                  </span>
                            </a>
                            </h5>
                          </div>
                          <div id="accordion-07-body-04" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-04" data-parent="#accordion-07">
                            <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                              <ul class="list-unstyled">
                                @foreach ($manualproc as $key => $value)
                                  <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                    <div class="d-flex justify-content-start">
                                      <h6 class="g-font-weight-600 g-color-black">{{ $key }}</h6>
                                      
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
                  <!--fin manual!-->

               <!--Lineaientos!-->
              <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-06" class="u-accordion__header g-pa-0" role="tab">
                  <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                  <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-06" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-06">
                    <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                      <i class="fa fa-plus"></i>
                      <i class="fa fa-minus"></i>
                      </span>
                        <span class="g-pa-20">
                          Lineamientos para los procesos de vinculación y capacitación
                        </span>
                  </a>
                  </h5>
                </div>
                <div id="accordion-07-body-06" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-06" data-parent="#accordion-07">
                  <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                  <ul class="list-unstyled">
                    @foreach ($manual_lineamientos as $key => $value)
                      <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                        <div class="d-flex justify-content-start">
                          <h6 class="g-font-weight-600 g-color-black">{{ $key }}</h6>
                          
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
           <!--fin lineamientos!-->
{{-- Mejora Regulatoria --}}
              <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-07" class="u-accordion__header g-pa-0" role="tab">
                  <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                  <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-07" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-07">
                    <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                      <i class="fa fa-plus"></i>
                      <i class="fa fa-minus"></i>
                      </span>
                      <span class="g-pa-20">
                        Mejora Regulatoria
                      </span>
                  </a>
                  </h5>
                </div>
                <div id="accordion-07-body-07" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-06" data-parent="#accordion-07">
                  <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                  <ul class="list-unstyled">
                    @foreach ($mejora_regulatoria as $key => $value)
                      <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                        <div class="d-flex justify-content-start">
                          <h6 class="g-font-weight-600 g-color-black">{{ $key }}</h6>
                          
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
{{-- Mejora Regulatoria END--}}
{{-- Acta de Instalación de Comité de Tecnologías de Información y Comunicaciones --}}
              <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-08" class="u-accordion__header g-pa-0" role="tab">
                  <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                  <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-08" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-08">
                    <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                      <i class="fa fa-plus"></i>
                      <i class="fa fa-minus"></i>
                      </span>
                      <span class="g-pa-20">
                        Acta de Instalación de Comité de Tecnologías de Información y Comunicaciones (CTIC)
                      </span>
                  </a>
                  </h5>
                </div>
                <div id="accordion-07-body-08" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-08" data-parent="#accordion-07">
                  <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                  <ul class="list-unstyled">
                    @foreach ($ctic as $key => $value)
                      <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                        <div class="d-flex justify-content-start">
                          <h6 class="g-font-weight-600 g-color-black">{{ $key }}</h6>
                          
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
{{-- Acta de Instalación de Comité de Tecnologías de Información y Comunicaciones END --}}           
            </div>
        </div>
    </div>
 
@stop