@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Cuenta Publica | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->
    <div class="container g-pt-25">
        <div class="masonry-grid row  row-eq-height">
            <div class="masonry-grid-sizer col-sm-12"></div>
            <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">
         
                    <b><h4>INFORMACION DE LA CUENTA PUBLICA 2019</h4></b><br>
                    <b><h5>PRIMER TRIMESTRE 2019</h5></b><br>
                    <b><h6>INFORMACIÓN FINANCIERA 2019</h6></b><br>
                        @foreach ($infFin as $key => $value)
                            <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                        @endforeach 

                    <br><b><h6>INFORMACIÓN PRESUPUESTAL 2019</h6></b><br>
                        @foreach ($infPre as $key => $value)
                            <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                        @endforeach

                    <br><b><h5>SEGUNDO TRIMESTRE 2019</h5></b><br>
                    <b><h6>INFORMACIÓN FINANCIERA 2019</h6></b><br>
                        @foreach ($infFin2 as $key => $value)
                            <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                        @endforeach

                    <br><b><h6>INFORMACIÓN PRESUPUESTAL 2019</h6></b><br>
                        @foreach ($infPre2 as $key => $value)
                            <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                        @endforeach
                    
                    <hr>
                    <b><h5>CUENTA PUBLICA 2018</h5></b>
                    <br><b><h6>PRIMER TRIMESTRE 2018</h6></b><br> 
                    <b><h6>INFORMACIÓN FINANCIERA 2018</h6></b><br>
                        @foreach ($inffin18 as $key => $value)
                            <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                        @endforeach
                    
                    <br><b><h6>INFORMACIÓN PRESUPUESTAL 2018</h6></b><br>
                        @foreach ($infpres18 as $key => $value)
                            <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                        @endforeach

                        <br><b><h6>SEGUNDO TRIMESTRE 2018</h6></b><br> 
                        <b><h6>INFORMACIÓN FINANCIERA 2018</h6></b><br>
                            @foreach ($inffin182t as $key => $value)
                                <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                            @endforeach
                        
                        <br><b><h6>INFORMACIÓN PRESUPUESTAL 2018</h6></b><br>
                            @foreach ($infpres182t as $key => $value)
                                <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                            @endforeach
                        
                            <br><b><h6>TERCER TRIMESTRE 2018</h6></b><br> 
                            <b><h6>INFORMACIÓN FINANCIERA 2018</h6></b><br>
                                @foreach ($inffint183t as $key => $value)
                                    <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                                @endforeach
                            
                            <br><b><h6>INFORMACIÓN PRESUPUESTAL 2018</h6></b><br>
                                @foreach ($infpres183t as $key => $value)
                                    <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                                @endforeach

                                <br><b><h6>CUARTO TRIMESTRE 2018</h6></b><br> 
                                <b><h6>INFORMACIÓN FINANCIERA 2018</h6></b><br>
                                    @foreach ($inffin184t as $key => $value)
                                        <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                                    @endforeach
                                
                                <br><b><h6>INFORMACIÓN PRESUPUESTAL 2018</h6></b><br>
                                    @foreach ($infpres184t as $key => $value)
                                        <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                                    @endforeach
            
               

            
                    
            
                    
                      

            </div>
        </div>
    </div>
@stop                