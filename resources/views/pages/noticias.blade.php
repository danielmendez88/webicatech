@extends("theme.lte.layout")
@section('title', 'Noticias | Icatecch')

@section('content')
	<section class="container g-py-40 g-pt-40 g-pb-0">
		<div class="row">
			<div class="col-md-9">
				<h1 class="d-block g-mb-3 g-font-size-18 g-color-primary g-font-weight-500 g-font-secondary">Noticias</h1>
			</div>
			<div class="col-md-3">
				<div class="sharethis-inline-share-buttons"></div>
			</div>
		</div>
		<hr class="g-brd-gray-light-v4">
	</section>
	<section class="container g-py-0 g-pt-0 g-pb-0">
		<div class="row">
			<div class="col-12 g-pb-40">
				<article>
					<div class="row">
						<div class="col-md-3">
							<a href="{{ url('/detalles_noticias') }}">
								<img class="img-fluid w-100 g-rounded-5 g-mb-0" src="http://saludchiapas.gob.mx/wp-content/uploads/2019/08/Acreditacion-hospitales.jpg" alt="">
							</a>
					    </div>
						<div class="col-md-9">
							<h3 class="g-color-gray-dark-v3 g-font-weight-500 mb-3 g-font-secondary" style="font-size:1.1rem">
								<a href="#">
									Chiapas logra certificar al 100 % de sus hospitales generales ante la Secretaría de Salud federal
								</a>
							</h3>
							<div class="d-lg-flex justify-content-between align-items-center g-mb-15">
								<ul class="list-inline g-mb-10 g-mb-0--lg">
								    <time datatime="2019-08-12">12 agosto, 2019</time>
								</ul>
							</div>
							<p class="g-mb-15"></p>
							<p>
								El gobernador Rutilio Escandón recibió del secretario de Salud, Jorge Alcocer, las acreditaciones de ocho nosocomios que faltaban Tras un mes de procesos de evaluación, […]
							</p>
							<p></p>
						</div>
					</div>
				</article>
				<hr class="g-brd-gray-light-v4 g-my-20">
				<article>
					<div class="row">
						<div class="col-md-3">
							<a href="#">
								<img class="img-fluid w-100 g-rounded-5 g-mb-0" src="http://saludchiapas.gob.mx/wp-content/uploads/2019/08/Acreditacion-hospitales.jpg" alt="">
							</a>
					    </div>
						<div class="col-md-9">
							<h3 class="g-color-gray-dark-v3 g-font-weight-500 mb-3 g-font-secondary" style="font-size:1.1rem">
								<a href="{{ url('/detalles_noticias') }}">
									Chiapas logra certificar al 100 % de sus hospitales generales ante la Secretaría de Salud federal
								</a>
							</h3>
							<div class="d-lg-flex justify-content-between align-items-center g-mb-15">
								<ul class="list-inline g-mb-10 g-mb-0--lg">
								    <time datatime="2019-08-12">12 agosto, 2019</time>
								</ul>
							</div>
							<p class="g-mb-15"></p>
							<p>
								El gobernador Rutilio Escandón recibió del secretario de Salud, Jorge Alcocer, las acreditaciones de ocho nosocomios que faltaban Tras un mes de procesos de evaluación, […]
							</p>
							<p></p>
						</div>
					</div>
				</article>
				<hr class="g-brd-gray-light-v4 g-my-20">
				<article>
					<div class="row">
						<div class="col-md-3">
							<a href="#">
								<img class="img-fluid w-100 g-rounded-5 g-mb-0" src="http://saludchiapas.gob.mx/wp-content/uploads/2019/08/Acreditacion-hospitales.jpg" alt="">
							</a>
					    </div>
						<div class="col-md-9">
							<h3 class="g-color-gray-dark-v3 g-font-weight-500 mb-3 g-font-secondary" style="font-size:1.1rem">
								<a href="{{ url('/detalles_noticias') }}">
									Chiapas logra certificar al 100 % de sus hospitales generales ante la Secretaría de Salud federal
								</a>
							</h3>
							<div class="d-lg-flex justify-content-between align-items-center g-mb-15">
								<ul class="list-inline g-mb-10 g-mb-0--lg">
								    <time datatime="2019-08-12">12 agosto, 2019</time>
								</ul>
							</div>
							<p class="g-mb-15"></p>
							<p>
								El gobernador Rutilio Escandón recibió del secretario de Salud, Jorge Alcocer, las acreditaciones de ocho nosocomios que faltaban Tras un mes de procesos de evaluación, […]
							</p>
							<p></p>
						</div>
					</div>
				</article>
			</div>		
		</div>	
	</section>
@stop