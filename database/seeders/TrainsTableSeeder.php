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
        for ($i=0; $i < 100; $i++) { 
            $newTrain = new Train();
        $newTrain->azienda = $faker->randomElement(['Trenitalia', 'Italo']);
        $newTrain->stazione_partenza = $faker->randomElement(['Roma', 'Milano', 'Firenze', 'Torino', 'Venezia', 'Napoli']);
        $newTrain->stazione_arrivo = $faker->randomElement(['Roma', 'Milano', 'Firenze', 'Torino', 'Venezia', 'Napoli']);
        $newTrain->orario_di_partenza = $faker->time();
        $newTrain->orario_di_arrivo = $faker->time();
        $newTrain->codice_treno = $faker->randomNumber(7);
        $newTrain->stato = $faker->randomElement(['in orario', 'in ritardo', 'cancellato']);
        $newTrain->save();
        }
    }
}
