@extends('layouts.welcome')

@push('styles')
    <style>
        .project-img{
            transition: 0.5s all ease-in-out;
            height: 140px;
        }
        .project-img:hover{
            transform: scale(1.1);
        }

        @media only screen and (max-width: 991px){
            /*Big smartphones [426px -> 600px]*/
            .project-img{
                height: 210px;
            }
        }

        @media only screen and (max-width: 600px){
            /*Big smartphones [426px -> 600px]*/
            .project-img{
                height: 230px;
            }
        }

        @media only screen and (max-width: 426px){
            /*Small smartphones [426px]*/
            .project-img{
                height: 185px;
            }
        }
    </style>
@endpush

@section('content')

    <!-- I am Shahidul -->
    <section
        class="mb-5 py-5 hero-bg"
    >
        <div class="d-md-none" style="padding-top: 100px;"></div>

        <!-- container -->
        <div class="container text-white text-md-start text-center">

            <div class="row align-items-center" style="min-height: 80vh;">

                <div class="col-md">
                    <h3>Hi! I'm</h3>
                    <h1 class="my-name">Shahidul Islam</h1>
                    <h4>Full-stack Software Developer</h4>
                    <br>
                    <h6> Say Hello To </h6>
                    <div class="d-flex align-items-center gap-3 justify-content-center justify-content-md-start" style="font-size: 30px;">

                        <a href="mailto:contact.shahidul@gmail.com" target="_blank" class="text-orange text-decoration-none" title="Email">
                            <i class="bi bi-envelope"></i>
                        </a>
                        <!-- <a href="https://facebook.com/its.antorislam/" target="_blank" class="text-orange text-decoration-none" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="javascript::" class="text-orange text-decoration-none" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a> -->
                        <a href="https://linkedin.com/in/mdshahidul/" target="_blank" class="text-orange text-decoration-none" title="Linkedin">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://github.com/shahidul890" target="_blank" class="text-orange text-decoration-none" title="Github">
                            <i class="bi bi-github"></i>
                        </a>
                        {{-- <a href="https://fiverr.com/shahidul_islamm/" target="_blank" class="text-decoration-none" title="Fiverr">
                            <img
                                src="/assets/icons/fiverr.png"
                                alt="fiverr"
                                width="35"
                                class="img-fluid rounded-circle bg-orange"
                                style="margin-top: -12px;"
                            />
                        </a> --}}
                    </div>

                    <a href="{{asset('assets/cv/resume-of-shahidul-islam.pdf')}}" target="__blank" class="btn btn-orange px-4 mt-3">DOWNLOAD CV</a>
                    <a href="/contact" class="btn btn-orange px-3 mt-3">CONTACT ME</a>
                </div>

                <div
                    class="col-md text-md-end slow-motion"
                    style="position: relative;"
                >
                    <div class="bg-light text-dark p-3 experience-card">
                        <div class="d-flex gap-3 align-items-center">
                            <h1 class="m-0 text-blue">3+</h1>
                            <div class="text-start">
                                <h5 class="m-0">Years Experience</h5>
                                <small class="m-0">Happy Clients</small>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/me4.png" alt="" class="img-fluid shadow" width="400" style="border-radius: 15px;">
                </div>
            </div>
        </div>
        <!-- // container end -->
    </section>

    <!-- Skills -->
    <section class="py-5" id="experties">
        <div class="container">
            <div class="row gap-4">
                <div class="col-md-12">
                    <p><strong>SKILLS</strong></p>
                    <h1 style="font-size: 52px;" class="mb-5">I am great in what I do <br> and <span class="text-orange">I am loving it</span></h1>
                    {{-- <img src="/assets/gifs/php.gif" alt="giphy" class="img-fluid d-none d-md-block" /> --}}
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md px-4">
                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">PHP</h6>
                                    <p class="m-0 text-muted">80%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 80%"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">Laravel</h6>
                                    <p class="m-0 text-muted">90%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 90%"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">MySQL</h6>
                                    <p class="m-0 text-muted">85%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 85%"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">AJAX</h6>
                                    <p class="m-0 text-muted">90%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 90%"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">Javascript</h6>
                                    <p class="m-0 text-muted">60%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 60%"></div>
                                </div>
                            </div>


                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">Github</h6>
                                    <p class="m-0 text-muted">70%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 70%"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md  px-4">
                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">VueJs</h6>
                                    <p class="m-0 text-muted">45%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 45%"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">jQuery</h6>
                                    <p class="m-0 text-muted">78%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 78%"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">Bootstrap</h6>
                                    <p class="m-0 text-muted">99%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 99%"></div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">HTML</h6>
                                    <p class="m-0 text-muted">99%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 99%"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">Tailwind CSS</h6>
                                    <p class="m-0 text-muted">66%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 66%"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">CSS</h6>
                                    <p class="m-0 text-muted">96%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                                    <div class="progress-bar bg-dark-blue" style="width: 96%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Skills -->

    <!-- about Me -->
    <section class="my-5" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md">
                    <img src="/assets/gifs/developer.gif" alt="developer" class="img-fluid"/>
                </div>
                <div class="col-md">
                    <p>ABOUT ME</p>

                    <h1 style="font-size: 52px;">Why you <span class="text-orange">hire me</span> for your <span class="text-blue">next project?</span></h1>
                    <br>
                    <p>With 3+ years of experience as a programmer, I've honed my skills in creating efficient and innovative solutions for a diverse range of clients. My journey started with a passion for coding, I've cultivated expertise that enables me to tackle complex challenges and deliver exceptional results. I have worked on a wide range of projects, such as School Management, Industry Management, Ecommerce, MLM, Car Management, and Schedule Booking. My programming expertise spans several key areas, making me a versatile choice for your projects. I specialize in PHP, Laravel, REST API, MySQL, AJAX, jQuery</p>

                    <a href="javascript::" class="btn btn-orange px-5">Hire Me</a>
                </div>
            </div>
        </div>
    </section>
    <!-- // about Me end -->

    <!-- Projects -->
    <section id="projects" class="py-5" style="background-image: url('/assets/img/service_bg.png');">
        <div class="container py-5">

            <div class="row align-items-center">
                <div class="col-md-4">
                    <p>PROJECTS</p>

                    <h1 style="font-size: 52px;">
                        I have worked over <span class="text-orange">20+ projects</span>
                    </h1>
                </div>
            {{-- </div> --}}

            {{-- <div class="row py-5 align-items-center"> --}}
                <div class="col-md-8">
                    <x-swipper.projects>
                        @foreach ($projects as $count => $project)
                        <div class="swiper-slide">
                            <div class="card" style="border-radius: 15px; overflow:hidden; cursor: pointer">
                                <img src="{{$project['images'][0]}}" class="d-block w-100" alt="{{$project['name']}}">
                                <div class="card-header bg-orange text-white text-center border-0">
                                    <p class="m-0">{{$project['category']}}</p>
                                    <p class="m-0"><small>Technologies: @foreach ($project['technology'] as $tech) <span class="badge bg-dark-blue">{{$tech}}</span> @endforeach </small></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </x-swipper.projects>
                </div>


                <div class="col-md d-none">

                    <div class="row mb-4 me-lg-3 justify-content-start">

                        @foreach ($projects as $count => $project)

                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <div class="card border-0 shadow-lg" style="border-radius: 15px; overflow:hidden; cursor: pointer" data-bs-target="#modal-{{$count}}" data-bs-toggle="modal">
                                    
                                    @if(count($project['images']) > 1)
                                    <x-carousel>
                                       @foreach ($project['images'] as $index => $img)
                                        <div class="carousel-item {{ ($index == 0) ? 'active' : '' }}">
                                            <img src="{{$img}}" class="d-block w-100 project-img" alt="{{$project['name'].$index}}">
                                        </div>
                                       @endforeach
                                    </x-carousel>
                                    @else
                                    <div style="overflow:hidden">
                                        <img src="{{$project['images'][0]}}" class="card-img-top w-100 project-img" alt="{{$project['name']}}">
                                    </div>
                                    @endif

                                    <div class="card-header bg-orange text-white text-center border-0">
                                        <p class="m-0">{{$project['category']}}</p>
                                        {{-- <p class="m-0"><small>Technologies: @foreach ($project['technology'] as $tech) <span class="badge bg-dark-blue">{{$tech}}</span> @endforeach </small></p> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="modal-{{$count}}">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="owl-carousel owl-theme">
                                                @foreach ($project['images'] as $img)
                                                    <div class="item">
                                                        <img src="{{$img}}" alt="">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- // Projects end -->

    <!-- Services -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="row gap-3 align-items-center">
                <div class="col-12 mb-5">
                    <p>SERVICES</p>
                    <h1 style="font-size: 52px;">How can <span class="text-orange">I help you?</span> </h1>
                </div>

                <div class="my-3 col-md">
                    <div class="card border-0 shadow">
                        <img
                            src="/assets/icons/web-design.jpg"
                            alt=""
                            class="img-fluid rounded-circle" width="100"
                            style="margin-top: -50px;"
                        />
                        <div class="card-body">
                            <h4 class="card-title">WEB DESIGN</h4>
                            <p>
                                Transform your online presence with my exceptional web design service. I crafts visually stunning and user-centric websites that captivate your audience. I focus on creating engaging user interfaces, seamless navigation, and captivating visuals to ensure your website not only looks incredible but also delivers an exceptional user experience.
                            </p>
                            <a href="javascript::" class="btn btn-orange px-5">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md my-3">
                    <div class="card border-0 shadow">
                        <img src="/assets/icons/web-development.jpg" alt="" class="img-fluid rounded-circle" width="100"
                            style="margin-top: -50px;"
                        />
                        <div class="card-body">
                            <h4 class="card-title">WEB DEVELOPMENT</h4>
                            <p>I will develop dynamic, responsive, and visually appealing websites tailored to your unique needs. Whether you're launching a new project, revamping an existing site, or starting an e-commerce venture. From sleek user interfaces to robust back-end functionality, I ensure that your website not only looks fantastic but also performs seamlessly across all devices</p>
                            <a href="javascript::" class="btn btn-orange px-5">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-md my-3">
                    <div class="card border-0 shadow">
                        <img
                            src="/assets/icons/rest-api.jpg"
                            alt=""
                            class="img-fluid rounded-circle"
                            width="100"
                            style="margin-top: -50px;"
                        />
                        <div class="card-body">
                            <h4 class="card-title">REST API</h4>
                            <p>
                                Unlock the potential of your applications with REST API development service. I will serve robust and scalable APIs that facilitate seamless communication between different software systems. Whether you need to integrate third-party services, streamline data exchange, or empower your mobile apps that meet your specific requirements.
                            </p>
                            <a href="javascript::" class="btn btn-orange px-5">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Services end -->
@endsection