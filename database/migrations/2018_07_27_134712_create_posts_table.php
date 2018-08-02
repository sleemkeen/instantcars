<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('frontimagecar');
            $table->string('backimagecar');
            $table->string('sideimagecar');
            $table->string('platenumber');
            $table->string('cartype');
            $table->string('carmodel');
            $table->string('year');
            $table->string('geartype');
            $table->string('location');
            $table->string('duration');
            $table->string('cardoc');
            $table->integer('uid');
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
        Schema::dropIfExists('posts');
    }
}
