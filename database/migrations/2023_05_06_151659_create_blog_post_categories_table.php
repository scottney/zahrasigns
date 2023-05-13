<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_number');
            $table->string('user_UUID');
            $table->string('blog_post_category_name');
            $table->string('blog_post_category_slug');
            $table->unsignedBigInteger('blog_post_category_number');
            $table->string('blog_post_category_UUID');
            $table->text('blog_post_category_description');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts_categories');
    }
};
