@extends('theme.main.index')

@section('title', 'Convocatoria | Instructores Externos')

@section('csscontent')
    <style>
        .convocatoria{
            background: #621132;
        }
        .convocatoria .titulo{
            color: #BCA64C;
            font-size: 1.5em;
            text-align: center;
            text-transform:uppercase;
        }
        .convocatoria .contenido-texto{
            text-align: center;
            color: white;
            font-size: 1em;
            font-weight: bold;
        }
        .inicio p{
            text-align: center;
            color: white;
            font-size: 3em;
            text-transform:uppercase;
            margin-bottom: -0.3em;
            margin-top: 0.2em;
        }
        p.concurso_instructor_externo{
            color: #621132;
            font-size: 1.8em;
            text-align: center;
            text-transform:uppercase;
            font-weight:bold;
        }
        p.concurso_publico{
            color: #BCA64C;
            font-size: 3.5em;
            text-align: center;
            text-transform:uppercase;
            font-weight: bold;
        }
        .card-img-top {
            max-height: 40vh; /*not want to take all vertical space*/
            
        }
        .enlaces{
          float: right;
        }
       .enlaces > a.enlace_info
        {
          color: #BCA64C;
          text-transform:uppercase;
          font-weight: bold;
        }
    </style>
@endsection

@section('contenido')
<div class="container-xl">
    <div class="row">
        <div class="col-lg-12">
            <div class="inicio">
                <p class="concurso_publico"><b>concurso público abierto de </b></p>
                <p class="concurso_instructor_externo">instructores externos</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col" style="padding-top: 10px;padding-bottom: 10px;">
          <div class="card convocatoria">
            <img src="{{ asset('imagenes-cursos/convocatorias/microfono.jpeg') }}" width="20" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title titulo">convocatoria</h5>
              <p class="card-text contenido-texto">
                Doblaje, locución y conducción
                en radio, cine y televisión
              </p>
              <div class="enlaces">
                <a class="enlace_info" href="{{ route('convocatoria.instructores_externos.detalle', ['id' => base64_encode(1)]) }}">Leer Más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col" style="padding-top: 10px;padding-bottom: 10px;">
          <div class="card convocatoria">
            <img src="{{ asset('imagenes-cursos/convocatorias/artesanales.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title titulo">convocatoria</h5>
              <p class="card-text contenido-texto">Artesanías con pastas, pinturas <br> y acabados</p>
              <div class="enlaces">
                <a class="enlace_info" href="{{ route('convocatoria.instructores_externos.detalle', ['id' => base64_encode(2)]) }}">Leer Más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col" style="padding-top: 10px;padding-bottom: 10px;">
          <div class="card convocatoria">
            <img src="{{ asset('imagenes-cursos/convocatorias/cosmeticos.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title titulo">convocatoria</h5>
              <p class="card-text contenido-texto">Cuidado cosmetológicos <br> faciales y corporales </p>
              <div class="enlaces">
                <a class="enlace_info" href="{{ route('convocatoria.instructores_externos.detalle', ['id' => base64_encode(3)]) }}">Leer Más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col" style="padding-top: 10px;padding-bottom: 10px;">
          <div class="card convocatoria">
            <img src="{{ asset('imagenes-cursos/convocatorias/diseno_imagen.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title titulo">convocatoria</h5>
              <p class="card-text contenido-texto">Estilismo y diseño de imagen</p>
              <div class="enlaces">
                <a class="enlace_info" href="{{ route('convocatoria.instructores_externos.detalle', ['id' => base64_encode(4)]) }}">Leer Más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col" style="padding-top: 10px;padding-bottom: 10px;">
          <div class="card convocatoria">
            <img src="{{ asset('imagenes-cursos/convocatorias/analisis.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title titulo">convocatoria</h5>
              <p class="card-text contenido-texto">Administración</p>
              <div class="enlaces">
                <a class="enlace_info" href="{{ route('convocatoria.instructores_externos.detalle', ['id' => base64_encode(5)]) }}">Leer Más</a>
              </div>
            </div>
          </div>
        </div>
{{-- Agregamos nueva información --}}
        <div class="col" style="padding-top: 10px;padding-bottom: 10px;">
          <div class="card convocatoria">
            <img src="{{ asset('imagenes-cursos/convocatorias/ing_automotriz.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title titulo">Convocatoria</h5>
              <p class="card-text contenido-texto">Ing. Industrial, Ing. Mecánico, Ing. Automotriz en gasolina y diésel, o afines</p>
              <div class="enlaces">
                <a class="enlace_info" href="{{ route('convocatoria.instructores_externos.detalle',['id' => base64_encode(6)]) }}">Leer Más</a>
              </div>
            </div>
          </div>
        </div>
{{-- Agregamos nueva información END --}}
      </div>
</div>
@endsection