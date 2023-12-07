@extends('homepage.layout.base')

@section('title','Contact Us')
@section('active','active')

@section('main')
  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>KONTAK KAMI</h2>
        <p>ANDA DAPAT MENGHUBUNGI KAMI MELALUI</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Lokasi:</h4>
              <p>Jln. DI. Pandjaitan No. 434C Sukaraya
                Kec. Baturaja Timur, Kab. Ogan Komering Ulu,
                Sumatera Selatan.
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>lpqalmuhajirunbta@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Telepon:</h4>
              <p>+628 38 3870 2410</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Nama Anda</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Tulis disini.." required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <label for="name">E-Mail Anda</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Tulis disini.." required>
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="name">Subjek</label>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
            </div>
            <div class="form-group mt-3">
              <label for="name">Pesan</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Mohon Tunggu</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesanmu telah dikirim. Terima Kasih!</div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan!</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Us Section -->

@endsection
