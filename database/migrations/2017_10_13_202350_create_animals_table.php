<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->enum('gender', ['male', 'female']);
            $table->integer('age');
            $table->integer('weight');
            $table->integer('purchasing_price');
            $table->integer('selling_price')->nullable();
            $table->string('supplier');
            $table->text('date_of_purchase');
            $table->text('date_of_sale')->nullable();
            $table->text('note')->nullable();
            $table->enum('health_status', ['fit', 'sick'])->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->string('img6')->nullable();
            $table->string('img7')->nullable();
            $table->string('img8')->nullable();
            $table->string('img9')->nullable();
            $table->string('img10')->nullable();
            $table->string('img11')->nullable();
            $table->string('img12')->nullable();
            $table->string('img13')->nullable();
            $table->string('img14')->nullable();
            $table->string('img15')->nullable();
            $table->string('img16')->nullable();
            $table->string('img17')->nullable();
            $table->string('img18')->nullable();
            $table->string('img19')->nullable();
            $table->string('Video')->nullable();
            $table->enum('situation', ['stopped', 'active', 'inactive ', 'sold ', 'deceased' ]);
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
        Schema::dropIfExists('animals');
    }
}
