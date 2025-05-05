@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
Apex Slope Charts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" href="{{ asset('vendors/apexcharts/css/apexcharts.css') }}">
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Apex Slope Charts</h1>
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
        <li class="active">Slope Charts</li>
    </ol>
</section>
<!-- Main content -->
<section class="content px-3">
  <div class="row row-cols-lg-2 row-cols-1 ">
    <div class="col mb-2">
      <div class="card ">
        <div class="card-header bg-white">
          <span>Basic</span>
          <span class="float-end">
            <i class="fa fa-chevron-up showhide clickable"></i>
            <i class="fa fa-times removepanel clickable"></i>
          </span>
        </div>
        <div class="card-body">
          <div id="chart1" class="h350 os-theme-light"></div>
        </div>
      </div>
    </div>
    <div class="col mb-2">
      <div class="card">
        <div class="card-header bg-white">
          <span>Multi Group</span>
          <span class="float-end">
            <i class="fa fa-chevron-up showhide clickable"></i>
            <i class="fa fa-times removepanel clickable"></i>
          </span>
        </div>
        <div class="card-body">
          <div id="chart2" class="h350 os-theme-light"></div>
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
<script src="{{ asset('js/admin/apexcharts_slope.js') }}"></script>
<!-- end of page level js -->
@stop
