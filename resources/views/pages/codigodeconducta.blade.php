@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Codigo de Conducta | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->

<div class="container g-pt-25">

	<div class="row">
		<div class="col-md-4 col-sm-4 imagen2">
			<a href="" target="_new"><img src="Imagenes Pagina/bannerintegridad.jpg" class="img-thumbnail"></a>
        </div>
        
            <div class="col-md-4 col-sm-4 imagen3">
                <a target="_blank" href="codigos_conducta/códigodeconductaicatech.pdf" target="_new"><img src="Imagenes Pagina/ALERTA.jpg" class="img-thumbnail"></a>
            </div>
        
        @foreach ($codigos as $key => $value)
            <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a>
         @endforeach
        

    </div>
</div>

@stop