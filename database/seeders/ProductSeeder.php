<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'restaurant_id' => 1,
            'food_name' => 'Pizza Hippo Meatlover',
            'size' => 'large',
            'price' => 10.50,

        ]);

        DB::table('products')->insert([
            'restaurant_id' => 1,
            'food_name' => 'Vegan Hippo Steak',
            'size' => 'large',
            'price' => 18.50,

        ]);

        DB::table('products')->insert([
            'restaurant_id' => 2,
            'food_name' => 'Stampot Avocado',
            'size' => 'large',
            'price' => 6.50,

        ]);

        DB::table('products')->insert([
            'restaurant_id' => 3,
            'food_name' => 'Nemo & chips',
            'size' => 'medium',
            'price' => 8.50,

        ]);

        DB::table('products')->insert([
            'restaurant_id' => 4,
            'food_name' => 'Well baked Snuitje with Fries',
            'size' => 'large',
            'price' => 10.50,

        ]);

        DB::table('products')->insert([
            'restaurant_id' => 4,
            'food_name' => 'My Little Mixed Pony Grill',
            'size' => 'Medium',
            'price' => 18.50,

        ]);

        DB::table('products')->insert([
            'restaurant_id' => 5,
            'food_name' => 'Korean Barbeque with Texas style BBQ sauce',
            'size' => 'large',
            'price' => 12.99,

        ]);
     
        DB::table('products')->insert([
            'restaurant_id' => 6,
            'food_name' => 'Manic Monday Steak and Mashed Potatoes',
            'size' => 'large',
            'price' => 16.50,

        ]);

    

    }
}
