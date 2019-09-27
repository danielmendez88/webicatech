@extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Avisos de Privacidad | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->
<div class="container g-pt-25">
    <section class="text-left">
        <div class="container">
            <img src="Imagenes Pagina/PRIVACIDAD.jpg" ALIGN=RIGHT style="max-width:25%;width:auto;height:auto;">
        </div>
          <br>
            <p><b><h5>AVISOS DE PRIVACIDAD INTEGRALES</h5></b></p>

            <br>@foreach ($avis_inte as $key => $value)
                <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
             @endforeach <br>

            <b>UNIDAD EJECUTIVA</b><br>
            <br>@foreach ($unejec as $key => $value)
                <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
             @endforeach <br>

             <b>Dirección Juridica</b><br>
            <br>@foreach ($unjuri as $key => $value)
                <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
             @endforeach <br>

            <div class="card rounded-0 g-brd-none">
              <div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
              <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-01" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-01">
                <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus"></i>
                </span>
                <span class="g-pa-20">
                    DIRECCIÓN ADMINISTRATIVA
                </span>
                </a>
              </h5>
              </div>
              <div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
              <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                <ul class="list-unstyled">
                    @foreach ($diradm as $key => $value)
                    <!--Area de Informatica-->
                    <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-pink-left g-rounded-3 g-pa-20 g-mb-7">
                      <div class="d-flex justify-content-start">
                        <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                        <span class="ml-auto small g-color-pink g-px-10">PDF</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <ul class="u-list-inline">
                                            
                        </ul>
                        <div class="align-self-center">
                          <a class="btn u-btn-outline-pink g-brd-2 g-font-weight-600 g-rounded-3" href="{{ $value }}" target="_blank">Descargar</a>
                        </div>
                      </div>
                    </li>
                  @endforeach 
                </ul>
              
              </div>
              </div>
            </div>

            <div class="card rounded-0 g-brd-none">
              <div id="accordion-07-heading-02" class="u-accordion__header g-pa-0" role="tab">
              <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-02" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-02">
                <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus"></i>
                </span>
                <span class="g-pa-20">
                    Dirección de Planeación
                </span>
                </a>
              </h5>
              </div>
              <div id="accordion-07-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
              <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                <ul class="list-unstyled">
                    @foreach ($dirplan as $key => $value)
                    <!--Area de Informatica-->
                    <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-pink-left g-rounded-3 g-pa-20 g-mb-7">
                      <div class="d-flex justify-content-start">
                        <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                        <span class="ml-auto small g-color-pink g-px-10">PDF</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <ul class="u-list-inline">
                                            
                        </ul>
                        <div class="align-self-center">
                          <a class="btn u-btn-outline-pink g-brd-2 g-font-weight-600 g-rounded-3" href="{{ $value }}" target="_blank">Descargar</a>
                        </div>
                      </div>
                    </li>
                  @endforeach 
                </ul>
              
              </div>
              </div>
            </div>
                             
            <div class="card rounded-0 g-brd-none">
              <div id="accordion-07-heading-03" class="u-accordion__header g-pa-0" role="tab">
              <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-03" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
                <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus"></i>
                </span>
                <span class="g-pa-20">
                    DIRECCIÓN TÉCNICA ACADÉMICA
                </span>
                </a>
              </h5>
              </div>
              <div id="accordion-07-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
              <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                <ul class="list-unstyled">
                    @foreach ($dirtacad as $key => $value)
                    <!--Tecnica Academica-->
                    <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-pink-left g-rounded-3 g-pa-20 g-mb-7">
                      <div class="d-flex justify-content-start">
                        <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                        <span class="ml-auto small g-color-pink g-px-10">PDF</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <ul class="u-list-inline">
                                            
                        </ul>
                        <div class="align-self-center">
                          <a class="btn u-btn-outline-pink g-brd-2 g-font-weight-600 g-rounded-3" href="{{ $value }}" target="_blank">Descargar</a>
                        </div>
                      </div>
                    </li>
                  @endforeach 
                </ul>
              
              </div>
              </div>
            </div>

            <p><b><h5>AVISOS DE PRIVACIDAD SIMPLIFICADOS</h5></b></p>
            <br>@foreach ($avis_simpl as $key => $value)
              <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
              @endforeach <br>
            
            <b>UNIDAD EJECUTIVA</b><br>
            <br>@foreach ($simejec as $key => $value)
              <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
              @endforeach <br>
            
            <b>DIRECCIÓN ADMINISTRATIVA</b><br>
            <br>@foreach ($simadmi as $key => $value)
              <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
              @endforeach <br>
            
            <b>DIRECCIÓN DE VINCULACIÓN</b><br>
            <br>@foreach ($simplan as $key => $value)
              <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
              @endforeach <br>
            
            <b>DIRECCIÓN TÉCNICA ACADÉMICA</b><br>
            <br>@foreach ($simacad as $key => $value)
              <a target="_blank" href="{{ $value }}"><b>{{ $key }}<b></a><br>
              @endforeach <br>        

    </section>                   
        
								<!--Avisos de Privacidad Integrales-->
								<div class="card rounded-0 g-brd-none">
									<div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
										<h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
											<a class="d-flex g-color-main g-text-underline--none--hover collapsed" href="#accordion-07-body-01" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-01">
												<span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
													<i class="fa fa-plus"></i>
													<i class="fa fa-minus"></i>
												</span>
												<span class="g-pa-20">
													Avisos de Privacidad Integrales
												</span>
											</a>
										</h5>
									</div>
									<div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-01" data-parent="#accordion-07" style="">
										<div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
											<ul class="list-unstyled">
												<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Icatech</h5>
													<span class="ml-auto small g-color-blue g-px-10">PDF</span>
													</div>
												
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">
														
													
													</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-blue g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL_UT.pdf" target="_blank">Descargar</a>
													</div>
													</div>
												</li>
												<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Dirección General</h5>
													<span class="ml-auto small g-color-blue g-px-10">PDF</span>
													</div>
												
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">
														</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-blue g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_UT.pdf" target="_blank">Descargar</a>
													</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
  								<!-- End Card -->

							<!-- Card -->
							<div class="card rounded-0 g-brd-none">
								<div id="accordion-07-heading-02" class="u-accordion__header g-pa-0" role="tab">
								<h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
									<a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-02" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-02">
									<span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
										<i class="fa fa-plus"></i>
										<i class="fa fa-minus"></i>
									</span>
									<span class="g-pa-20">
										Unidad Ejecutiva
									</span>
									</a>
								</h5>
								</div>
								<div id="accordion-07-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
								<div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
								<ul class="list-unstyled">

										<!--Area de Informatica-->
										<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-pink-left g-rounded-3 g-pa-20 g-mb-7">
											<div class="d-flex justify-content-start">
												<h5 class="g-font-weight-600 g-color-black">Area de Informatica</h5>
												<span class="ml-auto small g-color-pink g-px-10">PDF</span>
											</div>
											<div class="d-flex justify-content-between">
												<ul class="u-list-inline">
																						
												</ul>
												<div class="align-self-center">
													<a class="btn u-btn-outline-pink g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL- EXPEDIENTES-ASESORES.pdf" target="_blank">Descargar</a>
												</div>
											</div>
										</li>
											
								</ul>
								</div>
								</div>
							</div>
							<!-- End Card -->

							<!-- Dirección Juridica-->
							<div class="card rounded-0 g-brd-none">
								<div id="accordion-07-heading-03" class="u-accordion__header g-pa-0" role="tab">
								<h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
									<a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-03" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
									<span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
										<i class="fa fa-plus"></i>
										<i class="fa fa-minus"></i>
									</span>
									<span class="g-pa-20">
										Dirección Juridica
									</span>
									</a>
								</h5>
								</div>
								<div id="accordion-07-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-03" data-parent="#accordion-07">
									<div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
										<ul class="list-unstyled">
											<!--Solicitantes de beca comisión-->
											<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
												<div class="d-flex justify-content-start">
												<h5 class="g-font-weight-600 g-color-black">Unidad Juridica</h5>
												<span class="ml-auto small g-color-primary g-px-10">PDF</span>
												</div>
												
												<div class="d-flex justify-content-between">
												<ul class="u-list-inline">
													</ul>
												<div class="align-self-center">
													<a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL_INVESTIGACION.pdf" target="_blank">Descargar</a>
												</div>
												</div>
											</li>

											<!--Simplificado de revisión de anteproyectos de solicitantes de beca comisión-->
											<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Unidad de Transparencia</h5>
													<span class="ml-auto small g-color-primary g-px-10">PDF</span>
													</div>
													
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">																										
													</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_INVESTIGACION.pdf" target="_blank">Descargar</a>
													</div>
													</div>
                        </li>
                      <!-- Unidad de transparencia (derecho arco)-->
                      <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                        <div class="d-flex justify-content-start">
                        <h5 class="g-font-weight-600 g-color-black">Unidad de Transparencia (Derecho ARCO)</h5>
                        <span class="ml-auto small g-color-primary g-px-10">PDF</span>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                        <ul class="u-list-inline">																										
                        </ul>
                        <div class="align-self-center">
                          <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_INVESTIGACION.pdf" target="_blank">Descargar</a>
                        </div>
                        </div>
                      </li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Card -->
  
						<!-- Departamento de Asuntos Académicos -->
						<div class="card rounded-0 g-brd-none">
							<div id="accordion-07-heading-04" class="u-accordion__header g-pa-0" role="tab">
							<h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
								<a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-04" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
								<span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
									<i class="fa fa-plus"></i>
									<i class="fa fa-minus"></i>
								</span>
								<span class="g-pa-20">
									Dirección Administrativa
								</span>
								</a>
							</h5>
							</div>
							<div id="accordion-07-body-04" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-04" data-parent="#accordion-07">
							<div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
									<ul class="list-unstyled">
											<!--Integral  de los expedientes personales (currículum vitae)-->
											<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Financieros (CDFI)</h5>
													<span class="ml-auto small g-color-red g-px-10">PDF</span>
													</div>
													
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">
																											
													</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD_INTEGRAL_ACADEMICOS.pdf" target="_blank">Descargar</a>
													</div>
													</div>
												</li>

												<!--Departamento de Recursos Humanos (nomina)-->
											<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Humanos (Nómina) </h5>
													<span class="ml-auto small g-color-red g-px-10">PDF</span>
													</div>
													
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">
														</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
													</div>
													</div>
                        </li>
                        <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Humanos (Expediente Unico del Personal) </h5>
													<span class="ml-auto small g-color-red g-px-10">PDF</span>
													</div>
													
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">
														</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
													</div>
													</div>
                        </li>
                        <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Humanos (Sistema de Registro de Asistencia) </h5>
													<span class="ml-auto small g-color-red g-px-10">PDF</span>
													</div>
													
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">
														</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
													</div>
													</div>
                        </li>
                        <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Materiales (Proveedores) </h5>
													<span class="ml-auto small g-color-red g-px-10">PDF</span>
													</div>
													
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">
														</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
													</div>
													</div>
                        </li>
                        <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Materiales (Resguardos) </h5>
													<span class="ml-auto small g-color-red g-px-10">PDF</span>
													</div>
													
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">
														</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
													</div>
													</div>
                        </li>
                        <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Materiales (Registros de Visitas) </h5>
													<span class="ml-auto small g-color-red g-px-10">PDF</span>
													</div>
													
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">
														</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
													</div>
													</div>
												</li>
															
										</ul>
							</div>
							</div>
						</div>
						<!-- End Card -->
  
 						 <!--Dirección de planeacion -->
						<div class="card rounded-0 g-brd-none">
							<div id="accordion-07-heading-05" class="u-accordion__header g-pa-0" role="tab">
							<h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
								<a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-05" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
								<span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
									<i class="fa fa-plus"></i>
									<i class="fa fa-minus"></i>
								</span>
								<span class="g-pa-20">
									Dirección de Planeación
								</span>
								</a>
							</h5>
							</div>
							<div id="accordion-07-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-05" data-parent="#accordion-07">
							<div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
									<ul class="list-unstyled">
											<!--Unidad de planeación-->
											<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-orange-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Unidad de Planeación</h5>
													<span class="ml-auto small g-color-orange g-px-10">PDF</span>
													</div>
													
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">
														</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-orange g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD_INTEGRAL_C.ESCOLAR -SIMPLIFICADO2.pdf" target="_blank">Descargar</a>
													</div>
													</div>
												</li>
							
											
										</ul>
							</div>
							</div>
						</div>
            <!-- End Card -->
            <!-- Dirección de Vinculación-->
							<div class="card rounded-0 g-brd-none">
								<div id="accordion-07-heading-06" class="u-accordion__header g-pa-0" role="tab">
								<h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
									<a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-06" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-06">
									<span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
										<i class="fa fa-plus"></i>
										<i class="fa fa-minus"></i>
									</span>
									<span class="g-pa-20">
										Dirección de Vinculación
									</span>
									</a>
								</h5>
								</div>
								<div id="accordion-07-body-06" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-06" data-parent="#accordion-07">
									<div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
										<ul class="list-unstyled">
											<!--Unidad de Vinculación-->
											<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
												<div class="d-flex justify-content-start">
												<h5 class="g-font-weight-600 g-color-black">Unidad de Vinculación</h5>
												<span class="ml-auto small g-color-primary g-px-10">PDF</span>
												</div>
												
												<div class="d-flex justify-content-between">
												<ul class="u-list-inline">
													</ul>
												<div class="align-self-center">
													<a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL_INVESTIGACION.pdf" target="_blank">Descargar</a>
												</div>
												</div>
											</li>

											<!--Direccion de Vinculación con el Sector Productivo-->
											<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Direccion de Vinculación con el Sector Productivo</h5>
													<span class="ml-auto small g-color-primary g-px-10">PDF</span>
													</div>
													
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">																										
													</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_INVESTIGACION.pdf" target="_blank">Descargar</a>
													</div>
													</div>
                        </li>
                      <!--Dirección de Vinculación Seguimiento a Egresados-->
                      <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                        <div class="d-flex justify-content-start">
                        <h5 class="g-font-weight-600 g-color-black">Dirección de Vinculación Seguimiento a Egresados</h5>
                        <span class="ml-auto small g-color-primary g-px-10">PDF</span>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                        <ul class="u-list-inline">																										
                        </ul>
                        <div class="align-self-center">
                          <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_INVESTIGACION.pdf" target="_blank">Descargar</a>
                        </div>
                        </div>
                      </li>
										</ul>
									</div>
								</div>
							</div>
              <!-- End Card -->

              <!-- Técnica Academica-->
							<div class="card rounded-0 g-brd-none">
								<div id="accordion-07-heading-07" class="u-accordion__header g-pa-0" role="tab">
								<h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
									<a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-07" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-07">
									<span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
										<i class="fa fa-plus"></i>
										<i class="fa fa-minus"></i>
									</span>
									<span class="g-pa-20">
										Dirección de Técnica Academica
									</span>
									</a>
								</h5>
								</div>
								<div id="accordion-07-body-07" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-07" data-parent="#accordion-07">
									<div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
										<ul class="list-unstyled">
											<!--Departamento de Gestión Academica (Instructores)-->
											<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
												<div class="d-flex justify-content-start">
												<h5 class="g-font-weight-600 g-color-black">Departamento de Gestión Academica (Instructores)</h5>
												<span class="ml-auto small g-color-primary g-px-10">PDF</span>
												</div>
												
												<div class="d-flex justify-content-between">
												<ul class="u-list-inline">
													</ul>
												<div class="align-self-center">
													<a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL_INVESTIGACION.pdf" target="_blank">Descargar</a>
												</div>
												</div>
											</li>

											<!--Departamento de Certificación y Control-->
											<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
													<div class="d-flex justify-content-start">
													<h5 class="g-font-weight-600 g-color-black">Departamento de Certificación y Control</h5>
													<span class="ml-auto small g-color-primary g-px-10">PDF</span>
													</div>
													
													<div class="d-flex justify-content-between">
													<ul class="u-list-inline">																										
													</ul>
													<div class="align-self-center">
														<a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_INVESTIGACION.pdf" target="_blank">Descargar</a>
													</div>
													</div>
                        </li>
                      
										</ul>
									</div>
								</div>
							</div>
              <!-- End Card -->

              <!-- Comisaria Pública-->
							<div class="card rounded-0 g-brd-none">
								<div id="accordion-07-heading-09" class="u-accordion__header g-pa-0" role="tab">
								<h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
									<a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-09" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-08">
									<span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
										<i class="fa fa-plus"></i>
										<i class="fa fa-minus"></i>
									</span>
									<span class="g-pa-20">
										Comisaria Pública
									</span>
									</a>
								</h5>
								</div>
								<div id="accordion-07-body-09" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-09" data-parent="#accordion-07">
									<div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
										<ul class="list-unstyled">
											<!--Departamento de Gestión Academica (Instructores)-->
											<li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
												<div class="d-flex justify-content-start">
												<h5 class="g-font-weight-600 g-color-black">Comisaria Pública</h5>
												<span class="ml-auto small g-color-primary g-px-10">PDF</span>
												</div>
												
												<div class="d-flex justify-content-between">
												<ul class="u-list-inline">
													</ul>
												<div class="align-self-center">
													<a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL_INVESTIGACION.pdf" target="_blank">Descargar</a>
												</div>
												</div>
                      </li>
                    </ul>
									</div>
								</div>
							</div>
                  <!--end card-->

       <!--Avisos de Privacidad Simplificados-->
       <div class="card rounded-0 g-brd-none">
        <div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
          <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
            <a class="d-flex g-color-main g-text-underline--none--hover collapsed" href="#accordion-07-body-01" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-01">
              <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                <i class="fa fa-plus"></i>
                <i class="fa fa-minus"></i>
              </span>
              <span class="g-pa-20">
                Avisos de Privacidad Simplificados
              </span>
            </a>
          </h5>
        </div>
        <div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-01" data-parent="#accordion-07" style="">
          <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
            <ul class="list-unstyled">
              <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Icatech</h5>
                <span class="ml-auto small g-color-blue g-px-10">PDF</span>
                </div>
              
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">
                  
                
                </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-blue g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL_UT.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
              <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Dirección General</h5>
                <span class="ml-auto small g-color-blue g-px-10">PDF</span>
                </div>
              
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">
                  </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-blue g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_UT.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
        <!-- End Card -->

    <!-- Card -->
    <div class="card rounded-0 g-brd-none">
      <div id="accordion-07-heading-02" class="u-accordion__header g-pa-0" role="tab">
      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-02" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-02">
        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
          <i class="fa fa-plus"></i>
          <i class="fa fa-minus"></i>
        </span>
        <span class="g-pa-20">
          Unidad Ejecutiva
        </span>
        </a>
      </h5>
      </div>
      <div id="accordion-07-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
      <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
      <ul class="list-unstyled">

          <!--Area de Informatica-->
          <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-pink-left g-rounded-3 g-pa-20 g-mb-7">
            <div class="d-flex justify-content-start">
              <h5 class="g-font-weight-600 g-color-black">Area de Informatica</h5>
              <span class="ml-auto small g-color-pink g-px-10">PDF</span>
            </div>
            <div class="d-flex justify-content-between">
              <ul class="u-list-inline">
                                  
              </ul>
              <div class="align-self-center">
                <a class="btn u-btn-outline-pink g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL- EXPEDIENTES-ASESORES.pdf" target="_blank">Descargar</a>
              </div>
            </div>
          </li>
            
      </ul>
      </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Dirección Juridica-->
    <div class="card rounded-0 g-brd-none">
      <div id="accordion-07-heading-03" class="u-accordion__header g-pa-0" role="tab">
      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-03" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
          <i class="fa fa-plus"></i>
          <i class="fa fa-minus"></i>
        </span>
        <span class="g-pa-20">
          Dirección Juridica
        </span>
        </a>
      </h5>
      </div>
      <div id="accordion-07-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-03" data-parent="#accordion-07">
        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
          <ul class="list-unstyled">
            <!--Solicitantes de beca comisión-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
              <div class="d-flex justify-content-start">
              <h5 class="g-font-weight-600 g-color-black">Unidad Juridica</h5>
              <span class="ml-auto small g-color-primary g-px-10">PDF</span>
              </div>
              
              <div class="d-flex justify-content-between">
              <ul class="u-list-inline">
                </ul>
              <div class="align-self-center">
                <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL_INVESTIGACION.pdf" target="_blank">Descargar</a>
              </div>
              </div>
            </li>

            <!--Simplificado de revisión de anteproyectos de solicitantes de beca comisión-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Unidad de Transparencia</h5>
                <span class="ml-auto small g-color-primary g-px-10">PDF</span>
                </div>
                
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">																										
                </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_INVESTIGACION.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
            <!-- Unidad de transparencia (derecho arco)-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
              <div class="d-flex justify-content-start">
              <h5 class="g-font-weight-600 g-color-black">Unidad de Transparencia (Derecho ARCO)</h5>
              <span class="ml-auto small g-color-primary g-px-10">PDF</span>
              </div>
              
              <div class="d-flex justify-content-between">
              <ul class="u-list-inline">																										
              </ul>
              <div class="align-self-center">
                <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_INVESTIGACION.pdf" target="_blank">Descargar</a>
              </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Card -->

  <!-- Departamento de Asuntos Académicos -->
  <div class="card rounded-0 g-brd-none">
    <div id="accordion-07-heading-04" class="u-accordion__header g-pa-0" role="tab">
    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
      <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-04" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
      <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
        <i class="fa fa-plus"></i>
        <i class="fa fa-minus"></i>
      </span>
      <span class="g-pa-20">
        Dirección Administrativa
      </span>
      </a>
    </h5>
    </div>
    <div id="accordion-07-body-04" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-04" data-parent="#accordion-07">
    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
        <ul class="list-unstyled">
            <!--Integral  de los expedientes personales (currículum vitae)-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Financieros (CDFI)</h5>
                <span class="ml-auto small g-color-red g-px-10">PDF</span>
                </div>
                
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">
                                            
                </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD_INTEGRAL_ACADEMICOS.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>

              <!--Departamento de Recursos Humanos (nomina)-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Humanos (Nómina) </h5>
                <span class="ml-auto small g-color-red g-px-10">PDF</span>
                </div>
                
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">
                  </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
              <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Humanos (Expediente Unico del Personal) </h5>
                <span class="ml-auto small g-color-red g-px-10">PDF</span>
                </div>
                
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">
                  </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
              <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Humanos (Sistema de Registro de Asistencia) </h5>
                <span class="ml-auto small g-color-red g-px-10">PDF</span>
                </div>
                
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">
                  </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
              <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Materiales (Proveedores) </h5>
                <span class="ml-auto small g-color-red g-px-10">PDF</span>
                </div>
                
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">
                  </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
              <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Materiales (Resguardos) </h5>
                <span class="ml-auto small g-color-red g-px-10">PDF</span>
                </div>
                
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">
                  </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
              <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-red-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Departamento de Recursos Materiales (Registros de Visitas) </h5>
                <span class="ml-auto small g-color-red g-px-10">PDF</span>
                </div>
                
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">
                  </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-red g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_ACADEMICOS.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
                    
          </ul>
    </div>
    </div>
  </div>
  <!-- End Card -->

    <!--Dirección de planeacion -->
  <div class="card rounded-0 g-brd-none">
    <div id="accordion-07-heading-05" class="u-accordion__header g-pa-0" role="tab">
    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
      <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-05" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
      <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
        <i class="fa fa-plus"></i>
        <i class="fa fa-minus"></i>
      </span>
      <span class="g-pa-20">
        Dirección de Planeación
      </span>
      </a>
    </h5>
    </div>
    <div id="accordion-07-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-05" data-parent="#accordion-07">
    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
        <ul class="list-unstyled">
            <!--Unidad de planeación-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-orange-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Unidad de Planeación</h5>
                <span class="ml-auto small g-color-orange g-px-10">PDF</span>
                </div>
                
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">
                  </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-orange g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD_INTEGRAL_C.ESCOLAR -SIMPLIFICADO2.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
    
            
          </ul>
    </div>
    </div>
  </div>
  <!-- End Card -->
  <!-- Dirección de Vinculación-->
    <div class="card rounded-0 g-brd-none">
      <div id="accordion-07-heading-06" class="u-accordion__header g-pa-0" role="tab">
      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-06" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-06">
        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
          <i class="fa fa-plus"></i>
          <i class="fa fa-minus"></i>
        </span>
        <span class="g-pa-20">
          Dirección de Vinculación
        </span>
        </a>
      </h5>
      </div>
      <div id="accordion-07-body-06" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-06" data-parent="#accordion-07">
        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
          <ul class="list-unstyled">
            <!--Unidad de Vinculación-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
              <div class="d-flex justify-content-start">
              <h5 class="g-font-weight-600 g-color-black">Unidad de Vinculación</h5>
              <span class="ml-auto small g-color-primary g-px-10">PDF</span>
              </div>
              
              <div class="d-flex justify-content-between">
              <ul class="u-list-inline">
                </ul>
              <div class="align-self-center">
                <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL_INVESTIGACION.pdf" target="_blank">Descargar</a>
              </div>
              </div>
            </li>

            <!--Direccion de Vinculación con el Sector Productivo-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Direccion de Vinculación con el Sector Productivo</h5>
                <span class="ml-auto small g-color-primary g-px-10">PDF</span>
                </div>
                
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">																										
                </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_INVESTIGACION.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
            <!--Dirección de Vinculación Seguimiento a Egresados-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
              <div class="d-flex justify-content-start">
              <h5 class="g-font-weight-600 g-color-black">Dirección de Vinculación Seguimiento a Egresados</h5>
              <span class="ml-auto small g-color-primary g-px-10">PDF</span>
              </div>
              
              <div class="d-flex justify-content-between">
              <ul class="u-list-inline">																										
              </ul>
              <div class="align-self-center">
                <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_INVESTIGACION.pdf" target="_blank">Descargar</a>
              </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Técnica Academica-->
    <div class="card rounded-0 g-brd-none">
      <div id="accordion-07-heading-07" class="u-accordion__header g-pa-0" role="tab">
      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-07" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-07">
        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
          <i class="fa fa-plus"></i>
          <i class="fa fa-minus"></i>
        </span>
        <span class="g-pa-20">
          Dirección de Técnica Academica
        </span>
        </a>
      </h5>
      </div>
      <div id="accordion-07-body-07" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-07" data-parent="#accordion-07">
        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
          <ul class="list-unstyled">
            <!--Departamento de Gestión Academica (Instructores)-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
              <div class="d-flex justify-content-start">
              <h5 class="g-font-weight-600 g-color-black">Departamento de Gestión Academica (Instructores)</h5>
              <span class="ml-auto small g-color-primary g-px-10">PDF</span>
              </div>
              
              <div class="d-flex justify-content-between">
              <ul class="u-list-inline">
                </ul>
              <div class="align-self-center">
                <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL_INVESTIGACION.pdf" target="_blank">Descargar</a>
              </div>
              </div>
            </li>

            <!--Departamento de Certificación y Control-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                <div class="d-flex justify-content-start">
                <h5 class="g-font-weight-600 g-color-black">Departamento de Certificación y Control</h5>
                <span class="ml-auto small g-color-primary g-px-10">PDF</span>
                </div>
                
                <div class="d-flex justify-content-between">
                <ul class="u-list-inline">																										
                </ul>
                <div class="align-self-center">
                  <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__SIMPLIFICADO_INVESTIGACION.pdf" target="_blank">Descargar</a>
                </div>
                </div>
              </li>
            
          </ul>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Comisaria Pública-->
    <div class="card rounded-0 g-brd-none">
      <div id="accordion-07-heading-08" class="u-accordion__header g-pa-0" role="tab">
      <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-08" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-08">
        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
          <i class="fa fa-plus"></i>
          <i class="fa fa-minus"></i>
        </span>
        <span class="g-pa-20">
          Comisaria Pública
        </span>
        </a>
      </h5>
      </div>
      <div id="accordion-07-body-08" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-08" data-parent="#accordion-07">
        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
          <ul class="list-unstyled">
            <!--Departamento de Gestión Academica (Instructores)-->
            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
              <div class="d-flex justify-content-start">
              <h5 class="g-font-weight-600 g-color-black">Comisaria Pública</h5>
              <span class="ml-auto small g-color-primary g-px-10">PDF</span>
              </div>
              
              <div class="d-flex justify-content-between">
              <ul class="u-list-inline">
                </ul>
              <div class="align-self-center">
                <a class="btn u-btn-outline-primary g-brd-2 g-font-weight-600 g-rounded-3" href="transparencia/AVISO_PRIVACIDAD__INTEGRAL_INVESTIGACION.pdf" target="_blank">Descargar</a>
              </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
        <!--end card-->           
                  
                  

  </div>
@stop