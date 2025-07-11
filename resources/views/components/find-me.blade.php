<div {{ $attributes->merge(['class' => 'find-me-container']) }}>
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
        <div class="d-flex gap-3">
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
             <a href="{{ SocialMedia('pinterest') }}" target="_blank" class="text-orange text-decoration-none" title="Pinterest">
                <i class="bi bi-pinterest h5"></i>
            </a>
        </div>
    </section>

    <section class="d-flex flex-column mt-5">
        <p class="h4">Blogging Site</p>
        <p>I have recently started blogging about web development guideline where I share my programming experience with you. You can follow my website to learn web development</p>
        <a href="https://learnwith.mdshahidul.com" target="__blank" class="text-orange" title="Learn With Me"> <i class="fa fa-globe"></i> Learn With Shahidul</a>
    </section>
</div>

@push('styles')
<style>
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