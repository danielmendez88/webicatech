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

					<div class="container g-pt-50">
					<div class="tab-pane active" id="#red">
						<hr>
													
							<!--<p>Vinculos a los diferentes portales de Transparencia Nacionales y Estatales</p>-->
							<p><a href="http://inicio.inai.org.mx/SitePages/ifai.aspx" title="Inai" target="_blank"><img src="Imagenes Pagina/inai.png" alt="Inai" width="150" height="55"><span></span></a>&nbsp;&nbsp;
							<a href="https://www.plataformadetransparencia.org.mx/web/guest/inicio" title="PnT" target="_blank"><img src="Imagenes Pagina/pnt.png" alt="Pnt" width="150" height="55"><span></span></a>&nbsp;&nbsp;
							<a href="http://www.iaipchiapas.org.mx/" title="Iaip" target="_blank"><img src="Imagenes Pagina/iaip.png" alt="Pnt" width="150" height="55"><span></span></a>&nbsp;&nbsp;
							<a href="https://www.plataformadetransparencia.org.mx/web/guest/sac" title="Ssci" target="_blank"><img src="Imagenes Pagina/sisai.png" alt="Pnt" width="150" height="55"><span></span></a>&nbsp;&nbsp;
							<a href="https://www.plataformadetransparencia.org.mx/web/guest/inicio?p_p_id=58&p_p_lifecycle=1&p_p_state=maximized&p_p_mode=view&_58_struts_action=%2Flogin%2Fcreate_account" title="Sipot" target="_blank"><img src="Imagenes Pagina/sipot.png" alt="Pnt" width="150" height="55"><span></span></a>&nbsp;
						  </p></div>
						  
					  </form>
					</div>
									  
					    <head>
						<meta charset="utf-3">
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
												<b>ESTAS POR INGRESAR AL PORTAL DE TRANSPARENCIA EN EL QUE PUEDES CONSULTAR INFORMACIÓN PUBLICA DEL ICATECH , SI POSTERIORMENTE A TU VISITA AUN TIENES DUDAS, PUEDES CONTACTARNOS DE MANERA DIRECTA: unidaddetransparenciaicatech@gmail.com 961– 61 2  16 21  ext. 208 </b>
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

						 
@stop