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
                <form class="form-sample" id="formSubcategoria" method="POST" action="{{ route('fileUploadPost') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Título</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="titulo" name="titulo"/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Fecha de Termino</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="fecha_termino" name="fecha_termino"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="upload_image">
                            <img src="{{ asset('assets/img/bg/bg-img1.png') }}" id="uploaded_image" class="img-responsive img-circle" />
                            <div class="overlay">
                                <div class="text">Click to Change Profile Image</div>
                            </div>
                            <input type="file" name="image" class="image" id="upload_image" style="display:none" />
                        </label>
                      </div>
                    </div>
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
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ubicación</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <option>-- SELECCIONE LA UBICACIÓN --</option>
                                    @foreach ($arrayUbicacion as $itemarrayubicacion)
                                        <option value="{{ $itemarrayubicacion }}">{{ $itemarrayubicacion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-success mr-2">Enviar</button>
                            <button type="button" class="btn btn-danger">Cancelar</button>
                      </div>
                  </div>
                  {{-- <input type="hidden" name="idcategoria" id="idcategoria" value="{{ $id }}">
                  <input type="hidden" name="page_content" id="page_content" value="{{ $pagecontent }}">
                  <input type="hidden" name="slug" id="slug" value="{{ $slug }}">
                  <input type="hidden" name="idapartado" id="idapartado" value="{{ $idapartado }}"> --}}
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
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                  </button>
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
          </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Bien Hecho!</strong> {{ $message }}
      </div>
    @endif
    {{-- @if (count($query) > 0)
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card-columns">
            @foreach ($query as $itemquery)
              <div class="card text-center">
                <a href="{{ $itemquery->ruta_archivo }}" download target="_blank">
                  <img src="{{ asset('assets/img/gif/product_image_not_found.gif') }}" width="100%" class="card-img-top" alt="..." height="200px">
                </a>
                <div class="card-body">
                  <h5 class="card-title">{{ $itemquery->nombre }}</h5>
                  <p class="card-text">{{ $itemquery->titulo_documento }}.</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    @endif --}}
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

            var $modal = $('#modal');

            var image = document.getElementById('sample_image');

            var cropper;

            $('#upload_image').change(function(event){
                var files = event.target.files;

                var done = function(url){
                    image.src = url;
                    $modal.modal('show');
                };

                if(files && files.length > 0)
                {
                    reader = new FileReader();
                    reader.onload = function(event)
                    {
                        done(reader.result);
                    };
                    reader.readAsDataURL(files[0]);
                }
            });

            $modal.on('shown.bs.modal', function() {
                cropper = new Cropper(image, {
                    
                    crop(event){
                        console.log(event.detail.x);
                        console.log(event.detail.y);
                        console.log("ancho "+ event.detail.width);
                        console.log("alto " + event.detail.height);
                        console.log(event.detail.rotate);
                        console.log(event.detail.scaleX);
                        console.log(event.detail.scaleY);
                    },
                    viewMode: 0,
                    preview:'.preview'
                });
            }).on('hidden.bs.modal', function(){
                cropper.destroy();
                cropper = null;
            });

            $('#crop').click(function(){
                canvas = cropper.getCroppedCanvas({
                    width:400,
                    height:400
            });

                canvas.toBlob(function(blob){
                    url = URL.createObjectURL(blob);
                    var reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function(){
                        var base64data = reader.result;
                        $.ajax({
                            url:'upload.php',
                            method:'POST',
                            data:{image:base64data},
                            success:function(data)
                            {
                                $modal.modal('hide');
                                $('#uploaded_image').attr('src', data);
                            }
                        });
                    };
                });
            });

        });
    </script>
@endsection