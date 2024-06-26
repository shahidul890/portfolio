@extends('layouts.welcome')

@section('content')

    <!-- Hero Section -->
    <section
        class="hero-bg"
    >
        <div class="d-md-none" style="padding-top: 100px;"></div>

        <!-- The video -->
        <video autoplay muted loop id="hero-bg-video" class="d-none d-lg-block">
            <source src="{{asset("assets/videos/working-on-laptop.mov")}}" type="video/mp4" />
        </video>

        <!-- container -->
        <div class="container text-white text-md-start text-center ">
            <div class="row align-items-center overlay">

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

                    {{-- <a href="{{asset('assets/cv/resume-of-shahidul-islam.pdf')}}" target="__blank" class="btn btn-orange px-4 mt-3">DOWNLOAD CV</a> --}}
                    <a href="/contact" target="__blank" class="btn btn-orange px-4 mt-3">DOWNLOAD CV</a>
                    <a href="/contact" class="btn btn-orange px-3 mt-3">CONTACT ME</a>
                </div>

                <div
                    class="col-md text-md-end slow-motion"
                    style="position: relative;"
                >
                    <div class="bg-light text-dark p-3 experience-card" style="z-index: 100">
                        <div class="d-flex gap-3 align-items-center">
                            <h1 class="m-0 text-blue">3+</h1>
                            <div class="text-start">
                                <h5 class="m-0">Years Experience</h5>
                                <small class="m-0">Happy Clients</small>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/ai-me4.png" alt="" class="img-fluid shadow" width="400" style="border-radius: 15px;">
                </div>
            </div>
        </div>
        <!-- // container end -->
    </section>
    <!-- //. Hero Section -->

    <!-- Working Experiences -->
    <section class="py-5" id="experience">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <p class="text-uppercase"><strong>Job Experiences</strong></p>
                    <h1 style="font-size: 52px;" class="mb-5">The best I can do in my position <br> is <span class="text-orange">what I promise to do.</span></h1>
                </div>

                <div class="col-md-12">

                    <div class="card shadow">
                        <div class="card-header text-white pt-3">
                            <h5 class="m-0">HAMKO ICT Limited</h5>
                            <small>Web Application Developer</small>
                            <small class="m-0">(December 2023 – Present)</small>
                        </div>
                        <div class="card-body">
                            <b>Responsibilities:</b>
                            <ol>
                                <li><b>Developing Web Applications: </b>Designing, coding, and modifying web applications using PHP
                                and Laravel framework.</li>
                                <li> <b>Database Management:</b> Creating and maintaining the database schema, writing optimized
                                queries, and ensuring data integrity.</li>
                                <li> <b>Bug Fixing and Troubleshooting:</b> Identifying and resolving bugs, performance issues, and
                                other technical problems in web applications.</li>
                                <li> <b>API Development and Integration:</b> Building and integrating RESTful APIs to connect web
                                applications with external services and databases.</li>
                                <li> <b>Code Reviews and Quality Assurance:</b> Conducting code reviews to maintain code quality,
                                ensuring best practices, and performing unit testing.</li>
                                <li> <b>Version Control:</b> Using Git to manage codebase, collaborate with team members, and track
                                changes.</li>
                                <li> <b>Performance Optimization:</b> Analyzing and optimizing application performance, identifying
                                and implementing improvements</li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="card shadow mt-3">
                        <div class="card-header bg-orange text-white pt-3">
                            <h5 class="m-0">Codecell Limited</h5>
                            <small>Team Lead & Web Developer</small>
                            <small class="m-0">(July 2022 – November 2023)</small>
                        </div>
                        <div class="card-body">
                            <b>Responsibilities:</b>
                            <ol>
                                <li><b>Developing Web Applications: </b>Designing, coding, and modifying web applications using PHP
                                and Laravel framework.</li>
                                <li> <b>Database Management:</b> Creating and maintaining the database schema, writing optimized
                                queries, and ensuring data integrity.</li>
                                <li> <b>Bug Fixing and Troubleshooting:</b> Identifying and resolving bugs, performance issues, and
                                other technical problems in web applications.</li>
                                <li> <b>API Development and Integration:</b> Building and integrating RESTful APIs to connect web
                                applications with external services and databases.</li>
                                <li> <b>Front-end Development:</b> Collaborating with front-end developers to integrate server-side
                                logic with the user interface.</li>
                                <li> <b>Code Reviews and Quality Assurance:</b> Conducting code reviews to maintain code quality,
                                ensuring best practices, and performing unit testing.</li>
                                <li> <b>Version Control:</b> Using Git to manage codebase, collaborate with team members, and track
                                changes.</li>
                                <li> <b>Keeping Up with Industry Trends:</b> Staying updated with the latest PHP, Laravel, and web
                                    development trends, tools, and best practices</li>
                                <li> <b>Performance Optimization:</b> Analyzing and optimizing application performance, identifying
                                and implementing improvements</li>
                                <li> <b>Team Lead:</b> In charge of a web developer team, ensuring that their work is ready and that assets are created for the company.</li>
                            </ol>
                        </div>
                    </div>


                    <div class="card shadow mt-3">
                        <div class="card-header bg-orange text-white pt-3">
                            <h5 class="m-0">DS Legends Pvt. Ltd.</h5>
                            <small>Laravel Developer</small>
                            <small class="m-0">(January 2022 – June 2022)</small>
                        </div>
                        <div class="card-body">
                            <b>Responsibilities:</b>
                            <ol>
                                <li><b>Developing Web Applications: </b>Designing, coding, and modifying web applications using PHP
                                and Laravel framework.</li>
                                <li> <b>Front-end Development:</b> Design the responsive user interface using HTML, CSS and Bootstrap.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Working Experiences -->

    <!-- Skills -->
    <section class="py-5" id="experties">
        <div id="icons">
            <img src="{{asset("assets/icons/php-icon.png")}}" alt="php" id="php-icon" />
            <img src="{{asset("assets/icons/tailwind-icon.png")}}" alt="tailwind" id="tailwind-icon" />
            <img src="{{asset("assets/icons/laravel-icon.png")}}" alt="laravel" id="laravel-icon" />
            <img src="{{asset("assets/icons/vue-icon.png")}}" alt="vue" id="vue-icon" />
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <p><strong>SKILLS</strong></p>
                    <h1 style="font-size: 52px;" class="mb-5">I am great in what I do <br> and <span class="text-orange">I am loving it</span></h1>
                </div>

                <div class="col-md-12">
                    <x-skills :skills="$skills" />
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
        <div class="container py-3">

            <div class="row align-items-center">
                <div class="col-md-12">
                    <p>PROJECTS</p>

                    <h1 style="font-size: 52px;">
                        I have worked over <span class="text-orange">20+ projects</span>
                    </h1>
                </div>
                <div class="col-md-12">
                    <x-projects :projects="$projects" />
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

                <div class="col-12">
                    <x-service/>
                </div>
            </div>
        </div>
    </section>
    <!-- // Services end -->


    <!-- Blogs -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="row gap-3 align-items-center">
                <div class="col-12 mb-4">
                    {{-- <p>Recent Blogs</p> --}}
                    <h1 style="font-size: 52px;">Recent <span class="text-orange">Articles</span> </h1>
                </div>

                <div class="col-12">
                    <div class="row">

                    @forelse ($blogs as $blog)
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="card shadow rounded-4">
                                <div class="card-body">
                                    <a href="{{url('/blogs/'.$blog->slug)}}"><img class="card-img-top rounded-top-4" src="{{asset($blog->thumbnail)}}" alt="thumbnail not found for blog#{{$blog->id}}" height="250" /></a>
                                    <div class="p-4">
                                        <h5>
                                            <a href="{{url('/blogs/'.$blog->slug)}}" class="text-orange text-decoration-none">{{$blog->title}}</a>
                                        </h5>
                                        
                                        <div class="text-muted my-3">
                                            <p class="m-0"> <i class="fa fa-calendar-days"></i> Published: {{$blog->created_at->format("M d, Y")}}</p>
                                            <p class="m-0"> <i class="fa fa-recycle"></i> Last Updated: {{$blog->updated_at->format("M d, Y")}}</p>
                                        </div>

                                        <a href="{{url('/blogs/'.$blog->slug)}}" class="mt-3 btn btn-orange px-4">Read More <i class="fa fa-angles-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        @for ($i=0; $i<3; $i++)
                            <div class="col-md-4 mb-5">
                                <div class="card shadow rounded-4">
                                    <div class="car-body">
                                        <img class="card-img-top rounded-top-4" src="{{asset("assets/blogs/web-hosting.jpg")}}" alt="web hosting feature image" />
                                        <div class="p-4">
                                            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam reiciendis neque voluptas unde dolorum official!</h5>
                                            
                                            <div class="text-muted my-3">
                                                <p class="m-0"> <i class="fa fa-calendar-days"></i> Published: {{now()->subdays(10)->format("M d, Y")}}</p>
                                                <p class="m-0"> <i class="fa fa-recycle"></i> Last Updated: {{now()->subdays(2)->format("M d, Y")}}</p>
                                            </div>

                                            <a href="javascript:alert('Coming soon! Stay with us.')" class="mt-3 btn btn-orange px-4">Read More <i class="fa fa-angles-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @endforelse

                    <div class="col-12 mt-4 text-center">
                        <a href="/blogs" class="btn btn-orange px-5">More <i class="bi bi-arrow-right"></i> </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Blogs end -->
@endsection