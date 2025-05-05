@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
Apex Sparkline Charts
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" href="{{ asset('vendors/apexcharts/css/apexcharts.css') }}">
@stop

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Apex Sparkline Charts</h1>
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
        <li class="active">Sparkline Charts</li>
    </ol>
</section>
<!-- Main content -->
<section class="content px-3">
  <div class="row row-cols-1 ">
    <div class="col mb-2">
      <div class="card ">
        <div class="card-header bg-white">
          <span>Sparkline Charts</span>
          <span class="float-end">
            <i class="fa fa-chevron-up showhide clickable"></i>
            <i class="fa fa-times removepanel clickable"></i>
          </span>
        </div>
        <div class="card-body">
          <div>
            <div class="row">
              <div class="col-md-4">
                <div id="chart-spark1"></div>
              </div>
              <div class="col-md-4">
                <div id="chart-spark2"></div>
              </div>
              <div class="col-md-4">
                <div id="chart-spark3"></div>
              </div>
            </div>

            <div class="row">
              <table>
                <thead>
                  <th>Total Value</th>
                  <th>Percentage of Portfolio</th>
                  <th>Last 10 days</th>
                  <th>Volume</th>
                </thead>
                <tbody>
                  <tr>
                    <td>$32,554</td>
                    <td>15%</td>
                    <td>
                      <div id="chart-1"></div>
                    </td>
                    <td>
                      <div id="chart-5"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>$23,533</td>
                    <td>7%</td>
                    <td>
                      <div id="chart-2"></div>
                    </td>
                    <td>
                      <div id="chart-6"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>$54,276</td>
                    <td>9%</td>
                    <td>
                      <div id="chart-3"></div>
                    </td>
                    <td>
                      <div id="chart-7"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>$11,533</td>
                    <td>2%</td>
                    <td>
                      <div id="chart-4"></div>
                    </td>
                    <td>
                      <div id="chart-8"></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
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
<script src="{{ asset('js/admin/apexcharts_sparkline.js') }}"></script>
<!-- end of page level js -->
@stop
