<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Mobile phone',
            'manufacturer' => 'Xiaomi',
            'price' => 3.99,
            'manufacturing_date' => '2018-05-20',
        ]);

        Product::create([
            'name' => 'Darth Vader toy',
            'manufacturer' => 'Disney',
            'price' => 19.99,
            'manufacturing_date' => '2015-02-08',
        ]);
    }
}

