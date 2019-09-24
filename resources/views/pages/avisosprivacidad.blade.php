@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Avisos de Privacidad | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->
<div class="container g-pt-25">


    <section class="text-left">
        <div class="container">
            <img src="Imagenes Pagina/PRIVACIDAD.jpg" ALIGN=RIGHT style="max-width:25%;width:auto;height:auto;">
        </div>
          <br>
            <p><b><h5>AVISOS DE PRIVACIDAD INTEGRALES</h5></b></p>

            <br>@foreach ($avis_inte as $key => $value)
                <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
             @endforeach <br>

            <b>UNIDAD EJECUTIVA</b><br>
            <br>@foreach ($unejec as $key => $value)
                <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
             @endforeach <br>

            <b>DIRECCIÓN ADMINISTRATIVA</b><br>
            <br>@foreach ($diradm as $key => $value)
                  <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
              @endforeach <br>

              @foreach ($dirplan as $key => $value)
              <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                @endforeach <br>
                
                         
            <b>DIRECCIÓN TÉCNICA ACADÉMICA</b><br>
               <br>@foreach ($dirtacad as $key => $value)
                  <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
                @endforeach <br>

            <p><b><h5>AVISOS DE PRIVACIDAD SIMPLIFICADOS</h5></b></p>
            <br>@foreach ($avis_simpl as $key => $value)
              <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
              @endforeach <br>
            
            <b>UNIDAD EJECUTIVA</b><br>
            <br>@foreach ($simejec as $key => $value)
              <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
              @endforeach <br>
            
            <b>DIRECCIÓN ADMINISTRATIVA</b><br>
            <br>@foreach ($simadmi as $key => $value)
              <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
              @endforeach <br>
            
            <b>DIRECCIÓN DE VINCULACIÓN</b><br>
            <br>@foreach ($simplan as $key => $value)
              <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
              @endforeach <br>
            
            <b>DIRECCIÓN TÉCNICA ACADÉMICA</b><br>
            <br>@foreach ($simacad as $key => $value)
              <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
              @endforeach <br>        

                            
                            
  </div>
@stop