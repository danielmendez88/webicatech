@extends("theme.lte.layout")
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

@stop