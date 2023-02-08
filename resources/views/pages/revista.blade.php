{{-- @extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Revista Icatech | Icatech')
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
    <img src="revista_icatech/revista_junio2021.jpeg" class="img-responsive" width="100%" alig="center"> 
    <div class="masonry-grid row  row-eq-height ">
        

        
                    
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br><article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">
                <a href="https://www.calameo.com/read/00656882359fdb9f20cfa" target="_blank" class="masonry-img-square">
                    <img class="img-fluid" src="revista_icatech/revista1_2021.jpeg" alt="Revista Icatech">
                </a>
				<div class="g-pa-20 g-rounded-bottom-5 text-center">
					<h2 class="h5 mb-3">
					    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.flipsnack.com/6AAB79CC5A8/primera_edicion_icatech.html" target="_blank">
					    Primera Edición, Enero 2021 Revista ICATECH <br>
                        </a>                        
                        <br><a class="" href="revista_icatech/1_edicion_2021_icatech.pdf" target="_blank"><button class="button button1">Descargar</button></a>
                        <a class="" href="https://www.calameo.com/read/00656882359fdb9f20cfa" target="_blank"> <button class="button button2">Leer</button> 
                        </a>

			        </h2>
				</div>
            </article>
        </div>   
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br><article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">
                <a href="https://es.calameo.com/read/006616031b505342244bf" target="_blank" class="masonry-img-square">
                    <img class="img-fluid" src="revista_icatech/revista_febrero.jpg" alt="Revista Icatech">
                </a>
				<div class="g-pa-20 g-rounded-bottom-5 text-center">
					<h2 class="h5 mb-3">
					    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://es.calameo.com/read/006616031b505342244bf" target="_blank">
					    Segunda Edición, Febrero 2021 Revista ICATECH <br>
                        </a>                        
                        <br><a class="" href="revista_icatech/revista_febrero.pdf" target="_blank"><button class="button button1">Descargar</button></a>
                        <a class="" href="https://es.calameo.com/read/006616031b505342244bf" target="_blank"> <button class="button button2">Leer</button> 
                        </a>

			        </h2>
				</div>
            </article>
        </div>  
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br><article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">
                <a href="https://www.calameo.com/read/00661603115992487a026" target="_blank" class="masonry-img-square">
                    <img class="img-fluid" src="revista_icatech/revista_junio2021.png" alt="Revista Icatech">
                </a>
				<div class="g-pa-20 g-rounded-bottom-5 text-center">
					<h2 class="h5 mb-3">
					    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://es.calameo.com/read/006616031b505342244bf" target="_blank">
					    Tercera Edición, Junio 2021 Revista ICATECH <br>
                        </a>                        
                        <br><a class="" href="revista_icatech/revista_junio.pdf" target="_blank"><button class="button button1">Descargar</button></a>
                        <a class="" href="https://www.calameo.com/read/00661603115992487a026" target="_blank"> <button class="button button2">Leer</button> 
                        </a>

			        </h2>
				</div>
            </article>
        </div> 
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br><article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">
                <a href="https://es.calameo.com/read/006616031aaf4f1512578" target="_blank" class="masonry-img-square">
                    <img class="img-fluid" src="revista_icatech/revista_agosto2021principio.png" alt="Revista Icatech">
                </a>
				<div class="g-pa-20 g-rounded-bottom-5 text-center">
					<h2 class="h5 mb-3">
					    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://es.calameo.com/read/006616031aaf4f1512578" target="_blank">
					    Cuarta Edición, Agosto 2021 Revista ICATECH <br>
                        </a>                        
                        <br><a class="" href="revista_icatech/revista_Agosto.pdf" target="_blank"><button class="button button1">Descargar</button></a>
                        <a class="" href="https://es.calameo.com/read/006616031aaf4f1512578" target="_blank"> <button class="button button2">Leer</button> 
                        </a>

			        </h2>
				</div>
            </article>
        </div> 
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br><article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">
                <a href="https://www.calameo.com/read/006616031043dd69f9bf6" target="_blank" class="masonry-img-square">
                    <img class="img-fluid" src="revista_icatech/revista-sept-oct2.jpg" alt="Revista Icatech">
                </a>
				<div class="g-pa-20 g-rounded-bottom-5 text-center">
					<h2 class="h5 mb-3">
					    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.calameo.com/read/006616031043dd69f9bf6" target="_blank">
					    Quinta Edición, Septiembre - Octubre 2021 Revista ICATECH <br>
                        </a>                        
                        <br><a class="" href="revista_icatech/revista-sep-oct.pdf" target="_blank"><button class="button button1">Descargar</button></a>
                        <a class="" href="https://www.calameo.com/read/006616031043dd69f9bf6" target="_blank"> <button class="button button2">Leer</button> 
                        </a>

			        </h2>
				</div>
            </article>
        </div> 
                    
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br><article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-5 g-rounded-bottom-5">
                <a href="https://www.flipsnack.com/6AAB79CC5A8/segunda_edicion_icatech.html" target="_blank" class="masonry-img-square">
                    <img class="img-fluid" src="revista_icatech/revista_2.png" alt="Trámites y servicios">
                </a>
				<div class="g-pa-20 g-rounded-bottom-5 text-center">
					<h2 class="h5 mb-3">
					    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.flipsnack.com/6AAB79CC5A8/segunda_edicion_icatech.html" target="_blank">
					    Segunda Edición, Agosto 2020 Revista ICATECH <br>
                        </a>
                        <br><a class="" href="revista_icatech/2_edicion_icatech.pdf" target="_blank"><button class="button button1">Descargar</button></a>
                        <a class="" href="https://www.flipsnack.com/6AAB79CC5A8/segunda_edicion_icatech.html" target="_blank"> <button class="button button2">Leer</button> 
                        </a>
			        </h2>
				</div>
            </article>
        </div>   
                    
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br><article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-5 g-rounded-bottom-5">
                <a href="https://www.flipsnack.com/6AAB79CC5A8/tercera_edicion_icatech.html" target="_blank" class="masonry-img-square">
                    <img class="img-fluid" src="revista_icatech/revista_3.png" alt="Micrositio de Salud sobre Coronavirus">
                </a>
				<div class="g-pa-20 g-rounded-bottom-5 text-center">
					<h2 class="h5 mb-3">
					    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.flipsnack.com/6AAB79CC5A8/tercera_edicion_icatech.html" target="_blank">
					    Tercera Edición, Octubre 2020 Revista ICATECH <br>
                        </a>
                        <br><a class="" href="revista_icatech/3_edicion_icatech.pdf" target="_blank"><button class="button button1">Descargar</button></a>
                        <a class="" href="https://www.flipsnack.com/6AAB79CC5A8/tercera_edicion_icatech.html" target="_blank"> <button class="button button2">Leer</button> 
                        </a>
			        </h2>
				</div>
            </article>
        </div>   
        
        
        <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-3 g-mb-30">
            <br><article class="masonry-white-caption u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100 g-rounded-top-7 g-rounded-bottom-7">
                <a href="https://www.flipsnack.com/6AAB79CC5A8/primera_edicion_icatech.html" target="_blank" class="masonry-img-square">
                    <img class="img-fluid" src="revista_icatech/revista_1.png" alt="Revista Icatech">
                </a>
				<div class="g-pa-20 g-rounded-bottom-5 text-center">
					<h2 class="h5 mb-3">
					    <a class="u-link-v5  g-font-weight-600 g-color-accent--hover g-text-underline--hover" href="https://www.flipsnack.com/6AAB79CC5A8/primera_edicion_icatech.html" target="_blank">
					    Primera Edición, Marzo 2020 Revista ICATECH <br>
                        </a>                        
                        <br><a class="" href="revista_icatech/1_edicion_icatech.pdf" target="_blank"><button class="button button1">Descargar</button></a>
                        <a class="" href="https://www.flipsnack.com/icatech/revista_1.html" target="_blank"> <button class="button button2">Leer</button> 
                        </a>

			        </h2>
				</div>
            </article>
        </div>   
                    
 
            </div>
</div>
@stop --}}

