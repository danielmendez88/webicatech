{{-- desarrollado y diseñado por MIS. Daniel Méndez Cruz --}}
@extends('theme.main.index')

{{-- lista de nombre --}}
@section('title', 'Comunicados | Icatech')

{{-- contenido --}}
@section('contenido')
    <div class="container-xl">
        <br>
        <div class="row">
            <div class="col-12 g-pb-40">
                @foreach ($newsAll as $itemNew)
                    <div class="card mb-3" style="max-width: 650px;">
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $itemNew->imagen }}" alt="{{ $itemNew->titulo }}" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('comunicado.detalle.show', ['id' => base64_encode($itemNew->id) ]) }}">
                                    {{ $itemNew->titulo }}
                                </a>
                            </h5>
                            <p class="card-text">{!! html_entity_decode($itemNew->resumen) !!} [...]</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    {{ Carbon\Carbon::createFromFormat('Y-m-d', $itemNew->fecha_publicacion)->locale('es_ES')->isoFormat('LL') }}  
                                </small>
                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
                {{-- comment --}}
                <tfoot>
                    <tr>
                        <td colspan="6">
                            {{ $newsAll->appends(request()->query())->links() }}
                        </td>
                    </tr>
                </tfoot>
            </div>
        </div>
        
    </div>
@endsection
{{-- contenido END --}}
