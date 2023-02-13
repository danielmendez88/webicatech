{{-- DISEÑADO Y DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ PARA ICATECH AÑO 2021--}}
@extends('theme.dashboard.index')

@section('contenido')
    <div class="row">
        <div class="col-md-8">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center pb-2">
                                <div class="dot-indicator bg-success mr-2"></div>
                                <p class="mb-0">Usuarios</p>
                            </div>
                            <h4 class="font-weight-semibold"><a href="{{ route('add_new_user') }}">Añadir Nuevo Usuario</a></h4>
                            <div class="progress progress-md">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card average-price-card">
            <div class="card text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between pb-2 align-items-center">
                        <h2 class="font-weight-semibold mb-0">Roles y Permisos</h2>
                        <div class="icon-holder">
                            <i class="mdi mdi-format-list-checks"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5 class="font-weight-semibold mb-0">Agregar</h5>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <h1 class="card-title mb-4">Website Audience Metrics</h1>
                <div class="row">
                    <div class="col-5 col-md-5">
                    <div class="wrapper border-bottom mb-2 pb-2">
                        <h4 class="font-weight-semibold mb-0">523,200</h4>
                        <div class="d-flex align-items-center">
                        <p class="mb-0">Page Views</p>
                        <div class="dot-indicator bg-secondary ml-auto"></div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <h4 class="font-weight-semibold mb-0">753,098</h4>
                        <div class="d-flex align-items-center">
                        <p class="mb-0">Bounce Rate</p>
                        <div class="dot-indicator bg-primary ml-auto"></div>
                        </div>
                    </div>
                    </div>
                    <div class="col-5 col-md-7 d-flex pl-4">
                    <div class="ml-auto">
                        <canvas height="100" id="realtime-statistics"></canvas>
                    </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-6">
                    <div class="d-flex align-items-center mb-2">
                        <div class="icon-holder bg-primary text-white py-1 px-3 rounded mr-2">
                        <i class="icon ion-logo-buffer icon-sm"></i>
                        </div>
                        <h2 class="font-weight-semibold mb-0">3,605</h2>
                    </div>
                    <p>Since last week</p>
                    <p><span class="font-weight-medium">0.51%</span> (30 days)</p>
                    </div>
                    <div class="col-6">
                    <div class="mt-n3 ml-auto" id="dashboard-guage-chart"></div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('contentScriptJs')
    
@endsection