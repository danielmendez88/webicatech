{{-- @extends("theme.lte.layout") 
<!--llamar la plantilla -->
@section('title', 'Intructores | Icatech')
<!--tituto de la pestaña -->
@section('content')
<!--llama contenido de la pagina -->

<section class="container g-py-40 g-pt-40 g-pb-0">
    <div class="row">
        <div class="col-md-12">
                <img src="Imagenes Pagina/instructores.jpg" class="img-responsive" width="100%">
            <h1 class="d-block g-mb-3 g-font-size-18 g-color-primary g-font-weight-500 g-font-secondary">
                Instructores
            </h1>
        </div>
    </div>
    <hr class="g-brd-gray-light-v4">
</section>

<section class="container g-py-0 g-pt-0 g-pb-0">
    <div class="row">
        @foreach ($instructores as $instructor)
                <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-12">
                    <div class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-10 g-pt-20 g-bg-secondary">
                        <p>
                            <strong> Nombre: </strong> {{ $instructor->nombre }}
                        </p>
                        <p>
                            <strong>Especialidad:</strong> {{ $instructor->especialidad }}
                        </p>
                        <p>
                            <strong>Grado Académico: </strong> {{ $instructor->gradoAcademico }}
                        </p>
                    </div>
                </div>

            @endforeach
    </div>
</section>


@stop --}}

@extends('theme.main.index')
{{-- titulo --}}
@section('title', 'Instrcutores | Icatech')
{{-- titulo END --}}
@section('csscontent')

@endsection
{{-- contenido --}}
@section('contenido')
    <div class="container-xl">
        <br>
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('Imagenes Pagina/instructores.jpg') }}" class="img-responsive" width="100%">
            </div> 
        </div>
        <hr class="g-brd-gray-light-v4">
        <br>
        <div class="row">
            @foreach ($instructores as $instructor)
                <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-12">
                    <div class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-10 g-pt-20 g-bg-secondary">
                        <p>
                            <strong> Nombre: </strong> {{ $instructor->nombre }}
                        </p>
                        <p>
                            <strong>Especialidad:</strong> {{ $instructor->especialidad }}
                        </p>
                        <p>
                            <strong>Grado Académico: </strong> {{ $instructor->gradoAcademico }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $instructores->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
@endsection
{{-- contenido END --}}

