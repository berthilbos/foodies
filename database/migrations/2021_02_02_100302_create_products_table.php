<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('food_type_id')->nullable();

            $table->string('food_name');
            $table->unsignedBigInteger('restaurant_id')->unsigned()->nullable();

            $table->enum('size', ['large', 'medium', 'small']);
            $table->decimal('price', );
            $table->timestamps();

            $table->foreign('food_type_id')
            ->references('id')
            ->on('food_types');

            $table->foreign('restaurant_id')
            ->references('id')
            ->on('restaurants');
            //Oncascade delete verwijderd- Anders verwijder je het restaurant als je het product verwijderd.

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
