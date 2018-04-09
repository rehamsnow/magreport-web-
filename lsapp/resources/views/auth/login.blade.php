<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href=" {{ asset('css/paper-kit.css') }}" />

	<!-- Fonts and icons -->
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" href=" {{ asset('css/nucleo-icons.css') }}" />

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel')}} - Sign In</title>
</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-transparent">
        <div class="container">
			<div class="navbar-translate">
	            <a class="navbar-brand"href="{{ url('/') }}">MAG-Report</a>
            </div>
            
			<div class="collapse navbar-collapse" id="navbarToggler">
	            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Sign In</a>
                    </li>
					<li class="nav-item">
	                    <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
	                </li>
	            </ul>
	        </div>
		</div>
    </nav>
    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{ asset('img/welcome_page_1280.jpg') }}'); background-attachment: fixed;">
            <div class="filter"></div>

                <div class="container">
                    @include('inc.messages')
                    <div class="row">
                        <div class="col-lg-4 ml-auto mr-auto">
                            <div class="card card-register" style="background-color: #428bca;">

                                <img src="{{ asset('img/logo.png') }}" height="200" width="300"/>
                                
                                <h3 class="title" style="color: white;">Sign In</h3>

                                <form class="register-form" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    
                        
                                    <div>
                                        <label for="email">E-Mail Address</label>
                                        <div>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                                
                                    <div>
                                        <label for="password">Password</label>
                                        <div>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                             @endif
                                        </div>
                                    </div>
                                    &nbsp;

                                    <div>
                                        <div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    &nbsp;

                                    <div>
                                        <div>
                                            <button type="submit" class="btn btn-block btn-info">
                                                SIGN IN
                                            </button>
                                        </div>
                                    </div>
                        
                                    <div>
                                        <div>                     
                                            <a class="btn btn-block btn-link" href="{{ route('password.request') }}" style="color: white;">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Core JS Files -->
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui-1.12.1.custom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

<!--  Paper Kit Initialization snd functons -->
<script src="{{ asset('js/paper-kit.js?v=2.0.1') }}"></script>

</html>