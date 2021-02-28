<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'password' => 'welkom01',
            'first_name' => 'Jon',
            'last_name' => 'Hogendorp',
            'email' => 'jon@hogendorp.nl',
            'street' => 'dorpstraat',
            'house_number' => 1,
            'house_number_addition' => 'A',
            'postal_code' => '9701AA',
            'city' => 'Groningen',
            'phone' => '0612345678',

        ]);

        DB::table('users')->insert([
            'password' => 'welkom01',
            'first_name' => 'Nart',
            'last_name' => 'Ibrahem',
            'email' => 'nart@ibrahem.nl',
            'street' => 'dorpstraat',
            'house_number' => 3,
            'house_number_addition' => 'A',
            'postal_code' => '9701AA',
            'city' => 'Groningen',
            'phone' => '0612345678',

        ]);

        DB::table('users')->insert([
            'password' => 'welkom01',
            'first_name' => 'Berthil',
            'last_name' => 'Bos',
            'email' => 'berthil@bos.nl',
            'street' => 'dorpstraat',
            'house_number' => 5,
            'house_number_addition' => 'A',
            'postal_code' => '9701AA',
            'city' => 'Groningen',
            'phone' => '0612345678',

        ]);
    }
}
