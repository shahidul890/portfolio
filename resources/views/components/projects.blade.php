@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
        }
    </style>
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
        effect: "coverflow",
        autoplay: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    </script>
@endpush

<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    @foreach ($projects as $count => $project)
    <div class="swiper-slide">
        <div class="card" style="border-radius: 15px; overflow:hidden; cursor: pointer">
            <img src="{{$project['images'][0]}}" class="d-block w-100" alt="{{$project['name']}}">
            <div class="card-header bg-orange text-white text-center border-0">
                <p class="m-0">{{$project['name']}}</p>
                <p class="m-0">{{$project['category']}}</p>
                <p class="m-0"><small>Technologies: @foreach ($project['technology'] as $tech) <span class="badge bg-dark-blue">{{$tech}}</span> @endforeach </small></p>
            </div>
        </div>
    </div>
    @endforeach
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  {{-- <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div> --}}
</div>
