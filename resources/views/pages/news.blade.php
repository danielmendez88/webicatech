@extends("theme.lte.layout_news")
@section('title', 'Icatech | Comunicados')

@section('content')
<!--seccion-->
    <section class="container g-py-40 g-pt-40 g-pb-0">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-9">
                <h1 class="d-block g-mb-3 g-font-size-18 g-color-primary g-font-weight-500 g-font-secondary">Noticias</h1>
            </div>
            <div class="col-md-3">
                <div class="sharethis-inline-share-buttons"></div>
            </div>
        </div>
        <hr class="g-brd-gray-light-v4"/>
    </section>
<!--end seccion-->
    <section class="container g-py-0 g-pt-0 g-pb-0">
        <div class="row">
            <div class="col-12 g-pb-40">
                <!-- for loop -->
                @foreach ($newsAll as $itemNews)
                <article>
                    <div class="row">
                        <div class="col-md-3">
                        <!--<link rel="stylesheet" type="text/css" href="css/render.css"> -->
                            <a href="comunicado-detalle/{{ base64_encode($itemNews->id) }}/{{ $itemNews->url }}">
                                <img class="img-fluid w-100 g-rounded-5 g-mb-0" src="{{ $itemNews->imagen }}" alt="{{ $itemNews->titulo }}"/>
                            </a>
                        </div>
                        
                        <div class="col-md-9">
                            <h3 class="g-color-gray-dark-v3 g-font-weight-500 mb-3 g-font-secondary" style="font-size:1.1rem">
                                <a href="{{ route('comunicado.detalle.show', ['id' => base64_encode($itemNews->id) ]) }}">
                                  {{ $itemNews->titulo }}
                                </a>
                            </h3>
                            <div class="d-lg-flex justify-content-between align-items-center g-mb-15">
                                <ul class="list-inline g-mb-10 g-mb-0--lg">
                                    <li class="list-inline-item g-mr-30">
                                        <i class="icon-calendar g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i>
                                        <time datatime="{{ $itemNews->fecha_publicacion }}">
                                            {{ 
                                                Carbon\Carbon::createFromFormat('Y-m-d', $itemNews->fecha_publicacion)->locale('es_ES')->isoFormat('LL')
                                            }}
                                        </time>
                                    </li>
                                </ul>
                            </div>
                            <p class="g-mb-15"></p>
                            <p>{!! html_entity_decode($itemNews->resumen) !!} [...]</p>
                            <p></p>
                        </div>
                    </div>
                </article>
                <hr class="g-brd-gray-light-v4 g-my-20">
                @endforeach
                <!-- end for loop -->
                <div class="pagination">
                    <span class="in-left g-pr-10">
                        {{ $newsAll->links() }}
                    </span>
                </div>
            </div>
        </div>
    </section>
@stop