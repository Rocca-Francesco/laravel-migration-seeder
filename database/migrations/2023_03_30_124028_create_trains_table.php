<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->enum('azienda', ['Trenitalia', 'Italo']);
            $table->enum('stazione_partenza', ['Roma', 'Milano', 'Firenze', 'Torino', 'Venezia', 'Napoli']);
            $table->enum('stazione_arrivo', ['Roma', 'Milano', 'Firenze', 'Torino', 'Venezia', 'Napoli']);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->unsignedInteger('codice_treno')->unique();
            $table->enum('stato', ['in orario', 'in ritardo', 'cancellato']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
