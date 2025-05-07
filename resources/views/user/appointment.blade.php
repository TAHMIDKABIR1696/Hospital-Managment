<div class="page-section">
  <div class="container">
    <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

    <form class="main-form" action="{{url('appointment')}}" method="POST">
      @csrf
      <div class="row mt-5">
        <!-- Full Name Input -->
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" name="name" class="form-control" placeholder="Full name">
        </div>

        <!-- Email Input -->
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="text" name="email" class="form-control" placeholder="Email address..">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="text" name="phone" class="form-control" placeholder="Phone number..">
        </div>

        <!-- Date Input -->
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input type="date" name="appointment_date" class="form-control">
        </div>

        <!-- Doctor Selection -->
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select name="doctor" id="doctor" class="custom-select">
            <option>Select Doctor</option>
            @foreach($doctor as $doctor)
              <option value="{{ $doctor->name }}">
                {{ $doctor->name }} ({{ $doctor->specialization }})
              </option>
            @endforeach
          </select>
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
    </form>
  </div>
</div>