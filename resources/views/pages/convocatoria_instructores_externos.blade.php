@extends("theme.convocatorias.layout")
@section('title', 'Convocatoria Instructores Externos | Icatech')

@section('content')
<!-- PAGINA --><style>
  .button {
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 6px 4px;
    cursor: pointer;
  }
  
  .button1 {background-color: #4CAF50;} /* Green */
  .button2 {background-color: #008CBA;} /* Blue */


  .gallery, .gallery2 {
    display: flex;
    flex-flow: row wrap;
    justify-content: center; }
  
  .gallery__item {
    width: 100px;
    height: 100px;
    overflow: hidden;
    display: flex;
    justify-content: center;
    margin: 3px; }
  
  .gallery__item img {
    min-width: 100%;
    max-height: 100%;
    object-fit: cover;
    cursor: pointer;
    margin: auto;
    filter: grayscale(100%);
    transition: .3s all ease-in-out; }
    .gallery__item img:hover {
      filter: grayscale(0); }
  </style>

<div class="container g-pt-50">
   
    <div class="masonry-grid row  row-eq-height  gallery" data-flavor="myGallery"> 

        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
          <br>
          <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">
                <img class="img-fluid" src="../../convocatoria/conv_tapachula1.jpg" data-toggle="modal" data-target="#ModalReforma" data-id='["../../convocatoria/conv_tapachula1.jpg"]'>
              </a>
              <div class="g-pa-20 g-rounded-bottom-5 text-center">
                <h2 class="h5 mb-3">
                    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.facebook.com/icatech.tapachula/" target="_blank">
                      Convocatoria Instructores Tapachula <br>
                    </a>                        
                    <br>
                    <a class="" href="../../convocatoria/conv_tapachula1.jpg" target="_blank">
                        <button class="button button1">Descargar</button> 
                    </a>
                </h2>
              </div>
          </article>
        </div>   
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br>
            <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">
                  <img class="img-fluid" src="../../convocatoria/conv_tuxtla2.jpg" data-toggle="modal" data-target="#ModalReforma" data-id='["../../convocatoria/conv_tuxtla2.jpg"]' alt="Revista Icatech">
                </a>
                <div class="g-pa-20 g-rounded-bottom-5 text-center">
                  <h2 class="h5 mb-3">
                      <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.facebook.com/Icatech-Tuxtla-540488949738129/" target="_blank">
                        Convocatoria Instructores Tuxtla Gutierrez <br>
                                </a>                        
                                <br><a class="" href="../../convocatoria/conv_tuxtla2.jpg" target="_blank"><button class="button button1">Descargar</button></a>                      
                      </h2>
                </div>
            </article>
        </div>  
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
          <br>
          <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">
                <img class="img-fluid" src="../../convocatoria/conv_villaflores10.jpg" data-toggle="modal" data-target="#ModalReforma" data-id='["../../convocatoria/conv_villaflores10.jpg"]' alt="Revista Icatech">
              </a>
              <div class="g-pa-20 g-rounded-bottom-5 text-center">
                <h2 class="h5 mb-3">
                    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.facebook.com/Icatech-Villaflores-1117103525058685/" target="_blank">
                      Convocatoria Instructores Villaflores <br>
                              </a>                        
                              <br><a class="" href="../../convocatoria/conv_villaflores10.jpg" target="_blank"><button class="button button1">Descargar</button></a>                      
                    </h2>
              </div>
          </article>
      </div>  
      <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br>
            <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">              
                  <img class="img-fluid" data-toggle="modal" data-target="#ModalReforma" data-id='["../../convocatoria/conv_jiquipilas6.jpg"]' src="../../convocatoria/conv_jiquipilas6.jpg" alt="Revista Icatech">
                </a>
              <div class="g-pa-20 g-rounded-bottom-5 text-center">
                <h2 class="h5 mb-3">
                    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.facebook.com/Icatech.Jiquipilas/" target="_blank">
                      Convocatoria Instructores Jiquipilas <br>
                      </a>                        
                        <br><a class="" href="../../convocatoria/conv_jiquipilas6.jpg" target="_blank"><button class="button button1">Descargar</button>
                          </a> 
                  </h2>
              </div>
            </article>
        </div>                   
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br>
            <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-5 g-rounded-bottom-5">              
                <img class="img-fluid" src="../../convocatoria/cov_catazaja5.jpg" data-toggle="modal" data-target="#ModalReforma" data-id='["../../convocatoria/cov_catazaja5.jpg"]' alt="Trámites y servicios">
                
                <div class="g-pa-20 g-rounded-bottom-5 text-center">
                  <h2 class="h5 mb-3">
                      <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.facebook.com/Unidad.Catazaja/" target="_blank">
                        Convocatoria Instructores Catazaja <br>
                      </a>
                      <br>
                      <a class="" href="../../convocatoria/cov_catazaja5.jpg" target="_blank"><button class="button button1">Descargar</button></a>                      
                  </h2>
                </div>
            </article>
        </div>   
                  
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br>
            <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-5 g-rounded-bottom-5">              
                <img class="img-fluid" src="../../convocatoria/conv_comitan6.jpg" data-toggle="modal" data-target="#ModalReforma" data-id='["../../convocatoria/conv_comitan6.jpg"]' alt="Micrositio de Salud sobre Coronavirus">

                <div class="g-pa-20 g-rounded-bottom-5 text-center">
                  <h2 class="h5 mb-3">
                      <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.facebook.com/Icatech-Comit%C3%A1n-103142437737100/" target="_blank">
                        Convocatoria Instructores Comitan <br>
                                </a>
                                <br><a class="" href="../../convocatoria/conv_comitan6.jpg" target="_blank"><button class="button button1">Descargar</button></a>                      
                      </h2>
                </div>
            </article>
        </div>        
      
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br>
            <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">              
                <img class="img-fluid" src="../../convocatoria/conv_tonala9.jpg" data-toggle="modal" data-target="#ModalReforma" data-id='["../../convocatoria/conv_tonala9.jpg"]' alt="Revista Icatech">
                
                <div class="g-pa-20 g-rounded-bottom-5 text-center">
                  <h2 class="h5 mb-3">
                      <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.facebook.com/Icatech-Tonal%C3%A1-323135271722987/" target="_blank">
                        Convocatoria Instructores Tonala <br>
                                </a>                        
                                <br><a class="" href="../../convocatoria/conv_tonala9.jpg" target="_blank"><button class="button button1">Descargar</button></a>            </h2>
                </div>
            </article>
        </div> 
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
          <br>
          <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">            
                <img class="img-fluid" src="../../convocatoria/conv_ocosingo8.jpg" data-toggle="modal" data-target="#ModalReforma" data-id='["../../convocatoria/conv_ocosingo8.jpg"]' alt="Revista Icatech">
              
                <div class="g-pa-20 g-rounded-bottom-5 text-center">
                  <h2 class="h5 mb-3">
                      <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.facebook.com/IcatechOcosingo/" target="_blank">
                        Convocatoria Instructores Ocosingo <br>
                                </a>                        
                                <br><a class="" href="../../convocatoria/conv_ocosingo8.jpg" target="_blank"><button class="button button1">Descargar</button></a>                    
                      </h2>
                </div>
          </article>
        </div> 
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
          <br>
          <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">          
              <img class="img-fluid" src="../../convocatoria/conv_reforma4.jpg" data-toggle="modal" data-target="#ModalReforma" data-id='["../../convocatoria/conv_reforma4.jpg"]' alt="Revista Icatech">
              
              <div class="g-pa-20 g-rounded-bottom-5 text-center">
                <h2 class="h5 mb-3">
                    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.facebook.com/Reformaicatech/" target="_blank">
                      Convocatoria Instructores Reforma <br>
                              </a>                        
                              <br><a class="" href="../../convocatoria/conv_reforma4.jpg" target="_blank"><button class="button button1">Descargar</button></a>                 

                    </h2>
              </div>
          </article>
        </div>
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
          <br>
          <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">        
              <img class="img-fluid" src="../../convocatoria/conv_sancris3.jpg" data-toggle="modal" data-target="#ModalReforma" data-id='["../../convocatoria/conv_sancris3.jpg"]' alt="Revista Icatech">

              <div class="g-pa-20 g-rounded-bottom-5 text-center">
                <h2 class="h5 mb-3">
                    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.facebook.com/ICATECH-San-Crist%C3%B3bal-451099855042866/" target="_blank">
                      Convocatoria Instructores San Cristobal de las Casas <br>
                              </a>                        
                              <br><a class="" href="../../convocatoria/conv_sancris3.jpg" target="_blank"><button class="button button1">Descargar</button></a>
                              
                    </h2>
              </div>
          </article>
        </div>
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br>
            <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">              
              <img class="img-fluid" src="../../convocatoria/conv_yajalon11.jpg" data-toggle="modal" data-target="#ModalReforma" data-id='["../../convocatoria/conv_yajalon11.jpg"]' alt="Revista Icatech">
              <div class="g-pa-20 g-rounded-bottom-5 text-center">
                <h2 class="h5 mb-3">
                    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.facebook.com/unidad.yajalon/" target="_blank">
                      Convocatoria Instructores Yajalon <br>
                    </a>                        
                    <br><a class="" href="../../convocatoria/conv_yajalon11.jpg" target="_blank"><button class="button button1">Descargar</button></a>           
                </h2>
              </div>
            </article>
        </div>
      
    </div>
</div>
<div class="modal fade" id="ModalReforma" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img id='imgmodal' class="img-fluid" src='' alt="Revista Icatech">
        </div>
      </div>
    </div>
  </div>  
</div>
@stop
@section('jquerytype')
  <script type="text/javascript">
    $('[data-flavor="myGallery"]').flavor();

    $('#ModalReforma').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget);
      var id = button.data('id');
      console.log(id); 
      document.getElementById('imgmodal').src=id;
    });
  </script>
@endsection