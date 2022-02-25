@extends('pages.Integridad')

@section('contenido_integridad')
<article class="u-shadow-v11 rounded g-pa-30">
    <div class="media">
        <div class="media-body">
            <span class="d-block g-mb-3 g-font-size-22 g-color-gray-dark-v1 g-font-secondary">
                PROTOCOLO DE ATENCIÓN A QUEJAS O DENUNCIAS
            </span>
        </div>
    </div>
    <hr class="g-brd-gray-light-v4">
    <table class="table table-hover">
        <tbody>
           @foreach ($array_atencion_quejas_denuncias as $k => $v)
            <tr>
                <td style="text-align: center" valign="middle" width="10%">
                    <a href="{{ asset($v) }}" target="_blank" class="docpdf"><i class="far fa-file-pdf d-block g-mr-8 g-font-size-40"></i></a>
                </td>
                <td style="text-align: justify" valign="middle" width="90%">
                    <a href="{{ asset($v) }}" target="_blank" class="docletter">{{ $k }}</a>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</article>
@endsection