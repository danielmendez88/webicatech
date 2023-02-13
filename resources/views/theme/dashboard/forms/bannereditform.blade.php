{{-- DISEÑADO Y DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ PARA ICATECH AÑO 2021--}}

@extends('theme.dashboard.index')

@section('contentSyles')
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
                <h4 class="card-title">Agregar Imagen a Banner: {{ $getBanner_->nombre }}</h4>
                <form class="form-sample" id="formSubcategoria" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    {{-- url --}}
                    <div class="col-md-12">
                        <div class="form-group row">
                          <label for="upload_image">
                              <img src="{{ asset('assets/img/bg/bg-img1.png') }}" id="uploaded_image" class="img-responsive img-circle" width="" height=""/>
                              <div class="overlay">
                                  <div class="text">Click para cambiar la imagen de perfil</div>
                              </div>
                              <input type="file" name="image" class="image" id="upload_image" style="display:none" />
                          </label>
                        </div>
                    </div>
                      {{-- <button type="submit" class="btn btn-success mr-2">Enviar</button> --}}
                    </div>
                    {{-- url END --}}
                        <a href="{{ route('main_index_banner') }}" class="btn btn-warning">
                            <i class="fas fa-undo fa-2x"></i>
                            Regresar
                        </a>
                    @switch($getBanner_->codigo)
                        @case('transparencia')
                          <input type="hidden" name="aspectRatio" id="aspectRatio" value="">
                          <input type="hidden" name="datawidth" id="datawidth" value="">
                          <input type="hidden" name="dataheight" id="dataheight" value="">
                        @break
                        @case('revista')
                          <input type="hidden" name="aspectRatio" id="aspectRatio" value="1">
                          <input type="hidden" name="datawidth" id="datawidth" value="420">
                          <input type="hidden" name="dataheight" id="dataheight" value="420">
                        @break
                        @case('banner_secundario')
                          <input type="hidden" name="aspectRatio" id="aspectRatio" value="16:9">
                          <input type="hidden" name="datawidth" id="datawidth" value="1080">
                          <input type="hidden" name="dataheight" id="dataheight" value="608">
                        @break
                        @case('banner_principal')
                          <input type="hidden" name="aspectRatio" id="aspectRatio" value="">
                          <input type="hidden" name="datawidth" id="datawidth" value="1480">
                          <input type="hidden" name="dataheight" id="dataheight" value="423">
                        @break
                        @default
                            
                    @endswitch
                    <input type="hidden" name="idBanner" id="idBanner" value="{{ base64_encode($idBanner) }}">
                    <input type="hidden" name="categoria" id="categoria" value="{{ base64_encode($idCat) }}">
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
                          <div class="col-md-8 bootstrap-modal-cropper">
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
    <script src="{{ asset('assets/js_/init-scripts/cropperjs/dist/cropper.js') }}"></script>
    <script>
        $(function(){

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
                  setData: {width: $('#datawidth').val(), height: $('#dataheight').val()},
                    crop(event){
                        // console.log(event.detail.x);
                        // console.log(event.detail.y);
                         console.log("ancho "+ event.detail.width);
                         console.log("alto " + event.detail.height);
                        // console.log(event.detail.rotate);
                        // console.log(event.detail.scaleX);
                        // console.log(event.detail.scaleY);
                        console.log($('#aspectRatio').val())
                    },
                    aspectRatio: $('#aspectRatio').val(),
                    viewMode: 2,
                    preview:'.preview',
                    cropBoxResizable: false,
                    center: true,
                    restore: false,
                    data: {
                      // x: 480,
                      // y: 60,
                      width: $('#datawidth').val(),
                      height: $('#dataheight').val()
                    },
                    // done: function(data) {
                    //   console.log(Math.round(data.width))
                    // }
                });
            }).on('hidden.bs.modal', function(){
                cropper.destroy();
                cropper = null;
            });

            $('#crop').click(function(){
                console.log('Hola');
                canvas = cropper.getCroppedCanvas({
                    width: $('#datawidth').val(),
                    height: $('#dataheight').val()
                });

                canvas.toBlob(function(blob){
                    url = URL.createObjectURL(blob);
                    var reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function(){
                        var base64data = reader.result;
                        var idBanner = $("#idBanner").val();
                        var categoria = $('#categoria').val();
                        $.ajax({
                            url:"{{ route('storefromajax') }}",
                            method:'POST',
                            data:{image:base64data, _token: "{{ csrf_token() }}", idBanner:idBanner},
                            success:function(data)
                            {
                              if (data === 'OK') {
                                $modal.modal('hide');
                                var $url = "{{ route('select_category', ':id') }}";
                                $url = $url.replace(':slug', categoria);
                                $(location).attr('href', $url);
                                // $('#uploaded_image').attr('src', data);
                              }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
                            },
                            error: function (request, status, error) {
                                alert(request.responseText);
                            }
                        });
                    };
                });
            });

        });
    </script>
@endsection