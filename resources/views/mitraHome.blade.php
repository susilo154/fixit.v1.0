@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
@if (Route::has('register'))

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/gaia.css') }}" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
    <div class="container">
        <div class="navbar-header">
            <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a href="{{ ('frontend.landing') }}" class="navbar-brand">
                FIXIT
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right navbar-uppercase">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fitur <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('') }}">Tambah montir</a></li>
                        <li><a href="{{ url('') }}">daftar montir</a></li>
                        <li><a href="{{ url('') }}">blabla</a></li>
                    </ul>
                </li>
                @endif
                <form action="{{ route('logout') }}" method="POST">
                        @csrf
                <button type="submit" class="btn btn-danger btn-fill">Log out</button>
                </form>
                <li>
                    <a href="#" class="account-icon"><i class="fa fa-user"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="section section-header">
        <div class="parallax filter filter-color-red">
            <div class="image"
                style="background-image: url('assets/img/landing.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">FIXIt</h1>
                        <h3>Solusi pintar untuk kendaraan anda</h2>
                        <div class="separator line-separator">♦</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="tittle-area text-center">Our Services</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/01.jpg" alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">Tambah montir</h5>
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="fiturjasa/bengkelpangilan.php">Open</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/02.jpg" alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">daftar montir</h5>
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Open</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/02.jpg" alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">blabla</h5>
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Open</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.footer')

</body>

<!--   core js files    -->
<script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="{{ asset('assets/js/gaia.js') }}"></script>

</html>
@endsection