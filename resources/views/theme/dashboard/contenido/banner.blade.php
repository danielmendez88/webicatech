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
                    @if (count($banner_by_id) > 0)
                        <h4 class="card-title">{{ $banner_by_id[0]->nombre_ubicacion }}</h4>
                        <p class="card-description"></p>
                        <div class="card-columns">
                            @foreach ($banner_by_id as $itemBanner)
                                <div class="card text-center">
                                    <a href="{{ route('edit_form_banner', ['id' => base64_encode($itemBanner->id), 'idBan' => base64_encode($idCategoria)]) }}">
                                        @if ($itemBanner->codigo == 'videoteca')
                                            <img src="http://img.youtube.com/vi/{{ $itemBanner->youtubeid }}/0.jpg" alt="" width="100%" height="150" class="card-img-top"> 
                                        @else
                                            <img src="{{ (!empty($itemBanner->path) ? $itemBanner->path : asset('assets/img/gif/product_image_not_found.gif')) }}" width="100%" class="card-img-top" alt="..." height="160px">
                                        @endif
                                    
                                    </a>
                                    <div class="card-body">
                                        
                                        @if (!empty($itemBanner->documento))
                                            <a href="http://" class="btn btn-danger">
                                                <i class="fas fa-file-pdf fa-2x"></i> {{ $itemBanner->nombre }}
                                            </a>
                                        @else
                                            <h5 class="card-title">{{ $itemBanner->nombre }}</h5>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br>
                        <a href="{{ route('main_index_banner') }}" class="btn btn-info">
                            <i class="fas fa-undo fa-2x"></i>
                            Regresar
                        </a>
                    @else
                        <h2>NO HAY REGISTROS EN LA CATEGORÍA</h2>
                        <a href="{{ route('main_index_banner') }}" class="btn btn-warning">
                            <i class="fas fa-undo fa-2x"></i>
                            Regresar
                        </a>
                    @endif
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
    
@endsection