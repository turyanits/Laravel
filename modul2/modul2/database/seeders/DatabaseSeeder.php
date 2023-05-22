<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductsTableSeeder;
use Database\Seeders\ManufacturersTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ProductsTableSeeder::class);
        $this->call(ManufacturersTableSeeder::class);
    }
}
