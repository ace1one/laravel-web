@if ($errors->any())
<div class="alert alert-danger alert-dismissible m-2">
        <strong>Error:</strong> Please check the form below for errors
<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
    </div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible m-2">
        <strong>Success:</strong> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible m-2">
        <strong>Error:</strong> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible m-2">
        <strong>Warning:</strong> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissible m-2">
        <strong>Info:</strong> {{ $message }}
<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
    </div>
@endif
@if ($message = Session::get('msg'))
<div class="alert alert-danger alert-dismissible m-2">
        <strong>Error:</strong> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
