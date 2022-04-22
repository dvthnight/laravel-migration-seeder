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
        $train = new Train();

        $train->azienda = "Italo";
        $train->stazione_partenza = "Milano";
        $train->stazione_arrivo = "Roma";
        $train->orario_partenza = "9.30";
        $train->orario_arrivo = "11.35";
        $train->numero_carrozze = 11;
        $train->in_orario = true;
        $train->cancellato = false;

        $train->save();
    }
}
