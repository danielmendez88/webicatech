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
                <h4 class="card-title">Agregar Subcategorias para <b>{{ $qrySubApartado->nombre }}</b></h4>
                <form class="form-sample" id="formSubcategoria" method="POST" action="{{ route('store_catalogo_sub') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Título</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="titulo_apartados" name="titulo_apartados"/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="descripcion_apartados" name="descripcion_apartados"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Subcategoría</label>
                        <div class="col-sm-9">
                            <div class=" form-switch">
                                <input class="form-check-input" value="true" name="activo" id="activo" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Deshabilitar / Habilitar</label>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success mr-2">Enviar</button>
                        <button type="button" class="btn btn-danger">Cancelar</button>
                    </div>
                  </div>
                  <input type="hidden" name="idcategoria" id="idcategoria" value="{{ $id }}">
                  <input type="hidden" name="page_content" id="page_content" value="{{ $pagecontent }}">
                  <input type="hidden" name="slug" id="slug" value="{{ $slug }}">
                  <input type="hidden" name="idapartado" id="idapartado" value="{{ $idapartado }}">
                  <input type="hidden" name="subapartadoid" id="subapartadoid" value="{{ $qrySubApartado->id }}">
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
    <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead role="rowgroup">
              <tr role="row">
                <th role="columnheader">Título</th>
                <th role="columnheader">Estado</th>
                <th role="columnheader">Subcategorías</th>
              </tr>
            </thead>
            <tbody role="rowgroup">
              @if (count($queryApartados) > 0)
                @foreach ($queryApartados as $itemApartados)
                  <tr role="row">
                    <td role="cell" style="width: 20%;" scope="row">{{ $itemApartados->titulo }}</td>
                    <td role="cell" style="width: 20%;">{{ $itemApartados->activo == 1 ? 'Habilitado' : 'Deshabilitado' }}</td>
                    <td role="cell" style="width: 20%;">
                        <a href="{{ route('form_add_sub_cat', [$slug, $pagecontent, $itemApartados->id, $itemApartados->sub_apartado_id]) }}" title="Agregar Subcategoría">
                            <i class="fas fa-folder-plus fa-2x"></i>
                        </a>
                    </td>
                  </tr>
                @endforeach
              @else
                <tr role="row">
                  <td role="cell" colspan="3"><b>No hay registros</b></td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
    </div>
@endsection

@section('contentScriptJs')
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/additional-methods.js') }}"></script>
@endsection