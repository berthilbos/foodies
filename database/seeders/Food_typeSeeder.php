<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Food_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_types')->insert([
            'name' => 'Hippo',
        ]);

        DB::table('food_types')->insert([
            'name' => 'Local',
        ]);

        DB::table('food_types')->insert([
            'name' => 'Sea Food',
        ]);
    }
}
