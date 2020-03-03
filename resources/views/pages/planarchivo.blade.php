@extends("theme.lte.layout")
@section('title', 'Plan Archivo | Icatech')
@section('content')
<!-- PAGINA -->
 <div class="container g-pt-50">
     <div class="masonry-grid row  row-eq-height ">
          <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-6 g-mb-30">
             <article class="u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100">
                 <div class="g-pa-20 g-rounded-bottom-5 imgbcgrnd">
                     <div class="g-brd-primary g-mb-30 text-left">
                        
                            <h3>El Sistema Institucional de Archivos (SIA) </h3>
                        
                     </div>
                     <p align="justify">
                        Es el conjunto de procesos y actividades administrativas destinadas a  la organización y conservación, administración y preservación homogénea de los archivos en posesión de cualquier autoridad, entidad, órgano y organismo público; el SIA se encuentra regulado por la Ley General de Archivos.<br> 
                     </p>
                 </div>
             </article>
         </div>
     <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-6 g-mb-30">
         <article class="u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100">
         <div class="g-pa-20 g-rounded-bottom-5 imgbcgrnd">
             <div class="g-brd-primary g-mb-30 text-left">
                 
                 <h3>El PADA </h3>
                 
             </div>
                 <p align="justify">
                    Es el documento base que contiene los elementos de planeación, programación y evaluación para el desarrollo de los archivos del ICATECH, integrando los recursos económicos, tecnológicos y operativos disponibles; así como los programas de organización y capacitación en gestión documental y administración de archivos de este Instituto
                 </p>
         </div>
         </article>
     </div>
     <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">
        <article class="u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100">
        <div class="g-pa-20 g-rounded-bottom-5 imgbcgrnd">
            <div class="g-brd-primary g-mb-30 text-left">
                
                <h3>Conceptos o definiciones mas comunes en  materia archivística: 
                </h3>
                
            </div>
             <p align="justify">
                    Archivo de concentración: Al integrado por documentos transferidos desde las áreas o unidades productoras, cuyo uso y consulta es esporádica y que permanecen en él hasta su disposición documental.
                    Archivo de trámite: Al integrado por documentos de archivo de uso cotidiano y necesario para el ejercicio de las atribuciones y funciones de los sujetos obligados.
                    Archivo histórico: Al integrado por documentos de conservación permanente y de relevancia para la memoria nacional, regional o local de carácter público.
                    Baja documental: A la eliminación de aquella documentación que haya prescrito su vigencia, valores documentales y, en su caso, plazos de conservación; y que no posea valores históricos, de acuerdo con la Ley y las disposiciones jurídicas aplicables.
                    Baja documental: A la eliminación de aquella documentación que haya prescrito su vigencia, valores documentales y, en su caso, plazos de conservación; y que no posea valores históricos, de acuerdo con la Ley y las disposiciones jurídicas aplicables.
             </p>
        </div>
        </article>
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
                        Plan Anual de Desarrollo Archivistico 2020 "PADA"
                        </span>
                </a>
            </h5>
        </div>
    <div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
            <ul class="list-unstyled">
                @foreach ($desarrollo as $key => $value)
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

 </div>
@stop