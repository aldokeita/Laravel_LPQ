<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LPQ AL-MUHAJIRUN - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('homepage/img/favicon.png" rel="icon')}}">
  <link href="{{asset('homepage/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('homepage/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('homepage/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('homepage/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('homepage/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('homepage/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('homepage/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="{{asset('homepage/css/style.css')}}" rel="stylesheet">
</head>

<body>

    @include('homepage.partial.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Lembaga Pendidikan Quran Al-Muhajirun</h1>
          <h2><b>Lembaga</b> bimbingan belajar membaca <i>Al-Qur’an</i> yang didirikan atas kesadaran para <b>Pemuda</b> atas minimnya kemampuan membaca <i>Al-Qur'an</i> di Baturaja.</h2>
          <div>
            <a href="/aboutus" class="btn-get-started scrollto">Baca Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid animated" alt="First slide" src="{{asset('homepage/img/heroslide/hero-4.jpeg')}}" style="object-fit: cover; height: 50%;">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid animated" alt="Second slide" src="{{asset('homepage/img/heroslide/hero-2.jpeg')}}"  style="object-fit: cover; height: 100%;">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid animated" alt="Third slide" src="{{asset('homepage/img/heroslide/hero-3.jpeg')}}"  style="object-fit: cover; height: 100%;">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid animated" alt="four slide" src="{{asset('homepage/img/heroslide/hero-1.jpeg')}}"  style="object-fit: cover; height: 100%;">
                  </div>
                </div>
            </div>
          {{-- <img src="{{asset('homepage/img/portfolio/portfolio-1.jpg')}}" class="img-fluid animated" alt=""> --}}
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    @yield('main')

  </main><!-- End #main -->

  @include('homepage.partial.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('homepage/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('homepage/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('homepage/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('homepage/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('homepage/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('homepage/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('homepage/js/main.js')}}"></script>

</body>

</html>
