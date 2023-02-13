{{-- DISEÑADO Y DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ PARA ICATECH AÑO 2021--}}

@extends('theme.dashboard.index')

@section('contentSyles')
  <link rel="stylesheet" href="{{ asset('assets/js_/init-scripts/dropzone/dist/dropzone.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/js_/init-scripts/cropperjs/dist/cropper.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/js_/init-scripts/jquery-ui/jquery-ui.css') }}">
  <style>
      .image_area {
		  position: relative;
		}

		img {
		  	display: block;
		  	max-width: 100%;
		}

		.preview {
  			overflow: hidden;
  			width: 100%; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}

		.modal-lg{
  			max-width: 1000px !important;
		}

		.overlay {
		  position: absolute;
		  bottom: 10px;
		  left: 0;
		  right: 0;
		  background-color: rgba(255, 255, 255, 0.5);
		  overflow: hidden;
		  height: 0;
		  transition: .5s ease;
		  width: 100%;
		}

		.image_area:hover .overlay {
		  height: 50%;
		  cursor: pointer;
		}

		.text {
		  color: #333;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}
    .error {
            color: red;
            background-color: #FFFFFF;
            padding-top: 10px;
    }
  </style>
@endsection

@section('contenido')
    @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ $message }}
      </div>
    @endif
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Administrador de Banner</h4>
                <form class="form-sample" id="formSubcategoria" method="POST" action="{{ route('save_post_banner') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Título</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="titulo" name="titulo"/>
                          @if ($errors->has('titulo'))
                            <span class="text-danger">{{ $errors->first('titulo') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Fecha de Termino</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="fecha_termino" name="fecha_termino" autocomplete="false"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ubicación</label>
                          <div class="col-sm-9">
                              <select class="form-control" id="catbanner" name="catbanner">
                                  <option value="">-- SELECCIONE LA UBICACIÓN --</option>
                                  @foreach ($catBanner as $itemarrayubicacion)
                                      <option value="{{ $itemarrayubicacion->id }}">{{ $itemarrayubicacion->nombre_ubicacion }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Archivo Revista</label>
                        <div class="col-sm-9">
                          <input class="form-control" type="file" id="archivo_revista" name="archivo_revista" disabled="true">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Url de la Página</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="url_pagina" name="url_pagina" disabled="true"/>
                        </div>
                      </div>
                    </div>
                    {{-- url --}}
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Publicar</label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" value="true" name="activo" id="activo" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Desactivar / Activar </label>
                            </div>
                        </div>
                      </div>
                      {{-- <button type="submit" class="btn btn-success mr-2">Enviar</button> --}}
                      <button type="submit" class="btn btn-success">
                        <i class="fas fa-paper-plane fa-lg"></i> Enviar
                      </button>
                      <button type="button" class="btn btn-danger">
                        <i class="fas fa-window-close fa-lg"></i>
                        Cancelar
                      </button>
                    </div>
                    {{-- url END --}}
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Cortar la Imagen antes de subir</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="img-container">
                      <div class="row">
                          <div class="col-md-8">
                              <img src="" id="sample_image" />
                          </div>
                          <div class="col-md-4">
                              <div class="preview"></div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="crop" class="btn btn-primary">Cortar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
          </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Bien Hecho!</strong> {{ $message }}
      </div>
    @endif
@endsection

@section('contentScriptJs')
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/additional-methods.js') }}"></script>
    <script src="{{ asset('assets/js_/init-scripts/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js_/init-scripts/cropperjs/dist/cropper.js') }}"></script>
    <script src="{{ asset('assets/js_/init-scripts/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js_/init-scripts/jquery-ui/jquery-es.js') }}"></script>
    <script>
        $(function(){
            // datepicker
            $.datepicker.setDefaults( $.datepicker.regional[ "es" ] );
            $('#fecha_termino').datepicker();

            $('#catbanner').on('change', function(e){
              var optionSelected = $("option:selected", this);
              // switcheamos la variable
              switch (optionSelected.val()) {
                case '2':
                 $( "#url_pagina" ).prop( "disabled", false );
                break;
                case '3':
                    $('#archivo_revista').prop("disabled", false);
                    $( "#url_pagina" ).prop( "disabled", false );
                  break;
                case '4':
                    // hablitiar url input
                    $('#archivo_revista').prop("disabled", true);
                    $( "#url_pagina" ).prop( "disabled", false );
                  break;
                default:
                    // deshabilitar url
                    $('#archivo_revista').prop("disabled", true);
                    $( "#url_pagina" ).prop( "disabled", true );
                  break;
              }
            });

            /*
            * Validar formulario con jquery validate
            */
            $('#formSubcategoria').validate({
              rules: {
                titulo: { required: true },
                catbanner: { required: true}
              },
              messages: {
                titulo: { required: "Titulo Requerido" },
                catbanner: { required: "Seleccione una Opción" }
              }
            });
        });
    </script>
@endsection