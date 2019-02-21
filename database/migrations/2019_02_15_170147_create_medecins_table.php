<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedecinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * NOD:Numero d'odre des medecins
         * 
         */
        Schema::create('medecins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('qualification');
            $table->string('NOD');
            $table->string('tel');
            $table->string('adresse');
            $table->string('email');
            $table->string('bureau');
            $table->string('departement');
            $table->timestamps();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            
        });
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medecins');
    }
}
