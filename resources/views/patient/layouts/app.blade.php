<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Laravel</title>
    <link href="{{ config('app.url') }}assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ config('app.url') }}assets/css/master.css" rel="stylesheet">
    {{-- <link href="{{  config('app.url') }}assets/vendor/chartsjs/Chart.min.css" rel="stylesheet"> --}}
    <link href="{{ config('app.url') }}assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
</head>

<body class="clinic_version">

    <div class="wrapper">
        <nav id="sidebar" class="active mt-4">
            <ul class="mt-5 list-unstyled components text-secondary">
                {{-- @auth --}}
                <li>
                    {{-- <a href="{{ route('admins') }}"><i class="fas fa-home"></i> Dashboard</a> --}}
                </li>
                <li>
                    <a href="{{ route('') }}"><i class="fas fa-file-alt"></i>My Clinic data</a>
                </li>
                <li>
                    <a href="{{ route('') }}"><i class="fas fa-file-alt"></i>Upcoming View Appointments</a>
                </li>
                <li>
                    <a href="{{ route('') }}"><i class="fas fa-file-alt"></i>Request Appointment</a>
                </li>
                <li>
                    <a href="{{ route('') }}"><i class="fas fa-file-alt"></i>Request Checkup</a>
                </li>
                <li>
                    <a href="{{ route('') }}"><i class="fas fa-file-alt"></i>Symptom Check</a>
                </li>
                <li>
                    <a href="{{ route('') }}"><i class="fas fa-file-alt"></i>History Reports (Birth/Operation)</a>
                </li>
                <li>
                    <a href="{{ route('') }}"><i class="fas fa-file-alt"></i>Bills</a>
                </li>
                <li>
                    <a href="{{ route('') }}"><i class="fas fa-file-alt"></i>Payments</a>
                </li>
                <li>
                    <a href="{{ route('') }}"><i class="fas fa-file-alt"></i>Diagnostic Center Locator</a>
                </li>
                <li>
                <a href="{{ route('') }}"><i class="fas fa-file-alt"></i>Pharmacy Locator</a>
                </li>
            </ul>
        </nav>
        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg fixed-top navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-link"></i> <span>Quick Access</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access
                                                Logs</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back
                                                ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i>
                                                Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i>
                                                Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-user"></i>
                                    <span>{{ auth()->user()->name ?? '' }}</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i>
                                                Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i>
                                                Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i>
                                                Settings</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item logout-button">
                                                    <i class="fas fa-sign-out-alt"></i> Logout
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content">
                <div class="container">
                    <br><br><br>

                    {{ $slot }}

                    @yield('admin_content')
                    @livewireScripts

                    <script src="{{ config('app.url') }}js/livewire-turbolinks.js"></script>
                    <script src="{{ config('app.url') }}js/alpine.js"></script>
                    <script src="{{ config('app.url') }}assets/vendor/jquery/jquery.min.js"></script>
                    <script src="{{ config('app.url') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                    {{-- <script src="{{  config('app.url') }}assets/vendor/chartsjs/Chart.min.js"></script> --}}
                    {{-- <script src="{{  config('app.url') }}assets/js/dashboard-charts.js"></script> --}}
                    <script src="{{ config('app.url') }}assets/js/script.js"></script>
</body>

</html>