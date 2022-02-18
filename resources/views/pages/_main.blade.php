@extends('theme.main.index')

@section('title', "Instituto de Capacitación y Vinculación Tecnológica del Estado de Chiapas | Icatech")

@section('csscontent')
	<style>
		a {
			color: #770723;
			outline: none;
		}
		a:hover {
			color: #770723;
			outline: none;
			text-decoration:none;
		}
    .carta a {
      color: #ffffff;
			outline: none;
    }
    .carta a:hover{
      color: #ffffff;
      outline: none;
			text-decoration:none;
    }
    .card img.img-fluid{
      width: 100%;
      height: 260px;
    }
    .carta {
      box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
      background: no-repeat center center scroll;
      background-size: cover;
      border-radius: 2em;
      overflow: hidden;
    }
    .carta img.card-img{
      width: 100%;
      height: 500px;
      object-fit: cover;
      background: no-repeat center center scroll;
      border-radius: 2em;
    }

    .carta:hover img.card-img {
      filter: grayscale(100%);
    }
	</style>
@endsection

@section('contenido')

    {{-- CORTINILLA DE NOTICIAS --}}
        <div class="ticker-container">
            <div class="ticker-caption">
            <p>Comunicados</p>
            </div>
            <ul>
              @if (count($comunicado_cintilla) > 0)
                  @foreach ($comunicado_cintilla as $item_cintilla)
                    <div>
                      <li><span>{{ $item_cintilla->titulo }} &nbsp;&nbsp;<a href="{{ route('comunicado-detalle', ['id' => base64_encode($item_cintilla->id), 'url' => $item_cintilla->url]) }}" target="_blank">Leer Más</a></span></li>
                    </div> 
                  @endforeach
              @else
                <div>
                  <li><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In diam risus, venenatis ut sodales in, tristique sed tellus. &ndash; <a href="#">Leer Más</a></span></li>
                </div>
                <div>
                    <li><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In diam risus, venenatis ut sodales in, tristique sed tellus. &ndash; <a href="#">Leer Más</a></span></li>
                </div>
                <div>
                    <li><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In diam risus. &ndash; <a href="#">Leer Más</a></span></li>
                </div>
                <div>
                    <li><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. &ndash; <a href="#">Leer Más</a></span></li>
                </div>
                <div>
                    <li><span>Lorem ipsum dolor sit amet. &ndash; <a href="#">Leer Más</a></span></li>
                </div>
              @endif
            </ul>
        </div>
    {{-- CORTINILLA DE NOTICIAS END --}}
    {{-- CONTENEDOR PRINCIPAL --}}
        <div class="container-fluid-v2">
            {{-- SECCIÓN COMUNICADOS --}}
              {{-- SECCIÓN DE INDICE COMUNICADOS --}}
              <div class="col-sm-12">
                <div class="comunicados">
                  <a href="{{ route('comunicados') }}"><p>COMUNICADOS</p></a>
                  <div class="separador"></div>
                </div>
              </div>
              {{-- SECCIÓN DE INDICE COMUNICADOS END --}}

             {{-- include social media --}}
              @include('theme.main.media')
             {{-- include social media END --}}
              
              <div class="row">
                @if (count($comunicados) > 0)       
                  @foreach ($comunicados as $itemComunicados)
                    <div class="col-md-4 mb-3">
                      <div class="card">
                          <img class="img-fluid" src="{{ asset($itemComunicados->imagen) }}">
                          <div class="card-body">
                              <h4 class="card-title">{{ $itemComunicados->titulo }}</h4>
                              <p class="card-text"><a href="{{ route('comunicado-detalle', ['id' => base64_encode($itemComunicados->id), 'url' => $itemComunicados->url]) }}">Ir al Comunicado</a></p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted"><i class="fas fa-calendar-alt mr-2"></i> &nbsp;{{ Carbon\Carbon::createFromFormat('Y-m-d', $itemComunicados->fecha_publicacion)->locale('es_ES')->isoFormat('LL') }} </small>
                          </div>
                      </div>
                    </div>
                  @endforeach
                @else
                  <div class="col-sm-4">
                    <div class="card-flex text-white card-has-bg click-col" style="background-image:url('{{ asset('comunicados/imagen_comunicado_20210324230854_65.jpg') }}');">
                      
                      <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                          <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                        </div>
                        <div class="card-footer">
                          <div class="media">
                            <div class="media-body">
                              <small><i class="far fa-clock"></i> October 15, 2020</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="card-flex text-white card-has-bg click-col" style="background-image:url('{{ asset('/comunicados/imagen_comunicado_20210312204012_64.jpg') }}');">
                        <div class="card-img-overlay d-flex flex-column">
                          <div class="card-body">
                            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                          </div>
                          <div class="card-footer">
                            <div class="media">
                              <div class="media-body">
                                <small><i class="far fa-clock"></i> October 15, 2020</small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card-flex text-white card-has-bg click-col" style="background-image:url('{{ asset('/comunicados/imagen_comunicado_20210310213128_63.jpg') }}');">
                        <div class="card-img-overlay d-flex flex-column">
                          <div class="card-body">
                            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                            <small><i class="far fa-clock"></i> October 15, 2020</small>
                          </div>
                          <div class="card-footer">
                            <div class="media">
                              <div class="media-body">
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                @endif
              </div>
            {{-- SECCIÓN COMUNICADOS END --}}
            {{-- SECCIÓN DE INDICE BANNER --}}
              <div class="col-sm-12">
                <div class="comunicados">
                  &nbsp;&nbsp;
                </div>
              </div>
            {{-- SECCIÓN DE INDICE BANNER END --}}
            {{-- BANNER SECUNDARIO --}}
              <div class="row">
                <div class="col-sm-12">
                  <section class="lazy slider" data-sizes="50vw">
                    @if (count($bsecundario) > 0)
                        @foreach ($bsecundario as $itembannersecundario)
                          <div>
                            <img data-lazy="{{ $itembannersecundario->path }}" data-srcset="{{ $itembannersecundario->path }} 960w" data-sizes="100vw" aria-hidden="true">
                          </div>
                        @endforeach
                    @else
                      <div>
                        <img data-lazy="{{ asset('/sitio/banner_pnt.jpg') }}" data-srcset="{{ asset('/sitio/banner_pnt.jpg') }} 960w" data-sizes="100vw" aria-hidden="true">
                      </div>
                      <div>
                        <img data-lazy="{{ asset('/sitio/bannernormatividad.jpg') }}" data-srcset="{{ asset('/sitio/bannernormatividad.jpg') }} 650w, {{ asset('/sitio/bannernormatividad.jpg') }} 960w" data-sizes="100vw" aria-hidden="true">
                      </div>
                      <div>
                        <img data-lazy="{{ asset('/sitio/banner-plan.png') }}"  data-srcset="{{ asset('/sitio/banner-plan.png') }} 650w, {{ asset('/sitio/banner-plan.png') }} 960w" data-sizes="100vw" aria-hidden="true">
                      </div>
                      <div>
                        <img data-lazy="{{ asset('/sitio/banner_pnt.jpg') }}"  data-srcset="{{ asset('/sitio/banner_pnt.jpg') }} 650w, {{ asset('/sitio/banner_pnt.jpg') }} 960w" data-sizes="100vw" aria-hidden="true">
                      </div>
                      <div>
                        <!-- this slide should inherit the sizes attr from the parent slider -->
                        <img data-lazy="{{ asset('/sitio/calendario_marzo_2021.jpeg') }}"  data-srcset="{{ asset('/sitio/calendario_marzo_2021.jpeg') }} 650w, {{ asset('/sitio/calendario_marzo_2021.jpeg') }} 960w">
                      </div>
                    @endif
                  </section>
                </div>
              </div>
            {{-- BANNER SECUNDARIO END --}}
            {{-- SECCIÓN DE INDICE REVISTA --}}
              <div class="col-sm-12">
                <div class="comunicados">
                  <a href="{{ route('revista') }}"><p>REVISTA DIGITAL</p></a>
                  <div class="separador"></div>
                </div>
              </div>
            {{-- SECCIÓN DE INDICE REVISTA END --}}
            {{-- SECCION DE PAGOS Y APLICACIONES --}}
              <div class="row">
               {{-- calendario --}}
                <div class="col-sm-4">
                  <div class="card bg-dark text-white carta">
                    <a href="{{ route('revista') }}" target="_blank">
                      <img src="{{ asset('Imagenes Pagina/portada_calendario.jpeg') }}" class="card-img" alt="...">
                      <div class="card-img-overlay">
                      </div>
                    </a>
                  </div>
                </div>
               {{-- calendario --}}
                @if (count($brevista) > 0)
                  @foreach ($brevista as $itemrevista)
                    <div class="col-sm-4">
                      <div class="card bg-dark text-white carta">
                        <a href="{{ $itemrevista->href }}" target="_blank">
                          <img src="{{ $itemrevista->path }}" class="card-img" alt="...">
                          <div class="card-img-overlay">
                            <h3 class="card-title">{{ $itemrevista->nombre }}</h3>
                          </div>
                        </a>
                      </div>
                    </div>
                  @endforeach
                @else
                  <div class="col-sm-4">
                    <div class="card bg-dark text-white carta">
                      <a href="http://">
                        <img src="{{ asset('revista_icatech/revista_febrero.jpg') }}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                          <h3 class="card-title">Card title</h3>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card bg-dark text-white carta">
                      <img src="{{ asset('revista_icatech/revista1_2021.jpeg') }}" class="card-img" alt="...">
                      <div class="card-img-overlay">
                        <h3 class="card-title">Card title</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card bg-dark text-white carta">
                      <img src="{{ asset('revista_icatech/revista_2.png') }}" class="card-img" alt="...">
                      <div class="card-img-overlay">
                        <h3 class="card-title">Card title</h3>
                      </div>
                    </div>
                  </div>
                @endif
              </div>
            {{-- SECCION DE PAGOS Y APLICACIONES END--}}
            {{-- SECCIÓN INDICE VIDEOTECA --}}
            <div class="col-sm-12">
              <div class="comunicados">
                <p>VIDEOTECA</p>
                <div class="separador"></div>
              </div>
            </div>
            {{-- SECCIÓN INDICE VIDEOTECA END --}}
            
            {{-- SECCIÓN DEL VIDEO --}}
            @include('pages.video_player')
            {{-- SECCIÓN DEL VIDEO END --}}
            {{-- SECCIÓN TRANSPARENCIA --}}
            <div class="col-sm-12">
              <div class="comunicados">
                <p>TRANSPARENCIA</p>
                <div class="separador"></div>
              </div>
            </div>
            {{-- SECCIÓN TRANSPARENCIA --}}
            {{-- TRANSPARENCIA --}}
            <div class="row">
              @if (count($btransparencia) > 0)
                  @foreach ($collection as $item)
                    <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-6 g-mb-30">
                      <div class="about-image">
                        <div class="image">
                          <a target="_blank" href="{{ $item->href }}">
                            <img src="{{ $item->path }}" alt="{{ $item->slug }}" class="img-thumbnail">
                          </a>
                          <br>
                        </div>
                      </div>
                    </div> 
                  @endforeach
              @else
                <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-6 g-mb-30">
                  <div class="about-image">
                    <div class="image">
                      <a target="_blank" href="http://consultapublicamx.inai.org.mx:8080/vut-web/?idSujetoObigadoParametro=1184&amp;idEntidadParametro=07&amp;idSectorParametro=21">
                        <img src="{{ asset('Imagenes Pagina/banner_consulta.jpg') }}" alt="About Images" class="img-thumbnail">
                      </a>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-6 g-mb-30">
                  <div class="about-image">
                    <div class="image">
                      <a target="_blank" href="https://www.plataformadetransparencia.org.mx/web/guest/inicio">
                        <img src="{{ asset('Imagenes Pagina/banner_pnt.jpg') }}" alt="About Images" class="img-thumbnail">
                      </a>
                      <br>
                    </div>
                  </div>
                </div>
              @endif
            </div>
            {{-- TRANSPARENCIA --}}
            
            <br>
        </div>
    {{-- CONTENEDOR PRINCIPAL END --}}
@endsection
@section('contentScriptJs')
  <script type="text/javascript">
    $(document).ready(function () {
      $(".arrow-right").bind("click", function (event) {
          event.preventDefault();
          $(".vid-list-container").stop().animate({
              scrollLeft: "+=336"
          }, 750);
      });
      $(".arrow-left").bind("click", function (event) {
          event.preventDefault();
          $(".vid-list-container").stop().animate({
              scrollLeft: "-=336"
          }, 750);
      });
    });
  </script>
@endsection