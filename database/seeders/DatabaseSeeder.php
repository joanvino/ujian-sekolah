<?php

namespace Database\Seeders;

use App\Models\User;
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
        \App\Models\User::factory(10)->create();

        $userCreate = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'level'     => 'admin',
            'password'  => bcrypt('password')
        ]);
    }
}
