<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
      /* Set text color to black */
      table, th, td {
        color: black;
      }
    </style>
  </head>
  
  <body>
    <div class="container-scroller">

      <!-- Main Layout Structure -->
      <!-- Sidebar -->
      @include('admin.sidebar')
      
      <!-- Navbar -->
      @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
    <div class="container my-5">
    <div class="table-responsive">
    <table class="table table-bordered table-striped bg-white shadow rounded">
      <thead class="thead-dark">
        <tr>
          <th>Doctor Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>specialization</th>
          <th>created_at</th>
          <th>updated_at</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $doctor)
        <tr>
          <td>{{ $doctor->name }}</td>
          <td>{{ $doctor->email }}</td>
          <td>{{ $doctor->phone }}</td>
          <td>{{ $doctor->specialization }}</td>
          <td>{{ $doctor->created_at }}</td>
          <td>{{ $doctor->updated_at }}</td>
          <td><a class='btn btn-danger' href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>         
        </tr>
        @endforeach

      <!-- Scripts -->
      @include('admin.script')
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </div>
    <!-- container-scroller -->
  </body>
</html>