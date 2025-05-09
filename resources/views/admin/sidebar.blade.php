<nav class="sidebar sidebar-offcanvas bg-dark" id="sidebar">
  <ul class="nav flex-column pt-4 px-2">

    <!-- Logout Button -->
    <li class="nav-item mb-4">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger w-100 d-flex align-items-center justify-content-center">
          <i class="mdi mdi-logout me-2"></i>
          Logout
        </button>
      </form>
    </li>

    <!-- Admin Profile -->
    <li class="nav-item text-center text-white mb-4">
      <div class="profile-name">
        <h6 class="mb-0 fw-bold">MD TAHMID KABIR</h6>
        <small class="text-white-50">ADMIN</small>
      </div>
    </li>

    <!-- Navigation Header -->
    <li class="nav-item nav-category mb-2 ps-3 text-white-50">
      Navigation
    </li>

    <!-- Doctors Link -->
    <li class="nav-item">
      <a class="nav-link text-white d-flex align-items-center" href="{{url('add_doctor_view')}}">
        <i class="mdi mdi-account-plus text-primary me-2"></i>
        Doctors
      </a>
    </li>

    <!-- Appointment Link -->
    <li class="nav-item">
      <a class="nav-link text-white d-flex align-items-center" href="{{url('viewappointment')}}">
        <i class="mdi mdi-calendar-clock text-warning me-2"></i>
        Appointment
      </a>
    </li>

    <!-- Patient Link -->
    <li class="nav-item">
      <a class="nav-link text-white d-flex align-items-center" href="#">
        <i class="mdi mdi-account-heart text-success me-2"></i>
        Patient
      </a>
    </li>

  </ul>
</nav>
