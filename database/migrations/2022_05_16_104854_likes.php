<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Likes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id('like_id');
            //$table->unsignedBigInteger('like_educator');
            //$table->unsignedBigInteger('like_post');

            $table->boolean('like');
            $table->timestamps();

           // $table->foreign('like_educator')->references('educator_id')->on('educators')->onDelete('cascade');
           // $table->foreign('like_post')->references('post_id')->on('posts')->onDelete('cascade');



        });
 
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');

    }
}
