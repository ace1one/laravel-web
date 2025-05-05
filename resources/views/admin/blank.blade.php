@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
Blank Page
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <h1>Blank page</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href="#"> Pages</a></li>
        <li class="active">Blank page</li>
hfsfds
    </ol>
</section>
<section class="content">
<!-- Your content here -->
<div class="p-3 mb-2 bg-success text-success-emphasis">.bg-success-subtle</div>
<div class="p-3 mb-2 bg-success-subtle text-success-emphasis">.bg-success-subtle</div>

<div class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">.bg-primary-subtle</div>
<div class="p-3 mb-2 bg-primary text-primary-emphasis">.bg-primary</div>

<div class="p-3 mb-2 bg-info-subtle text-info-emphasis">.bg-info-subtle</div>
<div class="p-3 mb-2 bg-info text-info-emphasis">.bg-info</div>

<div class="p-3 mb-2 bg-warning-subtle text-warning-emphasis">.bg-warning-subtle</div>
<div class="p-3 mb-2 bg-warning text-warning-emphasis">.bg-warning</div>

<div class="p-3 mb-2 bg-danger-subtle text-danger-emphasis">.bg-danger-subtle</div>
<div class="p-3 mb-2 bg-danger text-danger-emphasis">.bg-danger</div>
</section>


    @stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
