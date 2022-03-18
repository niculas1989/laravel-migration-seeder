<?php

use Illuminate\Database\Seeder;

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = config('trains');

        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->azienda = $train['azienda'];
            $new_train->stazione_di_partenza = $train['stazione_di_partenza'];
            $new_train->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $new_train->orario_di_partenza = $train['orario_di_partenza'];
            $new_train->orario_di_arrivo = $train['orario_di_arrivo'];
            $new_train->codice_treno = $train['codice_treno'];
            $new_train->carrozze = $train['carrozze'];
            $new_train->in_orario = $train['in_orario'];
            $new_train->cancellato = $train['cancellato'];
            $new_train->save();
        }
    }
}
