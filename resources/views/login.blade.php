<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Welcome to Josh Frontend</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/iCheck/css/all.css') }}" />
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/buttons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/login.css') }}">
    <!--end of page level css-->
</head>

<body>
    <div class="container">
        <!--Content Section Start -->
        <div class="row">
            <div class="box animation flipInX">
                <div class="box1">
                    <div class="text-center">
                        <img src="{{ asset('images/josh-new.png') }}" alt="logo" class="img-fluid mar">
                    </div>
                    <h3 class="text-primary">Log In</h3>
                    <!-- Notifications -->
                    <div id="notific">
                        @include('notifications')
                    </div>
                    <form action="{{ route('login') }}" class="omb_loginForm" autocomplete="off" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group mb-3 {{ $errors->first('email', 'has-error') }}">
                            <label class="visually-hidden">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                value="{!! old('email') !!}" required>
                            <span class="form-text">{{ $errors->first('email', ':message') }}</span>
                        </div>
                        <div class="form-group mb-3 {{ $errors->first('password', 'has-error') }}">
                            <label class="visually-hidden">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <span class="form-text">{{ $errors->first('password', ':message') }}</span>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" name="remember-me"> Remember Password
                            </label>
                        </div>
                        <div class="d-grid"><input type="submit" class="btn  btn-primary" value="Log In">
                        </div>
                        Don't have an account? <a href="{{ route('register') }}"><strong> Sign Up</strong></a>
                    </form>
                    <br />
                    <div class="row">
                        <div class="col-lg-12 col-12 d-grid gap-2 text-center social_login  mb-3">
<a class="btn btn-social btn-facebook" href="{{ url('/facebook') }}">
                                <i class="fab fa-facebook-f"></i> Sign in with Facebook
                            </a>
<a class="btn btn-social btn-google" href="{{ url('/google') }}">
    <i class="fab fa-google"></i> Sign in with Google
                            </a>
<a class="btn btn-social btn-linkedin" href="{{ url('/linkedin') }}">
                                <i class="fab fa-linkedin-in"></i> Sign in with LinkedIn
                            </a>
                        </div>
                    </div>
                    <div class="bg-transparent animation flipInX">
                        <a href="{{ route('forgot-password') }}">Forgot Password?</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- //Content Section End -->
    </div>
    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/login_custom.js') }}"></script>
    <!--global js end-->
</body>

</html>
