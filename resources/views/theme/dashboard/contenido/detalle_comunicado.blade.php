{{-- DISEÑADO Y DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ PARA ICATECH AÑO 2021--}}

@extends('theme.dashboard.index')
{{-- titulo --}}
@section('title', 'Detalle del Comunicado | Tablero de Control')
{{-- titulo END --}}

{{-- sección hoja de estilos --}}
@section('contentSyles')
	<style>
		.col-md-4 img {
      height: 300px;
      width: 100%;
		}
	</style>
@endsection
{{-- sección hoja de estilos END --}}


@section('contenido')
    @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ $message }}
      </div>
    @endif
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card mb-3" style="max-width: 850px">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ $imagen }}" class="img-fluid rounded-start" alt="{{ $url }}">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ $titulo }}</h5>
                      <p class="card-text">{!! html_entity_decode($contenido) !!}</p>
                      <a href="{{ route('comunicado_indice') }}" class="btn btn-warning">
                        <i class="fas fa-undo-alt fa-2x"></i>
                        Regresar
                      </a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Publicado el: &nbsp;{{ Carbon\Carbon::createFromFormat('Y-m-d', $fechaPub)->locale('es_ES')->isoFormat('LL') }} </small>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('contentScriptJs')
    
@endsection