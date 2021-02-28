<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'products' => 'pizza',
            'total_price' => 7.50,
            'comments' => null,
        ]);
        DB::table('orders')->insert([
            'products' => 'hamburger',
            'total_price' => 5.50,
            'comments' => null,
        ]);
        DB::table('orders')->insert([
            'products' => 'spaghetti',
            'total_price' => 6.50,
            'comments' => null,
        ]);

    }
}
