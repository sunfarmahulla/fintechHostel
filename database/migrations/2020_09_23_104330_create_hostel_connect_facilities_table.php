<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelConnectFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_connect_facilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hostel_connect_id');
            $table->foreign('hostel_connect_id')->references('id')->on('hostel_connect')->onDelete('cascade');
            $table->string('icon_tag')->nullable();
            $table->string('facility_name');
            $table->enum('activate',[0,1])->default(1); //1 indicate activate
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
        Schema::dropIfExists('hostel_connect_facilities');
    }
}
