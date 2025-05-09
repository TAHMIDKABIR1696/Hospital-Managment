<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
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
            
          <th>Patient Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Doctor</th>
          <th>Date</th>
          <th>Status </th>
        </tr>
      </thead>


      <tbody>
        @foreach($data as $app)
        <tr>
          <td>{{ $app->name }}</td>
          <td>{{ $app->phone }}</td>
          <td>{{ $app->email }}</td>
          <td>{{ $app->doctor }}</td>
          <td>{{ $app->appointment_date}}</td>
          <td>{{ $app->status}}</td>
          <td>
            <a class='btn btn-success' href="{{url('approved',$app->id)}}">Approved</a>
          </td>
          <td>
            <a class='btn btn-danger' href="{{url('canceled',$app->id)}}">Canceled</a>
          </td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    </div>
    </div>


      
      <!-- Scripts -->
      @include('admin.script')
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </div>
    <!-- container-scroller -->
  </body>
</html>