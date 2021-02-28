<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('products');
            $table->decimal('total_price');

            $table->text('comments')->nullable();
            $table->timestamps();


            //foreign-keys
            $table->foreign('user_id')
            ->references('id')
            ->on('users');

            $table->foreign('restaurant_id')
            ->references('id')
            ->on('restaurants');

            $table->foreign('product_id')
            ->references('id')
            ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
