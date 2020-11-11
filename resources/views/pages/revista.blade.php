@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Revista | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->
<style>
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
    </style>

<div class="container g-pt-25">
    <div class="masonry-grid row  row-eq-height ">
                    
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">
                <a href="https://www.flipsnack.com/6AAB79CC5A8/primera_edicion_icatech.html" target="_blank" class="masonry-img-square">
                    <img class="img-fluid" src="revista_icatech/revista_01.png" alt="Revista Icatech">
                </a>
				<div class="g-pa-20 g-rounded-bottom-5 text-center">
					<h2 class="h5 mb-3">
					    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.flipsnack.com/6AAB79CC5A8/primera_edicion_icatech.html" target="_blank">
					    Primera Edición, Marzo 2020 Revista ICATECH <br>
                        </a>                        
                        <br><a class="" href="revista_icatech/primera_edicion_icatech.pdf" target="_blank"><button class="button button1">Descargar</button></a>
                        <a class="" href="https://www.flipsnack.com/6AAB79CC5A8/primera_edicion_icatech.html" target="_blank"> <button class="button button2">Leer</button> 
                        </a>

			        </h2>
				</div>
            </article>
        </div>   
                    
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-5 g-rounded-bottom-5">
                <a href="https://www.flipsnack.com/6AAB79CC5A8/segunda_edicion_icatech.html" target="_blank" class="masonry-img-square">
                    <img class="img-fluid" src="revista_icatech/revista_02.png" alt="Trámites y servicios">
                </a>
				<div class="g-pa-20 g-rounded-bottom-5 text-center">
					<h2 class="h5 mb-3">
					    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.flipsnack.com/6AAB79CC5A8/segunda_edicion_icatech.html" target="_blank">
					    Segunda Edición, Agosto 2020 Revista ICATECH <br>
                        </a>
                        <br><a class="" href="revista_icatech/segunda_edicion_icatech.pdf" target="_blank"><button class="button button1">Descargar</button></a>
                        <a class="" href="https://www.flipsnack.com/6AAB79CC5A8/segunda_edicion_icatech.html" target="_blank"> <button class="button button2">Leer</button> 
                        </a>
			        </h2>
				</div>
            </article>
        </div>   
                    
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-5 g-rounded-bottom-5">
                <a href="https://www.flipsnack.com/6AAB79CC5A8/tercera_edicion_icatech.html" target="_blank" class="masonry-img-square">
                    <img class="img-fluid" src="revista_icatech/revista_03.png" alt="Micrositio de Salud sobre Coronavirus">
                </a>
				<div class="g-pa-20 g-rounded-bottom-5 text-center">
					<h2 class="h5 mb-3">
					    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.flipsnack.com/6AAB79CC5A8/tercera_edicion_icatech.html" target="_blank">
					    Tercera Edición, Octubre 2020 Revista ICATECH <br>
                        </a>
                        <br><a class="" href="revista_icatech/tercera_edicion_icatech.pdf" target="_blank"><button class="button button1">Descargar</button></a>
                        <a class="" href="https://www.flipsnack.com/6AAB79CC5A8/tercera_edicion_icatech.html" target="_blank"> <button class="button button2">Leer</button> 
                        </a>
			        </h2>
				</div>
            </article>
        </div>                     
                    
 
            </div>
</div>
@stop