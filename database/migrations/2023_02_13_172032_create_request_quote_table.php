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
        Schema::create('request_quote', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_names');
            $table->string('email');
            $table->string('phone_number');
            $table->string('postal_code')->nullable();
            $table->string('quote');
            $table->string('file_upload')->nullable();
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
        Schema::dropIfExists('request_quote');
    }
};
