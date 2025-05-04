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
        @if (session('message'))
        <div class="alert alert-success" role="alert">
            <button type="button" class='close' data-dismiss='alert'>x</button>
            {{ session()->get('message') }}
        </div>
        @endif
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="container">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add New Doctor</h4>
                    <p class="card-description"> Fill in the doctor's details </p>

                    <form action="{{url('upload_doctor')}}" method="POST" >
                      @csrf
                      <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" style="color:black; background-color:white;" class="form-control" id="name" name="name" placeholder="Full Name" required>
                      </div>


                      <div class="form-group">
                        <label for="Gender">GENDER</label>
                        <select class="form-control" style="color:black; background-color:white;" id="Gender" name="Gender" required>
                          <option value="">Select GENDER</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
    
                        </select>
                      </div>

                      
                      
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" style="color:black; background-color:white;" class="form-control" id="email" name="email" placeholder="Email" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" style="color:black; background-color:white;" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="specialization">Specialization</label>
                        <select class="form-control" style="color:black; background-color:white;" id="specialization" name="specialization" required>
                          <option value="">Select Specialization</option>
                          <option value="Cardiology">Cardiology</option>
                          <option value="Neurology">Neurology</option>
                          <option value="Pediatrics">Pediatrics</option>
                          <option value="Orthopedics">Orthopedics</option>
                          <option value="Dermatology">Dermatology</option>
                        </select>
                      </div>


                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
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