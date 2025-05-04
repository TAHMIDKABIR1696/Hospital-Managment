<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  
  <body>
    <div class="container-scroller">

            
            <!-- Banner Right Content -->
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/">
                <i class="mdi mdi-home me-3 text-white"></i>
              </a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Layout Structure -->
      <!-- Sidebar -->
      @include('admin.sidebar')
      
      <!-- Navbar -->
      @include('admin.navbar')
      
      <!-- Main Content -->
          @include('admin.body')

      
      <!-- Scripts -->
      @include('admin.script')
    </div>
    <!-- container-scroller -->
  </body>
</html>