<?php

use Illuminate\Database\Seeder;
// use this model
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create code
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin')
        ]);

        $author = User::create([
            'name'      => 'Author',
            'email'     => 'author@author.com',
            'password'  => bcrypt('author')
        ]);

        $user = User::create([
            'name'      => 'User',
            'email'     => 'user@user.com',
            'password'  => bcrypt('user')
        ]);

        // create role
        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
