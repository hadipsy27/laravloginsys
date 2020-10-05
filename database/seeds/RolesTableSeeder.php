<?php

use Illuminate\Database\Seeder;
// add Role
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add this code
        Role::truncate();

        Role::create(['name'    => 'admin']);
        Role::create(['name'    => 'author']);
        Role::create(['name'    => 'user']);
    }
}
