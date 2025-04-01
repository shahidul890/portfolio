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
            ]
        ];
    }
}