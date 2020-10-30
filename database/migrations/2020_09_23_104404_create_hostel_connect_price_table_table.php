<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelConnectPriceTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_connect_price_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hostel_connect_id');
            $table->foreign('hostel_connect_id')->references('id')->on('hostel_connect')->onDelete('cascade');
            $table->string('actual_price');
            $table->string('discount_price')->nullable();
            $table->string('electricity_bill')->nullable();
            $table->string('water_bill')->nullable();
            $table->string('fooding')->nullable();
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
        Schema::dropIfExists('hostel_connect_price_table');
    }
}
