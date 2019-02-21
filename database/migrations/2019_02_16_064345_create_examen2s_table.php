<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamen2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('taille');
            $table->string('poids');
            $table->string('tension');
            $table->string('temps_agression_examen_jours');
            $table->string('temps_agression_examen_heures');
            $table->string('position_du_patient_examen_gynecologique');
            $table->boolean('photo_prise');
            $table->integer('nombre_photo_prise');
            $table->boolean('dechirures_hymeneales');
            $table->boolean('examen_speculum');
            $table->boolean('toucher_vaginal');
            $table->boolean('examen_anuscope');
           
            $table->text('position_du_patient_examen_anal');
            $table->text('commentaire_examen_anal');
            $table->text('examen_buccal');
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
        Schema::dropIfExists('examen2s');
    }
}
