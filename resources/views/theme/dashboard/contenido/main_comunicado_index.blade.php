{{-- DISEÑADO Y DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ PARA ICATECH AÑO 2021--}}

@extends('theme.dashboard.index')

@section('title', 'Comunicados Inicio | Tablero de Control')

@section('contenido')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Bien Hecho!</strong> {{ $message }}
        </div>
    @endif
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Comunicados</h4>
                    <a href="{{ route('administrar-comunicado') }}" class="btn btn-success">
                        <i class="fas fa-plus-circle fa-2x"></i>
                        Nuevo Comunicado
                    </a>
                </div>
              <div class="card-body">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($comunicados as $itemComunicado)
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $itemComunicado->titulo }}</h5>
                                    <p class="card-text">{!! html_entity_decode($itemComunicado->resumen) !!}</p>
                                    <a href="{{ route('detalle_comunicado', ['id' => base64_encode($itemComunicado->id)]) }}" class="btn btn-danger">Detalle</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Publicado el: &nbsp;{{ Carbon\Carbon::createFromFormat('Y-m-d', $itemComunicado->fecha_publicacion)->locale('es_ES')->isoFormat('LL') }} </small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
              </div>
              <div class="card-footer">
                {{ $comunicados->links('vendor.pagination.custom') }}
              </div>
            </div>
        </div>
    </div>
@endsection

@section('contentScriptJs')
    
@endsection