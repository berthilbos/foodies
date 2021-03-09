<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Berthil',
            'last_name' => 'Bos',
            'email' => 'berthil@bos.com',
            'street' => 'dorpstraat',
            'house_number' => 1,
            'house_number_addition' => 'A',
            'postal_code' => '9702AA',
            'city' => 'Groningen',
            'phone' => '0612345678',
            'password' => bcrypt('welkom01'),

]);

$role = DB::table('roles')->where('name', 'customer')->first();
$user->assignRole([$role->id]);

$user = User::create([
    'first_name' => 'Admin',
    'last_name' => 'Admin',
    'email' => 'admin@gmail.com',
    'street' => 'dorpstraat',
    'house_number' => 3,
    'house_number_addition' => 'A',
    'postal_code' => '9701AA',
    'city' => 'Groningen',
    'phone' => '0612345678',
    'password' => bcrypt('111111111'),

]);

$role = DB::table('roles')->where('name', 'Admin')->first();
$user->assignRole([$role->id]);
    }
}
