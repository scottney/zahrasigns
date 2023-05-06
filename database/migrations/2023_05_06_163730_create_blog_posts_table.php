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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('user_name');
            $table->foreignId('blog_category_id');
            $table->unsignedBigInteger('blog_category_number');
            $table->string('blog_category_UUID');
            $table->unsignedBigInteger('blog_post_number')->unique();
            $table->string('blog_post_UUID')->unique();
            $table->string('blog_title')->unique();
            $table->string('blog_slug')->unique();
            $table->text('blog_body');
            $table->text('blog_excerpt')->nullable();
            $table->dateTime('blog_publish_time');
            $table->date('blog_publish_date');
            $table->string('blog_tags');
            $table->boolean('blog_is_featured')->default(false);
            $table->string('blog_status');
            $table->string('meta_title')->unique();
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->string('blog_featured_image');
            $table->string('created_by');
            $table->unsignedInteger('ratings')->default(0);
            $table->unsignedInteger('views')->default(0);
            $table->string('updated_by')->nullable();
            $table->unsignedInteger('number_of_times_updated')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action');
            $table->foreign('blog_category_id')->references('id')->on('blog_posts_categories')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
};
