<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraitement2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traitement2s', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('contraceptionDuLendemain');
            $table->text('infosContraceptionDuLendemain');
            $table->boolean('preventionVIH');
            $table->text('infosPreventionVIH');
            $table->boolean('autre');
            $table->text('infosAutre');
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
        Schema::dropIfExists('traitement2s');
    }
}
