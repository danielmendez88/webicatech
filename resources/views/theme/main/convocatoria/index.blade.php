@extends('theme.main.index')

{{-- titulo de convocatoria --}}
@section('title', 'Convocatoria | Icatech')

@section('contenido')
    <section class="container g-pt-40">
{{-- include social media --}}
    @include('theme.main.media')
{{-- include social media END --}}
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <img src="{{ asset($img) }}" alt="" width="100%">
            </div>
            <div class="col-md-2"></div>
        </div>
        <br>
    </section>
@endsection