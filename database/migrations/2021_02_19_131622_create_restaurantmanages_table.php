<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantmanagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantmanages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('restaurant_type_id')->unsigned()->nullable();
            $table->string('restaurant_name', 255);
            $table->string('email');
            $table->string('street');
            $table->unsignedInteger('house_number');
            $table->string('house_number_addition', 20)->nullable();
            $table->string('postal_code');
            $table->string('city',80);
            $table->string('phone', 15);
            $table->timestamps();

            $table->foreign('restaurant_type_id')
                ->references('id')
                ->on('restaurant_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurantmanages');
    }
}
