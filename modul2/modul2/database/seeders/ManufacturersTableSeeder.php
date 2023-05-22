<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manufacturer;

class ManufacturersTableSeeder extends Seeder
{
    public function run()
    {
        Manufacturer::create([
            'brand' => 'Disney',
            'country' => 'USA',
            'contact_phone' => '546456567',
            'email' => 'disney@gmail.com',
        ]);

        Manufacturer::create([
            'brand' => 'Xiaomi',
            'country' => 'China',
            'contact_phone' => '305656456',
            'email' => 'info.xiaomi@xiaotsutsi.com',
        ]);
    }
}

