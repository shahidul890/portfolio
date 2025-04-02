<?php

namespace App\Models;

class ProjectCollection
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
                "name" => "Biheco",
                "category" => "A Business Portolio",
                "type" => "WordPress Design",
                "images" => [
                    asset("assets/projects/biheco-home-full.jpeg"),
                ],
                "technology" => ["WordPress", "Elementor"],
                "link" => "https://biheco.org",
                "completed_date"  => "",
                "active"=> true,
                "description" => "Biheco is a business portfolio website that showcases the services and products offered by the company. It is designed to provide potential customers with an overview of the company's offerings and to encourage them to get in touch for more information. Technology used: WordPress, Elementor.",
            ],
            [
                "name" => "Stamp",
                "category" => "A Business Portolio",
                "type" => "WordPress Design",
                "images" => [
                    asset("assets/projects/stamp.jpeg"),
                ],
                "technology" => ["WordPress", "Elementor"],
                "link" => "https://stamp.pt",
                "completed_date"  => "",
                "active"=> true,
                "description" => "Stamp is a business portfolio website that showcases the services and products offered by the company. It is designed to provide potential customers with an overview of the company's offerings and to encourage them to get in touch for more information. Technology used: WordPress, Elementor.",
            ],
            [
                "name" => "Optim QMS",
                "category" => "A Queue Management Solution",
                "type" => "Custom SAAS Application",
                "images" => [
                    asset("assets/projects/optimqms-dashboard.jpeg"),
                ],
                "technology" => ["Laravel", "MySQL", "JavaScript", "Multitenancy"],
                "link" => "https://biheco.org",
                "completed_date"  => "",
                "active"=> true,
                "description" => "Optim QMS is a custom web application designed to manage queues and appointments for businesses. The platform allows users to create and manage queues, track customer flow, and optimize service delivery. It features a user-friendly interface and provides tools for managing queues effectively. Technology used: Laravel, MySQL, JavaScript.",
            ],
            [
                "name" => "Auchan Mobile",
                "category" => "Request Management System",
                "type" => "Custom Web Application",
                "images" => [
                    asset("assets/projects/adesonline-dashboard.jpeg"),
                ],
                "technology" => ["Laravel", "Tailwind CSS", "MySQL"],
                "link" => "https://auchan.pt",
                "completed_date"  => "",
                "active"=> true,
                "description" => "Auchan Mobile is a custom web application designed to manage requests and inquiries from their employees. The platform allows users to submit requests, track their status. It features a user-friendly interface and provides tools for managing employee interactions effectively. Technology used: Laravel, Tailwind CSS.",
            ],
            [
                "name" => "RhodesCoffeeCo",
                "category" => "A Business Profile",
                "type" => "Custom Web Design",
                "images" => [
                    asset("assets/projects/rhodescoffeeco-home.jpeg"),
                ],
                "technology" => ["Laravel 10", "Inertia JS", "Vue 3"],
                "link" => "https://rhodescoffeeco.com",
                "completed_date"  => "15 March, 2024",
                "active"=> true,
                "description" => "RhodesCoffeeCo is a custom web application that provides a platform for customers to order coffee online. The website features a user-friendly interface, allowing customers to browse the menu, select their desired items, and place orders with ease. Technology used: Laravel 10, Inertia JS, Vue 3.",
            ],
            [
                "name" => "Esperazero Pay",
                "category" => "A solution for received payment",
                "type" => "Custom Web Application",
                "images" => [
                    asset("assets/projects/esperazero.jpeg"),
                ],
                "technology" => ["Laravel 10", "Vue 3", "Tailwind CSS"],
                "link" => "https://esperazero.live",
                "completed_date"  => "10 February, 2024",
                "active"=> true,
                "description" => "Esperazero Pay is a custom web application that provides a solution for receiving payments online. The platform allows users to create payment links, manage transactions, and track their payment history. It is designed to be user-friendly and secure, making it easy for businesses to accept payments from customers. Technology used: Laravel 10, Vue 3, Tailwind CSS.",
            ],
            [
                "name" => "Big R Drivig",
                "category" => "Learning Management System (LMS)",
                "type" => "Custom Web Application",
                "images" => [
                    asset("assets/projects/bigr.png"),
                ],
                "technology" => ["Laravel 10", "Vue 3", "Tailwind CSS"],
                "link" => "https://bigrdriving.co.uk",
                "completed_date"  => "30 January, 2024",
                "active"=> true,
                "description" => "Big R Driving is a custom web application that serves as a Learning Management System (LMS) for driving instructors and students. The platform allows instructors to create and manage courses, track student progress, and provide feedback. Students can access course materials, complete assignments, and communicate with their instructors. Technology used: Laravel 10, Vue 3, Tailwind CSS.",
            ],
            [
                "name" => "Lead Tracker",
                "category" => "Lead Management",
                "type" => "Custom Web Application",
                "images" => [
                    asset("assets/projects/leadtracker-dashboard.png"),
                    asset("assets/projects/lead/logo.png"),
                    asset("assets/projects/lead/login.png"),
                    asset("assets/projects/lead/dashboard.png"),
                    asset("assets/projects/lead/filter.png"),
                ],
                "technology" => ["Laravel 10", "Vue 3", "MySQL"],
                "link" => "https://leads.highlycoded.com",
                "completed_date"  => "25 June, 2023",
                "active"=> true,
                "description" => "Lead Tracker is a custom web application designed to help businesses manage their leads and sales pipeline. The platform allows users to track leads, manage contacts, and monitor sales performance. It features a user-friendly interface and provides tools for filtering and analyzing lead data. Technology used: Laravel 10, Vue 3, MySQL.",
            ],
            [
                "name" => "Precision Driving Uk",
                "category" => "Schedule Management",
                "type" => "Custom Web Application",
                "images" => [
                    asset("assets/projects/precision/logo.png"),
                    asset("assets/projects/precision/welcome.png"),
                    asset("assets/projects/precision/login.png"),
                    asset("assets/projects/precision/dashboard.png"),
                ],
                "technology" => ["Laravel 9", "MySQL", "JavaScript"],
                "link" => "https://precisiondriving.uk",
                "completed_date"  => "25 June, 2023",
                "active"=> false,
                "description" => "Precision Driving UK is a custom web application designed to help driving instructors manage their schedules and appointments. The platform allows users to create and manage bookings, track student progress, and communicate with clients. It features a user-friendly interface and provides tools for managing schedules effectively. Technology used: Laravel 9, MySQL, JavaScript.",
            ],
            [
                "name" => "All One Autos",
                "category" => "Car Management",
                "type" => "Custom Web Application",
                "images" => [
                    asset("assets/projects/alloneautos.png")
                ],
                "technology" => ["Laravel 8", "MySQL", "JavaScript", "Bootstrap 5"],
                "link" => null,
                "completed_date"  => "25 June, 2023",
                "active"=> false,
                "description" => "All One Autos is a custom web application designed for car management and rents. The platform allows users to manage car listings, track inventory, and rent a car. It features a user-friendly interface and provides tools for managing car rent effectively. Technology used: Laravel 8, MySQL, JavaScript.",
            ],
            [
                "name" => "Mr Deal",
                "category" => "Ecommerce",
                "type" => "Custom Web Application",
                "images" => [
                    asset("assets/projects/mrdeal.png")
                ],
                "technology" => ["Laravel 9", "MySQL", "JavaScript", "Bootstrap 4"],
                "link" => null,
                "completed_date"  => "25 June, 2023",
                "active"=> false,
                "description" => "Mr Deal is a custom web application designed for ecommerce. The platform allows users to browse products, manage orders, and track inventory. It features a user-friendly interface and provides tools for managing ecommerce effectively. Technology used: Laravel 9, MySQL, JavaScript.",
            ],
            [
                "name" => "Gokiiw",
                "category" => "Queue Management",
                "type" => "Custom Web Application, SAAS Application",
                "images" => [
                    asset("assets/projects/gokiiw-dashboard.jpeg")
                ],
                "technology" => ["Laravel 7", "MySQL", "JavaScript", "Bootstrap 4"],
                "link" => "https://gokiiw.com",
                "completed_date"  => "25 June, 2023",
                "active"=> true,
                "description" => "SAAS Application for Queue Management. The platform allows users to manage queues, track customer flow, and optimize service delivery. It features a user-friendly interface and provides tools for managing queues effectively. Technology used: Laravel 7, MySQL, JavaScript.",
            ],
            [
                "name" => "Promartket",
                "category" => "Cryto Market",
                "type" => "Custom Web Application",
                "images" => [
                    asset("assets/projects/promarket.png")
                ],
                "technology" => ["Laravel 10", "MySQL", "JavaScript", "Rest APIs", "Bootstrap 5"],
                "link" => null,
                "completed_date"  => "01 October, 2023",
                "active"=> false,
                "description" => "Promartket is a custom web application designed for crypto market. The platform allows users to buy cryptocurrency prices and analyze market trends. It features a user-friendly interface and provides tools for managing crypto investments effectively. Technology used: Laravel 10, MySQL, JavaScript.",
            ],
            [
                "name" => "Sonagazi Govt College",
                "category" => "College Portfolio",
                "type" => "Custom Web Application",
                "images" => [
                    asset("assets/projects/sonagazicollege.gov.bd.jpeg")
                ],
                "technology" => ["Laravel", "MySQL", "JavaScript"],
                "link" => "http://sonagazicollege.gov.bd",
                "completed_date"  => "25 Nov, 2020",
                "active"=> true,
                "description" => "Sonagazi Govt College is a custom web application designed for college management. The platform allows users to manage college information in their portfolio. It features a user-friendly interface and provides tools for managing the website content. Technology used: Laravel, MySQL, JavaScript.",
            ]
        ];
    }
}