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
        Schema::table('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 12);
            $table->string('stazione_di_partenza', 12);
            $table->string('stazione_di_arrivo', 12);
            $table->dateTime('orario_di_partenza', 4)->unsigned();
            $table->dateTime('orario_di_arrivo', 4)->unsigned();
            $table->smallInteger('codice_treno', 4)->unsigned();
            $table->smallInteger('carrozze', 4)->unsigned();
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
