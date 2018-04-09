<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
    
    <!-- Styles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">  
    -->

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Icon for star rating -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="{{ asset('material-dashboard/css/bootstrap.min.css') }}" />
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="{{ asset('material-dashboard/css/material-dashboard.css?v=1.2.0') }}" />

    <!-- Fonts and icons -->
    <link rel='stylesheet' href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>

    <!-- Style for star rating -->
    <style>
        .checked {
            color: #5bc0de;
        }
    </style>

    @yield('script')

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}@yield('title')</title>
</head>

<body style="background-image: url('{{ asset('img/background.jpg') }}'); background-repeat: round; background-attachment: fixed;">
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="{{ asset('img/sidebar-bg.png') }}">

            <div class="logo">
                <!--<a href="lsapp/public/home" class="simple-text">
                    TaraNaSaPinas
                </a> -->
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    @guest
                        <li>
                            <a href="{{ route('login') }}">
                                <p>SIGN IN</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">
                                <p>SIGN UP</p>
                            </a>
                        </li>
                    @else
                        @if (Auth::user()->user_type == 'Bantay Bayan')
                            <li>
                                <a>
                                    <p>{{ Auth::user()->user_fname }}, you are logged in as {{ Auth::user()->user_type }}</p>
                                </a>
                            </li>

                            <li class="active">
                                <a href="/dash">
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="/report">
                                    <p>REPORTS</p>
                                </a>
                            </li>
                            <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        <p>Sign Out</p>
                                    </a>
            
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                            </li>
                        @endif
                        @if (Auth::user()->user_type == 'Barangay Staff')
                            <li>
                                <a>
                                    <p>You are logged in as <br />{{ Auth::user()->user_type }}</p>
                                </a>
                            </li>

                            <li class="active">
                                <a href="/dashboard">
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <p>Sign Out</p>
                                </a>
        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li>
                                <a href="/newsann">
                                    <p>News & Announcements</p>
                                </a>
                            </li>
                            <li>
                                <a href="/newsann/create">
                                    <p>Create News & Announcements</p>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->user_type == 'Barangay Council')
                        <li>
                            <a>
                                <p>You are logged in as <br />{{ Auth::user()->user_type }}</p>
                            </a>
                        </li>

                        <li class="active">
                            <a href="/dashboard">
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <p>Sign Out</p>
                                </a>
            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        <li>
                            <a href="/newsann">
                                <p>News & Announcements</p>
                            </a>
                        </li>
                        <li>
                            <a href="/newsann/create">
                                <p>Create News & Announcements</p>
                            </a>
                        </li>
                        @endif
                    @endguest
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                @include('inc.messages')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h2 class="title">@yield('header')</h2>
                                    <p class="category">@yield('subheader')</p>
                                </div>
                                <div class="card-content">
                                    @yield('content')
                                </div> 
                            </div>
                        </div>       
                    </div>
                </div>    
            </div>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script type="text/javascript" src="{{ asset('material-dashboard/js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('material-dashboard/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('material-dashboard/js/material.min.js') }}"></script>
<!--  Charts Plugin -->
<script src="{{ asset('material-dashboard/js/chartist.min.js') }}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{ asset('material-dashboard/js/arrive.min.js') }}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{ asset('material-dashboard/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('material-dashboard/js/bootstrap-notify.js') }}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('material-dashboard/js/material-dashboard.js?v=1.2.0') }}"></script>

<!-- Text Editor JS Files -->
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

@yield('script')

</html>