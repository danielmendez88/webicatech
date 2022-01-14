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
                                        <a href="#closeModal" class="closeModal btn btn-danger" data-toggle="modal" data-banner-id="{{ $itemBanner->id }}" data-banner-name="{{ $itemBanner->nombre }}" data-categoria-id="{{ $idCategoria }}">
                                            <i class="fas fa-minus-circle"></i>
                                            Eliminar
                                        </a>
                                        <a href="{{ route('link_banner_secundario', ['id' => base64_encode($itemBanner->id), 'idcat' => base64_encode($idCategoria)]) }}" class="btn btn-primary">
                                            <i class="fas fa-link"></i>
                                            Vicular Archivo
                                        </a>
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

    {{-- MODAL --}}
    <div class="modal fade" id="closeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" id="formdelete" method="post">
                    @method('DELETE')
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><h3><b>Eliminar Elemento</b></h3></h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL --}}
@endsection

@section('contentScriptJs')
    <script type="text/javascript">
        $(function(){
            $('#closeModal').on('show.bs.modal', function(e){
                $('.modal-body').empty();
                var id = $(e.relatedTarget).data('banner-id');
                var categoriaId = $(e.relatedTarget).data('categoria-id');
                var bannerName = $(e.relatedTarget).data('banner-name');
                var label = "<h2><b>¿Desea Eliminar el elemento llamado "+ bannerName +"?</b></h2>";
                $('.modal-body').append(label);
                // url
                var url = "{{ route('delete_banner_element', [':id', ':categoria']) }}";
                url = url.replace(':id', id).replace(':categoria', categoriaId);
                $('form#formdelete').attr('action', function(i, value) {
                    return url;
                });
            });
        });
    </script>
@endsection