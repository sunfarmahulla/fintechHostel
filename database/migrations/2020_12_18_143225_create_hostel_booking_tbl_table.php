<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelBookingTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_booking_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('profession');
            $table->string('gender');
            $table->unsignedBigInteger('hostel_connect_id');
            $table->foreign('hostel_connect_id')->references('id')->on('hostel_connect')->onDelete('cascade');
            $table->string('mark_as_read')->default('0');
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
        Schema::dropIfExists('hostel_booking_tbl');
    }
}
