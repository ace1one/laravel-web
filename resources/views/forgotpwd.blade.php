<!DOCTYPE html>
<html>

<head>
    {{-- <meta charset="utf-8"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot password | Welcome to Josh</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/forgot.css') }}">
    <!--end of page level css-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="box animation flipInX">
                <img src="{{ asset('images/josh-new.png') }}" alt="logo" class="img-responsive mar">
                <h3 class="text-primary">Forgot Password</h3>
                <p>Enter your email to reset your password</p>
                <div id="notific">
                    @include('notifications')
                </div>
                <form action="{{ route('forgot-password') }}" class="omb_loginForm" autocomplete="off" method="POST">
                    {!! Form::token() !!}
                    <div class="form-group mb-3">
                        <label class="visually-hidden"></label>
                        <input type="email" class="form-control email" name="email" placeholder="Email"
                            value="{!! old('email') !!}">
                        <span class="form-text">{{ $errors->first('email', ':message') }}</span>
                    </div>
                    <div class="d-grid">
                        <input class="form-control btn btn-primary" type="submit" value="Reset Your Password">
                    </div>
                </form>

<div class="text-start">
Back to login page?<a href="{{ route('login') }}"> Click here</a>
</div>
            </div>
        </div>
    </div>
    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/forgotpwd_custom.js') }}"></script>
    <!--global js end-->
</body>

</html>
