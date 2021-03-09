<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
/**
 * Run the database seeds.
 *
 * @return void
 */
public function run()
{

$role = Role::create(['name' => 'customer']);
$role->syncPermissions( 'restaurant-list');

$role = Role::create(['name' => 'Admin']);
$permissions = Permission::pluck('id','id')->all();
$role->syncPermissions($permissions);

}
}
