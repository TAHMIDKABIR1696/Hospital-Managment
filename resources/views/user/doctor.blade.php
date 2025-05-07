<style>
  .card-doctor {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card-doctor:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .card-doctor .body img {
    transition: transform 0.3s ease;
  }

  .card-doctor:hover .body img {
    transform: scale(1.05);
  }
</style>

<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Quack-Doctors</h1>
      
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($doctor as $doctor)
        <div class="item">
          <div class="card-doctor">
  
            <div class="body">
              
              <img src="{{asset('../assets/img/DD.jpg')}}" alt="Doctor" class="w-100">
              <p class="text-xl mb-0">{{$doctor->name}}</p>
              <span class="text-sm text-grey">{{$doctor->specialization}}<</span>
            </div>
          </div>
        </div>

        @endforeach
      </div>            
    </div>
</div>