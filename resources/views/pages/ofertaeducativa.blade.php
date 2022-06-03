{{-- @extends("theme.lte.layout")
@section('title', 'Oferta Educativa | Icatech')

@section('content')

	<div class="container g-pt-25">
		<div class="masonry-grid row row-eq-height">
			@foreach ($categorias as $item)
				<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-4 g-mb-30">
					<a href="{{ route("cursos", ['id' => $item->id, 'categoria' => $item->slug ]) }}">
						<img src="{{ $item->imagen }}" class="img-thumbnail" alt="{{ $item->categoria }}">
					</a>
				</div>	
			@endforeach
		</div>
		<img src="{{ asset('Imagenes Pagina/requisitos_icatech.jpeg') }}" alt="requisitos" class="img-responsive" width="100%">
		<br><br>
	</div>

@stop --}}

@extends('theme.main.index')
{{-- titulo --}}
@section('title', 'Oferta Educativa | Icatech')
{{-- titulo END --}}

@section('csscontent')
	<style>
		.contorno{
			margin-bottom: 4vh;
		}
		.imagenesbanner{
			border: 1px solid #ddd;
  			border-radius: 4px;
		}
	</style>
@endsection

@section('contenido')
	<div class="container-xl">
		<br><br>
		{{-- include social media --}}
		@include('theme.main.media')
		{{-- include social media END --}}
		<div class="row">
			<div class="col-md-12 contorno">
				<a href="{{ route('catalogo.factibilidad') }}">
					<img src="{{ asset('imagenes-cursos/unidades_capacitacion/unidades_capacitacion.png') }}" class="img-responsive imagenesbanner" width="100%"/>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="masonry-grid row row-eq-height">
				@foreach ($categorias as $item)
					<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-4 g-mb-30">
						<a href="{{ route("cursos", ['id' => $item->id, 'categoria' => $item->slug ]) }}">
							<img src="{{ $item->imagen }}" class="img-thumbnail" alt="{{ $item->categoria }}">
						</a>
					</div>	
				@endforeach
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<img src="{{ asset('Imagenes Pagina/requisitos_icatech.jpeg') }}" alt="requisitos" class="img-responsive" width="100%">
			</div>
		</div>
		<br>
	</div>
@endsection
