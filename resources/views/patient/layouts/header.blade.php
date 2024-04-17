 <!-- Site CSS -->
 <link rel="stylesheet" href="{{  config('app.url') }}css/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/custom.css">
    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
<header style="width: auto;">
<div class="wrapper">
<nav id="sidebar" class="active mt-4">
            <ul class="mt-5 list-unstyled components text-secondary">
                <br>
                {{-- @auth --}}
                <li>
                    {{-- <a href="{{ route('admins') }}"><i class="fas fa-home"></i> Dashboard</a> --}}
                    <a href="{{ route('patient_home') }}"><i class="fas fa-file-alt"></i>Home</a>
                </li>
                <li>
                    {{-- <a href="{{ route('admins') }}"><i class="fas fa-home"></i> Dashboard</a> --}}
                    <a href="{{ route('personal_data') }}"><i class="fas fa-file-alt"></i>My Personal data</a>
                </li>
                <li>
                    <a href="{{ route('clinic_data') }}"><i class="fas fa-file-alt"></i>My Clinic data</a>
                </li>
                <li>
                    <a href="{{ route('symptom_check') }}"><i class="fas fa-file-alt"></i>Symptom Check</a>
                </li>
                <li>
                    <a href="{{ ('') }}"><i class="fas fa-file-alt"></i>Upcoming View Appointments</a>
                </li>
                <li>
                    <a href="{{ ('') }}"><i class="fas fa-file-alt"></i>Request Appointment</a>
                </li>
                <li>
                    <a href="{{ ('') }}"><i class="fas fa-file-alt"></i>Request Checkup</a>
                </li>
                <li>
                    <a href="{{ ('') }}"><i class="fas fa-file-alt"></i>History Reports (Birth/Operation)</a>
                </li>
                <li>
                    <a href="{{ ('') }}"><i class="fas fa-file-alt"></i>Bills</a>
                </li>
                <li>
                    <a href="{{ ('') }}"><i class="fas fa-file-alt"></i>Payments</a>
                </li>
                <li>
                    <a href="{{ ('') }}"><i class="fas fa-file-alt"></i>Diagnostic Center Locator</a>
                </li>
                <li>
                <a href="{{ ('') }}"><i class="fas fa-file-alt"></i>Pharmacy Locator</a>
                </li>
            </ul>
        </nav>
        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg fixed-top navbar-white bg-white">
            <button type="button" id="sidebarCollapse" class="btn btn-light" style="background-color: #157fda;"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">


    <div class="header-top wow fadeIn">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="logo image"></a>
            <div class="right-header">
                <div class="header-info">
                    <div class="info-inner">
                        <span class="icontop"><img src="{{ config('app.url') }}images/phone-icon.png" alt="#"></span>
                        <span class="iconcont"><a href="tel:{{ $settings["business_phone"] ?? '+93 12 34 56' }}">{{ $settings["business_phone"] ?? '+93 12 34 56' }}</a></span>
                    </div>
                    <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:{{ $settings["business_email"] ?? 'root@test.com' }}">{{ $settings["business_email"] ?? 'root@test.com' }}</a></span>
                    </div>
                    <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">Daily:
                                {{ $settings["working_horse"] ?? '7:00 AM - 8:00 PM' }}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    #sidebar{
        background-color: #157fda;
    }
    ul li a{
        color: white;
        font-size: 12px !important;
    }
    #sidebar ul li a {
    padding: 0.7rem 1.5rem;
    }
</style>