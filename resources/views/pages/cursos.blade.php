@extends("theme.lte.layout")
@section('title', 'Lista de cursos de | Icatech')

@section('content')
    <div class="container g-pt-25">
        <div class="masonry-grid row g-mb-0 row-eq-height s">
            @foreach ($cursos as $item)
                <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-12">
                    <div class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-10 g-pt-20 g-bg-secondary">
                        <p>
                            <strong>{{ $item->curso }}</strong>
                        </p>
                        <p>
                                <strong>Especialidad:</strong> {{ $item->especialidad }} -- <strong>{{ $item->organo }}</strong> -- <strong>Duración: </strong> {{ $item->duracion }} Horas
                        </p>
                        <p>
                            <strong>Objetivo: </strong> {{ $item->objetivo }}
                        </p>
                        <p>
                            <strong>Perfil: </strong>  {{ $item->perfilIngreso }}
                        </p>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@stop