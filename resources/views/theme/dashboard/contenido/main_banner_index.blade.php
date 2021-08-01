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
                <div class="card-header">
                    <h4 class="card-title">INDICE DE BANNER APARTADOS POR CATEGORÍA</h4>
                    <p class="card-description"> Categorías </p><br>
                    <a href="{{ route('main_form_banner') }}" class="btn btn-success">
                        <i class="fas fa-plus-circle fa-2x"></i>
                        Agregar Nuevo
                    </a>
                </div>
              <div class="card-body">
                <div class="card-columns">
                    @foreach ($catBanner as $itemcatBanner)
                        <div class="card text-center">
                            <a href="{{ route('select_category', ['id'=> base64_encode($itemcatBanner->id)]) }}">
                                <img src="{{ asset('assets/img/gif/product_image_not_found.gif') }}" width="100%" class="card-img-top" alt="..." height="160px">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $itemcatBanner->nombre_ubicacion }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
              </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Bien Hecho!</strong> {{ $message }}
      </div>
    @endif
    {{-- <div class="row">
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
    </div> --}}
@endsection

@section('contentScriptJs')
    
@endsection