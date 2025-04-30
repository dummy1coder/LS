<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('demos')->truncate();

        $demos = [
            ['name' => 'School', 'icon' => 'school', 'url' => 'https://learnsoftbeliotechsolutions.co.ke/'],
            ['name' => 'Church', 'icon' => 'church', 'url' => 'https://learnsoftbeliotechsolutions.co.ke/'],
            ['name' => 'Library', 'icon' => 'library', 'url' => 'https://learnsoftbeliotechsolutions.co.ke/'],
            ['name' => 'Point of Sale', 'icon' => 'shopping-cart', 'url' => 'https://learnsoftbeliotechsolutions.co.ke/'],
            ['name' => 'Rentals', 'icon' => 'home', 'url' => 'https://learnsoftbeliotechsolutions.co.ke/'],
            ['name' => 'Spa', 'icon' => 'spa', 'url' => 'https://learnsoftbeliotechsolutions.co.ke/'],
            ['name' => 'Hr & Payroll', 'icon' => 'user-tie', 'url' => 'https://learnsoftbeliotechsolutions.co.ke/'],
            ['name' => 'Chama', 'icon' => 'users', 'url' => 'https://learnsoftbeliotechsolutions.co.ke/'],
        ];

        foreach ($demos as $demo) {
            DB::table('demos')->insert([
                'name' => $demo['name'],
                'slug' => Str::slug($demo['name']),
                'icon' => $demo['icon'],
                'url' => $demo['url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
        }
    }
}
    