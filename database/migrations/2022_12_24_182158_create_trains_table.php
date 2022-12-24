<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 30);
            $table->string('stazione_arrivo', 30);
            $table->time('arrivo_ora');
            $table->time('partenza_ora');
            $table->string('codice_treno', 30);
            $table->tinyInteger('numero_carrozze');
            $table->boolean('puntuale', );
            $table->boolean('cancellato', )->default(false);
            $table->timestamps();

            // Azienda
// Stazione di partenza
// Stazione di arrivo
// Orario di partenza
// Orario di arrivo
// Codice Treno
// Numero Carrozze
// In orario
// Cancellato
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