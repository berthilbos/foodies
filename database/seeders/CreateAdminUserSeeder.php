<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class CreateAdminUserSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
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
$role = Role::create(['name' => 'Admin']);
$permissions = Permission::pluck('id','id')->all();
$role->syncPermissions($permissions);
$user->assignRole([$role->id]);
}
}
