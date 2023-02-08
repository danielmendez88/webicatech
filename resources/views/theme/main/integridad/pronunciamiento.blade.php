@extends('pages.Integridad')

@section('contenido_integridad')
<article class="u-shadow-v11 rounded g-pa-30">

    <div class="row" style="text-align:center">
        <div class="col-sm-12" style="margin-top:25px; text-align:justify">
            <img src="{{ asset('assets/img/banner/banner_pronunciamiento.jpeg') }}" alt=""  width="100%">
        </div>
    </div>
    
    <hr class="g-brd-gray-light-v4">
    <p style="text-align:justify">
        En el Instituto de Capacitación y Vinculación Tecnológica del Estado de Chiapas, estamos construyendo ambientes laborales respetuosos de la ética, la dignidad, los valores de igualdad y no discriminación, equidad de genero y respeto.
    </p>
    <p style="text-align:justify">
        Las personas servidoras publicas que integramos este honorable Instituto, debemos predicar con el ejemplo, reflejando en todo momento los valores en nuestro comportamiento y desempeño diario.
    </p>
    <p style="text-align: justify">
        La Secretaria de la Honestidad y Función Pública ha emitido un Protocolo para la Prevención, Atención y Sanción del Hostigamiento Sexual y Acoso Sexual, con la finalidad de erradicar las conductas que lastimen la dignidad de las mujeres, por lo que se les insto a conocer e implementar en nuestro actuar, el aludido protocolo que se encuentra publicado en la pagina oficial de este Instituto, en el Banner de Integridad.
    </p>
    <p style="text-align: justify">
        El ICATECH lucha contra la violencia de genero ,buscando ser un espacio libre de Hostigamiento y Acoso Sexual, por lo que todos los esfuerzos son necesarios.
    </p>
    <p style="text-align: justify">
        Te exhorto servidora y servidor público que conformamos este Instituto a luchar por la erradicación de la violencia de género; adoptando el pronunciamiento de Cero Tolerancia a las conductas de Hostigamiento Sexual y Acoso Sexual.
    </p>
    <p style="text-align: justify">
        Por un ICATECH libre de violencia.
    <br>
        Mtra. Fabiola L. Astudillo Reyes        
    </p>
    <table class="table table-hover">
        <tbody>
           @foreach ($array_cero_tolerancia as $k => $v)
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