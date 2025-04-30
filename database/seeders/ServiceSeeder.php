<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::insert([
            [
                'title' => 'Graphic Design',
                'icon' => 'fas fa-paint-brush',
                'description' => ' Learnsoft helps businesses, individuals, and organizations effectively convey messages, ideas, and branding through logo creation and branding to digital marketing materials, advertisements, and product packaging.'
            ],
            [
                'title' => 'Web Development',
                'icon' => 'fas fa-code',
                'description' => 'Learnsoft builds, maintains, and optimizes websites and web applications'
            ],
            [
                'title' => 'Apps Development',
                'icon' => 'fas fa-mobile-alt',
                'description' => ' Learnsoft Beliotech Solutions creates, designs, and maintains applications for mobile devices, desktops, or web platforms.'
            ],
            [
                'title' => 'SEO Optimization',
                'icon' => 'fas fa-search',
                'description' => 'Learnsoft Beliotech Solutions improves the visibility of a website or web page on search engines.'
            ]
        ]);
    }
}

