<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Service::insert($this->data());
    }

    protected function data(): array
    {
        return [
            [
                'icon' => '/assets/icons/web-design.jpg',
                'title' => 'WEB DESIGN',
                'short_desc' => ' Transform your online presence with my exceptional web design service. I crafts visually stunning and user-centric websites that captivate your audience. I focus on creating engaging user interfaces, seamless navigation, and captivating visuals to ensure your website not only looks incredible but also delivers an exceptional user experience. '
            ],
            [
                'icon' => '/assets/icons/web-development.jpg',
                'title' => 'WEB DEVELOPMENT',
                'short_desc' => "I will develop dynamic, responsive, and visually appealing websites tailored to your unique needs. Whether you're launching a new project, revamping an existing site, or starting an e-commerce venture. From sleek user interfaces to robust back-end functionality, I ensure that your website not only looks fantastic but also performs seamlessly across all devices"
            ],
            [
                'icon' => '/assets/icons/rest-api.jpg',
                'title' => 'REST API',
                'short_desc' => "Unlock the potential of your applications with REST API development service. I will serve robust and scalable APIs that facilitate seamless communication between different software systems. Whether you need to integrate third-party services, streamline data exchange, or empower your mobile apps that meet your specific requirements. "
            ]
        ];
    }
}
