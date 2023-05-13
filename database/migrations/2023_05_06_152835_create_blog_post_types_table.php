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
        Schema::create('blog_post_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_number');
            $table->string('user_UUID');
            $table->unsignedBigInteger('blog_post_type_number');
            $table->string('blog_post_type_UUID');
            $table->unsignedBigInteger('blog_post_category_id');
            $table->unsignedBigInteger('blog_post_category_number');
            $table->string('blog_post_category_UUID');
            $table->string('blog_post_type_name');
            $table->string('blog_post_type_slug');
            $table->text('blog_post_type_description');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action');
            $table->foreign('blog_post_category_id')->references('id')->on('blog_post_categories')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_post_types');
    }
};
