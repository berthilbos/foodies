<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name' => 'meat',

        ]);
        DB::table('ingredients')->insert([
            'name' => 'potatoes',

        ]);
        DB::table('ingredients')->insert([
            'name' => 'fish',

        ]);

    }
}
