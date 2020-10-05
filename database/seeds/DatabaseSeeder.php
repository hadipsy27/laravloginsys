<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // panggil hasil code seeder supaya di generate di db
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
