@extends("layouts.welcome")

@section("page_title", "Projects")

@push('styles')
    <style>
        .card-img-top{
            height: 60vh;
            width: auto;
            display: block;
            object-fit: cover;
            object-position: top left;
            cursor: pointer;
        }

        .project-display .align-items-stretch{
            align-items: stretch;
        }

        .project-display .card{
            transition: box-shadow 0.3s ease;
        }

        .project-display .card:hover{
            box-shadow: 0 0 15px var(--theme-color);
        }

        /* Lightbox styles */
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            display: none;
            align-items: start;
            justify-content: center;
            padding: 40px 0;
            z-index: 9999;
            overflow-y: auto;
        }

        .lightbox img {
            width: auto;
            max-width: 90%;
            height: auto;
            max-height: none; /* allow natural height */
            display: block;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255,255,255,0.3);
            transition: transform 0.3s ease;
        }
    </style>
@endpush

@push('script')
<script>
  function openLightbox(src) {
    document.getElementById("lightbox-img").src = src;
    document.getElementById("lightbox").style.display = "flex";
  }

  function closeLightbox() {
    document.getElementById("lightbox").style.display = "none";
  }
</script>
    
@endpush

@section("content")
    <x-welcome.page-header/>

    <section class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 52px;">
                        I have worked over <span class="text-orange">{{ BasicInfo('completed_projects') }} projects</span>
                    </h1>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row align-items-stretch project-display">
                        @foreach ($projects as $count => $project)
                        <div class="col-md-6 mb-4">
                            <div class="card border-orange h-100">
                                <img class="card-img-top" src="{{$project['images'][0]}}" alt="Image of {{$project['name']}}" onclick="openLightbox(this.src)"></img>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $project['name'] }}</h5>
                                    <hr class="text-orange">
                                    <p>
                                        <strong>Technology:</strong> 
                                        @foreach($project['technology'] as $tech)
                                            <span>{{ $tech }},</span>
                                        @endforeach
                                    </p>
                                    <p> {{ $project['description'] }} </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <img id="lightbox-img" src="" alt="Preview">
    </div>
@endsection