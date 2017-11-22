<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagsMap', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('tagId')->unsigned();
            $table->foreign('tagId')->references('id')->on('tags');

            $table->integer('postId')->unsigned();
            $table->foreign('postId')->references('id')->on('post');

            $table->integer('itemsCount')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagsMap');
    }
}
