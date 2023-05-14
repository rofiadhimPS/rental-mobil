<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'Avanza',
                'slug' => 'avanza',
                'price' => 500,
                'icon' => '',
                'is_tersedia' => 1,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Toyota',
                'slug' => 'toyota',
                'price' => 500,
                'icon' => '',
                'is_tersedia' => 1,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Alphard',
                'slug' => 'alpahard',
                'price' => 500,
                'icon' => '',
                'is_tersedia' => 1,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        
        ];

        Product::insert($products);
    }
}
