<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateISTsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_s_ts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->string('reponse')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('prelevement_id');
            $table->foreign('prelevement_id')->references('id')->on('prelevements');
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
        Schema::dropIfExists('i_s_ts');
    }
}
