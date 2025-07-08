<?php

namespace App\Models;

class SkillCollection
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
                "title" => "PHP",
                "width" => "78%",
                "icon" => asset("assets/icons/php.png"),
                "active"=> true,
            ],
            [
                "title" => "Laravel",
                "width" => "86%",
                "icon" => asset("assets/icons/laravel.png"),
                "active"=> true,
            ],
            [
                "title" => "MY SQL",
                "width" => "60%",
                "icon" => asset("assets/icons/mysql.png"),
                "active"=> true,
            ],
            [
                "title" => "Node JS",
                "width" => "70%",
                "icon" => asset("assets/icons/nodejs.webp"),
                "active"=> true,
            ],
            [
                "title" => "VUE JS",
                "width" => "55%",
                "icon" => asset("assets/icons/vuejs.jpg"),
                "active"=> true,
            ],
            [
                "title" => "React JS",
                "width" => "55%",
                "icon" => asset("assets/icons/reactjs.png"),
                "active"=> true,
            ],
            [
                "title" => "Alpine JS",
                "width" => "70%",
                "icon" => asset("assets/icons/alpine-js.jpg"),
                "active"=> true,
            ],
            [
                "title" => "Inertia JS",
                "width" => "55%",
                "icon" => asset("assets/icons/inertia-js.png"),
                "active"=> true,
            ],
            [
                "title" => "Livewire",
                "width" => "55%",
                "icon" => asset("assets/icons/laravel-livewire.png"),
                "active"=> true,
            ],
            [
                "title" => "WordPress",
                "width" => "90%",
                "icon" => asset("assets/icons/wordpress.png"),
                "active"=> true,
            ],
            [
                "title" => "Elementor",
                "width" => "90%",
                "icon" => asset("assets/icons/elementor.png"),
                "active"=> true,
            ],
            [
                "title" => "Tailwind CSS",
                "width" => "74%",
                "icon" => asset("assets/icons/tailwindcss.webp"),
                "active"=> true,
            ],
            [
                "title" => "Javascript",
                "width" => "60%",
                "icon" => asset("assets/icons/javascript.jpg"),
                "active"=> true,
            ],
            [
                "title" => "jQuery",
                "width" => "92%",
                "icon" => asset("assets/icons/jquery.png"),
                "active"=> false,
            ],
            [
                "title" => "AJAX",
                "width" => "90%",
                "icon" => asset("assets/icons/ajax.jfif"),
                "active"=> false,
            ],
            [
                "title" => "Github",
                "width" => "95%",
                "icon" => asset("assets/icons/Github.png"),
                "active"=> true,
            ],
            [
                "title" => "Figma",
                "width" => "95%",
                "icon" => asset("assets/icons/Figma.png"),
                "active"=> true,
            ],
            [
                "title" => "REST Api",
                "width" => "95%",
                "icon" => asset("assets/icons/Rest API.png"),
                "active"=> true,
            ],
            [
                "title" => "LAMP Stack",
                "width" => "95%",
                "icon" => asset("assets/icons/lamp-stack.jpg"),
                "active"=> true,
            ],
            [
                "title" => "Bootstrap",
                "width" => "95%",
                "icon" => asset("assets/icons/bootstrap.png"),
                "active"=> true,
            ],
            [
                "title" => "CSS",
                "width" => "99%",
                "icon" => asset("assets/icons/css.png"),
                "active"=> false,
            ],
            [
                "title" => "HTML",
                "width" => "99%",
                "icon" => asset("assets/icons/html.png"),
                "active"=> false,
            ],
        ];
    }
}