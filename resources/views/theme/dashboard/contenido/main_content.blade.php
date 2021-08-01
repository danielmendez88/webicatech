{{-- DISEÑADO Y DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ PARA ICATECH AÑO 2021--}}

@extends('theme.dashboard.index')

@section('contenido')
    <div class="row">
        
        @can('publicar banner')
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title mb-0">Sales Statistics Overview</h4>
                    <div class="d-flex flex-column flex-lg-row">
                        <p>Lorem ipsum is placeholder text commonly used</p>
                        <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab" aria-selected="true">1D</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab" aria-selected="false">5D</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab" aria-selected="false">1M</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab" aria-selected="false">1Y</a>
                        </li>
                        </ul>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="data-wrapper d-flex mt-2 mt-lg-0">
                        <div class="wrapper pr-5">
                            <h5 class="mb-0">Total Cost</h5>
                            <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">15,263</h4>
                            <small class="ml-2 text-gray d-none d-lg-block"><b>89.5%</b> of 20,000 Total</small>
                            </div>
                        </div>
                        <div class="wrapper">
                            <h5 class="mb-0">Total Revenue</h5>
                            <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">$753,098</h4>
                            <small class="ml-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000 Total</small>
                            </div>
                        </div>
                        </div>
                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas class="mt-5" height="120" id="sales-statistics-overview"></canvas>
                    </div>
                </div>
            </div>
        @endcan
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body d-flex flex-column">
                <div class="wrapper">
                    <h4 class="card-title mb-0">Net Profit Margin</h4>
                    <p>Started collecting data from February 2019</p>
                    <div class="mb-4" id="net-profit-legend"></div>
                </div>
                <canvas class="my-auto mx-auto" height="250" id="net-profit"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="d-flex align-items-center pb-2">
                        <div class="dot-indicator bg-danger mr-2"></div>
                        <p class="mb-0">Total Sales</p>
                    </div>
                    <h4 class="font-weight-semibold">$7,590</h4>
                    <div class="progress progress-md">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                    </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                    <div class="d-flex align-items-center pb-2">
                        <div class="dot-indicator bg-success mr-2"></div>
                        <p class="mb-0">Active Users</p>
                    </div>
                    <h4 class="font-weight-semibold">$5,460</h4>
                    <div class="progress progress-md">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
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
                    <h2 class="font-weight-semibold mb-0">4,624</h2>
                    <div class="icon-holder">
                    <i class="mdi mdi-briefcase-outline"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <h5 class="font-weight-semibold mb-0">Average Price</h5>
                    <p class="text-white mb-0">Since last month</p>
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