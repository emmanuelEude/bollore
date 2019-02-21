<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agePremiereRegles');
            $table->date('dateDernieresRegles');
            $table->boolean('RapportSexuelleAvantAgression');
            $table->boolean('RapportSexuelleApresAgression');
            $table->boolean('UtilisationMoyenAnticonceptionnel');
            $table->date('dateDernieresRapportSexuelAvantAgression');
            $table->string('DernieresRapportSexuelAvantAgressionProteger');
            $table->date('dateDernieresRapportSexuelApresAgression');
            $table->string('DernieresRapportSexuelApresAgressionProteger');
            $table->boolean('prisePilluleReguliere');
            $table->string('VaccinationAntiHepatiteB');
            $table->string('AccoucementVoieBasse');
            $table->string('FausseCouche');
            $table->string('GrossesseEncours');
            $table->text('traitementActuel');
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
        Schema::dropIfExists('antecedents');
    }
}
