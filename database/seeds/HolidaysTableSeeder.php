<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newholiday = new Holiday();
            $newholiday->name = $faker->name;
        }
    }
}
