<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Lateralisation:Droitier ou gaucher
         */
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('sexe');
            $table->integer('age');
            $table->string('dateNaiss');
            $table->string('profession');
            $table->string('adresse');
            $table->string('tel');
            $table->string('situation');
            $table->string('lieuNaiss');
            $table->string('lateralisation');
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
        Schema::dropIfExists('patients');
    }
}
