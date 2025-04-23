<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Learnsoft School ERP',
                'icon' => 'bi bi-house-door',
                'description' => 'A powerful school management ERP system for academic institutions.',
            ],
            [
                'name' => 'Luminary Church ERP',
                'icon' => 'bi bi-bank',
                'description' => 'An ERP system tailored for churches and religious organizations.',
            ],
            [
                'name' => 'Belio HR and Payroll',
                'icon' => 'bi bi-gear',
                'description' => 'HR management and payroll processing simplified.',
            ],
            [
                'name' => 'Chamacove ERP',
                'icon' => 'bi bi-people',
                'description' => 'A cooperative management ERP for SACCOs and investment groups.',
            ],
            [
                'name' => 'Lux Haven ERP',
                'icon' => 'bi bi-building',
                'description' => 'Property and real estate management ERP.',
            ],
            [
                'name' => 'TOPPOS POS',
                'icon' => 'bi bi-cash-register',
                'description' => 'Point of sale software with inventory and sales tracking.',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
