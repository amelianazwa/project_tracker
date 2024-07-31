<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png">
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/metismenu/mm-vertical.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/responsive.css') }}" rel="stylesheet">

    @yield('css')
</head>

<body>

    <!--authentication-->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
        <div class="container-fluid my-5 my-lg-0">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                        <div class="card rounded-4 mb-0 border-top border-4 border-primary border-gradient-1">
                            <div class="card-body p-5">
                                <img src="{{ asset('assets/images/logo1.png') }}" class="mb-4" width="145"
                                    alt="">
                                <h4 class="fw-bold">GABUNG</h4>
                                <p class="mb-0">Masukan akun anda untuk bisa gabung ke aplikasi MoneyNotes</p>

                                <div class="form-body my-5">
                                    <form class="row g-3" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email</label>
                                            <input type="email" class="form-control"
                                                @error('email') is-invalid @enderror name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                id="inputEmailAddress" placeholder="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Kata Sandi</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0"
                                                    @error('password') is-invalid @enderror name="password" required
                                                    autocomplete="current-password" id="inputChoosePassword"
                                                    placeholder="Masukan Kata Sandi">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class="bi bi-eye-slash-fill"></i></a>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           
                                        </div>
                                        <div class="col-md-6 text-end"> <a href="auth-basic-forgot-password.html">
                                                </a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-grd-primary">Gabung</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-start">
                                                <p class="mb-0">Belum punya akun ? <a
                                                        href="{{route ('register')}}">Registrasi disini</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                               

                            </div>
                        </div>
                    </div>
                </div><!--end row-->
        </div>
    </div>
    <!--authentication-->


    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });
    </script>

</body>
@yield('js')
@stack('script')

</html>
