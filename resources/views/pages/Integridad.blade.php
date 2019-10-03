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
                                                    <td><center><a target="_blank"href="codigos_conducta/códigodeconductaicatech.pdf"><img src="Imagenes Pagina/codigo_deconducta.jpg" class="img-thumbnail"><h3></h3></a></center></td>
                                                    
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
                        Codigo de Integridad
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
                   
   
        

             

            </div>
        </div>

    </div>
@stop