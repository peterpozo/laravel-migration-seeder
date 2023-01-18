<?php
use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i = 20; $i++) {
            $train = new train();
            $train->company = $faker->randomElement(['Italo', 'Trenitalia', 'Frecciarossa', 'Eurostar', 'Flixtrain']);
            $train->departure_station = $faker->city;
            $train->arrival_station= $faker->city;
            $train->departure_time = $faker->dateTime('now');
            $train->arrival_time = $faker->dateTime('now');
            $train->train_code = rand(25000, 70000);
            $train->carriages_number= rand(2, 15);
            $train->in_time = $faker->boolean;
            $train->cancelled = $faker->boolean;
            $train->save();
        }
    }
}


