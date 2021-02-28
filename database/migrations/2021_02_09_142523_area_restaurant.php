<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AreaRestaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //   restaurant_postal_code
        Schema::create('area_restaurant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->unsignedBigInteger('area_id')->nullable();
            $table->unique(['restaurant_id', 'area_id']);

            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->foreign('area_id')->references('id')->on('areas');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
