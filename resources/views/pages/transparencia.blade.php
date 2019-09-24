@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Transparencia | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->

<div class="container g-pt-50">
<div class="masonry-grid row g-mb-0 row-eq-height">
    <div class="masonry-grid-sizer col-sm-12"></div>
    <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
        <article class="masonry-dark-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-5 g-rounded-bottom-5">
            <a href="http://icatech.transparencia.chiapas.gob.mx" class="masonry-img-square">
                <img src="Imagenes Pagina/banner tranparencia vertical.jpg" alt="Banner">
            </a>
            
        </article>
    </div>
</div>


    <!--elemento-->

    
    <!--elemento END-->


    
    <div class="masonry-grid row g-mb-0 row-eq-height">
        <div class="masonry-grid-sizer col-sm-12"></div>
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <article class="masonry-dark-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-5 g-rounded-bottom-5">
                <a href="/avisos-de-privacidad" class="masonry-img-square">
                    <img src="Imagenes Pagina/avisos.png" alt="Banner">
                </a>
                <div class="g-pa-20 g-rounded-bottom-5">
                   <h2 class="h5 mb-3">
                          <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="/avisos-de-privacidad">Avisos de Privacidad</a>
                   </h2>
                   <p class=" g-line-height-1_8 fs-15">Integrales y Simplificados</p>
                </div>
            </article>
        </div>
        <!--elemento-->
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <article class="masonry-dark-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-5 g-rounded-bottom-5">
                <a href="/cuenta-publica" class="masonry-img-square">
                    <img src="Imagenes Pagina/cuenta.png" alt="Banner">
                </a>
                <div class="g-pa-20 g-rounded-bottom-5">
                   <h2 class="h5 mb-3">
                          <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="/cuenta-publica">Cuenta Pública</a>
                   </h2>
                   <p class=" g-line-height-1_8 fs-15">Cuenta Pública 2019, 2018</p>
                </div>
            </article>
        </div>
        <!--elemento END-->
        <!--elemento-->
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <article class="masonry-dark-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-5 g-rounded-bottom-5">
                <a href="/licitaciones" class="masonry-img-square">
                    <img src="Imagenes Pagina/licitaciones.png" alt="Banner">
                </a>
                <div class="g-pa-20 g-rounded-bottom-5">
                   <h2 class="h5 mb-3">
                          <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="/licitaciones">Licitaciones ICATECH</a>
                   </h2>
                   <p class=" g-line-height-1_8 fs-15">Licitaciones Federales, Estatales</p>
                </div>
            </article>
        </div>
        <!--elemento END-->
        <!--elemento-->
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <article class="masonry-dark-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-5 g-rounded-bottom-5">
                <a href="/sevac" class="masonry-img-square">
                    <img src="Imagenes Pagina/sevac.png" alt="Banner">
                </a>
                <div class="g-pa-20 g-rounded-bottom-5">
                   <h2 class="h5 mb-3">
                          <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="/sevac">Sevac Icatech</a>
                   </h2>
                   <p class=" g-line-height-1_8 fs-15">Sevac 2019, 2018.</p>
                </div>
            </article>
        </div>
        <!--elemento END-->
    </div>


</div>  
@stop