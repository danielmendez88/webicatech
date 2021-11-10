@extends("theme.lte.layout")

@section('content')

	<div class="container g-pt-50">
		<!--grids-->
		<div class="masonry-grid row g-mb-0 row-eq-height ">
			<div class="masonry-grid-sizer col-sm-12"></div>
			<div class="masonry-grid-item col-sm-8 col-md-16 col-lg-7 g-mb-30">
				<div class="col-md-12 col-sm-4 endeos-unslider">
					<ul class="rslides" id="slider1">
                        <li><img src="../../Imagenes Pagina/1.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/2.jpg" alt=""></li>
						<li><img src="../../Imagenes Pagina/11.png" alt=""></li>
                        <li><img src="../../Imagenes Pagina/3.jpeg" alt=""></li>
                        <li><img src="../../Imagenes Pagina/4.jpeg" alt=""></li>
                        <li><img src="../../Imagenes Pagina/5.jpeg" alt=""></li>
                        <li><img src="../../Imagenes Pagina/6.jpeg" alt=""></li>                        
                        <li><img src="../../Imagenes Pagina/8.jpeg" alt=""></li>
                        <li><img src="../../Imagenes Pagina/9.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/10.png" alt=""></li>
						<li><img src="../../Imagenes Pagina/12.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/13.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/14.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/15.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/16.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/17.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/18.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/19.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/20.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/21.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/22.jpeg" alt=""></li>
						<li><img src="../../Imagenes Pagina/23.jpeg" alt=""></li>
					</ul>
				</div>
			</div>
			<div class="masonry-grid-item col-sm-6 col-md-6 col-lg-5 g-mb-30">
				<!--div contenedor-->
				<div class="verticalCarousel">
					<div class="verticalCarouselHeader">
					<a href="javascript:;">
						<h3>COMUNICADOS</h3>
					</a>
					</div>
					<div class="smartmarquee lista">
						<ul class="vc_list">
							@foreach ($new_all as $noticias)
								<li>
									<p><h3>{{ $noticias->titulo }}</h3></p>
									<p>{!! html_entity_decode($noticias->resumen) !!} [...]</p>
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
		<!--revista icatech-->
		<div class="u-heading-v2-5--bottom g-brd-primary g-mb-30 text-left">
			<h2 class="u-heading-v2__title text-uppercase g-font-weight-300 mb-0">REVISTA ICATECH</h2>
		</div>
		<div class="masonry-grid-item col-sm-1 col-md-1 col-lg-4 g-mb-30">
				<div class="about-image">
					<div class="image">
						<a target="_blank" href="{{ route('revista') }}"><img src="revista_icatech/sept-octubre-princi.jpeg" alt="Banner" class="img-thumbnail"></a><br><br>
					</div>
				</div>
				</div>
		<!--fin revista icatech end-->	

		<div class="u-heading-v2-5--bottom g-brd-primary g-mb-30 text-left">
			<h2 class="u-heading-v2__title text-uppercase g-font-weight-300 mb-0">Videoteca</h2>
		</div>
		<div class="masonry-grid row g-mb-0 row-eq-height">
			<div class="masonry-grid-sizer col-sm-12">
			</div>
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

	<div class="container g-pt-25">
		<div class="u-heading-v2-5--bottom g-brd-primary g-mb-50 text-left">
				<h3>Información ICATECH</h3>
		</div>
			<div class="about-text">
				<p>
					<marquee behavior="alternate">
					<a target="_blank" href="/convocatorias/instructores-externos" target=""><img src="../../convocatoria/BANNER.jpg" width="470px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.chiapas.gob.mx/media/plan-desarrollo-2019/Plan-Estatal-de-Desarrollo-Chiapas-2019-2024.pdf" target="_new"><img src="Imagenes Pagina/banner-plan.png" width="600px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a target="_blank" href="Imagenes Pagina/calendario_icatech.pdf" target=""><img src="Imagenes Pagina/calendario_marzo_2021.jpeg" width="470px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a target="_blank" href="Imagenes Pagina/catalogo_2020.pdf" target=""><img src="Imagenes Pagina/catalogo_cursos.jpeg" width="470px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/Integridad" target=""><img src="Imagenes Pagina/bannericatechintegridad.png" width="470px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/transparencia" target=""><img src="Imagenes Pagina/banner icatechtransparencia4.png" width="470px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/avisos-de-privacidad" target=""><img src="Imagenes Pagina/avisodeprivacidad2.jpg" width="500px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/normatividad" target=""><img src="Imagenes Pagina/normatividad2.jpg" width="370px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					</marquee>
				</p>
			</div>
	 </div>
	 
	 <div class="container g-pt-25">
		 <div class="u-heading-v2-5--bottom g-brd-primary g-mb-30 text-left">
			<h2 class="u-heading-v2__title text-uppercase g-font-weight-300 mb-0">Consulta ciudadana / Plataforma Nacional de Transparencia </h2>
		 </div>
				<div class="masonry-grid row g-mb-0 row-eq-height">
			     <div class="masonry-grid-sizer col-sm-12">
			     </div>
				     <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-6 g-mb-30">
				         <div class="about-image">
					         <div class="image">
						<a target="_blank" href="http://consultapublicamx.inai.org.mx:8080/vut-web/?idSujetoObigadoParametro=1184&amp;idEntidadParametro=07&amp;idSectorParametro=21"><img src="Imagenes Pagina/banner_consulta.jpg" alt="Banner" class="img-thumbnail"></a><br><br>
							 </div>
				         </div>
				     </div>
			<!--div-->
			<div class="masonry-grid-item col-sm-6 col-md-6 col-lg-6 g-mb-30">
				<div class="about-image">
					<div class="image">
						<a target="_blank" href="https://www.plataformadetransparencia.org.mx/web/guest/inicio"><img src="Imagenes Pagina/banner_pnt.jpg" alt="About Images" class="img-thumbnail"></a><br><br>
					</div>
				</div>
			</div>			
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



	<!--<html lang="en">

		<head>

			<meta charset="utf-8">

			<title>Open Bootstrap Modal on Page Load</title>

			 <link rel="stylesheet" href="css/bootstrap.min.css">
				 <link rel="stylesheet" href="css/bootstrap-theme.min.css">
				 <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
				 <script src="js/bootstrap.min.js"></script>
		</head>
		<body>
		 <div id="myModal" class="modal fade">
    		 <div class="modal-dialog">
        		 <div class="modal-content">
            	     <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 					 </div>
	     <div class="modal-body">
             <form>
                	 <div class="">
					     <a target="_blank" href="https://www.facebook.com/Icatech-Chiapas-475079282568212/">
							 <video class="video-fluid z-depth-1" autoplay muted loop>
								<source src="../../Imagenes Pagina/video_icatech.mp4" type="video/mp4" />
						     </video>
						 </a>
					 </div>


                </form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
       	 </div>
   		 </div>
		</div>

		</body>

		</html>-->



@stop
