<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalSickTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('animal_sick', function (Blueprint $table) {
            $table->increments('id');
           $table->integer('sick_id')->unsigned();
           $table->foreign('sick_id')->references('id')->on('sicks');
           $table->integer('animal_id')->unsigned();
           $table->foreign('animal_id')->references('id')->on('animals');
           $table->text('recommendation')->nullable();
           $table->enum('isolation', ['yes', 'no']);
           $table->enum('result', ['healed', 'died', 'treatment'])->default('treatment');
           $table->enum('specialCare', ['yes', 'no']);
           $table->timestamps();
         //  $table->primary(['sick_id', 'animal_id']);
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::dropIfExists('animal_sick');

    }
}
