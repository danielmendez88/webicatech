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
			<!--<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-4 g-mb-30">
				<img src="Imagenes Pagina/adultosmayores.jpg" class="img-thumbnail">
			</div>
			<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-4 g-mb-30">
				<img src="Imagenes Pagina/especializacion.jpg" class="img-thumbnail">
			</div>
			<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-4 g-mb-30">
				<img src="Imagenes Pagina/oficios.jpg" class="img-thumbnail">
			</div>
			<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-4 g-mb-30">
				<img src="Imagenes Pagina/sedespi.jpg" class="img-thumbnail">
			</div>
			<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-4 g-mb-30">
				<img src="Imagenes Pagina/profesionalizacion.jpg" class="img-thumbnail">
			</div>
			<div class="masonry-gird-item col-sm-12 col-md-12 col-lg-4 g-mb-30">
				<img src="Imagenes Pagina/sedena.jpg" class="img-thumbnail">
			</div>-->
		</div>
	</div>
	<div class="container g-pt-25">
		<div class="masonry-grid row g-mb-0 row-eq-height ">
			<div class="masonry-grid-sizer col-sm-12"></div>
			<div class="masonry-grid-item col-sm-6 col-md-6 col-lg-12 g-mb-30">
				<img src="Imagenes Pagina/requisitos-icatech.png" alt="requisitos" class="img-responsive" width="100%">
			</div>
		</div>
	</div>

@stop