{{-- DISEÑADO Y DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ PARA ICATECH AÑO 2021--}}

@extends('theme.dashboard.index')

@section('contentSyles')
  <style>
    .progress {
      display: -ms-flexbox;
      display: flex;
      height: 20px;
      overflow: hidden;
      font-size: .75rem;
      background-color: #e9ecef;
      border-radius: .25rem;
      margin-top: 10px;
    }
    .progress-bar {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -ms-flex-pack: center;
        justify-content: center;
        overflow: hidden;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        background-color: #28a745;
        transition: width .6s ease;
      font-size: 16px;
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
                <h4 class="card-title">Agregar Subcategorias de la Categoría</h4>
                <form class="form-sample" id="formSubcategoria" method="POST" action="{{ route('fileUploadPost') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Título del Documento</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="titulo_documento" name="titulo_documento"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Documento</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" id="documentoSubcategoria" name="documentoSubcategoria">
                        </div>
                      </div>
                        <button type="submit" class="btn btn-success mr-2">Enviar</button>
                        <button type="button" class="btn btn-danger">Cancelar</button>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Habilitado</label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" value="true" name="activo" id="activo" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Deshabilitar / Habilitar Subcategoría</label>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="idapartado" id="idapartado" value="{{ $id }}">
                  <input type="hidden" name="page_content" id="page_content" value="{{ $pagecontent }}">
                  <input type="hidden" name="slug" id="slug" value="{{ $slug }}">
                  <input type="hidden" name="idsubapartado" id="idsubapartado" value="{{ $subapartado }}">
                </form>
              </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Bien Hecho!</strong> {{ $message }}
      </div>
    @endif
    @if (count($query) > 0)
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
    @endif
@endsection

@section('contentScriptJs')
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/additional-methods.js') }}"></script>
    {{-- <script>
        $(function(){
            $.validator.addMethod('filesize', function (value, element, param) {
                return this.optional(element) || (element.files[0].size <= param)
            }, 'El TAMAÑO DEL ARCHIVO DEBE SER MENOR A {0} bytes.');
            $('#formSubcategoria').validate({
                rules: {
                    subcategoria: { required: true },
                    titulo_documento: { required: true },
                    documentoSubcategoria: {
                        required: true, 
                        extension: "pdf", 
                        filesize: 4000000
                    }
                },
                messages: {
                    documentoSubcategoria: {
                        required: "ARCHIVO REQUERIDO",
                        extension: "SÓLO SE ACEPTAN DOCUMENTOS PDF"
                    },
                    subcategoria: { required: "SUBCATEGORIA REQUERIDA" },
                    titulo_documento: { required: "TÍTULO REQUERIDO" }
                },
                submitHandler: function(form, event) {
                    // manipulación del contenido después de la validar
                    event.preventDefault();

                    var formData = new FormData(form);
                    var _url = "{{route('fileUploadPost')}}";
                    var bar = $('.bar');
                    var percent = $('.percent');
                    var status = $('#status');
                    var requested = $.ajax
                    ({
                        url: _url,
                        method: 'POST',
                        data: formData,
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function(){
                          status.empty();
                          var percentVal = '0%';
                          var posterValue = $('input[name=file]').fieldValue();
                          bar.width(percentVal)
                          percent.html(percentVal);
                        },
                        success: function(response){
                          var percentVal = 'Wait, Saving';
                          bar.width(percentVal)
                          percent.html(percentVal);
                        },
                        uploadProgress: function(event, position, total, percentComplete){
                          var percentVal = percentComplete + '%';
                          bar.width(percentVal)
                          percent.html(percentVal);
                        },
                        complete:function(data){
                          status.html(xhr.responseText);
                          alert('Uploaded Successfully');
                          window.location.href = "/file-upload";
                        },
                        error: function(jqXHR, textStatus){
                            //jsonValue = jQuery.parseJSON( jqXHR.responseText );
                            //document.querySelector('#spinner').setAttribute('hidden', '');
                            console.log(jqXHR.responseText);
                            alert( "Hubo un error: " + jqXHR.status );
                        }
                    });
                    // $('#formSubcategoria').ajaxForm({
                    //     beforeSend: function() {
                    //         var percentVal = '0%';
                    //         bar.width(percentVal)
                    //         percent.html(percentVal);
                    //     },
                    //     uploadProgress: function(event, position, total, percentComplete) {
                    //         var percentVal = percentComplete + '%';
                    //         bar.width(percentVal)
                    //         percent.html(percentVal);
                    //     },
                    //     complete: function(xhr) {
                    //         alert('File Has Been Uploaded Successfully');
                    //         window.location.href = SITEURL +"/"+"ajax-file-upload-progress-bar";
                    //     }
                    // });
                }
            });
            
        });
    </script> --}}
@endsection