<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificat2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificat2s', function (Blueprint $table) {
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
            $table->unsignedInteger('circonstance_id');
            $table->foreign('circonstance_id')->references('id')->on('circonstances');
            $table->unsignedInteger('description_id');
            $table->foreign('description_id')->references('id')->on('descriptions');
            $table->unsignedInteger('fait_id');
            $table->foreign('fait_id')->references('id')->on('faits');
            $table->unsignedInteger('antecedent_id');
            $table->foreign('antecedent_id')->references('id')->on('antecedents');
            $table->unsignedInteger('traitement2_id');
            $table->foreign('traitement2_id')->references('id')->on('traitement2s');
            $table->unsignedInteger('r_d_v_id');
            $table->foreign('r_d_v_id')->references('id')->on('r_d_vs');
            $table->unsignedInteger('prelevement_id');
            $table->foreign('prelevement_id')->references('id')->on('prelevements');
            $table->unsignedInteger('doleance_id');
            $table->foreign('doleance_id')->references('id')->on('doleances');
            $table->unsignedInteger('appreciation_id');
            $table->foreign('appreciation_id')->references('id')->on('appreciations');
             $table->unsignedInteger('examen2_id');
            $table->foreign('examen2_id')->references('id')->on('examen2s');
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
        Schema::dropIfExists('certificat2s');
    }
}
