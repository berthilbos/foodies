<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Area_restaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area_restaurant')->insert([
         
            'restaurant_id' => 1,
            'area_id' => 1,
        ]);


        DB::table('area_restaurant')->insert([
         
            'restaurant_id' => 2,
            'area_id' => 3,
        ]);


        DB::table('area_restaurant')->insert([
         
            'restaurant_id' => 3,
            'area_id' => 1,
        ]);

        DB::table('area_restaurant')->insert([
         
            'restaurant_id' => 4,
            'area_id' => 1,
        ]);

        DB::table('area_restaurant')->insert([
         
            'restaurant_id' => 5,
            'area_id' => 1,
        ]);

        DB::table('area_restaurant')->insert([
         
            'restaurant_id' => 6,
            'area_id' => 1,
        ]);

     

        
    }
}
