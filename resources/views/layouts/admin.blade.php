<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Akshar Hospital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('admin/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('admin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href=" {{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.10.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  @livewireStyles
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +91 7600006548
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="{{ asset('assets\image\symbol.png') }}" alt="">Akshar - Medico</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      @include('layouts.inc.admin.navbar')

      @if (Route::has('login'))
      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>
      <div class="btn btn-danger mx-2" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    </div>
      @elseif (!Route::has('login'))
      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Register</a>
      @endif

    </div>
  </header><!-- End Header -->

  @if (session('message'))
        <div class="alert alert-success" role="alert">
           {{ session('message') }}
        </div>
    @endif 

  <main id="main my-5">
  <section id="featured-services" class="featured-services">
     
    @yield('content')

</section>

    

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src=" {{ asset('admin/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src=" {{ asset('admin/assets/vendor/aos/aos.js') }}"></script>
  <script src=" {{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ asset('admin/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src=" {{ asset('admin/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src=" {{ asset('admin/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('admin/assets/js/main.js') }}"></script>

  @livewireScripts
</body>

</html>