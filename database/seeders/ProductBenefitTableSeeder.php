<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductBenefit;

class ProductBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productsBenefit = [
            [
                'product_id' => 1,
                'tipe_mobil' => 'Jepang',
                'tahun' => '2020',
                'warna' => 'Putih',
                'seat' => 8,
            ],
            [
                'product_id' => 2,
                'tipe_mobil' => 'Indonesia',
                'tahun' => '2021',
                'warna' => 'Hitam',
                'seat' => 8,
            ],
            [
                'product_id' => 3,
                'tipe_mobil' => 'Korea',
                'tahun' => '2022',
                'warna' => 'Merah',
                'seat' => 8,
            ],
        ];

        ProductBenefit::insert($productsBenefit);
    }
}
