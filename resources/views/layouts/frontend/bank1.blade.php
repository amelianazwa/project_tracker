<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontend/assets/img/Premium_Vector___Art_illustration__1_-removebg-preview.png')}}">
  <link rel="icon" type="image/png" href="{{asset('frontend/assets/img/Premium_Vector___Art_illustration__1_-removebg-preview.png')}}">
  <title>
    Dompet
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{asset('frontend/assets/css/nucleo-icons.css')}}" rel="stylesheet" >
  <link href="{{asset('frontend/assets/css/nucleo-svg.css')}}" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('frontend/assets/css/nucleo-svg.css')}}" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('frontend/assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet">
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://images.pexels.com/photos/952670/pexels-photo-952670.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-position-y: 50%;">
      <span class="mask bg-dark opacity-6"></span>
    </div>
  @include('layouts.frontend.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
   @include('layouts.frontend.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">


            <div class="col-md-10 mb-lg-0 mb-2">
              <div class="card mt-5">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Tabungan Anda</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="{{  route('bank.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Bank</a>
                    </div>
                  </div>
                </div>
                @foreach ( $bank as $data )
                <div class="card-body p-3">
                  <div class="row">


                    <div class="col-xl-8 mb-xl-0 mb-6">
                        <div class="card bg-transparent shadow-xl">
                          <div class="overflow-hidden position-relative border-radius-xl" style="background-image:url('https://raw.githubusercontent.com/creativetimofficial/public-frontend/assets/master/argon-dashboard-pro/assets/img/card-visa.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 p-3">

                              <h5 class="text-white mt-3 mb-5 pb-1">{{ $data->jenis_bank}}</h5>
                              <div class="d-flex">
                                <div class="d-flex">
                                  <div class="me-4">
                                    <p class="text-white text-sm opacity-8 mb-0">No Rekening</p>
                                    <h6 class="text-white mb-0">{{ $data->no_rekening}}</h6>
                                  </div>
                                  <div>
                                    <p class="text-white text-sm opacity-8 mb-0">Saldo</p>
                                    <h6 class="text-white mb-0"> Rp. {{ $data->total_saldo}}</h6>
                                  </div>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-2 mb-0" href="{{ route('bank.destroy', $data->id) }}" onclick="event.preventDefault();
                                                        document.getElementById('destroy-form').submit();"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                        <form id="destroy-form" action="{{ route('bank.destroy', $data->id) }}"
                                                            method="POST" class="d-none">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
@endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

@include('layouts.frontend.footer')
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('frontend/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('frontend/assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>
</body>

</html>
