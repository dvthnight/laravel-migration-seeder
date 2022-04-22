<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train();

        $train->azienda = $faker->company();
        $train->stazione_partenza = $faker->city();
        $train->stazione_arrivo = $faker->city();
        $train->orario_partenza = $faker->time();
        $train->orario_arrivo = $faker->time();
        $train->numero_carrozze = $faker->numberBetween("1","50");
        $train->in_orario = $faker->numberBetween("0","1");
        $train->cancellato = $faker->numberBetween("0","1");

        $train->save();
    }
}
