<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>LPQ AL-MUHAJIRUN</span></a></h1>
        <!-- <a href="index.php"><img src="dashboard1/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a></li>
          <li><a class="nav-link scrollto {{ Request::is('aboutus') ? 'active' : '' }}" href="/aboutus">Tentang Kami</a></li>
          {{-- <li><a class="nav-link scrollto" href="#services">Layanan</a></li> --}}
          <li><a class="nav-link scrollto {{ Request::is('news') ? 'active' : '' }}" href="/news">Berita</a></li>
          {{-- <li><a class="nav-link scrollto" href="/contactus">Tim</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto {{ Request::is('contactus') ? 'active' : '' }}" href="/contactus">Kontak</a></li>
          @auth
            <li><a class="getstarted scrollto" href="/dashboard">Hi,{{auth()->user()->name}}</a></li>
          @else
            <li><a class="getstarted scrollto" href="/login">Masuk</a></li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
