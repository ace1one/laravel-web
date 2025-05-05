@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
Apex Line Charts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" href="{{ asset('vendors/apexcharts/css/apexcharts.css') }}">
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Apex Line Charts</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Home
            </a>
        </li>
        <li>
            <a href="{{ url('admin/apexcharts') }}">Apex Charts</a>
        </li>
        <li class="active">Line Charts</li>
    </ol>
</section>
<!-- Main content -->
<section class="content px-3">
<div class="row row-cols-lg-2 row-cols-1 ">
            <div class="col mb-2">
                <div class="card ">
                    <div class="card-header bg-white">
                        <span>Basic Line Charts</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div id="chart1" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-white">
                        <span>Line Chart with Datalabels</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart2" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-white">
                        <span>Zoomable timeseries</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart3" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-white">
                        <span>Line With Annotations</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart4" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-white">
                        <span>Brush Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="wrapper">
                            <div id="chart-line2"></div>
                            <div id="chart-line"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-white">
                        <span>Stepline Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart6" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-white">
                        <span>Gradient Line Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart7" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-white">
                        <span>Missing/Null Values</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart8" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-white">
                        <span>Realtime Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart9" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-white">
                        <span>Dashed Line Chart</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="chart10" class="h350"></div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header bg-white">
                        <span>Synchronized Charts</span>
                        <span class="float-end">
                            <i class="fa fa-chevron-up showhide clickable"></i>
                            <i class="fa fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="card-body m-1">
                        <div id="wrapper">
                            <div id="chart-line3"></div>
                            <div id="chart-line4"></div>
                            <div id="chart-area"></div>
                            <div class="columns">
                                <div id="chart-small"></div>
                                <div id="chart-small2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

@stop
@section('footer_scripts')
<!--   page level js ----------->
<script type="text/javascript" src="{{ asset('vendors/apexcharts/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/apexcharts-init.js') }}"></script>
<script src="{{ asset('js/admin/data/apex_dataseries.js') }}"></script>
<script src="{{ asset('js/admin/data/apex_monthseries.js') }}"></script>
<script src="{{ asset('js/admin/apexcharts_line.js') }}"></script>
<script src="{{ asset('js/admin/apexcharts_line_realtimechart.js') }}"></script>


<!-- end of page level js -->
@stop
