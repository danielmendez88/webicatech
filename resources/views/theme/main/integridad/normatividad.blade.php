@extends('pages.Integridad')

@section('contenido_integridad')
<article class="u-shadow-v11 rounded g-pa-30">
    <div class="media">
        <div class="media-body">
            <span class="d-block g-mb-3 g-font-size-22 g-color-gray-dark-v1 g-font-secondary">
                NORMATIVIDAD
            </span>
        </div>
    </div>
    <hr class="g-brd-gray-light-v4">
    <table class="table table-hover">
        <tbody>
           @foreach ($array_normatividad as $k => $v)
            <tr>
                <td style="text-align: center" valign="middle" width="10%">
                    <a href="{{ $v }}" target="_blank" class="docpdf"><i class="far fa-file-pdf d-block g-mr-8 g-font-size-40"></i></a>
                </td>
                <td style="text-align: justify" valign="middle" width="90%">
                    <a href="{{ $v }}" class="docletter" target="_blank">{{ $k }}</a>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
    {{-- <div class="card-header">
        <h3 style="text-align:center">
            <strong>NORMATIVIDAD</strong>
        </h3>
    </div>
    <br>
    <h4 style="text-align: center">
        <strong>Miembros titulares permanentes</strong>
    </h4>
    <div class="row" style="text-align:justify">
        <div class="col-sm" style="margin-top:25px;">
            <strong>
                Mtro. Joel Pereira Hernández
                <br>
                Presidente del CEPCI
            </strong>
            <br>
            Jefe de la Unidad de Apoyo Administrativo.
            <br>
            <i class="fas fa-phone" aria-hidden="true"></i>
            Teléfono: 61 87530 ext. 22231
            <br>
            <i class="fas fa-envelope"></i>
            joel.pereira@shyfpchiapas.gob.mx
        </div>
        <div class="col-sm" style="margin-top:25px;">
            <strong>
                Mtro. Joel Pereira Hernández
                <br>
                Presidente del CEPCI
            </strong>
            <br>
            Jefe de la Unidad de Apoyo Administrativo.
            <br>
            <i class="fas fa-phone" aria-hidden="true"></i>
            Teléfono: 61 87530 ext. 22231
            <br>
            <i class="fas fa-envelope"></i>
            joel.pereira@shyfpchiapas.gob.mx
        </div> 
        <div class="w-100"></div>
        <div class="col-sm" style="margin-top:25px;">
            <strong>
                Mtro. Joel Pereira Hernández
                <br>
                Presidente del CEPCI
            </strong>
            <br>
            Jefe de la Unidad de Apoyo Administrativo.
            <br>
            <i class="fas fa-phone" aria-hidden="true"></i>
            Teléfono: 61 87530 ext. 22231
            <br>
            <i class="fas fa-envelope"></i>
            joel.pereira@shyfpchiapas.gob.mx
        </div> 
        <div class="col-sm" style="margin-top:25px;">
            <strong>
                Mtro. Joel Pereira Hernández
                <br>
                Presidente del CEPCI
            </strong>
            <br>
            Jefe de la Unidad de Apoyo Administrativo.
            <br>
            <i class="fas fa-phone" aria-hidden="true"></i>
            Teléfono: 61 87530 ext. 22231
            <br>
            <i class="fas fa-envelope"></i>
            joel.pereira@shyfpchiapas.gob.mx
        </div> 
    </div>
    <br>
    <br>
    <h4 style="text-align: center">
        <strong>Miembros Permanentes Suplentes</strong>
    </h4>
    <div class="row" style="text-align: justify">
        <div class="col-sm" style="margin-top:25px;">
            <strong>
                Lic. Daniel de Jesús Alhor Zea
                <br>
                Presidente Suplente
            </strong>
            <br>
            Director Jurídico.
            <br>
            <i class="fas fa-phone" aria-hidden="true"></i> 
            Teléfono: 61 87530 ext. 22231
            <br>
            <i class="fas fa-envelope"></i>
            daniel.alhor@shyfpchiapas.gob.mx
        </div>
        <div class="col-sm" style="margin-top:25px;">
            <strong>
                Lic. Magally Elizabeth Guillen Montesinos
                <br>
                Secretaria Ejecutiva Suplente
            </strong>
            <br>
            Jefa del Área de Recursos Humanos.
            <br>
            <i class="fas fa-phone" aria-hidden="true"></i> 
            Teléfono: 61 87530 ext. 22233
            <br>
            <i class="fas fa-envelope"></i> 
            magally.guillen@shyfpchiapas.gob.mx
        </div>
    </div> --}}
</article>
@endsection