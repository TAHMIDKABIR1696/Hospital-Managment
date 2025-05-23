<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>QUACK</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <style>
    body {
      background-color:rgb(241, 235, 149); 
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">QUACK</span>-HOSPITAL</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div style="visibility: visible !important;"  id="navbarSupport">
          <ul class="navbar-nav ml-auto">


            @if(Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{url('myappointment')}}">Appointment</a>
            </li>
            <x-app-layout>
            </x-app-layout>


            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>
            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

        @if (session('message'))
        <div class="alert alert-success" role="alert">
            <button type="button" class='close' data-dismiss='alert'>x</button>
            {{ session()->get('message') }}
        </div>
        @endif

<div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/BG.jpg); background-size: cover; background-position: center;">
  <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <h1 class="display-4">QUACK-QUACK Living🦆🩺💉</h1>
    </div>
  </div>
</div>

  @include('user.doctor')

  @include('user.appointment')

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
