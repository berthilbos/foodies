<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class IngredientSeeder extends Seeder
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
            'name' => 'patatoes',

        ]);
        DB::table('ingredients')->insert([
            'name' => 'fish',

        ]);

    }
}
