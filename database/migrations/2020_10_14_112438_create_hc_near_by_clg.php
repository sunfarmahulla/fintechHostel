<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHcNearByClg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hc_near_by_clg', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hostel_connect_id');
            $table->foreign('hostel_connect_id')->references('id')->on('hostel_connect')->onDelete('cascade');
            $table->unsignedBigInteger('college_id');
            $table->foreign('college_id')->references('id')->on('hostel_connect_college_names')->onDelete('cascade');
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
        Schema::dropIfExists('hc_near_by_clg');
    }
}
