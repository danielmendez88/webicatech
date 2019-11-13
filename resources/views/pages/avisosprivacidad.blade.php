@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Avisos de Privacidad | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->
<div class="container g-pt-25">
    <section class="text-left">
        <div class="container">
            <img src="Imagenes Pagina/aviso_de_privacidad.jpg" class="img-responsive" width="100%" alig="center">
        </div>
          <br>
            <p><b><h5>AVISOS DE PRIVACIDAD INTEGRALES</h5></b></p>

     <div class="card rounded-0 g-brd-none">
       <div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
        <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
         <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-01" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-01">
          <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
            <i class="fa fa-plus"></i>
            <i class="fa fa-minus"></i>
            </span>
              <span class="g-pa-20">
                    Instituto de Capacitación y Vinculación Técnologica del Estado de Chiapas
               </span>
         </a>
        </h5>
       </div>
            <div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
              <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
               <ul class="list-unstyled">
                 @foreach ($avis_inte as $key => $value)
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
                           Unidad Ejecutiva
                      </span>
                </a>
               </h5>
              </div>
                   <div id="accordion-07-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
                     <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                      <ul class="list-unstyled">
                        @foreach ($unejec as $key => $value)
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
                    Dirección Juridica
                </span>
                </a>
              </h5>
              </div>
              <div id="accordion-07-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-03" data-parent="#accordion-07">
              <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                <ul class="list-unstyled">
                    @foreach ($unjuri as $key => $value)
                    <!--Area de Informatica-->
                    <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                      <div class="d-flex justify-content-start">
                        <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                        
                      </div>
                      <div class="d-flex justify-content-between">
                        <ul class="u-list-inline">
                                            
                        </ul>
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

      
            <!--Dirección administrativa!-->

            <div class="card rounded-0 g-brd-none">
              <div id="accordion-07-heading-04" class="u-accordion__header g-pa-0" role="tab">
              <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-04" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-04">
                <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus"></i>
                </span>
                <span class="g-pa-20">
                    Dirección Administrativa
                </span>
                </a>
              </h5>
              </div>
              <div id="accordion-07-body-04" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-04" data-parent="#accordion-07">
              <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                <ul class="list-unstyled">
                    @foreach ($diradm as $key => $value)
                    <!--Area de Informatica-->
                    <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                      <div class="d-flex justify-content-start">
                        <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                        
                      </div>
                      <div class="d-flex justify-content-between">
                        <ul class="u-list-inline">
                                            
                        </ul>
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
            <!--Fin Dirección Adminsitriva!-->

            <!--Dirección planeación-->
             <div class="card rounded-0 g-brd-none">
              <div id="accordion-07-heading-05" class="u-accordion__header g-pa-0" role="tab">
              <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-05" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-05">
                <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus"></i>
                </span>
                <span class="g-pa-20">
                    Dirección de Planeación
                </span>
                </a>
              </h5>
              </div>
              <div id="accordion-07-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-05" data-parent="#accordion-07">
              <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                <ul class="list-unstyled">
                    @foreach ($dirplan as $key => $value)
                     <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                      <div class="d-flex justify-content-start">
                        <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                        
                      </div>
                      <div class="d-flex justify-content-between">
                        <ul class="u-list-inline">
                                            
                        </ul>
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
            <!--fin planeacion!-->

            <!--dirección vinculacion!-->
            <div class="card rounded-0 g-brd-none">
              <div id="accordion-07-heading-06" class="u-accordion__header g-pa-0" role="tab">
              <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-06" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-06">
                <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus"></i>
                </span>
                <span class="g-pa-20">
                    Dirección de Vinculación
                </span>
                </a>
              </h5>
              </div>
              <div id="accordion-07-body-06" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-06" data-parent="#accordion-07">
              <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                <ul class="list-unstyled">
                    @foreach ($dirvincula as $key => $value)
                     <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                      <div class="d-flex justify-content-start">
                        <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                        
                      </div>
                      <div class="d-flex justify-content-between">
                        <ul class="u-list-inline">
                                            
                        </ul>
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
             <!--fin vinculacion!-->
             
            <!--Tecnica academica!-->
            <div class="card rounded-0 g-brd-none">
              <div id="accordion-07-heading-07" class="u-accordion__header g-pa-0" role="tab">
              <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-07" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-07">
                <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus"></i>
                </span>
                <span class="g-pa-20">
                    Dirección Técnica Acádemica
                </span>
                </a>
              </h5>
              </div>
              <div id="accordion-07-body-07" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-07" data-parent="#accordion-07">
              <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                <ul class="list-unstyled">
                    @foreach ($dirtacad as $key => $value)
                    <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                      <div class="d-flex justify-content-start">
                        <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                        
                      </div>
                      <div class="d-flex justify-content-between">
                        <ul class="u-list-inline">
                                            
                        </ul>
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
              <!--fin tecnica!-->
              <!--comisaria publica-->
              <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-08" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                  <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-08" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-08">
                  <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-minus"></i>
                  </span>
                  <span class="g-pa-20">
                      Comisaria Pública
                  </span>
                  </a>
                </h5>
                </div>
                <div id="accordion-07-body-08" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-08" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                  <ul class="list-unstyled">
                      @foreach ($comi as $key => $value)
                      <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                        <div class="d-flex justify-content-start">
                          <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                          
                        </div>
                        <div class="d-flex justify-content-between">
                          <ul class="u-list-inline">
                                              
                          </ul>
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
              <!--fin comisaria-->
            <p><b><h5>AVISOS DE PRIVACIDAD SIMPLIFICADOS</h5></b></p>
   
            <div class="card rounded-0 g-brd-none">
              <div id="accordion-07-heading-09" class="u-accordion__header g-pa-0" role="tab">
               <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-09" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-09">
                 <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                   <i class="fa fa-plus"></i>
                   <i class="fa fa-minus"></i>
                   </span>
                     <span class="g-pa-20">
                           Instituto de Capacitación y Vinculación Técnologica del Estado de Chiapas
                      </span>
                </a>
               </h5>
              </div>
                   <div id="accordion-07-body-09" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-09" data-parent="#accordion-07">
                     <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                      <ul class="list-unstyled">
                        @foreach ($avis_simpl as $key => $value)
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
       
                   <!--Unidad ejecutiva!-->
                    <div class="card rounded-0 g-brd-none">
                     <div id="accordion-07-heading-10" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                       <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-10" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-10">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                          <i class="fa fa-plus"></i>
                          <i class="fa fa-minus"></i>
                          </span>
                            <span class="g-pa-20">
                                  Unidad Ejecutiva
                             </span>
                       </a>
                      </h5>
                     </div>
                          <div id="accordion-07-body-10" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-10" data-parent="#accordion-07">
                            <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                             <ul class="list-unstyled">
                               @foreach ($simejec as $key => $value)
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
       
                   <!--Unidad Juridica!-->
                    <div class="card rounded-0 g-brd-none">
                     <div id="accordion-07-heading-11" class="u-accordion__header g-pa-0" role="tab">
                     <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                       <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-11" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-11">
                       <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                         <i class="fa fa-plus"></i>
                         <i class="fa fa-minus"></i>
                       </span>
                       <span class="g-pa-20">
                           Dirección Jurica
                       </span>
                       </a>
                     </h5>
                     </div>
                     <div id="accordion-07-body-11" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-11" data-parent="#accordion-07">
                     <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                       <ul class="list-unstyled">
                           @foreach ($simjuri as $key => $value)
                           <!--Area de Informatica-->
                           <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                             <div class="d-flex justify-content-start">
                               <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                               
                             </div>
                             <div class="d-flex justify-content-between">
                               <ul class="u-list-inline">
                                                   
                               </ul>
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
       
             
                   <!--Dirección administrativa!-->
       
                   <div class="card rounded-0 g-brd-none">
                     <div id="accordion-07-heading-12" class="u-accordion__header g-pa-0" role="tab">
                     <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                       <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-12" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-12">
                       <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                         <i class="fa fa-plus"></i>
                         <i class="fa fa-minus"></i>
                       </span>
                       <span class="g-pa-20">
                           Dirección Administrativa
                       </span>
                       </a>
                     </h5>
                     </div>
                     <div id="accordion-07-body-12" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-12" data-parent="#accordion-07">
                     <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                       <ul class="list-unstyled">
                           @foreach ($simadmi as $key => $value)
                           <!--Area de Informatica-->
                           <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                             <div class="d-flex justify-content-start">
                               <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                               
                             </div>
                             <div class="d-flex justify-content-between">
                               <ul class="u-list-inline">
                                                   
                               </ul>
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
                   <!--Fin Dirección Adminsitriva!-->
       
                   <!--Dirección planeación-->
                    <div class="card rounded-0 g-brd-none">
                     <div id="accordion-07-heading-13" class="u-accordion__header g-pa-0" role="tab">
                     <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                       <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-13" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-13">
                       <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                         <i class="fa fa-plus"></i>
                         <i class="fa fa-minus"></i>
                       </span>
                       <span class="g-pa-20">
                           Dirección de Planeación
                       </span>
                       </a>
                     </h5>
                     </div>
                     <div id="accordion-07-body-13" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-13" data-parent="#accordion-07">
                     <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                       <ul class="list-unstyled">
                           @foreach ($simplan as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                             <div class="d-flex justify-content-start">
                               <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                               
                             </div>
                             <div class="d-flex justify-content-between">
                               <ul class="u-list-inline">
                                                   
                               </ul>
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
                   <!--fin planeacion!-->
       
                   <!--dirección vinculacion!-->
                   <div class="card rounded-0 g-brd-none">
                     <div id="accordion-07-heading-14" class="u-accordion__header g-pa-0" role="tab">
                     <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                       <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-14" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-14">
                       <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                         <i class="fa fa-plus"></i>
                         <i class="fa fa-minus"></i>
                       </span>
                       <span class="g-pa-20">
                           Dirección de Vinculación
                       </span>
                       </a>
                     </h5>
                     </div>
                     <div id="accordion-07-body-14" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-14" data-parent="#accordion-07">
                     <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                       <ul class="list-unstyled">
                           @foreach ($simvincu as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                             <div class="d-flex justify-content-start">
                               <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                               
                             </div>
                             <div class="d-flex justify-content-between">
                               <ul class="u-list-inline">
                                                   
                               </ul>
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
                    <!--fin vinculacion!-->
                    
                   <!--Tecnica academica!-->
                   <div class="card rounded-0 g-brd-none">
                     <div id="accordion-07-heading-15" class="u-accordion__header g-pa-0" role="tab">
                     <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                       <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-15" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-15">
                       <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                         <i class="fa fa-plus"></i>
                         <i class="fa fa-minus"></i>
                       </span>
                       <span class="g-pa-20">
                           Dirección Técnica Acádemica
                       </span>
                       </a>
                     </h5>
                     </div>
                     <div id="accordion-07-body-15" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-15" data-parent="#accordion-07">
                     <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                       <ul class="list-unstyled">
                           @foreach ($simacad as $key => $value)
                           <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                             <div class="d-flex justify-content-start">
                               <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                               
                             </div>
                             <div class="d-flex justify-content-between">
                               <ul class="u-list-inline">
                                                   
                               </ul>
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
                     <!--fin tecnica!-->
                     <!--comisaria publica-->
                     <div class="card rounded-0 g-brd-none">
                       <div id="accordion-07-heading-16" class="u-accordion__header g-pa-0" role="tab">
                         <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                           <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-16" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-16">
                             <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                               <i class="fa fa-plus"></i>
                               <i class="fa fa-minus"></i>
                             </span>
                               <span class="g-pa-20">
                               Comisaria Pública
                               </span>
                           </a>
                         </h5>
                       </div>
                     <div id="accordion-07-body-16" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-16" data-parent="#accordion-07">
                       <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                         <ul class="list-unstyled">
                           @foreach ($simcomi as $key => $value)
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
                     <!--fin comisaria-->         
   </div>
  </section>
@stop