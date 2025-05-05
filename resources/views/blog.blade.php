@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Blog
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/blog.css') }}">
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
                                    data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                            </a>
                        </li>
                        <li class="d-none d-sm-block">
                            <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                                data-c="#01bc8c" data-hc="#01bc8c"></i>
                            <a href="{{ route('blog') }}">Blog</a>
                        </li>
                    </ol>
                    <div class="float-end mt-1">
                        <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d"
                            data-hc="#3d3d3d"></i> Blog
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Strat -->
    <div class="container blogpage">
        <h2 class="my-3">Blog</h2>
        <div class="row">
            <div class="col-md-8 col-lg-8 col-12">
                @forelse ($blogs as $blog)
                    <!-- BEGIN FEATURED POST -->
                    <div class="thumbnail">
                        @if ($blog->image)
                            <img src="{{ URL::to('/uploads/blog/' . $blog->image) }}" class="img-fluid" alt="Image">
                        @else
                            <img src="{{ asset('img/blog-placeholder.svg') }}" class="img-fluid" alt="Image">
                        @endif
                        <div class="px-2">
                            <h3>
                                <a class=" text-dark-emphasis" href="{{ URL::to('blogitem/' . $blog->slug) }}">{{ $blog->title }}</a>
                            </h3>
                            <p>
                                {!! $blog->content !!}
                            </p>
                            <p>
                                <strong>Tags: </strong>
                                @forelse($blog->tags as $tag)
                                    <a href="{{ URL::to('blog/' . mb_strtolower($tag) . '/tag') }}">{{ $tag }}</a>,
                                @empty
                                    No Tags
                                @endforelse
                            </p>
                            <div class="d-flex gap-2 align-items-center">
                                <span>
                                    <i class="livicon" data-name="user" data-size="13" data-loop="true" data-c="#5bc0de"
                                        data-hc="#5bc0de"></i> by {{ $blog->author->first_name . ' ' . $blog->author->last_name }}
                                </span>
                                <span>
                                    <i class="livicon" data-name="clock" data-size="13" data-loop="true" data-c="#5bc0de"
                                        data-hc="#5bc0de"></i> {{ $blog->created_at->diffForHumans() }}
                                </span>
                                <span>
                                    <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de"
                                        data-hc="#5bc0de"></i><a href="{{ URL::to('blogitem/' . $blog->slug) }}#comments"> {{ $blog->comments->count() }}
                                        comments</a>
                                </span>
                            </div>
                            <p class="text-end">
                                <a href="{{ URL::to('blogitem/' . $blog->slug) }}" class="btn btn-primary text-white">Read
                                    more</a>
                            </p>
                        </div>
                        <!-- /.featured-text -->
                    </div>
                    <!-- /.featured-post-wide -->
                    <!-- END FEATURED POST -->
                @empty
                    <h3>No Posts Exists!</h3>
                @endforelse
                <ul class="pager">
                    {!! $blogs->render() !!}
                </ul>
            </div>
            <!-- /.col-md-8 -->
            <div class="ms-auto col-md-4 col-lg-4 col-12">
                <!-- END POPULAR POST -->
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#tab_default_1" data-bs-toggle="tab" class="nav-link active">
                                    Popular Posts </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab_default_2" data-bs-toggle="tab" class="nav-link">
                                    Recent Posts </a>
                            </li>
                        </ul>
                        <hr class="horizontalline">
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->
                        <div class="tab-content">
                            <div class="tab-pane  fade show active" id="tab_default_1">
                                @forelse ($popular as $popular_single)
                                    <div class="media">
                                        <div class="media-left media-middle tab col-sm-12 col-12">
                                            <a href="{{ URL::to('blogitem/' . $popular_single->slug) }}">
                                                @if ($popular_single->image)
                                                    <img class="media-object img-fluid my-2"
                                                        src="{{ URL::to('/uploads/blog/' . $popular_single->image) }}"
                                                        alt="image">
                                                @else
                                                    <img class="media-object img-fluid my-2"
                                                        src="{{ asset('img/blog-placeholder.svg') }}" alt="image">
                                                @endif
                                                <h4 class="text-primary">{{ $popular_single->title }}</h4>
                                            </a>
                                        </div>
                                    </div>
                                @empty
                                    <h3>No Posts Exists!</h3>
                                @endforelse
                            </div>
                            <div class="tab-pane fade" id="tab_default_2">
                                @forelse ($recent as $recent_single)
                                    <div class="media">
                                        <div class="media-left media-middle tab col-sm-12 col-12">
                                            <a href="{{ URL::to('blogitem/' . $recent_single->slug) }}">
                                                @if ($recent_single->image)
                                                    <img class="media-object img-fluid my-2"
                                                        src="{{ URL::to('/uploads/blog/' . $recent_single->image) }}"
                                                        alt="image">
                                                @else
                                                    <img class="media-object img-fluid my-2"
                                                        src="{{ asset('img/blog-placeholder.svg') }}" alt="image">
                                                @endif
                                                <h4 class="text-primary">{{ $recent_single->title }}</h4>
                                            </a>
                                        </div>
                                    </div>
                                @empty
                                    <h3>No Posts Exists!</h3>
                                @endforelse
                            </div>
                            <!-- //Tab-content End -->
                        </div>
                        <!-- //Tabbablw-line End -->
                    </div>
                    <!-- Tabbable_panel End -->
                </div>
                <div class="recent p-3 border radius mb-3">
                    <h3 class="text-dark-emphasis">Recent Comments</h3>
                    @forelse ($latest_comments as $latest_comment)
                        <div class="media d-flex align-items-start">
                            <div class="media-body">
                                <div class="">
                                    <a href="{{ URL::to('blogitem/' . $latest_comment->blog->slug) }}">{{ $latest_comment->name }} on
                                        <span class="text-primary">{{ $latest_comment->blog->title }}</span>
                                    </a>
                                </div>
                                <div class="date">
                                    <small class="text-danger">{{ $latest_comment->created_at->diffForHumans() }}</small>
                                </div>
                                {{ $latest_comment->comment }}
                            </div>
                        </div>
                        @if (!$loop->last)
                            <hr>
                        @endif
                    @empty
                        <h3>No Comments Exists!</h3>
                    @endforelse
                </div>
                <div class="thumbnail">
                    <h3>Tags</h3>
                    <div class="primary">
                        @forelse($tags as $tag)
                            <a class="btn btn-sm m-1 btn-outline-primary"
                                href="{{ URL::to('blog/' . mb_strtolower($tag) . '/tag') }}">{{ $tag }}</a>
                        @empty
                            No Tags
                        @endforelse
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
        </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
