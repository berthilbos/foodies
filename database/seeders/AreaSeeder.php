<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'area' => '97',
        ]);
        DB::table('areas')->insert([
            'area' => '97',
            ]);
        DB::table('areas')->insert([
            'area' => '17',
        ]);
    }
    
}
