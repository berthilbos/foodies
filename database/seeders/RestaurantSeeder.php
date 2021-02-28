<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
/**
 * Run the database seeds.
 *
 * @return void
 */
public function run()
{
    DB::table('restaurants')->insert([
        'restaurant_name' => 'The Hungry Hippo',
        'restaurant_type_id' => 1,
        'time_id' => 1,
        'email' => 'hungry@hippo.nl',
        'street' => 'Dorpstraat',
        'house_number' => 2,
        'house_number_addition' => 'A1',
        'postal_code' => '9701AA',
        'city' => 'Groningen',
        'phone' => '0612345687',

    ]);

    DB::table('restaurants')->insert([
        'restaurant_name' => 'International House of Stampot',
        'restaurant_type_id' => 2,
        'time_id' => 2,
        'email' => 'iho@stamppot.nl',
        'street' => 'Dorpstraat',
        'house_number' => 4,
        'house_number_addition' => 'B1',
        'postal_code' => '1703AA',
        'city' => 'heerhugowaard',
        'phone' => '0612345687',

    ]);

    DB::table('restaurants')->insert([
        'restaurant_name' => 'Finding Nemo Fish & Chips',
        'restaurant_type_id' => 3,
        'time_id' => 3,
        'email' => 'finding@nemo.nl',
        'street' => 'Dorpstraat',
        'house_number' => 6,
        'house_number_addition' => 'C1',
        'postal_code' => '9703AA',
        'city' => 'Groningen',
        'phone' => '0612345687',
    
    ]);

    DB::table('restaurants')->insert([
            'restaurant_name' => 'My Little Baked Pony',
            'restaurant_type_id' => 1,
            'time_id' => 4,
            'email' => 'baked@pony.nl',
            'street' => 'Dorpstraat',
            'house_number' => 8,
            'house_number_addition' => 'A1',
            'postal_code' => '9701AA',
            'city' => 'Groningen',
            'phone' => '0612345687',

        ]);

    DB::table('restaurants')->insert([
            'restaurant_name' => 'Pyongyang North Korean/American Fusion',
            'restaurant_type_id' => 2,
            'time_id' => 5,
            'email' => 'iho@stamppot.nl',
            'street' => 'Dorpstraat',
            'house_number' => 10,
            'house_number_addition' => 'B1',
            'postal_code' => '1703AA',
            'city' => 'heerhugowaard',
            'phone' => '0612345687',

        ]);

    DB::table('restaurants')->insert([
            'restaurant_name' => 'TGI Monday!',
            'restaurant_type_id' => 3,
            'time_id' => 6,
            'email' => 'finding@nemo.nl',
            'street' => 'Dorpstraat',
            'house_number' => 12,
            'house_number_addition' => 'C1',
            'postal_code' => '9703AA',
            'city' => 'Groningen',
            'phone' => '0612345687',

    ]);
}
}
