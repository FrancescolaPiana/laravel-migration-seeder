<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        $trains = config('dataseeder');
        // dd($trains);
        foreach ($trains as $train) {
            $newtrain = new Train();
            $newtrain->azienda = $train['azienda'];
            $newtrain->stazione_partenza = $train['stazionep'];
            $newtrain->stazione_arrivo = $train['staziones'];
            $newtrain->arrivo_ora = $train['orap'];
            $newtrain->partenza_ora = $train['oraa'];
            $newtrain->codice_treno = $train['codicetreno'];
            $newtrain->numero_carrozze = $train['carrozze'];
            $newtrain->puntuale = $faker->boolean();
            $newtrain->cancellato = $faker->boolean();
            $newtrain->save();
        }
    }
}