@extends('layouts.welcome')

@section('page_title', 'About')

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
                            <li><strong>Emad Paribahan Pvt. Ltd.</strong> – A custom transportation management system for vehicle tracking and company management, allowing passengers to book bus tickets and companies to manage operations in one app. Built with Laravel, Vue.js, Livewire, and Tailwind CSS.</li>
                            <li><strong>MNN Doctors</strong> – A custom solution for managing doctor shifts and submitting management requests. Built with Livewire.</li>
                            <li><strong>Auchan Mobile</strong> – A custom solution for a company to manage their employee offers and benefits. Built with Laravel.</li>
                            <li><strong>Quad App</strong> – A custom PWA with all hr features where they can manage their employees. Built with React.JS and Node.JS.</li>
                            <li><strong>Lead Tracker</strong> – A custom CRM system for managing leads and sales pipelines. Built with Laravel 10 and Vue 3.</li>
                            <li><strong>Inventory Management System</strong> – A custom system for managing inventory and stock levels. Built with Laravel.</li>
                            <li><strong>School Management System</strong> – A custom SAAS application for managing student information, attendance, and grades. Built with Laravel.</li>
                            <li><strong>Mr Deal</strong> – A multi-vendor e-commerce platform for buying and selling products. Built with Laravel.</li>
                            <li><strong>Gokiiw SAAS</strong> – A smart queue management system to reduce wait times for customers. Built with Laravel.</li>
                            <li><strong>Esperazero Pay</strong> – A payment and transaction tracking system with secure user dashboards. Built with Laravel.</li>
                            <li><strong>Roof Top Explorer</strong> – A web booking system for rooftop tours with date and slot availability. Built with Laravel.</li>
                            <li><strong>Big R Driving</strong> – A driving school management app with course schedules, payment, and admin panel where instructors can manage their classes and students can book lessons. Built with Laravel, VueJS and Tailwind CSS.</li>
                            <li><strong>Kelvin Okafor Art</strong> – A portfolio and e-commerce site for a UK-based artist, optimized for SEO. Built with WordPress and Elementor.</li>
                            
                        </ul>
                    </section>

                    <section class="mt-5">
                        <h3 class="text-orange">Also have experienced in</h3>
                        <ul>
                            <li><strong>Facebook meta API.</strong> – Implementing Whatsapp API for messaging and notifications.</li>
                            <li><strong>Google API.</strong> – Integrating Google services such as Maps and Drive.</li>
                            <li><strong>AI Integration</strong> – Implementing AI solutions for various applications.</li>
                            <li><strong>Payment Gateway Integration</strong> – Stripe, PayPal, Paystack, Razorpay, Kowri and SSLCommerze.</li>
                            <li><strong>OCR</strong> – Optical Character Recognition for text extraction from images and documents.</li>
                            <li><strong>NFC</strong> – Near Field Communication for contactless payments and data transfer.</li>
                            <li><strong>Kiosk</strong> – Interactive kiosks for user engagement and information dissemination.</li>
                            <li><strong>POS</strong> – Point of Sale systems for retail and inventory management.</li>
                            <li><strong>Version Control</strong> – Git and GitHub for code management.</li>
                            <li><strong>Agile Methodologies</strong> – Scrum and Kanban for project management.</li>
                            <li><strong>SEO Best Practices</strong> – Ensuring websites are optimized for search engines.</li>
                            <li><strong>Performance Optimization</strong> – Techniques to improve website speed and user experience.</li>
                            <li><strong>Security Best Practices</strong> – Implementing security measures to protect applications from vulnerabilities.</li>
                            <li><strong>Responsive Design</strong> – Ensuring websites work well on all devices, including mobile and tablet.</li>
                            <li><strong>API Development</strong> – Building RESTful APIs for seamless integration with other services.</li>
                            <li><strong>Progressive Web Apps (PWA)</strong> – Building web applications that provide a native app-like experience.</li>
                            <li><strong>Internationalization (i18n)</strong> – Building applications that support multiple languages and regions.</li>
                        </ul>
                    </section>


                    <section class="mt-5">
                        <h3 class="text-orange">Why Choose Me</h3>
                        <p>I care about quality, deadlines, and making sure the client is happy. I always test my work and write clean, easy-to-maintain code. I work well in teams, and I’m comfortable taking the lead on big or small projects.</p>

                        <p>If you’re looking for a developer who is reliable, skilled, and easy to work with, I’m here to help.</p>
                    </section>
                </article>

                {{-- Col-md-3 --}}
                <x-find-me class="col-md-3" />
            </div>
        </div>
    </section>
    <!-- // Form -->
@endsection
