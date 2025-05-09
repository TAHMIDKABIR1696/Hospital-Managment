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
        <a class="navbar-brand" href="#"><span class="text-primary">MY</span> Appointment</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div style="visibility: visible !important;"  id="navbarSupport">
          <ul class="navbar-nav ml-auto">


            @if(Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{url('home')}}">Home</a>
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


  <div class="container my-5">
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover bg-white shadow rounded">
      <thead class="thead-dark">
        <tr>
            
          <th>Patient Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Doctor</th>
          <th>Date</th>
          <th>Status</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach($appointments as $appointment)
        <tr>
          <td>{{ $appointment->name }}</td>
          <td>{{ $appointment->phone }}</td>
          <td>{{ $appointment->email }}</td>
          <td>{{ $appointment->doctor }}</td>
          <td>{{ $appointment->appointment_date}}</td>

          <td>
            <span class="badge badge-{{ $appointment->status == 'Approved' ? 'success' : ($appointment->status == 'Pending' ? 'warning' : 'secondary') }}">
              {{ $appointment->status }}
            </span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
