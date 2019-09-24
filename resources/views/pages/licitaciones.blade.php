@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Licitaciones | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->
<div class="container g-pt-25">
        <div class="masonry-grid row  row-eq-height">
            <div class="masonry-grid-sizer col-sm-12"></div>
            <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">
                
                    <p><h2><b>LICITACIONES:</b></h2></p><br> 

                    <p><b><h5>LICITACIONES FEDERALES</h5></b></p><br>

                    <br><b><h6>INVITACION A CUANDO MENOS 3 PERSONAS</h6></b><br>
                                @foreach ($licfed as $key => $value)
                                  <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                                @endforeach

                    <p><b><h5>LICITACIONES ESTATALES</h5></b></p><br>
            </div>           
        </div>   
  </div>
@stop