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
    // il metodo up carica le modifiche e le colonne che si è creato 
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            // numero di colonne e di che tipo sono 
            $table->id();

            $table->string('azienda', 20);
            $table->string('stazione_di_partenza', 20);
            $table->string('stazione_di_arrivo', 20);
            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
            $table->string('codice_treno');
            $table->integer('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // il metodo down elimina le modifiche che hai creato con il metodo up 
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
