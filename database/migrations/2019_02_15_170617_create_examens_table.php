<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tempsAgressionExamen');
            $table->boolean('presenceRepresentantLegal');
            $table->string('representantLegal')->nullable();
            $table->boolean('presenceInterprete');
            $table->string('interprete')->nullable();
            $table->boolean('presenceEtatAnterieur');
            $table->string('etatAnterieur')->nullable();
            $table->string('taille');
            $table->string('poids');
            $table->string('tension');
            $table->text('examenPhysique');
            $table->text('examenPsychique');
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
        Schema::dropIfExists('examens');
    }
}
