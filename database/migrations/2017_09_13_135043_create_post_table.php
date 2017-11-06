<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->integer('saves');
            $table->string('price');
            $table->string('priceIndex');
            $table->string('name');
            $table->string('desc');
            $table->string('rating');
            $table->string('features');
            $table->string('imageUrl');
            $table->integer('categoryId')->unsigned();
            $table->foreign('categoryId')->references('id')->on('category');
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
        Schema::dropIfExists('post');
    }
}
