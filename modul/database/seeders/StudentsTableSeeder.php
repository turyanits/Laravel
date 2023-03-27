<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name(),
                'course' => $faker->numberBetween(1, 5),
                'specialty' => $faker->word(),
            ]);
        }
    }
}
