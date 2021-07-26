@extends('theme.main.index')

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
                    <li><span>{{ $item_cintilla->titulo }} &nbsp;&nbsp;<a href="#">Leer Más</a></span></li>
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
                  <p>COMUNICADOS</p>
                  <div class="separador"></div>
                </div>
              </div>
              {{-- SECCIÓN DE INDICE COMUNICADOS END --}}
              
              <div class="row">
                @if (count($comunicados) > 0)
                    @foreach ($comunicados as $itemComunicados)
                      <div class="col-sm-4">
                        <div class="card-flex text-white card-has-bg click-col" style="background-image:url('{{ asset($itemComunicados->imagen) }}');">
                          
                          <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                              <h4 class="card-title mt-0 "><a class="text-white" herf="#">{{ $itemComunicados->titulo }}</a></h4>
                            </div>
                            <div class="card-footer">
                              <div class="media">
                                <div class="media-body">
                                  <small><i class="far fa-clock"></i> {{ $itemComunicados->fecha_publicacion }}</small>
                                </div>
                              </div>
                            </div>
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
                  <p>BANNER</p>
                  <div class="separador"></div>
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
                  <p>REVISTA DIGITAL</p>
                  <div class="separador"></div>
                </div>
              </div>
            {{-- SECCIÓN DE INDICE REVISTA END --}}
            {{-- SECCION DE PAGOS Y APLICACIONES --}}
              <div class="row">
                @if (count($brevista) > 0)
                  @foreach ($brevista as $itemrevista)
                    <div class="col-sm-4">
                      <div class="profile-card-2">
                        <img src="{{ $itemrevista->path }}" class="img img-responsive">
                        <div class="profile-username">REVISTA DIGITAL</div>
                        <div class="profile-icons">
                          <a href="#">
                            <i class="fa fa-facebook"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-twitter"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-linkedin"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @else
                  <div class="col-sm-4">
                    <div class="profile-card-2">
                      <img src="{{ asset('revista_icatech/revista_febrero.jpg') }}" class="img img-responsive">
                      <div class="profile-username">REVISTA DIGITAL</div>
                      <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="profile-card-2">
                      <img src="{{ asset('revista_icatech/revista1_2021.jpeg') }}" class="img img-responsive">
                      <div class="profile-username">REVISTA DIGITAL</div>
                      <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="profile-card-2">
                        <img src="{{ asset('revista_icatech/revista_2.png') }}" class="img img-responsive">
                        <div class="profile-username">REVISTA DIGITAL</div>
                        <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
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
                      <a target="_blank" href="https://www.plataformadetransparencia.org.mx/web/guest/inicio">
                        <img src="Imagenes Pagina/banner_pnt.jpg" alt="About Images" class="img-thumbnail">
                      </a>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-6 g-mb-30">
                  <div class="about-image">
                    <div class="image">
                      <a target="_blank" href="https://www.plataformadetransparencia.org.mx/web/guest/inicio">
                        <img src="Imagenes Pagina/banner_pnt.jpg" alt="About Images" class="img-thumbnail">
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