<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i = 20; $i++) {
            $train = new Train();
            $train->company = 'Italo';
            $train->departure_station = 'Italo';
            $train->arrival_station = 'Italo';
            $train->daparture_time = 'Italo';
            $train->arrival_time = 'Italo';
            $train->train_code = 'Italo';
            $train->carriage_number = 'Italo';
            $train->in_time = 'Italo';
            $train->cancelled = 'Italo';
            $train->save();
        }
    }
}


