<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([

            'start' => '16:00',
            'stop' => '03:00',
        ]);
        DB::table('times')->insert([

            'start' => '14:00',
            'stop' => '02:00',
        ]);
        DB::table('times')->insert([

            'start' => '15:00',
            'stop' => '01:00',
        ]);

        DB::table('times')->insert([

            'start' => '12:00',
            'stop' => '22:30',
        ]);

        DB::table('times')->insert([

            'start' => '18:00',
            'stop' => '04:00',
        ]);

        DB::table('times')->insert([

            'start' => '13:00',
            'stop' => '06:00',
        ]);

    }
}
