{{-- DISEÑADO Y DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ PARA ICATECH AÑO 2021 --}}

@extends('theme.dashboard.index')

@section('title', 'Redactar Comunicado |  Tablero de Control')
@section('contentSyles')
  <style>
    
  </style>
@endsection

@section('contenido')
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Redactar Comunicado</h4>
            <form class="form-sample" id="formSubcategoria" method="POST" action="{{ route('comunicado_store')}}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Título</label>
                        <div class="col-sm-9">
                            <input id="titulo" name="titulo" type="text" class="form-control" aria-required="true" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="apellidoPaterno" class="col-sm-3 col-form-label">Localidad</label>
                    <div class="col-sm-9">
                        <input id="localizacion" name="localizacion" type="text" class="form-control" aria-required="true" autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                      <label for="categoria" class="col-sm-3 col-form-label">Categoría</label>
                      <div class="col-sm-9">
                        <input id="categoria" name="categoria" type="text" class="form-control" aria-required="true" autocomplete="off">
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="url">Url</label>
                    <div class="col-sm-9">
                        <input id="url" name="url" type="text" class="form-control" aria-required="true" autocomplete="off">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="imagen_comunicado" class="col-sm-3 col-form-label">Imagen</label>
                    <div class="col-sm-9">
                      <input id="imagen_comunicado" name="imagen_comunicado" type="file" accept="image/*" class="form-control" aria-required="true">
                    </div>
                  </div>
                </div>
                {{-- url --}}
                <div class="col-md-6"></div>
                {{-- url END --}}
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label for="contenido" class="col-sm-1 col-form-label">Texto</label>
                        <div class="col-sm-11">
                            <textarea name="contenido" id="contenido" cols="30" rows="10" class="form-control" aria-required="true"></textarea> 
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-paper-plane fa-lg"></i> Enviar
                    </button>
                    <button type="button" class="btn btn-danger">
                        <i class="fas fa-window-close fa-lg"></i>
                        Cancelar
                    </button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>


@endsection
@section('contentScriptJs')
    <script src="https://cdn.tiny.cloud/1/3vlifpzxzov4vsfasb0w8g6hj25ameqr2bm3kc9ktscj2jnw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
        selector: '#contenido',
        language: 'es_MX'
        });
    </script>
@endsection