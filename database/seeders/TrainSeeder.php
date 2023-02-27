<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i <= 10; $i++) {

            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arival_time = $faker->time();
            $new_train->train_code = $faker->numerify();
            $new_train->wagon_length = $faker->randomNumber(5, true);
            $new_train->in_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();
            $new_train->save();
        }
    }
}
