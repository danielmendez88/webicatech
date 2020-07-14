@extends("theme.convocatorias.layout")
@section('title', 'Conocenos | Icatech')

@section('content')
<!-- PAGINA -->

<style>
    .rcorners1 {
      border-radius: 15px;
      background:darkred;
      padding: 20px;
      width: 100%;
      height: 100%;
      color: white;
    }
</style>

	<div class="container g-pt-50">
		<div class="masonry-grid row  row-eq-twelve ">

			<div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">
				<article class="u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100">
					<p align="justify" style="font-weight:bold">
                        El Gobierno del Estado de Chiapas, a través del Instituto de Capacitación y Vinculación Tecnológica del Estado de
                        Chiapas, de conformidad con lo dispuesto por los artículos 123 de la Constitución Política de los Estados Unidos
                        Mexicanos, 9 fracción V, de la Constitución Política del Estado de Chiapas, 3 fracción I, 4 6 fracción IV y 15 fracción IV,
                        del Decreto por el que se crea el Instituto de Capacitación y Vinculación Tecnológica del Estado de Chiapas y 14 fracción
                        VI, del Reglamento Interior del Instituto de Capacitación y Vinculación Tecnológica del Estado de Chiapas, tienen a bien:
                    </p>
                    <div style="text-align:center; color: #4c0d27;">
                        <h1>CONVOCAR</h1>
                    </div>
                    <br>
                    <div style="color: #4c0d27; font-weight:bold">PRIMERA.- Aspectos Generales.</div>
                    <p align="justify" style="font-weight:bold">
                        El objeto de la presente es para convocar a todas las ciudadanas y ciudadanos
                        chiapanecos, interesados a participar en la Convocatoria Pública para integrarse al Padrón de Instructores Externos de la
                        Institución durante el ejercicio 2020 ofertando la prestación de sus servicios profesionales a las Unidades de Capacitación
                        y/o Acciones Móviles de Tuxtla y San Cristóbal de las Casas, conforme a la identificación de necesidades de capacitación
                        de cada una, a solicitar su registro y presentar su documentación
                    </p>
                    <div style="color: #4c0d27; font-weight:bold">SEGUNDA.- Cargos a designar y perfiles idóneos.</div>
                    <p align="justify" style="font-weight: bold">
                        Siendo una política del Gobierno del Estado de Chiapas, la generación de
                        empleos y la apertura al mercado laboral, de acuerdo a las competencias y habilidades de la ciudadanía, a través del
                        ICATECH ha tenido a bien someter a Convocatoria pública, la integración al Padrón de Instructores Externos para la
                        prestación de servicios profesionales en las Unidades de Capacitación y/o en las Acciones Móviles adscritas a dichas
                        Unidades, en concordancia con los proyectos estratégicos de ésta administración gubernamental, en cada una de las
                        regiones de la entidad, comprendidas dentro de las sedes, que de manera enunciativa, mas no limitativa se mencionan a
                        continuación, quedando a salvo la facultad discrecional a favor del ICATECH, para realizar las modificaciones, a dicha
                        convocatoria, cuando así lo ameriten las necesidades del servicio público.
                    </p>
                </article>
			</div>
        </div>
        <div class="masonry-grid row  row-eq-twelve">
            <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">
                <!--tabla-->
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">CURSO</th>
                        <th scope="col">HRS</th>
                        <th scope="col">VISITAS</th>
                        <th scope="col">PERFIL</th>
                        <th scope="col">COBERTURA</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Salud humana y comunitaria</th>
                        <td>20 hrs</td>
                        <td>7</td>
                        <td>Médicos generales, Licenciados (as) en Nutrición y Licenciados (as) en</td>
                        <td>Chalchihuitán Chenalhó , Huixtán , Larráizar y Mitontic , ó Suchiapa</td>
                      </tr>
                      <tr>
                        <th scope="row">Establecimiento de huertos comunitarios</th>
                        <td>20 hrs</td>
                        <td>7</td>
                        <td>Ingenieros agrónomos y/o técnicos en Horticultura.</td>
                        <td>Chalchihuitán Chenalhó ,  Chamula , Larráizar y  Mitontic , ó Suchiapa</td>
                      </tr>
                      <tr>
                        <th scope="row">Manejo integral de ovinos</th>
                        <td>36 hrs</td>
                        <td>12</td>
                        <td>Médicos Veterinarios Zootecnistas.</td>
                        <td>Chalchihuitán Chenalhó ,  Huixtán , Larráizar y  Mitontic</td>
                      </tr>
                      <tr>
                        <th scope="row">Proceso de producción  artesanal de la lana y elaboración de diferentes diseños de prendas de vestir</th>
                        <td>24 hrs</td>
                        <td>8</td>
                        <td>Médicos Veterinarios Zootecnistas, (Que tengan  conocimiento de la elaboración artesanal de queso de oveja)</td>
                        <td>Chalchihuitán Chenalhó , Huixtán , Larráizar y Mitontic</td>
                      </tr>
                      <tr>
                        <th scope="row">Estrategias para la comercialización de productos y subproductos</th>
                        <td>20 hrs</td>
                        <td>7</td>
                        <td>Especialistas en comercialización, Licenciados (as) en Administración de Empresas y Licenciados (as) en Mercadotecnia.</td>
                        <td>Chalchihuitán Chenalhó , Huixtán , Larráizar y Mitontic</td>
                      </tr>
                      <tr>
                        <th scope="row">Desarrollo comunitario con perspectivas de género</th>
                        <td>26 hrs</td>
                        <td>9</td>
                        <td>Licenciados (as) en Desarrollo Humano y Licenciados (as) en Psicología.</td>
                        <td>Chalchihuitán Chenalhó , Huixtán y Larráizar , ó Suchiapa</td>
                      </tr>
                      <tr>
                        <th scope="row">Conservación del medio ambiente</th>
                        <td>25 hrs</td>
                        <td>8</td>
                        <td>Licenciados (as) en Desarrollo Humano y Técnicos en Conservación del medio ambiente.</td>
                        <td>Chalchihuitán Chenalhó , Huixtán , Larráizar y Mitontic</td>
                      </tr>
                      <tr>
                        <th scope="row">Relaciones humanas saludables</th>
                        <td>20 hrs</td>
                        <td>7</td>
                        <td>Licenciados (as) en Desarrollo Humano y Licenciados (as) en Psicología.</td>
                        <td>Chalchihuitán Chenalhó , Huixtán , Larráizar y Mitontic , ó Suchiapa</td>
                      </tr>
                      <tr>
                        <th scope="row">Elaboración de pelucas artesanales oncológicas</th>
                        <td>20 hrs</td>
                        <td>7</td>
                        <td>Técnicos (as) en Estilismo</td>
                        <td>Suchiapa</td>
                      </tr>
                    </tbody>
                  </table>
                <!--tabla-->
            </div>
        </div>
        <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">
            <article class="u-shadow-v32 u-shadow-v21--hover g-transition-0_3 h-100">
                <div class="imgbcgrnd g-pa-20 g-rounded-bottom-5">
                    <div class="g-brd-primary g-mb-30 text-center">
                            <h1>REQUISITOS</h1>
                    </div>
                    <p align="justify">
                        Las y los interesados en participar, deberán presentar en el período habilitado, la siguiente documentación:
                    </p>
                    <!--lista ordenada-->
                    <ol style="font-weight: bold; font-size:1.4em;">
                        <li>Formato de Currículum vitae ICATECH (Anexo 1).</li>
                        <li>Original del Currículum Vitae, con firma autógrafa.</li>
                        <li>Constancia de cursos de actualización.</li>
                        <li>Constancia de haber impartido cursos, ó constancia de obtención de formación de
                            instructores, ó certificación de competencias laborales, ó comprobante que acredite tener
                            experiencia en la impartición de clases y/o cursos de capacitación.</li>
                        <li>Copia simple del certificado de último grado de estudios.</li>
                        <li>Copia simple del acta de nacimiento.</li>
                        <li>Copia simple de la Clave Única de Registro de Población.</li>
                        <li>Copia simple del RFC bajo el régimen de persona física con actividad empresarial y profesional
                            vigente.</li>
                        <li>Copia simple de identificación oficial.</li>
                        <li>Copia simple de comprobante de domicilio reciente.</li>
                        <li>Formato de Entrevista para candidatos a instructores (Anexo 2).</li>
                        <li>Deseable constancia de Agente Capacitador Externo extendida por la STPS.</li>
                    </ol>
                </div>
                <br>
                <div class="rcorners1">
                    <div class="text-left">
                        <h5>El envío de la documentación será a través del correo electrónico infoeinnovacionacademica@gmail.com</h5>
                    </div>
                </div>
                <br>
                <div style="color: #4c0d27; font-weight:bold">TERCERA.- Otras disposiciones.</div>
                <p align="justify" style="font-weight: bold">
                    En caso que las Unidades de Capacitación y/o Acciones Móviles hubieren recibido
                    registros de aspirantes que cumplan con la documentación y requisitos establecidos en la presente convocatoria,
                    procederán de manera inmediata, a más tardar el 22 de julio del 2020, a remitir la información a la Dirección Técnica
                    Académica, con la finalidad de proceder a generar la revisión y verificación del cumplimiento de los requisitos establecidos,
                    a fin de seleccionar los perfiles idóneos.
                </p>
                <div style="color: #4c0d27; font-weight:bold">CUARTA.- Fechas de entrega. </div>
                <p align="justify" style="font-weight:bold">
                    El período para recepción de candidatos y la entrega de sus documentos es del 13 al 22 de julio del 2020.
                    Las personas que resulten seleccionadas serán notificadas por vía telefónica y/o por correo electrónico, con la finalidad
                    que de manera inmediata se pongan en contacto con el responsable de la Unidad de Capacitación a la cual se haya adjudicado.
                </p>
                <div style="color: #4c0d27; font-weight:bold">QUINTA.- Puntos adicionales. </div>
                <p align="justify" style="font-weight:bold">
                    En los casos en que no existiera solicitud alguna de registro por curso existente, se procederá a declarar desierto el mismo, únicamente, por lo que respecta a dicho curso.
                    Todas y todos los aspirantes que se hubieren registrado formalmente y que se inconformen con los resultados de la convocatoria, podrán presentar por escrito su solicitud de inconformidad, mismo que deberá presentarse en Av. Paso
                    Limón No. 1581, Col. Comisión Federal, en la ciudad de Tuxtla Gutiérrez, a más tardar dentro de las 48 horas siguientes a que se hayan publicado los resultados en el portal de internet del Instituto de Capacitación y Vinculación Tecnológica del
                    Estado de Chiapas.
                </p>
            </article>
        </div>
        <div class="masonry-grid-item col-sm-8 col-md-8 col-lg-8 g-mb-30">
            <a href="{{asset('/documentos_convocatoria/instructores_externos/CONVOCATORIA_INSTRUCTORES_EXTERNOS_LUNES_13_DE_JULIO.pdf')}}" download>CONVOCATORIA INSTRUCTORES EXTERNOS LUNES 13 DE JULIO</a>&nbsp;&nbsp;&nbsp;<img src="{{asset('/Imagenes Pagina/2.png')}}" alt="">
        </div>
        <div class="masonry-grid-item col-sm-8 col-md-8 col-lg-8 g-mb-30">
            <a href="{{asset('/documentos_convocatoria/instructores_externos/ANEXO_1_FORMATO_DE_CURRICULUM_ACTUALIZADO_AMBOS_LADOS_ORIGINAL.docx')}}" download>ANEXO 1. FORMATO DE CURRICULUM ACTUALIZADO AMBOS LADOS ORIGINAL</a>&nbsp;&nbsp;&nbsp;<img src="{{asset('/Imagenes Pagina/word_logo.png')}}" alt="">
        </div>
        <div class="masonry-grid-item col-sm-8 col-md-8 col-lg-8 g-mb-30">
            <a href="{{asset('/documentos_convocatoria/instructores_externos/ANEXO_2_FORMATO_DE_ENTREVISTA_ACTUALIZADO_AMBOS_LADOS_ORIGINAL.doc')}}" download>ANEXO 2. FORMATO DE ENTREVISTA ACTUALIZADO AMBOS LADOS ORIGINAL</a>&nbsp;&nbsp;&nbsp;<img src="{{asset('/Imagenes Pagina/word_logo.png')}}" alt="">
        </div>
	</div>
@stop