@extends('theme.main.index')

@section('title', 'Revista | Icatech')

@section('csscontent')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        .card img.img-fluid{
            width: 100%;
            height: 260px;
        }
    </style>
@endsection

@section('contenido')
    <div class="container-xl">
        <br>
        <div class="masonry-grid row g-mb-0 row-eq-height">
            <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-12 g-mb-30">	
                <img src="{{ asset('revista_icatech/baner_revista.jpeg') }}" class="img-responsive" width="100%" alig="center">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 g-pb-40">
                <div class="card">
                    <img class="img-fluid" src="{{ asset('revista_icatech/calendario_2022/calendario.jpeg') }}">
                    <div class="card-body">
                        <h3 class="card-title">Calendario 2022</h3>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModalFullscreen"> 
                            <i class="far fa-eye fa-2x"></i>
                            Ver 
                        </a>
                    </div>
                </div>
            </div>
           {{-- calendario pdf --}}
            <div class="col-md-6 g-pb-40">
                <div class="card">
                    <img class="img-fluid" src="{{ asset('revista_icatech/calendario_2022/calendario_banner.jpeg') }}">
                    <div class="card-body">
                        &nbsp;
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-danger" href="{{ asset('revista_icatech/calendario_2022/calendario_2022.pdf') }}" target="_blank"> 
                            <i class="fas fa-file-download fa-2x"></i>
                            Descargar 
                        </a>
                        
                    </div>
                </div>
            </div>
          {{-- calendario pdf END --}}
        </div>
        <div class="row">
                @if (count($revista) > 0)
                    @foreach ($revista as $itemRevista)
                        <div class="col-md-4 mb-3 g-pb-40">
                            <div class="card">
                                <img class="img-fluid" src="{{ asset($itemRevista->path) }}">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $itemRevista->nombre }}</h3>
                                </div>
                                <div class="card-footer">
                                    <a class="btn btn-danger" href="{{ $itemRevista->documento }}" download target="_blank"> 
                                        <i class="fas fa-file-download fa-2x"></i>
                                        Descargar 
                                    </a>
                                    &nbsp;
                                    <a class="btn btn-primary" href="{{ $itemRevista->href }}" target="_blank"> 
                                        <i class="fas fa-book-reader fa-2x"></i>
                                        Leer 
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $revista->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
{{-- modal --}}

    <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Calendario 2022</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('revista_icatech/calendario_2022/calendario.jpeg') }}" width="100%" alt="calendario_2022">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

{{-- modal END --}}
@endsection