<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelConnectCollegeNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_connect_college_names', function (Blueprint $table) {
            $table->id();
            $table->string('state_name');
            $table->string('college_name');
            $table->string('college_address_1');
            $table->string('college_address_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('postel_id');
            $table->string('college_type');
            $table->string('college_logo_url')->nullable();
            $table->string('college_web_url')->nullable();
            $table->string('photo')->nullable();

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
        Schema::dropIfExists('hostel_connect_college_names');
    }
}
