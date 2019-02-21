<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCirconstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circonstances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lieu');
            $table->date('date');
            $table->time('heure');
            $table->boolean('personnesMultiple');
            $table->boolean('inconnu'); 
            $table->string('identiteAgresseur');
            $table->string('relationAgresseur');
            $table->string('contraintePhysique');
            $table->text('descriptionContraintePhysique');
            $table->string('contraintePsychologique');
            $table->text('descriptionContraintePsychologique');
            $table->text('soumissionChimique');
            $table->string('consomationAlcool');
            $table->text('infosConsomationAlcool');
            $table->string('consomationMedocs');
            $table->text('infosConsomationMedocs');
            $table->string('consomationStupefiant');
            $table->text('infosConsomationStupefiants');
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
        Schema::dropIfExists('circonstances');
    }
}
