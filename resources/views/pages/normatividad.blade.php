@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Normatividad | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->
    <div class="container g-pt-25">
        <div class="masonry-grid row  row-eq-height">
            <div class="masonry-grid-sizer col-sm-12"></div>
            <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">


                    <b><h6>DECRETOS</h6></b><br>
                        @foreach ($deccrea as $key => $value)
                            <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                        @endforeach    

                    <br><b><h6>REGLAMENTOS</h6></b><br>
                        @foreach ($reglam as $key => $value)
                          <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                         @endforeach

                    <br><b><h6>MANUALES</h6></b><br>
                    @foreach ($manual as $key => $value)
                         <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                        @endforeach

                    <br><b><h6>MANUAL DE PROCEDIMIENTOS</h6></b><br>
                        @foreach ($manualproc as $key => $value)
                            <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                          @endforeach

                    
                    <br><b><h6>MANUAL DE ORGANIZACION</h6></b><br>
                        @foreach ($manualorga as $key => $value)
                            <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                          @endforeach

                    <br><b><h6>CODIGOS</h6></b><br>
                        @foreach ($codigos as $key => $value)
                            <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                            @endforeach
            </div>
        </div>
    </div>
 
@stop