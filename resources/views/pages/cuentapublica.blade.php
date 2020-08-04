@extends("theme.lte.layout")
<!--llamar la plantilla -->
@section('title', 'Cuenta Publica | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->
    <div class="container g-pt-25">
        <div class="masonry-grid row  row-eq-height">
            <div class="masonry-grid-sizer col-sm-12"></div>
            <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">

                <img src="Imagenes Pagina/cuenta-publica.jpg" class="img-responsive" width="100%" alig="center">

  <br><br><b><h4>INFORMACION DE LA CUENTA PUBLICA 2020</h4></b><br>
    <b><h5>PRIMER TRIMESTRE 2020</h5></b><br>
    <!--información financiera 2020!-->
     <div class="card rounded-0 g-brd-none">
         <div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
         <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
             <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-01" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-01">
              <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
               <i class="fa fa-plus"></i>
               <i class="fa fa-minus"></i>
              </span>
                 <span class="g-pa-20">
                  Información Financiera 2020
                 </span>
             </a>
         </h5>
         </div>
           <div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-01" data-parent="#accordion-07">
            <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
             <ul class="list-unstyled">
               @foreach ($infin1t20 as $key => $value)
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
                    <!--fin información financiera!-->
                <!--informacion presupuestal 2020!-->
                <div class="card rounded-0 g-brd-none">
                    <div id="accordion-07-heading-02" class="u-accordion__header g-pa-0" role="tab">
                     <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                      <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-02" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-02">
                       <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                         <i class="fa fa-plus"></i>
                         <i class="fa fa-minus"></i>
                         </span>
                           <span class="g-pa-20">
                                 Información Presupuestal 2020
                            </span>
                      </a>
                     </h5>
                    </div>
                         <div id="accordion-07-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
                           <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                            <ul class="list-unstyled">
                              @foreach ($infpre1t20 as $key => $value)
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
                    <!--fin informacion presupuestal 2020!-->
                    <b><h5>SEGUNDO TRIMESTRE 2020</h5></b><br>
                    <!--información financiera 2 trimestre 2020!-->
                    <div class="card rounded-0 g-brd-none">
                       <div id="accordion-07-heading-03" class="u-accordion__header g-pa-0" role="tab">
                       <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                           <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-03" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                             <i class="fa fa-plus"></i>
                             <i class="fa fa-minus"></i>
                            </span>
                               <span class="g-pa-20">
                                Información Financiera 2 Trimestre 2020
                               </span>
                           </a>
                       </h5>
                       </div>
                         <div id="accordion-07-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-03" data-parent="#accordion-07">
                          <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                           <ul class="list-unstyled">
                             @foreach ($infin2t20 as $key => $value)
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
                                  <!--fin información financiera 2 trimestre!-->
                              <!--informacion presupuestal 2 Trimestre 2020!-->
                              <div class="card rounded-0 g-brd-none">
                                  <div id="accordion-07-heading-04" class="u-accordion__header g-pa-0" role="tab">
                                   <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-04" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-04">
                                     <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                       <i class="fa fa-plus"></i>
                                       <i class="fa fa-minus"></i>
                                       </span>
                                         <span class="g-pa-20">
                                               Información Presupuestal 2 Trimestre 2040
                                          </span>
                                    </a>
                                   </h5>
                                  </div>
                                       <div id="accordion-07-body-04" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-04" data-parent="#accordion-07">
                                         <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                                          <ul class="list-unstyled">
                                            @foreach ($infpre2t20 as $key => $value)
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
                                  <!--fin informacion presupuestal 2 trimestre 2020!-->

                <br><br><b><h4>INFORMACION DE LA CUENTA PUBLICA 2019</h4></b><br>
                    <b><h5>PRIMER TRIMESTRE 2019</h5></b><br>

                <!--información financiera 2019!-->
                    <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-05" class="u-accordion__header g-pa-0" role="tab">
                         <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-05" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-05">
                           <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                             <i class="fa fa-plus"></i>
                             <i class="fa fa-minus"></i>
                             </span>
                               <span class="g-pa-20">
                                     Información Financiera 2019
                                </span>
                          </a>
                         </h5>
                        </div>
                             <div id="accordion-07-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-05" data-parent="#accordion-07">
                               <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                                <ul class="list-unstyled">
                                  @foreach ($infFin as $key => $value)
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
                        <!--fin información financiera!-->
                    <!--informacion presupuestal 2019!-->
                    <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-06" class="u-accordion__header g-pa-0" role="tab">
                         <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-06" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-06">
                           <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                             <i class="fa fa-plus"></i>
                             <i class="fa fa-minus"></i>
                             </span>
                               <span class="g-pa-20">
                                     Información Presupuestal 2019
                                </span>
                          </a>
                         </h5>
                        </div>
                             <div id="accordion-07-body-06" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-06" data-parent="#accordion-07">
                               <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                                <ul class="list-unstyled">
                                  @foreach ($infPre as $key => $value)
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
                        <!--fin informacion presupuestal!-->

                    <br><b><h5>SEGUNDO TRIMESTRE 2019</h5></b><br>

                        <!--informacion financiera!-->
                    <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-07" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-07" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-07">
                          <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                          </span>
                          <span class="g-pa-20">
                              Información Financiera 2019
                          </span>
                          </a>
                        </h5>
                        </div>
                        <div id="accordion-07-body-07" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-07" data-parent="#accordion-07">
                        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                          <ul class="list-unstyled">
                              @foreach ($infFin2 as $key => $value)
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
                        <!--fin informacion financiera!-->

                    <!--informacion presupuestal!-->

                    <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-08" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-08" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-08">
                          <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                          </span>
                          <span class="g-pa-20">
                              Información Presupuestal 2019
                          </span>
                          </a>
                        </h5>
                        </div>
                        <div id="accordion-07-body-08" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-08" data-parent="#accordion-07">
                        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                          <ul class="list-unstyled">
                              @foreach ($infPre2 as $key => $value)
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
                      <!--fin informacion presupuestal!-->

                      <br><b><h5>TERCER TRIMESTRE 2019</h5></b><br>

                        <!--informacion financiera!-->
                    <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-09" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-09-body-09" data-toggle="collapse" data-parent="#accordion-09" aria-expanded="false" aria-controls="accordion-09-body-07">
                          <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                          </span>
                          <span class="g-pa-20">
                              Información Financiera 2019
                          </span>
                          </a>
                        </h5>
                        </div>
                        <div id="accordion-07-body-10" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-10" data-parent="#accordion-10">
                        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                          <ul class="list-unstyled">
                              @foreach ($infFin3 as $key => $value)
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
                        <!--fin informacion financiera!-->



                    <!--informacion presupuestal!-->

                    <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-11" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-11" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-11">
                          <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                          </span>


                          <span class="g-pa-20">

                              Información Presupuestal 2019
                          </span>
                          </a>
                        </h5>
                        </div>
                        <div id="accordion-07-body-11" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-11" data-parent="#accordion-07">
                        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                          <ul class="list-unstyled">
                              @foreach ($infPre3 as $key => $value)
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
                      <!--fin informacion presupuestal!-->

                      <br><b><h5>CUARTO TRIMESTRE 2019</h5></b><br>

                        <!--informacion financiera!-->
                    <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-12" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-12" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-12">
                          <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                          </span>
                          <span class="g-pa-20">
                              Información Financiera 2019
                          </span>
                          </a>
                        </h5>
                        </div>
                        <div id="accordion-07-body-12" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-12" data-parent="#accordion-07">
                        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                          <ul class="list-unstyled">
                              @foreach ($infFin4 as $key => $value)
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
                        <!--fin informacion financiera!-->
                    <!--informacion presupuestal!-->

                    <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-13" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-13" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-13">
                          <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                          </span>


                          <span class="g-pa-20">

                              Información Presupuestal 2019
                          </span>
                          </a>
                        </h5>
                        </div>
                        <div id="accordion-07-body-13" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-13" data-parent="#accordion-07">
                        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                          <ul class="list-unstyled">
                              @foreach ($infPre4 as $key => $value)
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
                      <!--fin informacion presupuestal!-->

                    <hr>
                    <b><h5>CUENTA PUBLICA 2018</h5></b>
                    <br><b><h6>PRIMER TRIMESTRE 2018</h6></b><br>

                    <!--informacion Financiera 2018!-->

                    <div class="card rounded-0 g-brd-none">
                      <div id="accordion-07-heading-14" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-14" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-14">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                          <i class="fa fa-plus"></i>
                          <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Información Financiera 2018
                        </span>
                        </a>
                      </h5>
                      </div>
                      <div id="accordion-07-body-14" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-14" data-parent="#accordion-07">
                      <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($inffin18 as $key => $value)
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
                    <!--fin informacion presupuestal!-->

                    <!--informacion presupuestal 2018!-->

                    <div class="card rounded-0 g-brd-none">
                      <div id="accordion-07-heading-15" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-15" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-15">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                          <i class="fa fa-plus"></i>
                          <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Información Presupuestal 2018
                        </span>
                        </a>
                      </h5>
                      </div>
                      <div id="accordion-07-body-15" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-15" data-parent="#accordion-07">
                      <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($infpres18 as $key => $value)
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
                    <!--fin informacion presupuestal!-->


                        <br><b><h6>SEGUNDO TRIMESTRE 2018</h6></b><br>

                        <!--informacion Financiera 2018!-->

                    <div class="card rounded-0 g-brd-none">
                      <div id="accordion-07-heading-16" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-16" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-16">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                          <i class="fa fa-plus"></i>
                          <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Información Financiera 2018
                        </span>
                        </a>
                      </h5>
                      </div>
                      <div id="accordion-07-body-16" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-16" data-parent="#accordion-07">
                      <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($inffin182t as $key => $value)
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
                    <!--fin informacion financiera!-->

                             <!--informacion Financiera 2018!-->

                    <div class="card rounded-0 g-brd-none">
                      <div id="accordion-07-heading-17" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-17" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-17">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                          <i class="fa fa-plus"></i>
                          <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Información Presupuestal 2018
                        </span>
                        </a>
                      </h5>
                      </div>
                      <div id="accordion-07-body-17" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-17" data-parent="#accordion-07">
                      <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($infpres182t as $key => $value)
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
                    <!--fin informacion financiera!-->


                            <br><b><h6>TERCER TRIMESTRE 2018</h6></b><br>

                               <!--informacion Financiera 2018!-->

                    <div class="card rounded-0 g-brd-none">
                      <div id="accordion-07-heading-18" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-18" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-18">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                          <i class="fa fa-plus"></i>
                          <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Información Financiera 2018
                        </span>
                        </a>
                      </h5>
                      </div>
                      <div id="accordion-07-body-18" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-18" data-parent="#accordion-07">
                      <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($inffint183t as $key => $value)
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
                    <!--fin informacion financiera!-->

                             <!--informacion Financiera 2018!-->

                    <div class="card rounded-0 g-brd-none">
                      <div id="accordion-07-heading-19" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-19" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-19">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                          <i class="fa fa-plus"></i>
                          <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Información Presupuestal 2018
                        </span>
                        </a>
                      </h5>
                      </div>
                      <div id="accordion-07-body-19" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-19" data-parent="#accordion-07">
                      <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($infpres183t as $key => $value)
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
                    <!--fin informacion financiera!-->

                                <br><b><h6>CUARTO TRIMESTRE 2018</h6></b><br>

                                 <!--informacion Financiera 2018!-->

                    <div class="card rounded-0 g-brd-none">
                      <div id="accordion-07-heading-20" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-20" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-20">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                          <i class="fa fa-plus"></i>
                          <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Información Financiera 2018
                        </span>
                        </a>
                      </h5>
                      </div>
                      <div id="accordion-07-body-20" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-20" data-parent="#accordion-07">
                      <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($inffin184t as $key => $value)
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
                    <!--fin informacion financiera!-->

                                   <!--informacion Financiera 2018!-->

                    <div class="card rounded-0 g-brd-none">
                      <div id="accordion-07-heading-21" class="u-accordion__header g-pa-0" role="tab">
                      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-21" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-21">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                          <i class="fa fa-plus"></i>
                          <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Información Presupuestal 2018
                        </span>
                        </a>
                      </h5>
                      </div>
                      <div id="accordion-07-body-21" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-21" data-parent="#accordion-07">
                      <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($infpres184t as $key => $value)
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
                    <!--fin informacion financiera!-->

            </div>
        </div>
    </div>
@stop
