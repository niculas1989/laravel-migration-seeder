<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
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
            $table->string('azienda', 12);
            $table->string('stazione_di_partenza', 12);
            $table->string('stazione_di_arrivo', 12);
            $table->time('orario_di_partenza', 0);
            $table->time('orario_di_arrivo', 0);
            $table->char('codice_treno', 6);
            $table->smallInteger('carrozze');
            $table->boolean('in_orario', 0);
            $table->boolean('cancellato', 0);

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
}
