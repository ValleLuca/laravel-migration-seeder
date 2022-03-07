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
            $newholiday->nome = $faker->name();
            $newholiday->email = $faker->email();
            $newholiday->destinazione = $faker->text(50);
            $newholiday->prezzo = $faker->randomNumber(3, true);
            $newholiday->pagamentocarte = $faker->creditCardType();

            $newholiday->save();
        }
    }
}
