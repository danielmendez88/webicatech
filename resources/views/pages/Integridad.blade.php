@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Integridad | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->

<div class="container g-pt-25">
        
    <img src="Imagenes Pagina/integridad banner.jpg" class="img-responsive" width="70%" alig="center">

    <div class="masonry-grid row  row-eq-height">
            <div class="masonry-grid-sizer col-sm-12"></div>
            <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">

	       
                   
        @foreach ($codigos1 as $key => $value)
            <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a>
         @endforeach
        

             

            </div>
        </div>

    </div>
@stop