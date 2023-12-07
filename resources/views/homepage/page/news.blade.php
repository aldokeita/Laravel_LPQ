@extends('homepage.layout.base')

@section('title','News')

@section('main')

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>BERITA</h2>
        <p>CEK BERITA TERBARU KAMI</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            @foreach ($kategori as $item )
                <li data-filter=".filter-{{$item->id}}">{{$item->category}}</li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach ($news as $item )
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item->category_id}}">
          <div class="portfolio-wrap">
            <img src="{{asset('storage/'.$item->photo)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>{{$item->title}}</h4>
                <p>{{Str::limit($item->content, 50)}}</p>
            </div>
            <div class="portfolio-links">
              <a href="{{asset('storage/'.$item->photo)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$item->title}}"><i class="bi bi-zoom-in"></i></a>
              <a href="news/{{$item->title}}" title="More Details"><i class="bi bi-eye"></i></a>
            </div>
          </div>
        </div>
        @endforeach

      </div>

    </div>
  </section><!-- End Portfolio Section -->


@endsection
