@extends('homepage.layout.base')

@section('title','Home Page')

@section('main')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

        <div class="row justify-content-between">
            <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="{{asset('homepage/img/heroslide/hero-2.jpeg')}}" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Metode Qiroati</h3>
            <p data-aos="fade-up" data-aos-delay="100">
                Metode Qiroati disusun oleh KH. Dachlan Salim Zarkarsy pada tahun 1963. Metode Qiroati menggunakan metode pengajaran dan pembelajaran Al-Qur’an secara tartil, bertajwid, dibacakan secara langsung tanpa dieja. Selain mengajarkan Al- Qur’an dalam metode Qiro’ati juga terdapat pembelajaran mengenai hafalan surah–surah pendek dan doa–doa harian yang disampaikan dengan menggunakan metode drill.
            </p>
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-eye-fill"></i>
                <h4>Metode Drill</h4>
                <p>Metode ini dinilai sangat efektif bagi anak-anak karena dapat meningkatkan daya hafalan anak.</p>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Hafalan</h4>
                <p>Anak-anak akan terjamin dapat menghafal do'a harian, bacaan shalat, dan surah pendek dengan baik dan benar.</p>
                </div>
            </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>LPQ AL-MUHAJIRUN</h2>
            <p>Visi & Misi</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <div class="icon"><i class="bi bi-eye-fill"></i></div>
                <h4 class="title"><a href="">VISI</a></h4>
                <p class="description">Meningkatkan Mutu Pembelajaran Al – Qur’an Bagi Masyarakat Sesuai Disiplin Ilmu Qiroati.</p>
            </div>
            </div>

            <div class="col-md-6 col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
                <div class="icon"><i class="bi bi-bullseye"></i></div>
                <h4 class="title"><a href="">MISI</a></h4>
                <ul class="misi">
                    <li>Melaksanakan belajar membaca Qur’an untuk kemanusiaan dengan metode Qiroati.
                        </li>
                    <li>Mencetak santri yang bermutu sesuai standar Qiroati.</li>
                    <li>Mencetak guru Qur’an yang bersyahadah Qiroati.</li>
                    <li>Meningkatkan syiar kegiatan keislaman yang dapat bermanfaat untuk masyarakat sekitar.</li>
                </ul>
                {{-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p> --}}
            </div>
            </div>

        </div>

        </div>
    </section>
    <!-- End Services Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-between">
            <div class="col-lg-6 pt-5 pt-lg-0">
                <h3 data-aos="fade-up">Dokumentasi Pendirian Lembaga</h3>
                <p data-aos="fade-up" data-aos-delay="100">
                    Lembaga Pendidikan Quran (LPQ) Al-Muhajirun berada dibawah naungan Yayasan  Griya  Muda Qurani, adapun dokumen pendirian yayasan sebagai berikut:
                </p>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    {{-- <i class="bi bi-eye-fill"></i> --}}
                    <h4>Izin Operasional</h4>
                    <p>Nomor Surat : AHU-0016238.01.04. Tahun 2022</p>
                    <p>Tanggal Surat			: 26 Juli 2022</p>
                    <p>Perihal	: Pengesahan Pendirian Badan Hukum Yayasan Griya Muda Qurani</p>
                    <p>Pejabat Penanda Tangan	: Rini Oktaviana, S.H.,M.H</p>

                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    {{-- <i class="bx bx-cube-alt"></i> --}}
                    <h4>Piagam Terdaftar</h4>
                    <p>Nomor Piagam		: 5022080416100371 </p>
                    <p>Tanggal Piagam		: 04 Agustus 2022 </p>
                    <p>Pejabat Penanda Tangan	: Cahyo Rahadian Muzhar, S.H., LLM </p>

                </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                <img src="{{asset('homepage/img/heroslide/hero-3.jpeg')}}" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
        </div>

    </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>LPQ AL-MUHAJIRUN</h2>
            <p>Program Kerja Lembaga</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <h4 class="title"><a href="">Taman Kanak-Kanak Quran (TKQ)</a></h4>
                    <p class="description">Program yang mengajarkan cara membaca Al-Quran dengan benar tanpa mengeja untuk tingkat dasar pada anak-anak usia Taman Kanak-Kanak (TK) 3-5 tahun. </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <h4 class="title"><a href="">Taman Pendidikan Quran (TPQ) </a></h4>
                    <p class="description">Berbeda dengan TKQ maka TPQ ini  ditujukan untuk anak usia 1 tingkat di atas anak usia taman kanak-kanak yaitu usia 6-13 tahun yang mana usia ini masuk pada usia anak Sekolah Dasar (SD) dan anak Sekolah Menengah Pertama (SMP)</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <h4 class="title"><a href="">Lembaga Pendidikan Quran Dewasa (LPQD) </a></h4>
                    <p class="description">
                        Program ini ditujukan untuk usia 14 tahun ke atas, pada peserta duduk Sekolah Menengah Atas (SMA) atau Sekolah Menengah Kejuruan, Perguruan Tinggi dan seterusnya. Pada jenjang ini, santri yang belajar dapat melanjutkan pembelajaran dengan  mengikuti program pembinaan yang mana jika lulus pada program ini maka bisa langsung menjadi guru.
                    </p>
                </div>
            </div>

        </div>

        </div>
    </section>
    <!-- End Services Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </div>

      <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apa itu Lembaga Pendidikan Quran (LPQ) Al-Muhajirun? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq1" class="collapse" data-bs-parent=".faq-list">
            <p>
                (LPQ) Al-Muhajirun merupakan lembaga bimbingan belajar membaca Al-Qur’an yang didirikan atas keprihatinan terhadap anak-anak dan remaja di baturaja yang masih banyak belum bisa membaca Al-Qur’an dengan baik dan benar, serta minimnya lembaga-lembaga pendidikan Qur’an di Kota Baturaja, khususnya Lembaga Pendidikan Qur’an yang menggunakan Metode Qira’ati.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Siapa yang menggerakan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq2" class="collapse" data-bs-parent=".faq-list">
            <p>
                delapan pemuda/i di baturaja bersepakat untuk mendirikan sebuah lembaga bimbingan belajar membaca Al-Quran dengan menggunakan metode Qiraati yang diberi nama Lembaga Pendidikan Quran Al-Muhajirun oleh Ust. Abu Bakar putra dari KH. Dahlan Salim Zarkasy penemu Metode Qiraati
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Kapan Semuanya Bermula? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq3" class="collapse" data-bs-parent=".faq-list">
            <p>
                Pada tanggal 28 Desember 2021  yang pada saat itu kedelapan pemuda pendiri lembaga ini sedang mengikuti ujian Tashih atau ujian kelayakan menjadi guru bersyahadah Qiraati di Kota Bogor
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Metode apa yang digunakan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Metode Qiraati merupakan metode pengajaran dan pembelajaran Al-Qur’an secara tartil, bertajwid, dibacakan secara langsung tanpa dieja. Selain mengajarkan Al- Qur’an dalam metode Qiro’ati juga terdapat pembelajaran mengenai hafalan surah–surah pendek dan doa–doa harian yang disampaikan dengan menggunakan metode drill.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Kapan Lembaga ini aktif berjalan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq5" class="collapse" data-bs-parent=".faq-list">
            <p>
                Lembaga Penidikan Qur’an Al-Muhajirun mulai aktif pada tanggal 10 Januari 2022
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Dimana Lembaga ini berdiri? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq6" class="collapse" data-bs-parent=".faq-list">
            <p>
                Jalan Dr Moh. Hatta No. 1044 Bakung Baturaja Kemudian setelah enam bulan berjalan, lembaga Al-Muhajirun pindah lokasi ke Jalan DI. Panjaitan No. 434 C. Sukaraya  Kec. Baturaja Timur, Kab. Ogan Komering Ulu, Sumatera Selatan.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section>
  <!-- End F.A.Q Section -->

  <!-- ======= Clients Section ======= -->
  {{-- <section id="clients" class="clients section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Clients</h2>
        <p>They trusted us</p>
      </div>

      <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="../../../homepage/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../../homepage/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../../homepage/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../../homepage/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../../homepage/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../../homepage/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../../homepage/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../../homepage/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section> --}}
  <!-- End Clients Section -->



@endsection
