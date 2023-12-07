@extends('homepage.layout.base')

@section('title','About Us')

@section('main')

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

    <div class="row justify-content-between">
        <h3 data-aos="fade-up">LOGO LPQ AL-MUHAJIRUN</h3>
        <p data-aos="fade-up" data-aos-delay="100">
            Delapan orang yang bergandengan  di luar logo merupakan simbol delapan orang pemuda yang merupakan guru Qur’an yang saling bersinergi untuk berjuang mendirikan Lembaga Penidikan Qur’an Al-Muhajirun.
        </p>
        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
        <img src="{{asset('dashboard1/img/logo.png')}}" class="img-fluid" alt="" data-aos="zoom-in">
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <h4>Cahaya Yang Memancar</h4>
                <p>Cahaya yang memancar di sekitar Al-Quran meupakan simbol bahwa siapapun yang berinteraksi dengan Al-Quran kehidupannya akan tercerahkan. Sementara jumlah 7 cahaya merupakan jumlah minimal guru yang menjadi syarat ideal tegaknya lembaga mandiri Metode Qiraati.</p>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <h4>Kata Al-Muhajirun</h4>
                <p>Kata Al-Muhajirun adalah nama lembaga yang diberikan oleh Ust. Abu Bakar (Putra KH Dahlan Salim Zarkasyi yang merupakan penemu Metode Qiraati) ketika para guru Al-Muhajirun mengikuti program tashih guru di Kota Bogor pada bulan Desember 2021. Maknanya adalah orang-orang yang berhijrah.</p>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <h4>Tiga orang di belakang Al-Quran</h4>
                <p>Tiga orang di belakang Al-Quran adalah simbol tiga guru quran pertama Al-Muhajirun yang mengajarkan Al-Quran dengan Metode Qiraati dengan guru-guru lainnya</p>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <h4>Simbol Al-Quran</h4>
                <p>Al-Quran merupakan simbol bahwa Al-Muhajirun bergerak dalam bidang pendidikan Al-Quran.</p>
            </div>
        </div>
        </div>
    </div>

    </div>
</section>
<!-- End About Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>TIM KAMI</h2>
        <p>Tim Kami di LPQ AL-MUHAJIRUN</p>
      </div>

      <div class="row">

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="member">
            <img src="{{asset('homepage/img/team/tim-1.jpeg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>M. Ridi Ary Afriza, S.I.Kom</h4>
                <span>Penanggung Jawab LPQ</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="member">
            <img src="{{asset('homepage/img/team/tim-2.jpeg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>M. Alfin Nur</h4>
                <span>Ketua Yayasan Griya Muda Qurani</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="member">
            <img src="{{asset('homepage/img/team/tim-3.jpeg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Suripni, S.I.P</h4>
                <span>Guru</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="member">
            <img src="{{asset('homepage/img/team/tim-4.jpeg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Ulfa Oktaraisir, S.M</h4>
                <span>Guru</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
          <div class="member">
            <img src="{{asset('homepage/img/team/tim-5.jpeg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Intan Puspita Sari, S.Pd</h4>
                <span>Bendahara</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
          <div class="member">
            <img src="{{asset('homepage/img/team/tim-6.jpeg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Titi Sartia, S.Pd</h4>
                <span>Guru</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
          <div class="member">
            <img src="{{asset('homepage/img/team/tim-7.jpeg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Rohman</h4>
                <span>Guru</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="800">
          <div class="member">
            <img src="{{asset('homepage/img/team/tim-8.jpeg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Irfan Pebriansyah, S.H</h4>
                <span>Guru</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="900">
          <div class="member">
            <img src="{{asset('homepage/img/team/tim-9.jpeg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Muhammad Sariyan, S.Pd</h4>
                <span>Guru</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="1000">
          <div class="member">
            <img src="{{asset('homepage/img/team/tim-10.jpeg')}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Aldo Pratama Joani</h4>
                <span>Guru</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
</section>
<!-- End Team Section -->

@endsection
