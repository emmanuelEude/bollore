<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenAnalExternesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_anal_externes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->string('reponse')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('examen2_id');
            $table->foreign('examen2_id')->references('id')->on('examen2s');
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
        Schema::dropIfExists('examen_anal_externes');
    }
}
