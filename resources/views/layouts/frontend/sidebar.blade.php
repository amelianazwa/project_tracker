<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="{{asset('frontend/assets/img/Premium_Vector___Art_illustration__1_-removebg-preview.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">MoneyNotes</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

              </div>
              <span class="nav-link-text ms-1">Home</span>
            </a>
          </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('bank.index')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

              </div>
              <span class="nav-link-text ms-1">Dompet</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pemasukan.index')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

              </div>
              <span class="nav-link-text ms-1">Pemasukan</span>
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('pengeluaran.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

            </div>
            <span class="nav-link-text ms-1">Pengeluaran</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6"></h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

            </div>

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

            </div>

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-up.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">

            </div>

          </a>
        </li>
      </ul>
    </div>


    </div>
  </aside>
