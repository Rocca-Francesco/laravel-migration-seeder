<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain = new Train();
        $newTrain->azienda = 'Italo';
        $newTrain->stazione_partenza = 'Venezia';
        $newTrain->stazione_arrivo = 'Napoli';
        $newTrain->orario_di_partenza = '8:32:40';
        $newTrain->orario_di_arrivo = '14:27:10';
        $newTrain->codice_treno = 231413;
        $newTrain->stato = 'in orario';
        $newTrain->save();
    }
}
