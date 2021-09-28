{{-- DISEÑADO Y DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ PARA ICATECH AÑO 2021--}}

@extends('theme.dashboard.index')

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
                <h4 class="card-title">Administración de Apartados</h4>
                <form class="form-sample" action="{{ route('main_form_section_store') }}" method="POST">
                    {{ csrf_field() }}
                  <p class="card-description"> {{ $slug }} </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Categoría</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="categoria" name="categoria"/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="descripcion" name="descripcion"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Habilitado</label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" value="true" name="habilitado" id="habilitado" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Deshabilitar / Habilitar registro</label>
                            </div>
                        </div>
                      </div>
                        <button type="submit" class="btn btn-success mr-2">Enviar</button>
                        <button type="button" class="btn btn-danger">Cancelar</button>
                    </div>
                  </div>
                  <input type="hidden" name="idcategoria" id="idcategoria" value="{{ $id }}">
                  <input type="hidden" name="path_slug" id="path_slug" value="{{ $slg_path }}">
                  <input type="hidden" name="slug" id="slug" value="{{ $slug }}">
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
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">CATÁLOGO DE APARTADOS</h4>
              <p class="card-description"> {{ $slug }} </p>
              <div class="row">
                <div class="col-md-12">
                  <table class="table">
                    <thead role="rowgroup">
                      <tr role="row">
                        <th role="columnheader">Categoria</th>
                        <th role="columnheader">Estado</th>
                        <th role="columnheader">Editar</th>
                        <th role="columnheader">Subcategorías</th>
                      </tr>
                    </thead>
                    <tbody role="rowgroup">
                      @if (count($apartados) > 0)
                        @foreach ($apartados as $itemApartados)
                          <tr role="row">
                            <td role="cell" style="width: 20%;" scope="row">{{ $itemApartados->nombre }}</td>
                            <td role="cell" style="width: 20%;">{{ $itemApartados->activo == 1 ? 'Habilitado' : 'Deshabilitado' }}</td>
                            <td role="cell" style="width: 20%;"><a href="javascript:;"><i class="fas fa-keyboard fa-2x"></i></a></td>
                            <td role="cell" style="width: 20%;"><a href="{{ route('form_add_subcateogires', [$itemApartados->slug_path, $itemApartados->page_content, $itemApartados->catId, $itemApartados->id]) }}" title="Agregar Subcategoría"><i class="fas fa-folder-plus fa-2x"></i></a></td>
                          </tr>
                        @endforeach
                      @else
                        <tr role="row">
                          <td role="cell" colspan="4"><b>No hay registros</b></td>
                        </tr>
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('contentScriptJs')
    
@endsection