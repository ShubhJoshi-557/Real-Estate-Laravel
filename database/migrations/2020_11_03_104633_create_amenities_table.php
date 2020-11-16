<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->bigInteger('property_id')->unsigned();
            $table->string('parking');
            $table->string('security_services');
            $table->string('water_supply');
            $table->string('power_backup');
            $table->string('daily_maintenance');
            $table->string('wifi');
            $table->string('jogging_track');
            $table->string('lawn');
            $table->string('clubhouse');
            $table->string('pool');
            $table->string('gym');
            $table->string('party_hall');
            $table->string('temple');
            $table->string('school');
            $table->string('hospital');
            $table->string('station');
            $table->string('airport');
            $table->string('cinema_hall');
            $table->string('restaurants');
            
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
        Schema::dropIfExists('amenities');
    }
}
