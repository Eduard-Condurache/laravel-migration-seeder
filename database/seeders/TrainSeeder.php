<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->agency = fake()->word();
            $train->departure_station = fake()->words(3, true);
            $train->arrival_station = fake()->words(3, true);
            $train->departure_time = fake()->time();
            $train->arrival_time = fake()->time();
            $train->train_code = fake()->randomNumber(5, true);
            $train->on_time = fake()->boolean();
            $train->canceled = fake()->boolean();

            $train->save();
        }
    }
}