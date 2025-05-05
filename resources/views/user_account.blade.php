@extends('layouts.default')

{{-- Page title --}}
@section('title')
    User Account
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/iCheck/css/minimal/blue.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/user_account.css') }}">

@stop

{{-- Page content --}}
@section('content')
    <hr class="content-header-sep">
    <div class="container">
        <div class="welcome">
            <h3>My Account</h3>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-10 col-12">
                <!--main content-->
                <div class="position-center">
                    <!-- Notifications -->
                    <div id="notific">
                        @include('notifications')
                    </div>
                    <div>
                        <h3 class="text-primary" id="title">Personal Information</h3>
                    </div>
                    {!! Form::model($user, [
                        'url' => URL::to('my-account'),
                        'method' => 'put',
                        'class' => 'form-horizontal',
                        'enctype' => 'multipart/form-data',
                    ]) !!}
                    {{ csrf_field() }}
                    <div class="mb-3 {{ $errors->first('pic', 'has-error') }}">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="form-label">Avatar:</label>
                            </div>
                            <div class="col-lg-10">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail max-width-height2">
                                        @if ($user->pic)
                                            <img src="{{ $user->pic }}" alt="img" class="img-fluid" />
                                        @elseif($user->gender === 'male')
                                            <img src="{{ asset('images/authors/avatar3.png') }}" alt="..."
                                                class="img-fluid" />
                                        @elseif($user->gender === 'female')
                                            <img src="{{ asset('images/authors/avatar5.png') }}" alt="..."
                                                class="img-fluid" />
                                        @else
                                            <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                                class="img-fluid" />
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail max-width-height1"></div>
                                    <div>
                                        <span class="btn btn-primary btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="pic" id="pic" />
                                        </span>
                                        <span class="btn btn-primary fileinput-exists"
                                            data-dismiss="fileinput">Remove</span>
                                    </div>
                                </div>
                                <span class="form-text">{{ $errors->first('pic', ':message') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 {{ $errors->first('first_name', 'has-error') }}">
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <label class="form-label">
                                    First Name:
                                    <span class='require'>*</span>
                                </label>
                            </div>
                            <div class="col-lg-10 col-12">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca"
                                            data-hc="#418bca"></i>
                                    </span>
                                    <input type="text" placeholder=" " name="first_name" id="first_name"
                                        class="form-control" value="{!! old('first_name', $user->first_name) !!}">
                                </div>
                                <span class="form-text">{{ $errors->first('first_name', ':message') }}</span>
                            </div>

                        </div>
                    </div>

                    <div class="mb-3 {{ $errors->first('last_name', 'has-error') }}">
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <label class="form-label">
                                    Last Name:
                                    <span class='require'>*</span>
                                </label>
                            </div>


                            <div class="col-lg-10 col-12">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca"
                                            data-hc="#418bca"></i>
                                    </span>
                                    <input type="text" placeholder=" " name="last_name" id="last_name"
                                        class="form-control" value="{!! old('last_name', $user->last_name) !!}">
                                </div>
                                <span class="form-text">{{ $errors->first('last_name', ':message') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 {{ $errors->first('email', 'has-error') }}">
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <label class="form-label">
                                    Email:
                                    <span class='require'>*</span>
                                </label>
                            </div>
                            <div class="col-lg-10 col-12">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true"
                                            data-c="#418bca" data-hc="#418bca"></i>
                                    </span>
                                    <input type="text" placeholder=" " id="email" name="email"
                                        class="form-control" value="{!! old('email', $user->email) !!}">
                                </div>
                                <span class="form-text">{{ $errors->first('email', ':message') }}</span>
                            </div>

                        </div>
                    </div>

                    <div class="mb-3 {{ $errors->first('password', 'has-error') }}">
                        <p class="text-warning col-md-offset-2"><strong>If you don't want to change password... please
                                leave them empty</strong></p>
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <label class="form-label">
                                    Password:
                                    <span class='require'>*</span>
                                </label>
                            </div>

                            <div class="col-lg-10 col-12">
                                <div class="input-group ">
                                    <span class="input-group-text">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true"
                                            data-c="#418bca" data-hc="#418bca"></i>
                                    </span>
                                    <input type="password" name="password" placeholder=" " id="pwd"
                                        class="form-control">
                                </div>
                                <span class="form-text">{{ $errors->first('password', ':message') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 {{ $errors->first('password_confirm', 'has-error') }}">
                        <div class="row">
                            <label class="col-lg-2  col-12 form-label">
                                Confirm Password:
                                <span class='require'>*</span>
                            </label>
                            <div class="col-lg-10 col-12">
                                <div class="input-group ">
                                    <span class="input-group-text">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true"
                                            data-c="#418bca" data-hc="#418bca"></i>
                                    </span>
                                    <input type="password" name="password_confirm" placeholder=" " id="cpwd"
                                        class="form-control">
                                </div>
                                <span class="form-text">{{ $errors->first('password_confirm', ':message') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <label class="form-label">Gender: </label>
                            </div>
                            <div class="col-lg-10 col-12">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="male"
                                            @if ($user->gender === 'male') checked="checked" @endif />
                                        Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="female"
                                            @if ($user->gender === 'female') checked="checked" @endif />
                                        Female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="other"
                                            @if ($user->gender === 'other') checked="checked" @endif />
                                        Other
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3  {{ $errors->first('bio', 'has-error') }}">
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <label for="" class="form-label">Bio <small>(brief intro):</small></label>
                            </div>

                            <div class="col-lg-10 col-12">
                                <textarea name="bio" id="bio" class="form-control resize_vertical h100">{!! old('bio', $user->bio) !!}</textarea>
                            </div>
                            {!! $errors->first('bio', '<span class="form-text">:message</span>') !!}
                        </div>
                    </div>


                    <div>
                        <h3 class="text-primary" id="title">Contact: </h3>
                    </div>

                    <div class="mb-3 {{ $errors->first('address', 'has-error') }}">
                        <div class="row">

                            <div class="col-lg-2 col-12">
                                <label class="form-label">
                                    Address:
                                </label>
                            </div>
                            <div class="col-lg-10 col-12">
                                <textarea class="form-control resize_vertical h120" id="add1" name="address">{!! old('address', $user->address) !!}</textarea>
                            </div>
                            <span class="form-text">{{ $errors->first('address', ':message') }}</span>
                        </div>
                    </div>

                    <div class="mb-3 {{ $errors->first('country', 'has-error') }}">
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <label class="form-label">Select Country: </label>
                            </div>

                            <div class="col-lg-10 col-12">
                                {!! Form::select('country', $countries, $user->country, [
                                    'class' => 'form-control select2',
                                    'id' => 'countries',
                                ]) !!}
                                <span class="form-text">{{ $errors->first('country', ':message') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class=" {{ $errors->first('user_state', 'has-error') }}">
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <label class="form-label" for="state">State:</label>
                            </div>
                            <div class="col-lg-10 col-12 col-md-12 col-sm-12 ">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true"
                                            data-c="#418bca" data-hc="#418bca"></i>
                                    </span>
                                    <input type="text" placeholder=" " id="state" class="form-control"
                                        name="user_state" value="{!! old('user_state', $user->user_state) !!}" />
                                </div>
                            </div>
                            <span class="form-text">{{ $errors->first('user_state', ':message') }}</span>
                        </div>
                    </div>

                    <div class="mb-3 {{ $errors->first('city', 'has-error') }}">
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <label class="form-label" for="city">City:</label>
                            </div>
                            <div class="col-lg-10 col-12">
                                <div class="input-group ">
                                    <span class="input-group-text">
                                        <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true"
                                            data-c="#418bca" data-hc="#418bca"></i>
                                    </span>
                                    <input type="text" placeholder=" " id="city" class="form-control"
                                        name="city" value="{!! old('city', $user->city) !!}" />
                                </div>
                            </div>
                            <span class="form-text">{{ $errors->first('city', ':message') }}</span>
                        </div>

                        <div class="mb-3 {{ $errors->first('postal', 'has-error') }}">
                            <div class="row">
                                <div class="col-lg-2 col-12">
                                    <label class=" form-label" for="postal">Postal:</label>
                                </div>

                                <div class="col-lg-10 col-12">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true"
                                                data-c="#418bca" data-hc="#418bca"></i>
                                        </span>
                                        <input type="text" placeholder=" " id="postal" class="form-control"
                                            name="postal" value="{!! old('postal', $user->postal) !!}" />
                                    </div>
                                    <span class="form-text">{{ $errors->first('postal', ':message') }}</span>
                                </div>
                            </div>

                        </div>

                        <div class="mb-3 {{ $errors->first('dob', 'has-error') }}">
                            <div class="row">
                                <div class="col-lg-2 col-12">
                                    <label class= "form-label"> DOB:
                                    </label>
                                </div>
                                <div class="col-lg-10 col-12">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true"
                                                data-c="#418bca" data-hc="#418bca"></i>
                                        </span>
                                        @if ($user->dob === '')
                                            {!! Form::text('dob', null, ['id' => 'datepicker', 'class' => 'form-control']) !!}
                                        @else
                                            {!! Form::text('dob', old('dob', $user->dob), [
                                                'id' => 'datepicker',
                                                'class' => 'form-control',
                                                'data-date-format' => 'YYYY-MM-DD',
                                            ]) !!}
                                        @endif
                                    </div>
                                    <span class="form-text">{{ $errors->first('dob', ':message') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-lg-10 col-12 ms-auto">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/select2/js/select2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/user_account.js') }}"></script>

@stop
