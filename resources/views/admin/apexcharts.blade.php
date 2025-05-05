@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Apex Charts
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

@section('content')

<section class="content-header">
    <h1>Apex Charts</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Home
            </a>
        </li>
        <li class="active">Apex Charts</li>
    </ol>
</section>

<!-- main content -->
<section class="content px-3">
      <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 apex">
            <div class="col mb-2">
<div class="card">
                  <img src="{{ asset('img/apexcharts/line.png') }}" class="card-img-top p-3" alt="...">
                  <div class="card-body">
                    <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_line') }}" class="btn btn-outline-info">Line Chart</a>
                    </div>
</div>
                    </div>
                    </div>
                    <div class="col mb-2">
                      <div class="card">
                        <img src="{{ asset('img/apexcharts/area.png') }}" class="card-img-top p-3" alt="...">
                    <div class="card-body">
<div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_area') }}" class="btn btn-outline-info">Area Chart</a>
                        </div>
                        </div>
                        </div>
</div>
            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/column.png') }}" class="card-img-top p-3" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_column') }}" class="btn btn-outline-info">Column Chart</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/bars.png') }}" class="card-img-top p-3" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_bar') }}" class="btn btn-outline-info">Bar Chart</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/mixed.png') }}" class="card-img-top p-3" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_mixed') }}" class="btn btn-outline-info">Mixed / Combo Chart</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/rangearea.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_range') }}" class="btn btn-outline-info">Range Area Combo chart</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/timeline.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_timeline') }}" class="btn btn-outline-info">Timeline/Range-Bars</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/funnel.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_funnel') }}" class="btn btn-outline-info">Funnel Chart</a>
                      </div>
</div>
                    </div>
                    </div>
                    <div class="col mb-2">
                      <div class="card">
                        <img src="{{ asset('img/apexcharts/candlestick.png') }}" class="card-img-top p-3" alt="...">
                        <div class="card-body">
                          <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_candlestick') }}" class="btn btn-outline-info">Candlestick
                              Chart</a>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/box.png') }}" class="card-img-top p-3" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_box') }}" class="btn btn-outline-info">Box & Whisker Chart</a>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/bubble.png') }}" class="card-img-top p-3" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_bubble') }}" class="btn btn-outline-info">Bubble Chart</a>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/scatter.png') }}" class="card-img-top p-3" alt="...">
                    <div class="card-body mt-3">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_scatter') }}" class="btn btn-outline-info">Scatter Chart</a>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/heatmap.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_heatmap') }}" class="btn btn-outline-info">Heatmap Chart</a>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/treemap.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_treemap') }}" class="btn btn-outline-info">Treemap Chart</a>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/slope.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-2">
<a href="{{ url('admin/apexcharts_slope') }}" class="btn btn-outline-info">Slope Chart</a>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/pie.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_pie') }}" class="btn btn-outline-info">Pie Charts</a>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/radialbar.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_radialbars') }}" class="btn btn-outline-info">Radialbar Chart</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/radar.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_radar') }}" class="btn btn-outline-info">Radar Chart</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card">
<img src="{{ asset('img/apexcharts/polar.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="d-grid p-3">
<a href="{{ url('admin/apexcharts_polar') }}" class="btn btn-outline-info">Polar Area Chart</a>
                      </div>
                    </div>
                </div>
            </div>
</div>
    </section>

@stop
@section('footer_scripts')
@stop
