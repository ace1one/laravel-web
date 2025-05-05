<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Welcome to Josh Frontend</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/iCheck/css/all.css') }}" />
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/register.css') }}">
    <!--end of page level css-->
</head>

<body>
    <div class="container">
        <!--Content Section Start -->
        <div class="row">
<div class="box animation flipInX">
<div class="text-center">
                <img src="{{ asset('images/josh-new.png') }}" alt="logo" class="img-responsive mar">
<h3 class="text-primary">Sign Up</h3>
</div>
                <!-- Notifications -->
                <div id="notific">
                    @include('notifications')
                </div>
                <form action="{{ route('register') }}" method="POST" id="reg_form">
                    <!-- CSRF Token -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <div class="form-group mb-3 {{ $errors->first('first_name', 'has-error') }}">
                        <label class="visually-hidden"> First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                            placeholder="First Name" value="{!! old('first_name') !!}">
                        {!! $errors->first('first_name', '<span class="form-text">:message</span>') !!}
                    </div>
                    <div class="form-group mb-3 {{ $errors->first('last_name', 'has-error') }}">
                        <label class="visually-hidden"> Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                            placeholder="Last Name" value="{!! old('last_name') !!}">
                        {!! $errors->first('last_name', '<span class="form-text">:message</span>') !!}
                    </div>
                    <div class="form-group mb-3 {{ $errors->first('email', 'has-error') }}">
                        <label class="visually-hidden"> Email</label>
                        <input type="email" class="form-control" id="Email" name="email" placeholder="Email"
                            value="{!! old('Email') !!}">
                        {!! $errors->first('email', '<span class="form-text">:message</span>') !!}
                    </div>
                    <div class="form-group mb-3 {{ $errors->first('password', 'has-error') }}">
                        <label class="visually-hidden"> Password</label>
                        <input type="password" class="form-control" id="Password1" name="password"
                            placeholder="Password">
                        {!! $errors->first('password', '<span class="form-text">:message</span>') !!}
                    </div>
                    <div class="form-group mb-3 {{ $errors->first('password_confirm', 'has-error') }}">
                        <label class="visually-hidden"> Confirm Password</label>
                        <input type="password" class="form-control" id="Password2" name="password_confirm"
                            placeholder="Confirm Password">
                        {!! $errors->first('password_confirm', '<span class="form-text">:message</span>') !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group mb-3 {{ $errors->first('gender', 'has-error') }}">
                        <label class="visually-hidden">Gender</label>
<div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" name="gender" id="inlineRadio1" value="male"> Male
                            </label>
                        </div>
<div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" name="gender" id="inlineRadio2" value="female"> Female
                            </label>
                        </div>
                        {!! $errors->first('gender', '<span class="form-text">:message</span>') !!}
                    </div>
<div class="form-check-inline">
    <input type="checkbox" name="subscribed" class="form-check-input">
    <label class="form-check-label">
        I accept <a href="#"> Terms and Conditions</a>
                        </label>
                    </div>
                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
<div class="d-grid mt-1"> <button type="submit" class="btn br-0 btn-primary my-2">Sign
                            Up</button></div>

                    Already have an account? Please <a href="{{ route('login') }}"> Log In</a>
                </form>
            </div>
        </div>

        <!-- //Content Section End -->
    </div>
    <!--global js starts-->
@if (env('GOOGLE_RECAPTCHA_KEY'))
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endif
    {{-- <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/register_custom.js') }}"></script>
    <!--global js end-->
</body>

</html>
