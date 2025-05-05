@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
Apex AreaCharts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" href="{{ asset('vendors/apexcharts/css/apexcharts.css') }}">
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Apex Area Charts</h1>
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
        <li class="active">Area Charts</li>
    </ol>
</section>
<!-- Main content -->
<section class="content px-3">
    <div class="row row-cols-lg-2 row-cols-1 ">
        <div class="col mb-2">
            <div class="card ">
                <div class="card-header bg-white">
                    <span>Basic Area Charts</span>
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
                    <span>Spline Area Chart</span>
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
                    <span>Negative Chart</span>
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
                    <span>Stacked Chart</span>
                    <span class="float-end">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body m-1">
                    <div id="chart5" class="h350"></div>
                </div>
            </div>
        </div>
        <div class="col mb-2">
            <div class="card">
                <div class="card-header bg-white">
                    <span>Irregular Time Series Chart</span>
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
                    <span>Missing/Null Values</span>
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
                    <span>Datetime X-Axis</span>
                    <span class="float-end">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body m-1">
                    <div id="chart">
                        <div class="toolbar">
                            <button id="one_month" class="btn btn-info">1M</button>
                            <button id="six_months" class="btn btn-info">6M</button>
                            <button id="one_year" class="btn btn-info">1Y</button>
                            <button id="ytd" class="btn btn-info">YTD</button>
                            <button id="all" class="btn btn-info">ALL</button>
                        </div>
                        <div id="chart10" class="h350"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-2">
            <div class="card">
                <div class="card-header bg-white">
                    <span>Github Style</span>
                    <span class="float-end">
                        <i class="fa fa-chevron-up showhide clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body m-1">
                    <div id="wrapper">
                        <div id="chart-months"></div>

                        <h5 class="github-style">
                            <img class="userimg" src="https://picsum.photos/200/200/?image=1031"
                                data-hovercard-user-id="634573" alt="" width="38" height="38" />
                            <div class="userdetails">
                                <a class="username">coder</a>
                                <span class="cmeta">
                                    <span class="commits"></span> commits
                                </span>
                            </div>
                        </h5>

                        <div id="chart-years"></div>
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
<script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
<script src="{{ asset('js/admin/apex_dataseries.js') }}"></script>
<script src="{{ asset('js/admin/apex_monthseries.js') }}"></script>
<script src="{{ asset('js/admin/apex_githubdata.js') }}"></script>
<script src="{{ asset('js/admin/apexcharts_area.js') }}"></script>
<!-- end of page level js -->
@stop
