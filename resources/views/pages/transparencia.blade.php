@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Transparencia | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->

	<div class="container g-pt-50">
			<div class="masonry-grid row g-mb-0 row-eq-height ">
				<div class="masonry-grid-sizer col-sm-12"></div>
				<div class="masonry-grid-item col-sm-6 col-md-6 col-lg-12 g-mb-30">
					<img src="Imagenes Pagina/banner icatechtransparencia4.png" class="img-responsive" width="100%">
				</div>
				<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-2 g-mb-30">
					<a href="http://icatech.transparencia.chiapas.gob.mx" target="_new">
						<img src="Imagenes Pagina/transparencia-icatech.png" class="center-img">
					</a>
				</div>
				<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-3 g-mb-30">
					<a href="/cuenta-publica">
						<img src="Imagenes Pagina/cuentapublica-icatech.png" class="center-img">
					</a>
				</div>
				<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-2 g-mb-30">
					<a href="/sevac">
						<img src="Imagenes Pagina/sevac-icatech.png" class="center-img">
					</a>
				</div>
				<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-3 g-mb-30">
					<a href="/Integridad">
						<img src="Imagenes Pagina/codigodecondcuta-icatech.png" class="center-img">
					</a>
				</div>
				<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-2 g-mb-30">
					<a href="/licitaciones">
						<img src="Imagenes Pagina/licitaciones-icatech.png" class="center-img">
					</a>
				</div>
			</div>
	</div>	
@stop