@extends("theme.lte.layout")

@section('content')

	<div class="container g-pt-50">
		<!--grids-->
		<div class="masonry-grid row g-mb-0 row-eq-height ">
			<div class="masonry-grid-sizer col-sm-12"></div>
			<div class="masonry-grid-item col-sm-8 col-md-16 col-lg-7 g-mb-30">
				<div class="col-md-12 col-sm-4 endeos-unslider">
					<ul class="rslides" id="slider1">
						<li><img src="../../Imagenes Pagina/2.jpg" alt=""></li>
						<li><img src="../../Imagenes Pagina/1.jpg" alt=""></li>
						<li><img src="../../Imagenes Pagina/4.jpg" alt=""></li>
						<li><img src="../../Imagenes Pagina/5.jpg" alt=""></li>
						<li><img src="../../Imagenes Pagina/3.jpg" alt=""></li>
					</ul>
				</div>
			</div>
			<div class="masonry-grid-item col-sm-6 col-md-6 col-lg-5 g-mb-30">
				<!--div contenedor-->
				<div class="verticalCarousel">
					<div class="verticalCarouselHeader">
						<h3>COMUNICADOS</h3>
					</div>
					<div class="smartmarquee lista">
						<ul class="vc_list">
							@foreach ($new_all as $noticias)
								<li>
									<p>{{ $noticias->resumen }}</p> 
									<a target="_blank" href="comunicado-detalle/{{ base64_encode($noticias->id) }}/{{ $noticias->url }}"><b>Leer Más...</b></a>
								</li>
							@endforeach							
						</ul>
					</div>
				</div>
				<!--div contenedor END-->
			</div>
		</div>
		<!--grids end-->		
	</div>
	<div class="container g-pt-25">
		<div class="u-heading-v2-5--bottom g-brd-primary g-mb-30 text-left">
			<h2 class="u-heading-v2__title text-uppercase g-font-weight-300 mb-0">Videoteca</h2>
		</div>
		<div class="masonry-grid row g-mb-0 row-eq-height">
			<div class="masonry-grid-sizer col-sm-12"></div>
			<div class="masonry-grid-item col-sm-6 col-md-6 col-lg-6 g-mb-30">
				<div class="about-image">
					<div class="image">
						<a target="_blank" href="https://www.youtube.com/watch?v=moXgHeA1e2Q&feature=youtu.be"><img src="Imagenes Pagina/icatechinforma.jpg" alt="Banner" class="img-thumbnail"></a><br><br>
					</div>
				</div>
			</div>
			<!--div-->
			<div class="masonry-grid-item col-sm-6 col-md-6 col-lg-6 g-mb-30">
				<div class="about-image">
					<div class="image">
						<a target="_blank" href="https://www.youtube.com/channel/UCsdL9XSwa6M0wPpR1twF1PA/videos"><img src="Imagenes Pagina/icatips2.jpg" alt="About Images" class="img-thumbnail"></a><br><br>
					</div>
				</div>
			</div>
			<!--div-->
			<div class="masonry-grid-item col-sm-6 col-md-6 col-lg-6 g-mb-30">
				<div class="about-image">
					<div class="image">
						<a target="_blank" href="https://www.youtube.com/watch?v=QV9xnmiwOVY&feature=youtu.be"><img src="Imagenes Pagina/historias.jpg" alt="About Images" class="img-thumbnail"></a><br><br>
					</div>
				</div>
			</div>
			<!--div-->
			<div class="masonry-grid-item col-sm-6 col-md-6 col-lg-6 g-mb-30">
				<div class="about-image">
					<div class="image">
						<a target="_blank" href="https://www.youtube.com/watch?v=K21KiVD_GYU&feature=youtu.be"><img src="Imagenes Pagina/RECETAS.jpg" alt="About Images" class="img-thumbnail"></a><br><br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--redes sociales-->
	<!--div-->
	<!--Convocatorias-->
	<div class="container g-pt-25">
		<div class="u-heading-v2-5--bottom g-brd-primary g-mb-50 text-left">
				<h3>Convocatoria ICATECH</h3>
		</div>
				<div class="about-image">
					<div class="image">
						<a target="_blank" href="convocatorias/convocatoria-consejeros.pdf"><img src="convocatorias/convocatoria.jpg" alt="About Images" class="img-thumbnail"></a><br><br>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--Convocatorias-->
	<div class="container g-pt-25">
			<div class="u-heading-v2-5--bottom g-brd-primary g-mb-50 text-left">
					<h3>Información ICATECH</h3>
			</div>
			<div class="about-text">
				<p>
					<marquee behavior="alternate">

					<a href="https://www.chiapas.gob.mx/media/plan-desarrollo-2019/Plan-Estatal-de-Desarrollo-Chiapas-2019-2024.pdf" target="_new"><img src="Imagenes Pagina/banner-plan.png" width="600px"></a>&nbsp;&nbsp;&nbsp;&nbsp;

					<a href="/Integridad" target=""><img src="Imagenes Pagina/bannericatechintegridad.png" width="470px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/transparencia" target=""><img src="Imagenes Pagina/banner icatechtransparencia4.png" width="470px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/avisos-de-privacidad" target=""><img src="Imagenes Pagina/avisodeprivacidad2.jpg" width="500px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/normatividad" target=""><img src="Imagenes Pagina/normatividad2.jpg" width="370px"></a>&nbsp;&nbsp;&nbsp;&nbsp;

					</marquee>
				</p>
			</div>
		</div>

			
	<!--banners-->
	<div class="container g-pt-25">
		<div class="u-heading-v2-5--bottom g-brd-primary g-mb-50 text-left">
				<h3>Redes Sociales</h3>
		</div>
		<div class="row">
			<div class="col-xs-8 col-sm-6">
					<h3>Facebook<hr class="red"></h3>	
				<div class="fb-page" 
					data-href="https://www.facebook.com/Icatech-Chiapas-475079282568212/" 
					data-tabs="timeline" 
					data-width="500" 
					data-height="" 
					data-small-header="true" 
					data-adapt-container-width="true" 
					data-hide-cover="false" 
					data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/Icatech-Chiapas-475079282568212/" class="fb-xfbml-parse-ignore">		
							<a href="https://www.facebook.com/Icatech-Chiapas-475079282568212/">
								Icatech
							</a>
						</blockquote>
				</div>
			</div>
			<!---->
			<div class="col-xs-8 col-sm-6">
			<h3>Twitter<hr class="red"></h3> 
			<a class="twitter-timeline" 
				data-width="500" 
				data-height="550"
				 href="https://twitter.com/IcatechOficial?ref_src=twsrc%5Etfw">Tweets by IcatechOficial</a> 
				 <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
				 </script>
			</div>
			<!---->
			
		</div>								
	</div>
	<!--redes sociales END-->
	

@stop