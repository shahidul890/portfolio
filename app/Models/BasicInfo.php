<?php

namespace App\Models;

class BasicInfo
{
    public static function all(): object
    {
        return (object)[
            'display_name' => 'Shahidul Islam',
            'full_name' => 'Md Shahidul Islam',
            'designation' => 'Web Application Developer',
            'designation_title' => 'A Professional Web Developer',
            'completed_projects' => '30+',
            'experience' => '5+',
            'location' => 'Dhaka, Bangladesh',
            'hello_mail' => 'hello@mdshahidul.com',
            'contact_mail' => 'contact@mdshahidul.com',
            'support_mail' => 'support@mdshahidul.com',
            'phone' => '+880 1730 000 000',
            'social_media' => (object)[
                'facebook' => 'https://www.facebook.com/shahidul.islam.official',
                'twitter' => 'https://twitter.com/shahidul_islam',
                'linkedin' => 'https://www.linkedin.com/in/shahidul-islam-1a0b4a1b0/',
                'pinterest' => 'https://www.pinterest.com/shahidulislam/',
                'github' => 'https://github.com/shahidul890',
                'instagram' => 'https://www.instagram.com/shahidul_islam_890/',
                'youtube' => 'https://www.youtube.com/@shahidulislam890',
            ],
            'meta' => (object)[
                'title' => 'Md Shahidul Islam - Expert Web Developer | Laravel, Vue.js, WordPress',
                'description' => 'Md Shahidul Islam - Expert Web Developer with 5+ years of experience, specializing in Laravel, Vue.js, and WordPress. He delivers high-quality web solutions, and full-stack development with seamless deployment to meet client needs.',
                'robots' => 'index, follow',
                'keywords' => 'Shahidul Islam, Md Shahidul, Web Developer, WordPress Developer, Web Application Developer, Professional Web Developer, Freelance Web Developer, WordPress Expert, Custom Web Applications, SAAS development, Multitenant Applications, Business Website Development, API integration',
                'author' => 'Md Shahidul Islam',
                'image' => asset('assets/img/md-shahidul-islam.jpg')
            ]
        ];
    }
}