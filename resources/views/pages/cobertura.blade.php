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
		<br><br>
		{{-- include social media --}}
		@include('theme.main.media')
		{{-- include social media END --}}
		<div class="row">
			<div class="col-md-12">
				<img src="{{ asset('Imagenes_Pagina/cobertura2.jpg') }}" class="img-responsive" width="100%" style="height: auto;"  alig="center">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12 maps">
				<img src="{{ asset('Imagenes_Pagina/mapa.jpg') }}" class="img-thumbnail" width="100%" style="height: auto;" alig="center">
			</div>
		</div>
		<br>
		{{-- agregar información acerca de las unidades de capacitación --}}
		<div class="row">
			@foreach ($array_unidades_cap_movil as $k => $v)
				<div class="masonry-grid-item col-sm-6 col-md-6 col-lg-12">
					<div class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-10 g-pt-20 g-bg-secondary">
						<p>
							<strong> 
								<b>{{ $v[0] }}</b>
							</strong>
						</p>
						<p>
							<strong>
								{{ $v[1] }}
							</strong>
						</p>
						<p>
							<strong>
								{{ $v[2] }}
							</strong>
						</p>
					</div>
				</div>
			@endforeach
		</div>
		{{-- agregar información acerca de las unidades de capacitación END --}}
	</div>
@endsection