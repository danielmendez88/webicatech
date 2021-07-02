@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Integridad | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->

<div class="container g-pt-25">
        
    <img src="Imagenes Pagina/bannericatechintegridad.png" class="img-responsive" width="100%" alig="center">

    <div class="masonry-grid row  row-eq-height">
        <div class="masonry-grid-sizer col-sm-12"></div>
        <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">
        
            <div class="row">
                <div class="container">
                    <div class="row showcase-section">
                            <div class="col-md-15">
                            <div class="about-text">
                                <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
                                    <table class="table" align="center">
                                        <tbody>
                                            <tr>
                                                
                                                <td><center><a target="_blank"href="codigos_conducta/codigodeetica.pdf" ><img src="Imagenes Pagina/CODIGODEHONESTIDAD.jpg" class="img-thumbnail"><h3></h3></a></center></td>
                                                <td><center><a target="_blank"href="{{ asset('codigos_conducta/codigo_de_conducta.pdf') }}"><img src="Imagenes Pagina/codigo_deconducta.jpg" class="img-thumbnail"><h3></h3></a></center></td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>		
            </div>


            <!--primer trimestre!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-01" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-01">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                Codigo de Conducta
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($codigos1 as $key => $value)
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
            <!--fin-->

            <!--Segundo Trimestre 2019!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-02" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-02" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-02">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                            <span class="g-pa-20">
                                    Codigo de Honestidad
                            </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($honestidad as $key => $value)
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
            <!--fin!-->

            <!--3!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-03" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-03" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                    Acuerdo de Confidencialidad
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-03" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($acuerdos as $key => $value)
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
            <!--fin-->
            <!--4!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-04" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-04" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-04">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                    Directorio del Comité de Ética
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-04" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-04" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($directorios as $key => $value)
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
            <!--fin-->
            <!--5!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-05" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-05" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-05">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                    Plan de Trabajo Anual 2019
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-05" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($plantrabajo as $key => $value)
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
            <!--fin-->

            <!--6!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-06" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-06" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-06">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                    Convocatoria para designar a los Consejeros (a)
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-06" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-06" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($convocatorias as $key => $value)
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
            <!--fin-->

            <!--7!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-07" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-07" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-07">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                    Protocolo de Atención a Denuncias
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-07" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-07" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($protocolo as $key => $value)
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
            <!--fin-->


            <!--8!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-08" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-08" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-08">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                    Informe Anual de Actividades 
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-08" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-08" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($informe as $key => $value)
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
            <!--fin-->

            <!--9!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-09" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-09" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-09">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                    Protocolo para la Prevención, Atención y Sanción del Hostigamiento Sexual y Acoso sexual.
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-09" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-09" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($protocoloprevencion as $key => $value)
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
            <!--fin-->
                    
            <!--10!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-10" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-10" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-10">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                    Protocolo de Actuación de los Comités de Ética y de Prevención de Conflictos de Interés en la Atención de Presuntos Actos de Discriminación.
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-10" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-10" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($protocoloactuacion as $key => $value)
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
            <!--fin-->   
                    
            <!--11!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-11" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-11" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-11">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                    Directorio del Consejero.
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-11" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-11" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($directorioconsejero as $key => $value)
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
            <!--fin--> 

            <!--12!-->
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-12" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-12" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-12">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                    Directorio de Asesores.
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-12" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-12" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($directorioasesor as $key => $value)
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
            <!--fin-->

            {{-- 13! --}}
            <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-13" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-13" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-13">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                            <span class="g-pa-20">
                               "Cero Tolerancia" a las conductas de Hostigamiento Sexual y Acoso Sexual
                            </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-13" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-13" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($hostigamiento as $key => $value)
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
            {{-- fin 13! --}}
            

        </div>
    </div>

</div>
@stop