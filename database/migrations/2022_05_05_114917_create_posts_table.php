<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigincrements('post_id');
            $table->unsignedBigInteger('post_counselor');
           // $table->bigInteger('comment_id');
            //$table->bigInteger('like_id');

            $table->string('counselor_name');
            $table->string('counselor_image');
            $table->integer('like_count');
            $table->integer('comment_count');
            $table->string('countent');
            $table->timestamps();

            $table->foreign('post_counselor')->references('id')->on('users')->onDelete('cascade');
;
           
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
