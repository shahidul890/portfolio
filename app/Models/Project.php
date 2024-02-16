<?php

namespace App\Models;

class Project
{
    static function all(): array
    {
       return self::data();
    }


    

    /**
     * -----------------------------------------------
     *  Data Storage
     * -----------------------------------------------
     * 
     * @return array
     */
    static function data()
    {
        return [
            [
                "name" => "Esperazero Pay",
                "category" => "A solution for received payment",
                "images" => [
                    asset("assets/projects/esperazero.jpeg"),
                ],
                "technology" => ["Laravel 10", "Vue 3", "MySQL", "Tailwind CSS", "Preline"],
                "link" => "https://esperazero.live",
                "completed_date"  => "10 February, 2024",
                "active"=> true,
            ],
            [
                "name" => "Big R Drivig",
                "category" => "Learning Management System (LMS)",
                "images" => [
                    asset("assets/projects/bigrdriving.png"),
                ],
                "technology" => ["Laravel 10", "Vue 3", "MySQL", "Tailwind CSS", "HTML"],
                "link" => "https://bigrdriving.co.uk",
                "completed_date"  => "30 January, 2024",
                "active"=> true,
            ],
            [
                "name" => "Lead Tracker",
                "category" => "Lead Management",
                "images" => [
                    asset("assets/projects/lead/logo.png"),
                    asset("assets/projects/lead/login.png"),
                    asset("assets/projects/lead/dashboard.png"),
                    asset("assets/projects/lead/filter.png"),
                ],
                "technology" => ["Laravel 10", "Vue 3", "MySQL", "JavaScript", "jQuery", "Bootstrap 5"],
                "link" => "https://leads.highlycoded.com",
                "completed_date"  => "25 June, 2023",
                "active"=> true,
            ],
            [
                "name" => "Precision Driving Uk",
                "category" => "Schedule Management",
                "images" => [
                    asset("assets/projects/precision/logo.png"),
                    asset("assets/projects/precision/welcome.png"),
                    asset("assets/projects/precision/login.png"),
                    asset("assets/projects/precision/dashboard.png"),
                ],
                "technology" => ["Laravel 9", "MySQL", "JavaScript", "jQuery", "Bootstrap 5"],
                "link" => "https://precisiondriving.uk",
                "completed_date"  => "25 June, 2023",
                "active"=> true,
            ],
            [
                "name" => "All One Autos",
                "category" => "Car Management",
                "images" => [
                    asset("assets/projects/alloneautos.png")
                ],
                "technology" => ["Laravel 8", "MySQL", "JavaScript", "jQuery", "Bootstrap 5"],
                "link" => null,
                "completed_date"  => "25 June, 2023",
                "active"=> true,
            ],
            [
                "name" => "Mr Deal",
                "category" => "Ecommerce",
                "images" => [
                    asset("assets/projects/mrdeal.png")
                ],
                "technology" => ["Laravel 9", "MySQL", "JavaScript", "jQuery", "Bootstrap 4"],
                "link" => null,
                "completed_date"  => "25 June, 2023",
                "active"=> true,
            ],
            [
                "name" => "Gokiiw",
                "category" => "Queue Management",
                "images" => [
                    asset("assets/projects/gokiiw.png")
                ],
                "technology" => ["Laravel 7", "MySQL", "JavaScript", "jQuery", "Bootstrap 4"],
                "link" => "https://gokiiw.com",
                "completed_date"  => "25 June, 2023",
                "active"=> true,
            ],
            [
                "name" => "SV Kraft",
                "category" => "Ecommerce",
                "images" => [
                    asset("assets/projects/svkraft.png")
                ],
                "technology" => ["Laravel 8", "MySQL", "JavaScript", "jQuery", "Bootstrap 5"],
                "link" => null,
                "completed_date"  => "25 June, 2023",
                "active"=> true,
            ],
            [
                "name" => "My Bank My Loan",
                "category" => "Blog",
                "images" => [
                    asset("assets/projects/mybank-myloan.png")
                ],
                "technology" => ["Laravel 8", "MySQL", "JavaScript", "jQuery", "Bootstrap 5"],
                "link" => null,
                "completed_date"  => "01 March, 2023",
                "active"=> false,
            ],
            [
                "name" => "Promartket",
                "category" => "Cryto Market",
                "images" => [
                    asset("assets/projects/promarket.png")
                ],
                "technology" => ["Laravel 10", "MySQL", "JavaScript", "jQuery", "AJAX", "Rest APIs", "Bootstrap 5"],
                "link" => null,
                "completed_date"  => "01 October, 2023",
                "active"=> true,
            ],
            [
                "name" => "C Sports",
                "category" => "Live Broadcasting",
                "images" => [
                    asset("assets/projects/csports.png")
                ],
                "technology" => ["PHP", "Laravel 8", "MySQL", "JavaScript", "jQuery", "Bootstrap 5"],
                "link" => null,
                "completed_date"  => "02 Feb, 2023",
                "active"=> false,
            ],
            [
                "name" => "Sonagazi Govt College",
                "category" => "Institute Portfolio",
                "images" => [
                    asset("assets/projects/sgc.png")
                ],
                "technology" => ["PHP", "MySQL", "JavaScript", "jQuery", "Bootstrap 4"],
                "link" => "http://sonagazicollege.gov.bd",
                "completed_date"  => "25 Nov, 2020",
                "active"=> true,
            ]
        ];
    }
}