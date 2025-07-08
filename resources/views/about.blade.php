@extends('layouts.welcome')

@section('page_title', 'About')

@push('styles')
<style>
    p,li{
        font-size: 18px;
    }

    .about-me-container{
        position: relative;
        /* overflow: hidden; */
    }

    .about-me-container img{
        display: block;
        object-fit: cover;
    }

    .about-me-container .hi-overlay{
        position: absolute;
        top: 5px;
        left: 5px;
        bottom: 5px;
        right: 5px;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.7); /* semi-transparent black */
        display: flex;
        justify-content: center;
        align-items: center;
        color: rgb(248, 91, 0);
        font-size: 1.5rem;
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none; /* ensures image hover still works */
    }

    .about-me-container:hover .hi-overlay {
        opacity: 1;
    }
</style>
    
@endpush

@section('content')
    
    <x-welcome.page-header/>

    <!-- Form -->
    <section class="py-5">
        <div class="container py-5"> {{-- Container --}}
            <div class="row justify-content-around align-items-start"> <!-- Row -->

                {{-- Col-md-6 --}}
                <article class="col-md-9">
                    <section>
                        <p class="fs-5">👋Hi there! I'm</p>
                        <h1 class="text-orange">Md Shahidul Islam</h1>
                        <p class="text-muted mb-5">🚀 Expert Full-Stack Web Developer | {{ BasicInfo('experience') }} Years of Experience</p>

                        <p>
                            I’m a full-stack web developer and team leader from Bangladesh with more than {{ BasicInfo('experience')[0] }} years of hands-on experience. Over the years, I have worked on {{ BasicInfo('completed_projects') }} web projects for clients around the world. My focus is building clean, fast, and user-friendly websites and web applications that solve real problems.
                        </p>
                            
                        <p>
                            I’m skilled in PHP, Laravel, Vue.js, React.js, Node.js, MySQL, WordPress, Tailwind CSS, Bootstrap, Livewire, and JavaScript. I also work with CMS tools like Elementor and page builders. I help clients build business websites, SaaS platforms, eCommerce sites, booking systems, and more.
                        </p>
                    </section>

                    <section class="mt-5">
                        <h3 class="text-orange">My Role and Work History</h3>

                        <p> Right now, I’m working as a Web Application Developer at <a href="https://hamkoict.com.bd" target="__blank" class="text-orange">HAMKO ICT Limited</a>, where I build and maintain web apps using Laravel. I focus on building REST APIs, optimizing database queries, fixing bugs, and making sure everything runs smoothly.</p>

                        <p>Before that, I worked as a Team Lead at <a href="https://codecell.com.bd" class="text-orange" target="__blank">Codecell Ltd</a>., where I managed a team of developers. I was responsible for guiding the team, reviewing code, managing projects, and delivering client work on time.</p>

                        <p>Earlier, I worked at <a href="https://dsl.sg" target="__blank" class="text-orange">DS Legends Pvt. Ltd.</a> as a Laravel Developer, where I built full web applications from scratch.</p>
                    </section>

                    <section class="mt-5">
                        <h3 class="text-orange">What I Offer</h3>
                        <ul>
                            <li><strong>Web Design</strong> – Clean and responsive designs using Tailwind, Bootstrap, or custom CSS.</li>
                            <li><strong>Web Development</strong> – Full-stack development using Laravel, Vue, or React.</li>
                            <li><strong>WordPress Websites</strong> – Fast-loading, SEO-friendly business or blog sites.</li>
                            <li><strong>Custom API</strong> – Build and consume RESTful APIs.</li>
                            <li> <strong>Bug Fixes & Optimization</strong> – Debugging, performance tuning, and security fixes.</li>
                        </ul>
                    </section>

                    <section class="mt-5">
                        <h3 class="text-orange">My Completed Projects</h3>
                        <ul>
                            <li><strong>Lead Tracker</strong> – A sales and CRM platform for managing leads. Built with Laravel 10 and Vue 3.</li>
                            <li><strong>Mr Deal</strong> – An online shop for product listing and order management.</li>
                            <li><strong>Gokiiw SAAS</strong> – A smart queue management system to reduce wait times for customers.</li>
                            <li><strong>Esperazero Pay</strong> – A payment and transaction tracking system with secure user dashboards.</li>
                            <li><strong>Roof Top Explorer</strong> – A web booking system for rooftop tours with date and slot availability.</li>
                            <li><strong>Big R Driving</strong> – A driving school management app with course schedules, payment, and admin panel.</li>
                            <li><strong>Kelvin Okafor Art</strong> – A portfolio and e-commerce site for a UK-based artist, optimized for SEO.</li>
                            <li><strong>Fitness App & Website</strong> – Health advice and product selling platform for a London-based client.</li>
                            <li><strong>Kowri Payment Gateway Integration</strong> – Payment gateway integration in a Laravel system.</li>
                            <li><strong>Battery Master QA Library</strong> – Converted a large HTML-based Q&A library into a clean Bootstrap accordion format.</li>
                            <li><strong>Notice Board & Student List Plugin</strong> – WordPress plugin to add, edit, and show student lists and notices with a scrolling marquee.</li>
                            <li><strong>POS Printing Solution</strong> – Developed a custom printing solution for Android-based kiosk tablets (CITAQ V8).</li>
                            <li><strong>Stripe NFC Payment</strong> – Frontend payment using Stripe Terminal JavaScript SDK.</li>
                            <li><strong>Stripe Payment & History Logging</strong> – Created a flow to securely handle payments and store transaction history in a custom database model.</li>
                            <li><strong>Multitenancy in Laravel</strong> – Used tenancyforlaravel with a single database structure.</li>
                            <li><strong>OCR-based Business Card Reader</strong> – Extracted and formatted contact data using OCR in Laravel.</li>
                            <li><strong>FTP and SSH Git Deployment</strong> – Set up deployment workflows using Git branches over FTP/SSH.</li>
                        </ul>
                    </section>


                    <section class="mt-5">
                        <h3 class="text-orange">Why Choose Me</h3>
                        <p>I care about quality, deadlines, and making sure the client is happy. I always test my work and write clean, easy-to-maintain code. I work well in teams, and I’m comfortable taking the lead on big or small projects.</p>

                        <p>If you’re looking for a developer who is reliable, skilled, and easy to work with, I’m here to help.</p>
                    </section>
                </article>

                <div class="col-md-3">
                    <p class="h1">Find me</p>

                    <div class="about-me-container">
                        <img src="{{ asset('assets/img/md-shahidul-islam.jpg') }}" alt="Image of Md Shahidul Islam" class="img-fluid rounded-3" />
                        <div class="hi-overlay"> 
                            <span>👋Hi there!</span>
                        </div>
                    </div>

                    <section class="d-flex flex-column mt-5">
                        <p class="h4 mb-3">Email</p>   
                        <a class="text-orange" href="mailto:hello@mdshahidul.com">hello@mdshahidul.com</a>
                        <a class="text-orange" href="mailto:contact@mdshahidul.com">contact@mdshahidul.com</a>
                    </section>

                    <section class="d-flex flex-column mt-5">
                        <p class="h4">Social Media</p>   
                        <div class="d-flex gap-4">
                            <a href="{{ SocialMedia('linkedin') }}" target="_blank" class="text-orange text-decoration-none" title="Linkedin">
                                <i class="bi bi-linkedin h5"></i>
                            </a>
                            <a href="{{ SocialMedia('twitter') }}" target="_blank" class="text-orange text-decoration-none" title="X">
                                <i class="bi bi-twitter-x h5"></i>
                            </a>
                            <a href="{{ SocialMedia('github') }}" target="_blank" class="text-orange text-decoration-none" title="Github">
                                <i class="bi bi-github h5"></i>
                            </a>
                            <a href="{{ SocialMedia('whatsapp') }}" target="_blank" class="text-orange text-decoration-none" title="WhatsApp">
                                <i class="bi bi-whatsapp h5"></i>
                            </a>
                            <a href="{{ SocialMedia('instagram') }}" target="_blank" class="text-orange text-decoration-none" title="Instagram">
                                <i class="bi bi-instagram h5"></i>
                            </a>
                        </div>
                    </section>

                    <section class="d-flex flex-column mt-5">
                        <p class="h4">Blogging Site</p>
                        <p class="fs-6">I have recently started blogging about web development guideline where I share my programming experience with you. You can follow my website to learn web development</p>
                        <a href="https://learnwith.mdshahidul.com" target="__blank" class="text-orange" title="Learn With Me"> <i class="fa fa-globe"></i> Learn With Shahidul</a>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- // Form -->
@endsection
