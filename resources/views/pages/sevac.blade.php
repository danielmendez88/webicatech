@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Sevac | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->
    <div class="container g-pt-25">
        <div class="masonry-grid row  row-eq-height">
            <div class="masonry-grid-sizer col-sm-12"></div>
            <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">
                    <p><h2><b>SEVAC</b></h2></p><br> 



                    <b><h4>SEVAC 2019</h4></b><br>
                    <b><h5>PRIMER TRIMESTRE 2019</h5></b><br>


                    @foreach ($primtrim as $key => $value)
                        <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                     @endforeach

                    <br><b><h5>SEGUNDO TRIMESTRE 2019</h5></b><br>

                    @foreach ($segtrim as $key => $value)
                        <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                     @endforeach
                    
                    <br><a href="{{ url("/sevac2018") }}" style="font-size: auto;" target="_blank"><b><h5>INFORMACION SEVAC 2018</h5></b></a>
            </div>
        </div>
    </div>
@stop