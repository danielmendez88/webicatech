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
		<img src="Imagenes Pagina/requisitos-icatech.png" alt="requisitos" class="img-responsive" width="100%">
		<br><br>
	</div>

@stop --}}

@extends('theme.main.index')
{{-- titulo --}}
@section('title', 'Oferta Educativa | Icatech')
{{-- titulo END --}}

@section('contenido')
	<div class="container-xl">
		<br>
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
				<img src="{{ asset('Imagenes Pagina/requisitos-icatech.png') }}" alt="requisitos" class="img-responsive" width="100%">
			</div>
		</div>
		<br>
	</div>
@endsection
