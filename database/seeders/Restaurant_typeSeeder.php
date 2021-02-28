<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Restaurant_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant_types')->insert([
            'name' => 'Exotic',
        ]);

        DB::table('restaurant_types')->insert([
            'name' => 'Local',
        ]);

        DB::table('restaurant_types')->insert([
            'name' => 'Sea food',
        ]);
    }
}
