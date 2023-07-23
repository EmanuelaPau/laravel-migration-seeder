<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->leaving_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->leaving_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->numberBetween(0, 100);
            $newTrain->number_of_carts = $faker->numberBetween(5, 15);
            $newTrain->in_time = $faker->boolean();
            $newTrain->save();
        }
    }
}