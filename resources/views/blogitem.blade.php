@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ $blog->title }}
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
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
                        <li>
                            <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                                data-c="#01bc8c" data-hc="#01bc8c"></i>
                            <a href="#">Blog Item</a>
                        </li>
                    </ol>
                    <div class="float-end mt-1">
                        <i class="livicon icon3" data-name="doc-landscape" data-size="20" data-loop="true" data-c="#3d3d3d"
                            data-hc="#3d3d3d"></i> Blog Item
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container mt-3">
        <div class="row content">
            <!-- Business Deal Section Start -->
<div class="col-sm-8 col-md-8">
                    @if ($blog->image)
                        <img src="{{ URL::to('/uploads/blog/' . $blog->image) }}" class="img-fluid" alt="Image">
@endif
                    <!-- /.blog-detail-image -->
                    <div class="my-3 blog-detail-content">
                        <div class="d-flex gap-2 align-items-center mb-1">
                            <span>
                                <button class="btn btn-sm btn-primary rounded-pill">
                                    <a href="#" class="text-white">{{ $blog->category->title }}</a>
                                </button>
                            </span>
                            <span>
                                {{ $blog->author->first_name . ' ' . $blog->author->last_name }} /
                                {{ $blog->created_at->diffForHumans() }}
                            </span>
                            <span>
                                <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de"
                                    data-hc="#5bc0de"></i><a href="#"> {{ $blog->comments->count() }} comments</a>
                            </span>
                        </div>

                        <h3 class="text-dark-emphasis">{{ $blog->title }}</h3>
                        <div class="text-justify blog-content">
                            {!! $blog->content !!}
                        </div>
                        <div class="blog-detail-image">
                            @if (!empty($blog->summernote_image))
                                <img src="{{ URL::to('uploads/blog/' . $blog->summernote_image) }}"
                                    class="img-fluid summernote_image" alt="Image">
                            @endif
                        </div>
                        <p>
                            <strong>Tags: </strong>
                            @forelse($blog->tags as $tag)
<a class="btn btn-light btn-sm rounded-pill" href="{{ URL::to('blog/' . mb_strtolower($tag) . '/tag') }}"># {{ $tag }}</a>
                            @empty
                                No Tags
                            @endforelse
                        </p>
                    </div>
                <!-- /the.box -->
                <!-- Media left section start -->
                <h4 class="comments" id="comments">Comments ( {{ $blog->comments->count() }} )</h4><br />
                <ul class="list-unstyled">
                    @foreach ($blog->comments as $comment)
                        <div class="row">
                            <div class="col-2">
                        @php
                            $emailHash = md5(strtolower(trim($comment->email)));
$gravatarUrl = "https://api.dicebear.com/9.x/avataaars/svg?seed=" . $emailHash;
                            @endphp

                            <li class="media float-end">
                                <img src="{{ $gravatarUrl }}" alt="Gravatar" class="rounded-circle" width="75"
                                    height="75">
                                </div>
                                <div class="col-10">
                                <div class="media-body">
                                <h5 class="text-dark-emphasis">{{ $comment->name }}</h5>
                                <p class="fs-6">{{ $comment->comment }}</p>
                                <p>
                                     {!! $comment->created_at !!}</>
                                    </p>
                                </div>
                                </li>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </ul>
                <!-- //Media left section End -->
                <!-- Comment Section Start -->
                <h3 class="text-dark-emphasis">Leave a Comment</h3>
                {!! Form::open([
                    'url' => URL::to('blogitem/' . $blog->id . '/comment'),
                    'method' => 'post',
                    'class' => 'bf',
                    'files' => true,
                ]) !!}

                <div class="mb-3 {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::text('name', null, [
                        'class' => 'form-control input-lg',
                        'required' => 'required',
                        'placeholder' => 'Your name',
                    ]) !!}
                    <span class="form-text">{{ $errors->first('name', ':message') }}</span>
                </div>
                <div class="mb-3 {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::text('email', null, [
                        'class' => 'form-control input-lg',
                        'required' => 'required',
                        'placeholder' => 'Your email',
                    ]) !!}
                    <span class="form-text">{{ $errors->first('email', ':message') }}</span>
                </div>
                <div class="mb-3 {{ $errors->has('website') ? 'has-error' : '' }}">
                    {!! Form::text('website', null, ['class' => 'form-control input-lg', 'placeholder' => 'Your website']) !!}
                    <span class="form-text">{{ $errors->first('website', ':message') }}</span>
                </div>
                <div class="mb-3 {{ $errors->has('comment') ? 'has-error' : '' }}">
                    {!! Form::textarea('comment', null, [
                        'class' => 'form-control input-lg h200',
                        'required' => 'required',
                        'placeholder' => 'Your comment',
                    ]) !!}
                    <span class="form-text">{{ $errors->first('comment', ':message') }}</span>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success btn-md">
                        <i class="livicon" data-name="comment" data-c="#FFFFFF" data-hc="#FFFFFF" data-size="18"
                            data-loop="true"></i>
                        Submit
                    </button>
                </div>
                {!! Form::close() !!}
                <!-- //Comment Section End -->
            </div>
            <!-- //Business Deal Section End -->
            <!-- /.col-sm-9 -->
            <!-- Recent Posts Section Start -->
            <div class="col-sm-4 col-md-4 col-full-width-left">
                <div class="border rounded p-3 the-box">
<h3 class="text-dark-emphasis">Categories</h3>
<ul class="ps-0">
@foreach ($categories as $id => $category)
<li >
    <a href="{{ URL::to('blog/category/' . $id) }}" class="text-primary"><i class="fa-solid fa-arrow-right"></i> {{ $category }}</a>
</li>
@endforeach
</ul>
</div>
<br>
<div class="border rounded p-3 the-box">
    <h3 class="text-dark-emphasis">Tags</h3>
    <ul class="ps-0">
        @forelse ($tags as $tag)
            <a href="{{ URL::to('blog/' . mb_strtolower($tag) . '/tag') }}" class="btn btn-sm m-1 {{ in_array($tag, $blog->tags->pluck('name')->toArray()) ? 'btn-primary text-white' : 'btn-outline-primary' }}">{{ $tag }}</a>
        @empty
            No tags yet
        @endforelse
    </ul>
</div>
<br>
<div class="border rounded p-3 the-box">
    <h3 class="text-dark-emphasis">Recent Posts</h3>
    <ul class="ps-0">
        @forelse ($recent as $recent)
        <li class="media mb-3">
            @if ($recent->image)
            <img src="{{ URL::to('/uploads/blog/' . $recent->image) }}" class="img-fluid float-start me-3" alt="riot">
            @else
            <img src="{{ asset('img/authors/avatar1.jpg') }}" class="img-fluid float-start me-3" alt="riot">
            @endif
            <div class="media-body">
<a class="text-primary" href="{{ URL::to('blogitem/' . $recent->slug) }}">{{ $recent->title }}</a>
&nbsp;<i class="fa-regular fa-clock"></i> {{ $recent->created_at->diffForHumans() }}<br>
</div>
</li>
@empty
<h3>No Posts Exists!</h3>
@endforelse
</ul>
                </div>
                <!-- /.the-box .bg-primary .text-center .no-margin -->
            </div>
            <!-- //Recent Posts Section End -->
            <!-- /.col-sm-3 -->
        </div>
    </div>
    <!-- //container Section End -->
@stop
