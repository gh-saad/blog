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
            $table->id();
            $table->string('post_slug', 128)->unique();
            $table->string('post_title',128);
            $table->string('post_excerpt', 256)->nullable();
            $table->text('post_body')->nullable();;
            $table->string('post_img', 128)->nullable();;
            $table->unsignedBigInteger('post_author_id');
            $table->unsignedBigInteger('post_cat_id');
            $table->string('post_meta_title', 128)->nullable();
            $table->string('post_meta_desc', 128)->nullable();
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
