@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
Apex Column Charts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" href="{{ asset('vendors/apexcharts/css/apexcharts.css') }}">
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Apex Column Charts</h1>
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
        <li class="active">Column Charts</li>
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
          <div id="chart1" class="h350"></div>
        </div>
      </div>
    </div>
    <div class="col mb-2">
      <div class="card">
        <div class="card-header bg-white">
          <span>Column with Data Labels</span>
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
          <span>Stacked Columns</span>
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
          <span>Stacked Columns 100</span>
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
          <span>Grouped Stacked Columns</span>
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
          <span>Dumbbell Chart</span>
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
          <span>Column with Markers</span>
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
          <span>Column with Group Label</span>
          <span class="float-end">
            <i class="fa fa-chevron-up showhide clickable"></i>
            <i class="fa fa-times removepanel clickable"></i>
          </span>
        </div>
        <div class="card-body">
          <div id="chart8" class="h350"></div>
        </div>
      </div>
    </div>
    <div class="col mb-2">
      <div class="card">
        <div class="card-header bg-white">
          <span>Column With Rotated Labels</span>
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
          <span>Column with Negative values</span>
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
          <span>Distributed Column</span>
          <span class="float-end">
            <i class="fa fa-chevron-up showhide clickable"></i>
            <i class="fa fa-times removepanel clickable"></i>
          </span>
        </div>
        <div class="card-body m-1">
          <div id="chart11" class="h350"></div>
        </div>
      </div>
    </div>
    <div class="col mb-2">
      <div class="card">
        <div class="card-header bg-white">
          <span>Dynamic Content Loaded</span>
          <span class="float-end">
            <i class="fa fa-chevron-up showhide clickable"></i>
            <i class="fa fa-times removepanel clickable"></i>
          </span>
        </div>
        <div class="card-body m-1">
          <div id="wrap">
            <select id="model" class="form-select">
              <option value="iphone5">iPhone 5</option>
              <option value="iphone6">iPhone 6</option>
              <option value="iphone7">iPhone 7</option>
            </select>
            <div id="chart-year"></div>
            <div id="chart-quarter"></div>
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
<script type="text/javascript" src="{{ asset('vendors/dayjs/js/dayjs.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/dayjs/js/quarterOfYear.js') }}"></script>
<script src="{{ asset('js/admin/apexcharts_column.js') }}"></script>
<!-- end of page level js -->
@stop
