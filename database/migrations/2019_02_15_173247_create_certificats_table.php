<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * RJ:Requistion Judiciaire /oui ou non
         */
        Schema::create('certificats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->string('numero');
            $table->date('date');
            $table->time('heure');
            $table->string('lieu');
            $table->boolean('RJ');
            $table->string('recepteur')->nullable();
            $table->string('presents')->nullable();
            $table->unsignedInteger('medecin_id');
            $table->foreign('medecin_id')->references('id')->on('medecins');
            $table->unsignedInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->unsignedInteger('agression_id');
            $table->foreign('agression_id')->references('id')->on('agressions');
            $table->unsignedInteger('doleance_id');
            $table->foreign('doleance_id')->references('id')->on('doleances');
            $table->unsignedInteger('traitement_id');
            $table->foreign('traitement_id')->references('id')->on('traitements');
            $table->unsignedInteger('requisition_id');
            $table->foreign('requisition_id')->references('id')->on('requisitions');
            $table->unsignedInteger('examen_id');
            $table->foreign('examen_id')->references('id')->on('examens');
            $table->unsignedInteger('conclusion_id');
            $table->foreign('conclusion_id')->references('id')->on('conclusions');

            
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
        Schema::dropIfExists('certificats');
    }
}
