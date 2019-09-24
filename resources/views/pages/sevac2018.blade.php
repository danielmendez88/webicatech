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

                <p><b><h5>INFORMACION SEVAC</h5></b></p><br>


                <b><h4>SEVAC 2018</h4></b><br>
                <b><h5>PRIMER TRIMESTRE 2018</h5></b><br>

                @foreach ($trim2018 as $key => $value)
                    <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                @endforeach
                

                <b><h5>SEGUNDO TRIMESTRE 2018</h5></b> <hr>

                @foreach ($segtrim as $key => $value)
                    <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                    @endforeach

                    
                <b><h5>TERCER TRIMESTRE 2018</h5></b> <hr>

                @foreach ($tertrim as $key => $value)
                    <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                @endforeach

            </div>
        </div>
    </div>
@stop