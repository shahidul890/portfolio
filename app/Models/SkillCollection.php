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
                "title" => "OOP",
                "width" => "70%",
                "icon" => asset("assets/icons/oop.jpg"),
                "active"=> true,
            ],
            [
                "title" => "VUE JS",
                "width" => "55%",
                "icon" => asset("assets/icons/vuejs.jpg"),
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
                "active"=> true,
            ],
            [
                "title" => "AJAX",
                "width" => "90%",
                "icon" => asset("assets/icons/ajax.jfif"),
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
                "active"=> true,
            ],
            [
                "title" => "HTML",
                "width" => "99%",
                "icon" => asset("assets/icons/html.png"),
                "active"=> true,
            ],
        ];
    }
}