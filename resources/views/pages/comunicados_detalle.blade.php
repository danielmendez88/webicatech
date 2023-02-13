@extends("theme.lte.layout_news")
@section('title', "Icatech | $titulo")
@section('content_script_css')
    <style>
        .btn-circle-sm {
            width: 35px;
            height: 35px;
            line-height: 35px;
            font-size: 0.9rem;
        }
        .btn-circle i {
            position: relative;
            top: -1px;
        }
    </style>
@endsection

@section('content')
    <section class="container g-py-40 g-pt-40 g-pb-0">
        <div class="row">
            <div class="col-md-9">
                <h1 class="d-block g-mb-3 g-font-size-18 g-color-primary g-font-weight-500 g-font-secondary">{{ $titulo }}</h1>
            </div>
            <div class="col-md-3"></div>
        </div>
        <hr class="g-brd-gray-light-v4">
    </section>
    <section class="container g-py-0 g-pt-0 g-pb-40">
        <div class="row">
            <div class="col-lg-8 g-mb-30 g-mb-0--lg">
                <article class="post">
                    <img class="img-fluid w-100 g-rounded-5 g-mb-25" src="{{$imagen }}" alt="{{ $titulo }}">
                    <time>{{ $fecha_pub }}</time>
                    <p><strong>{{ $localizacion }} .-</strong>&nbsp;&nbsp;{!! html_entity_decode($contenido); !!}</p>
                    <ul class="list-inline g-font-size-12 mb-0">
                        <li class="list-inline-item g-mb-10">
                            <a href="" class="u-tags-v1 g-color-black g-bg-black-opacity-0_1 g-bg-morado--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15">
                            </a>
                        </li>
                    </ul>
                </article>
            </div>
            <div class="col-lg-4 g-mb-30 g-mb-0--lg">
                
            </div>
        </div>
    </section>
@stop
