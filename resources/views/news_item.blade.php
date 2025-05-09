@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $news->title ?? 'News_Item' }}
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/news.css') }}">
    <link href="{{ asset('css/plugins/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                    data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Home
                            </a>
                        </li>
                        <li class="d-none d-sm-block">
                            <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                                data-c="#01bc8c" data-hc="#01bc8c"></i> {{ $news->title ?? 'News_Item' }}
                        </li>
                    </ol>
                    <div class="float-end">
                        <i class="livicon icon3" data-name="list-ul" data-size="20" data-loop="true" data-c="#3d3d3d"
                            data-hc="#3d3d3d"></i> News Item
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Jelly-o sesame Section Strat -->
            <div class="col-sm-7 col-md-8 wow zoomIn" data-wow-duration="3.5s">
                <div class="col-md-12">
                    <div class="mt-1 thumbnail">
                        <label>
                            <h3 class="text-primary">{{ $news->title }}</h3>
                        </label>
                        @if ($news->image)
                            <img src="{{ URL::to('/uploads/news/' . $news->image) }}" class="img-fluid" alt="Image">
                        @endif
                        <div class="text-justify p-1">
                            <p>
                                {!! $news->content !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
            <div class="col-sm-5 col-md-4 col-full-width-left">
                <!-- Featured Author Section Start -->
                <div class="wow slideInDown mt-1 border rounded p-2" data-wow-duration="3.5s">
                    <h4 class="text-dark-emphasis">Featured Authors</h4>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <p>
                                <a href="#">
                                    <img src="{{ asset('images/authors/avatar.jpg') }}" class="img-fluid img-circle"
                                        alt="riot">
                                </a>
                            </p>
                        </div>
                        <!-- /.col-xs-3 -->
                        <div class="col-3">
                            <p>
                                <a href="#">
                                    <img src="{{ asset('images/authors/avatar1.jpg') }}" class="img-fluid img-circle"
                                        alt="riot">
                                </a>
                            </p>
                        </div>
                        <!-- /.col-xs-3 -->
                        <div class="col-3">
                            <p>
                                <a href="#">
                                    <img src="{{ asset('images/authors/avatar2.jpg') }}" class="img-fluid img-circle"
                                        alt="riot">
                                </a>
                            </p>
                        </div>
                        <!-- /.col-xs-3 -->
                        <div class="col-3">
                            <p>
                                <a href="#">
                                    <img src="{{ asset('images/authors/avatar3.jpg') }}" class="img-fluid img-circle"
                                        alt="riot">
                                </a>
                            </p>
                        </div>
                        <!-- /.col-xs-3 -->
                    </div>
                    <!-- /.row -->
                    <div class="d-grid">
                        <button class="btn btn-success">Browse all authors</button>
                    </div>
                </div>
                <!-- //Featured Author Section End -->

                <!-- Recent Post Section Start -->
                <div class="wow slideInRight mt-2 border rounded p-2 mb-2" data-wow-duration="1.5s">
                    <h4 class="text-dark-emphasis">Recent News</h4>
                    <ul class="p-0">
                        @foreach ($recentnews as $item)
                            <li class="media">
                                <div>
                                    <div class="media-heading">
                                        <a href="#">
                                            <h5 class="text-primary fs-6">{{ $item->title }}</h5>
                                        </a>
                                        <span class="text-danger">{!! date('d-m-Y', strtotime($item->created_at)) !!}</span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Recent Post Section End -->
            </div>
            <!-- //Jelly-o sesame Section End -->
        </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/wow.js') }}"></script>

@stop
