<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = FakerFactory::create();
        $students = DB::table('students')->pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            DB::table('grades')->insert([
                'student_id' => $faker->randomElement($students),
                'subject' => $faker->word(),
                'score' => $faker->numberBetween(0, 100),
                'date' => $faker->dateTimeThisMonth(),
            ]);
        }
    }
}
