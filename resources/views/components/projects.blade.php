@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .swiper {
            margin-top: 32px;
            width: 100%;
            height: 100vh;
            /* padding-top: 50px;
            padding-bottom: 50px; */
        }

        /* .swiper-slide { */
            /* background-position: center;
            background-size: cover; */
            /* width: 300px;
            height: 300px; */
            /* height: 100%;
            width: 100%; */
            /* display: flex;
            justify-content: center;
            align-items: center; */
        /* } */

        /* .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        } */

        .swiper-pagination-bullet{
            background: #f85b00;
        }

        .swiper-slide-card {
            position: relative;
            /* border: 2px solid #f85b00;
            border-radius: 15px; */
            overflow: hidden;
        }

        .swiper-slide-card > img{
            border-radius: 15px 15px 0 0;
            height: 86vh;
            width: auto;
            display: block;
            object-fit: cover;
            object-position: top left;
            cursor: pointer;
        }

        .swiper-slide-caption{
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            /* text-align: center; */
        }

        .autoplay-progress {
            position: absolute;
            right: 16px;
            bottom: 100px;
            z-index: 10;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #fff;
        }

        .autoplay-progress svg {
            --progress: 0;
            position: absolute;
            left: 0;
            top: 0px;
            z-index: 10;
            width: 100%;
            height: 100%;
            stroke-width: 4px;
            stroke: #fff;
            fill: none;
            stroke-dashoffset: calc(125.6px * (1 - var(--progress)));
            stroke-dasharray: 125.6;
            transform: rotate(-90deg);
        }
    </style>
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");

        const swiper = new Swiper('.swiper', {
            // effect: "coverflow",
            // direction: 'vertical',
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            loop: true,
            spaceBetween: 30,
            // grabCursor: true,
            // centeredSlides: true,
            slidesPerView: 1.1,
            mousewheel: true,
            // coverflowEffect: {
            //     rotate: 50,
            //     stretch: 0,
            //     depth: 100,
            //     modifier: 1,
            //     slideShadows: false,
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            },
        });

        const projectDialog = document.getElementById('project-dialog');
        const imageTitle = document.getElementById('image-title');
        const imageDesc = document.getElementById('image-desc');
        const projectDialogBody = projectDialog.querySelector('.modal-body');
        const projectDialogClose = projectDialog.querySelector('.modal-header button');

        projectDialogClose.addEventListener('click', () => {
            projectDialogHide();
        });

        const projectDialogShow = (targetId) => {
            const projectCard = document.getElementById(targetId);
            const projectData = projectCard.dataset.selectedproject;

            if (!projectData) {
                console.error("Missing 'data-selected-project' attribute on the target element.");
                return;
            }

            const { images = [], name, description } = JSON.parse(projectData);

            if(Array.isArray(images)){
                projectDialogBody.innerHTML = '';
                images.forEach((image, index) => {
                    const img = document.createElement('img');
                    img.src = image;
                    img.classList.add('img-fluid', 'w-100');
                    img.alt = name+' '+index;
                    projectDialogBody.appendChild(img);
                });
            }
            
            imageTitle.innerText = name;
            imageDesc.innerText = description;

            $("#project-dialog").modal('show');
        };
        const projectDialogHide = () => {
            $("#project-dialog").modal('hide');
        };
    </script>
@endpush

<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    @foreach ($projects as $count => $project)
    <div class="swiper-slide">
        <div class="swiper-slide-card" id="project-{{ $count }}" data-selectedproject='@json($project)' >
            <img src="{{$project['images'][0]}}" class="d-block w-100" alt="{{$project['name']}}" onclick="projectDialogShow('project-{{ $count }}')" />
            <div class="swiper-slide-caption">
                <p class="m-0">{{$project['description']??''}}</p>
            </div>
        </div>
    </div>
    @endforeach
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <div class="autoplay-progress">
    <svg viewBox="0 0 48 48">
      <circle cx="24" cy="24" r="20"></circle>
    </svg>
    <span></span>
  </div>

  {{-- <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div> --}}
</div>

<div class="modal fade" id="project-dialog" tabindex="-1" aria-labelledby="project-dialog-label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between align-items-start">
                <div>
                    <h4 class="text-dark mb-0" id="image-title"></h4>
                    <p class="m-0 text-dark" id="image-desc"></p>
                </div>
                
                <button onclick="projectDialogHide" class="btn-close"> </button>
            </div>
            <div class="modal-body p-0">
                <img src="" alt="" class="img-fluid w-100" />
            </div>
        </div>
    </div>
</div>