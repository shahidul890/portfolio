<?php

namespace App\Models;

class BasicInfo
{
    public static function all(): object
    {
        return (object)[
            'display_name' => 'Shahidul Islam',
            'full_name' => 'Md Shahidul Islam',
            'designation' => 'Full-Stack Web Developer',
            'designation_title' => 'Expert Full-Stack Web Developer',
            'completed_projects' => '36+',
            'experience' => '5+',
            'location' => 'Dhaka, Bangladesh',
            'hello_mail' => 'hello@mdshahidul.com',
            'contact_mail' => 'contact@mdshahidul.com',
            'support_mail' => 'support@mdshahidul.com',
            'phone' => '+880 1730 000 000',
            'social_media' => (object)[
                'facebook' => 'https://www.facebook.com/shahidul890',
                'twitter' => 'https://x.com/shahidul890',
                'linkedin' => 'https://www.linkedin.com/in/mdshahidul/',
                'pinterest' => 'https://www.pinterest.com/shahidul890/',
                'github' => 'https://github.com/shahidul890',
                'instagram' => 'https://www.instagram.com/mdshahidul.in',
                'youtube' => 'https://www.youtube.com/@learnwithshahidul',
                'whatsapp' => 'https://wa.me/+8801642742704?text=Hi%20there!%20I%20want%20to%20take%20your%20service.',
            ],
            'meta' => (object)[
                'title' => 'Md Shahidul Islam - Expert Full-Stack Web Developer | Laravel, MERN, WordPress',
                'description' => "Md Shahidul Islam - Expert Full-Stack Web Developer with 5+ years' experience. Specializes in Laravel, Vue.js, WordPress & full-stack development for top-tier web solutions.",
                'robots' => 'index, follow',
                'keywords' => 'Best web developer, Top 10 web developer, Best Laravel Developer, Best Web solution, Best web solution provider, Best Wordpress Developer, Top 10 freelancer, Best Freelancer in Bangladesh, Top 10 freelancer, Expert web developer',
                'author' => 'Md Shahidul Islam',
                'image' => asset('assets/img/md-shahidul-islam.jpg')
            ],
            'app_version' => "v4.0.0"
        ];
    }
}