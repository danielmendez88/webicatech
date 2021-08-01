{{-- @extends("theme.lte.layout")
@section('title', 'Cobertura | Icatech')

@section('content')
<div class="container g-pt-25">
	<img src="Imagenes Pagina/cobertura2.jpg" class="img-responsive" width="100%" alig="center">
	<div class="row">
		
			<div class="col-md-9 col-sm-4 imagen2">
				<a href="" target="_new"><img src="Imagenes Pagina/mapa.jpg" class="img-thumbnail"></a>	
			</div>
	
		</div>
</div>
@stop --}}

@extends('theme.main.index')

@section('title', 'Cobertura | Icatech')

@section('csscontent')
	<style>
		.maps img{
			width: 100%;
			height: 550px;
			object-fit: cover;
			object-position: center center;
		}
	</style>
@endsection

{{-- sección del contenido --}}
@section('contenido')
	<div class="container-xl">
		<br>
		<div class="row">
			<div class="col-md-12">
				<img src="{{ asset('Imagenes Pagina/cobertura2.jpg') }}" class="img-responsive" width="100%" style="height: auto;"  alig="center">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12 maps">
				<img src="{{ asset('Imagenes Pagina/mapa.jpg') }}" class="img-thumbnail" width="100%" style="height: auto;" alig="center">
			</div>
		</div>
		<br>
	</div>
@endsection