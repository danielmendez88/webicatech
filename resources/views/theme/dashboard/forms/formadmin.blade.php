{{-- DISEÑADO Y DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ PARA ICATECH AÑO 2021--}}

@extends('theme.dashboard.index')

@section('contenido')
    @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ $message }}
      </div>
    @endif
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">FORMULARIO DE ADMINISTRADOR DE APARTADOS</h4>
                <p class="card-description"> Creación de Apartados </p>
                <form class="form-sample" action="{{ route('main_form_admin_post') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">SECCIÓN</label>
                        <div class="col-sm-10">
                          <input type="text" name="seccion" id="seccion" class="form-control" />
                          @if ($errors->has('seccion'))
                            <span class="text-danger">{{ $errors->first('seccion') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">ESTADO</label>
                        <div class="col-sm-9">
                          <div class="form-check form-switch">
                            <input class="form-check-input" value="true" name="estado" id="estado" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Deshabilitar / Habilitar</label>
                          </div>
                          @if ($errors->has('estado'))
                            <span class="text-danger">{{ $errors->first('estado') }}</span>
                          @endif
                        </div>
                      </div>
                      <button type="submit" class="btn btn-success mr-2">Enviar</button>
                      <button class="btn btn-danger">Cancelar</button>
                    </div>
                  </div>
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
            <h4 class="card-title">APARTADO CATÁLOGO DE CATEGORÍAS</h4>
              <p class="card-description"> Creación de Apartados </p>
              <div class="row">
                <div class="col-md-12">
                  <table class="table">
                    <thead role="rowgroup">
                      <tr role="row">
                        <th role="columnheader">Sección</th>
                        <th role="columnheader">Estado</th>
                        <th role="columnheader">Editar</th>
                        <th role="columnheader">Subcategorías</th>
                      </tr>
                    </thead>
                    <tbody role="rowgroup">
                      @if (count($categoria) > 0)
                        @foreach ($categoria as $itemCat)
                          <tr role="row">
                            <td role="cell" scope="row">{{ $itemCat->nombre }}</td>
                            <td role="cell">{{ $itemCat->activo == 1 ? 'Habilitado' : 'Deshabilitado' }}</td>
                            <td role="cell"><i class="fas fa-keyboard fa-2x"></i></td>
                            <td role="cell"><i class="fas fa-folder-plus fa-2x"></i></td>
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