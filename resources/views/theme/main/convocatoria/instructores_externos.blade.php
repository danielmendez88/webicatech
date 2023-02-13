{{-- diseñado por MIS. DANIEL MÉNDEZ CRUZ --}}
{{-- extensión con indice principal --}}
@extends('theme.main.index')
{{-- titulo de la convocatoria --}}
@section('title', 'Convocatoria | Instructora Externa')
{{-- contenido de CSS --}}
@section('csscontent')
    <style>
        .header {
            display: flex;
            background-color: white;
            width: 100%;
        }
        .imagen_left
        {
            float: left;
            margin-left: 3.5em;
        }
        .imagen_right
        {
            float:right;
            margin-right: 3.5em;
        }
        .imagen_center
        {
            margin: 0 auto;
            text-align: center;
        }
        img.imagen_right {
            width: 120px;
            height: 70px;
        }
        img.imagen_left {
            width: 220px;
            height: 70px;
            padding-bottom: 0.5em;
        }
        img.imagen_center{
            padding-top: 0.5em;
            width: 240px;
            height: 60px; 
        }
        /*
            contenedor principal
        */
        .contenedor_principal
        {
            width: 100%;
            background-color: #621132;
            padding-top: 1em;
        }
        /*
            INICIO
        */
        .inicio p{
            text-align: center;
            color: white;
            font-size: 3em;
            text-transform:uppercase;
            margin-bottom: -0.3em;
            margin-top: -0.3em;
        }
        p.pinstructores{
            color: #BCA64C;
            font-size: 1.5em;
            text-align: center;
            text-transform:uppercase;
        }
        .colwhite{
            background-color: white;
        }
        p.pconvocatoria{
            text-align: center;
            color: black;
            font-size: 12px;
            font-weight: bold;
            margin-top: -0.2em;
        }
        img.imagenes{
            width: 100%;
            max-height: 48vh; /*not want to take all vertical space*/
        }
        p.pconvinstructores{
            text-align: center;
            color: white;
            font-size: 1.5em;
            font-weight: bold;
            margin-top: -0.5em;
            margin-bottom: -0.7em;
        }
        p.textconvocatoria{
            text-align: center;
            color: white;
            font-size: 16px;
            font-weight: bold;
            margin-top: 0.1em;
        }
        .requisitos {
            border-radius: 25px;
            background: #FCF3CF;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
        }
        .requisitos ol li{
            font-size: 12px;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif';
            color: black;
            margin-left: 4em;
        }
        p.requisitosx{
            color: black;
            font-size: 18px;
            text-align: center;
            text-transform:uppercase;
            font-family: 'Times New Roman', Times, serif';
        }
    </style>
@endsection
{{-- cuerpo del documento --}}
@section('contenido')
    <div class="header">
        <img class="imagen_left" src="{{ asset('Imagenes Pagina/instituto_oficial.png') }}" alt="">
        <img class="imagen_center" src="{{ asset('Imagenes Pagina/chiapas.png') }}" alt="">
        <img class="imagen_right" src="{{ asset('Imagenes Pagina/icatech_imagen_cabecera.png') }}" alt="">
    </div>
    <div class="contenedor_principal">
        <div class="row">
            <div class="col-sm-12">
                <div class="inicio">
                    <p class="pinstructores">concurso público abierto de</p>
                    <p>INSTRUCTORES EXTERNOS</p>
                    <p class="pinstructores">{{ $convocatoria->titulo }}</p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <img class="imagenes" src="{{ URL::to('/') }}{{ $convocatoria->imagen }}" alt="">
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class='col-lg-12 colwhite'>
                        <p class="pinstructores">convocatoria</p>
                        <p class="pconvocatoria">
                            El Instituto de Capacitación y Vinculación Tecnológica del <br>
                            Estado de Chiapas a través de la Unidad de Capacitación <br> 
                            @switch($convocatoria->id)
                                @case(6)
                                    Tapachula,
                                @break
                                @default
                                    San Cristóbal,
                            @endswitch
                            convoca a los interesados
                            en formar parte de <br> nuestro Padrón de Instrcutores Externos de dicha unidad.
                        </p>
                    </div>
                    <div class='col-lg-12'>
                        <p class="pinstructores">perfil requerido</p>
                        {!! htmlspecialchars_decode(stripslashes($convocatoria->perfil))  !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="requisitos">
                    <p class="requisitosx">
                        <b>
                            <b>requisitos</b>
                        </b>
                    </p>
                    {!! $convocatoria->requisitos !!}
                    <br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="textconvocatoria">

                    <b>ENVIAR DOCUMENTACIÓN DIGITAL AL SIGUIENTE CORREO ELECTRÓNICO:</b>
                    <br>
                    @switch($convocatoria->id)
                        @case(6)
                            recepcion.documentostap@gmail.com <br>
                            Tel: 9626957353
                        @break
                        @default
                            academico.ucsicatech@gmail.com   
                    @endswitch
                </p>
                <br>
                <p class="textconvocatoria">
                   @switch($convocatoria->id)
                    @case(6)
                        <b>UNIDAD DE CAPACITACIÓN TAPACHULA</b>
                        Calle Juana de Arco esquina calle ceballa, Col. Octavio Paz S/N <br>
                        Tapachula, Chiapas.
                    @break
                    @default
                        <b>UNIDAD SAN CRISTÓBAL</b>
                        Avenida Patzcuaro s/n., Lagos de Matía Eugenia <br>
                        San Cristóbal  de las Casas, Chiapas.
                   @endswitch
                    
                </p>
                @switch($convocatoria->id)
                    @case(6)
                        <p class="textconvocatoria">
                            <b>Horario de atención:</b><br>
                            <b>Lunes a Viernes</b><br>
                            <b>9:00 a 15:00 hrs</b>
                        </p>
                    @break
                    @default
                        
                @endswitch
            </div>
        </div>
    </div>
@endsection