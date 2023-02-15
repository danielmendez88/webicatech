@extends('theme.main.index')
<!--llamar la plantilla -->
@section('title', 'Sevac | Icatech')
<!--tituto de la pestaña -->
@section('contenido')
{{-- Llammar contenido de la página --}}
    <div class="container g-pt-25">
        <img src="Imagenes_Pagina/SEVAC.jpg" class="img-responsive" width="100%" alig="center">
        <div class="masonry-grid row  row-eq-height">
            <div class="masonry-grid-sizer col-sm-12"></div>
                <div class="masonry-grid-item col-sm-12 col-md-12 col-lg-12 g-mb-30">
                    <p><h2><b>SEVAC</b></h2></p><br>
{{-- sevac 2022 --}}
        <b><h4>SEVAC 2022</h4></b>
{{-- primer trimestre sevac 2022 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-15" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-15" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-15">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Primer Trimestre 2022
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-15" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-15" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($primtrim2022 as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>

                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                        <div class="align-self-center">
                                            <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                        </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin primer trimestre sevac 2022 --}}
{{-- segundo trimestre sevac 2022 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-16" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-16" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-16">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Segundo Trimestre 2022
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-16" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-16" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($segtrim2022 as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>

                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                        <div class="align-self-center">
                                            <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                        </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin segundo trimestre sevac 2022 --}}
{{-- tercer trimestre sevac 2022 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-17" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-17" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-17">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Tercer Trimestre 2022
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-17" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-17" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($tertrim2022 as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>

                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                        <div class="align-self-center">
                                            <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                        </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin tercer trimestre sevac 2022 --}}
{{-- fin sevac 2022 --}}
{{-- sevac 2021 --}}
        <b><h4>SEVAC 2021</h4></b><br>


{{-- primer trimestre 2021 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-01" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-01">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                            <span class="g-pa-20">
                            Primer Trimestre 2021
                            </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-01" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($primtrim2021 as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>

                                        </div>
                                            <div class="d-flex justify-content-between">
                                                <ul class="u-list-inline"></ul>
                                                    <div class="align-self-center">
                                                        <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                                    </div>
                                            </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin de primer trimestre 2021 END --}}
{{-- segundo trimestre 2021 --}}
        <div class="card rounded-0 g-brd-none">
                <div id="accordion-07-heading-02" class="u-accordion__header g-pa-0" role="tab">
                    <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                        <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-02" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-02">
                            <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </span>
                                <span class="g-pa-20">
                                Segundo Trimestre 2021
                                </span>
                        </a>
                    </h5>
                </div>
                <div id="accordion-07-body-02" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-02" data-parent="#accordion-07">
                    <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                        <ul class="list-unstyled">
                            @foreach ($seguntrim2021 as $key => $value)
                                <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                    <div class="d-flex justify-content-start">
                                        <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="u-list-inline"></ul>
                                            <div class="align-self-center">
                                                <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                            </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
        </div>
{{-- fin de segundo trimestr 2021 --}}
{{-- Tercer trimestre 2021 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-03" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-03" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-03">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Tercer Trimestre 2021
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-03" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-03" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($tercertrim2021 as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                        <div class="align-self-center">
                                            <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                        </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- Fin Tercer Trimestre 2021 --}}
{{-- cuarto trimestre 2021 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-13" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-13" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-13">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Cuarto Trimestre 2021
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-13" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-13" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($cuarto_trimestre2021 as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                        <div class="align-self-center">
                                            <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                        </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- cuarto trimestre 2021 END --}}
        <b><h4>SEVAC 2020</h4></b><br>

{{-- primer trimestre 2020 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-04" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-04" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-04">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                            <span class="g-pa-20">
                            Primer Trimestre 2020
                            </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-04" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-04" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($primtrim2020 as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                        <div class="align-self-center">
                                            <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                        </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin primer trimestre 2020 --}}
{{-- segundo trimestre 2020 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-05" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-05" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-05">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Segundo Trimestre 2020
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-05" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-05" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($segundtrim2020 as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                    <div class="align-self-center">
                                        <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin del segundo trimestre 2020 --}}

{{-- tercer trimestre 2020 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-06" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-06" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-06">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Tercer Trimestre 2020
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-06" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-06" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($tercertrim2020 as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                    <div class="align-self-center">
                                        <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin del tercer trimestre 2020 --}}


{{-- cuatro trimestre 2020 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-07" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-07" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-07">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Cuarto Trimestre 2020
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-07" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-07" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($cuartotrim2020 as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                    <div class="align-self-center">
                                        <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin del cuarto trimestre 2020 --}}

        <br><b><h4>SEVAC 2019</h4></b><br>

{{-- primer trimestre 2019 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-08" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-08" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-08">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Primer Trimestre 2019
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-08" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-08" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($primtrim as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="u-list-inline"></ul>
                                    <div class="align-self-center">
                                        <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin primer trimestre 2019 --}}



{{-- segundo trimestre 2019 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-09" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-09" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-09">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Segundo Trimestre 2019
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-09" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-09" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($segtrim as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                    <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                <ul class="u-list-inline"></ul>
                                <div class="align-self-center">
                                    <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin segundo trimestre 2019 --}}

{{-- tercer trimestre 2019 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-10" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-10" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-10">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                            Tercer Trimestre 2019
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-10" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-10" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($tertrim as $key => $value)
                        <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                            <div class="d-flex justify-content-start">
                            <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                            </div>
                            <div class="d-flex justify-content-between">
                                <ul class="u-list-inline"></ul>
                                <div class="align-self-center">
                                <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin tercer trimestre 2019 --}}

{{-- cuarto trimestre 2019 --}}
        <div class="card rounded-0 g-brd-none">
            <div id="accordion-07-heading-11" class="u-accordion__header g-pa-0" role="tab">
                <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                    <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-11" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-11">
                        <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-minus"></i>
                        </span>
                        <span class="g-pa-20">
                        Cuarto Trimestre 2019
                        </span>
                    </a>
                </h5>
            </div>
            <div id="accordion-07-body-11" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-11" data-parent="#accordion-07">
                <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                    <ul class="list-unstyled">
                        @foreach ($cuatrim as $key => $value)
                            <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                            <div class="d-flex justify-content-start">
                                <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>
                            </div>
                                <div class="d-flex justify-content-between">
                                <ul class="u-list-inline"></ul>
                                <div class="align-self-center">
                                    <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
{{-- fin cuarto trimestre 2019 --}}








                        <b><h4>SEVAC 2018</h4></b><br>
                         <!-- Primer trimestre 2018!-->
                    <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-12" class="u-accordion__header g-pa-0" role="tab">
                         <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-12" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-12">
                           <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                             <i class="fa fa-plus"></i>
                             <i class="fa fa-minus"></i>
                             </span>
                               <span class="g-pa-20">
                                     Primer Trimestre 2018
                                </span>
                          </a>
                         </h5>
                        </div>
                             <div id="accordion-07-body-12" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-12" data-parent="#accordion-07">
                               <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                                <ul class="list-unstyled">
                                  @foreach ($trim2018 as $key => $value)
                                    <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                      <div class="d-flex justify-content-start">
                                        <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>

                                      </div>
                                        <div class="d-flex justify-content-between">
                                          <ul class="u-list-inline"></ul>
                                          <div class="align-self-center">
                                            <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                          </div>
                                        </div>
                                    </li>
                                   @endforeach
                                </ul>
                                </div>
                              </div>
                        </div>
                        <!--fin!-->


                        <!--Segundo Trimestre!-->
                     <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-13" class="u-accordion__header g-pa-0" role="tab">
                         <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-13" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-13">
                           <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                             <i class="fa fa-plus"></i>
                             <i class="fa fa-minus"></i>
                             </span>
                               <span class="g-pa-20">
                                     Segundo Trimestre
                                </span>
                          </a>
                         </h5>
                        </div>
                             <div id="accordion-07-body-13" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-13" data-parent="#accordion-07">
                               <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                                <ul class="list-unstyled">
                                  @foreach ($segtrim2018 as $key => $value)
                                    <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                      <div class="d-flex justify-content-start">
                                        <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>

                                      </div>
                                        <div class="d-flex justify-content-between">
                                          <ul class="u-list-inline"></ul>
                                          <div class="align-self-center">
                                            <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                          </div>
                                        </div>
                                    </li>
                                   @endforeach
                                </ul>
                                </div>
                              </div>
                        </div>



                        <!--Primer Trimestre!-->
                     <div class="card rounded-0 g-brd-none">
                        <div id="accordion-07-heading-14" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0 g-font-size-default g-font-weight-700 g-pa-20a mb-0">
                          <a class="collapsed d-flex g-color-main g-text-underline--none--hover" href="#accordion-07-body-14" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="false" aria-controls="accordion-07-body-14">
                          <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-minus"></i>
                          </span>
                          <span class="g-pa-20">
                              Tercer Trimestre
                          </span>
                          </a>
                        </h5>
                        </div>
                        <div id="accordion-07-body-14" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-14" data-parent="#accordion-07">
                        <div class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">
                          <ul class="list-unstyled">
                              @foreach ($tertrim2018 as $key => $value)

                              <li class="g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-primary-left g-rounded-3 g-pa-20 g-mb-7">
                                <div class="d-flex justify-content-start">
                                  <h5 class="g-font-weight-600 g-color-black">{{ $key }}</h5>

                                </div>
                                <div class="d-flex justify-content-between">
                                  <ul class="u-list-inline">

                                  </ul>
                                  <div class="align-self-center">
                                    <a class="" href="{{ $value }}" target="_blank"><img src="Imagenes_Pagina/2.png"alt=""></a>
                                  </div>
                                </div>
                              </li>
                            @endforeach
                          </ul>

                        </div>
                        </div>
                      </div>
                      <!--fin!-->
 </div>
        </div>
    </div>
@stop
