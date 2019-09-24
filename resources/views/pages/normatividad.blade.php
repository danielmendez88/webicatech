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

                <br><div class="row">
                    <div class="col-md-12">
                         <div class="section-title">
                                <div class="u-heading-v2-5--bottom g-brd-primary g-mb-30 text-left">
                                        <h4 class="u-heading-v2______title text-uppercase g-font-weight-300 mb-0">DECRETOS</h4>
                                </div>
                         </div>
                     </div>
                 </div>
                         @foreach ($deccrea as $key => $value)
                            <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                        @endforeach    

                        <br><div class="row">
                            <div class="col-md-12">
                                    <div class="u-heading-v2-5--bottom g-brd-primary g-mb-30 text-left">
                                            <h4 class="u-heading-v2______title text-uppercase g-font-weight-300 mb-0">REGLAMENTOS</h4>
                                    </div>
                             </div>
                         </div>
                        @foreach ($reglam as $key => $value)
                          <a target="_blank" href="{{ $value }}"><b>{{ $key }}</b></a><br>
                         @endforeach

                         <br><div class="row">
                            <div class="col-md-12">
                                    <div class="u-heading-v2-5--bottom g-brd-primary g-mb-30 text-left">
                                            <h4 class="u-heading-v2______title text-uppercase g-font-weight-300 mb-0">MANUALES</h4>
                                    </div>
                             </div>
                         </div>
                    @foreach ($manual as $key => $value)
                         <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                        @endforeach <br>

         <div class="row">
             <div class="col-md-12">
                    <div class="u-heading-v2-5--bottom g-brd-primary g-mb-30 text-left">
                            <h4 class="u-heading-v2______title text-uppercase g-font-weight-300 mb-0">MANUAL DE PROCEDIMIENTOS</h4>
                    </div>
             </div>
         </div>
         @foreach ($manualproc as $key => $value)
             <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
         @endforeach <br>

                    
         <div class="row">
             <div class="col-md-12">
                    <div class="u-heading-v2-5--bottom g-brd-primary g-mb-30 text-left">
                            <h4 class="u-heading-v2______title text-uppercase g-font-weight-300 mb-0">MANUAL DE ORGANIZACION</h4>
                    </div>
             </div>
         </div>
            @foreach ($manualorga as $key => $value)
                 <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
             @endforeach

                   
            </div>
        </div>
    </div>
 
@stop