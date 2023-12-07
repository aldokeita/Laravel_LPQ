@extends('homepage.layout.base')

@section('title',$detail->title)

@section('main')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>News Details</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li><a href="/news">News</a></li>
              <li>{{$detail->title}}</li>
            </ol>
          </div>

        </div>
      </section><!-- Breadcrumbs Section -->

      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="align-items-center">

                  <div class="swiper-slide">
                    <img src="{{asset('storage/'.$detail->photo)}}" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="col-lg-4">
              {{-- <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                  <li><strong>Category</strong>: Web design</li>
                  <li><strong>Client</strong>: ASU Company</li>
                  <li><strong>Project date</strong>: 01 March, 2020</li>
                  <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                </ul>
              </div> --}}
              <div class="portfolio-description">
                <h2>{{$detail->title}}</h2>
                <p>{{$detail->content}}</p>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Portfolio Details Section -->

@endsection
