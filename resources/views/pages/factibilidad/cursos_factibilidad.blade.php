@extends('theme.main.index')

@section('title', 'Cursos | Catálogos de Factibilidad')

@section('csscontent')
    <style>
        .convocatoria{
            background: #ffffff;
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
            max-height: 60vh; /*not want to take all vertical space*/
            
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
                <p class="concurso_publico"><b>CATÁLOGOS DE FACTIBILIDAD </b></p>
                <p class="concurso_instructor_externo">UNIDADES DE CAPACITACIÓN</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
       @foreach ($arr_imagenes as $k => $v)
        <div class="col" style="padding-top: 10px;padding-bottom: 10px;">
          <div class="card convocatoria">
            <img src="{{ asset('imagenes-cursos/unidades_capacitacion/'.$k.'.png') }}" width="20" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="enlaces">
                <a class="enlace_info" href="{{ asset('pdf/pdf/'.$v) }}" target="_blank">Leer Más</a>
              </div>
            </div>
          </div>
        </div>
       @endforeach

      </div>
</div>
@endsection