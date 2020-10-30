<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelConnectImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_connect_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hostel_connect_id');
            $table->string('image_url')->default('default.jpg');
            $table->foreign('hostel_connect_id')->references('id')->on('hostel_connect')->onDelete('cascade');
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
        Schema::dropIfExists('hostel_connect_images');
    }
}
