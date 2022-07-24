<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('admins')->insert([
            [
                'name' => 'admin',
                'email' => 'lehongphu18i1@gmail.com',
                'password' => bcrypt('123456789'),
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => 'user',
                'email' => 'leducphuc18i1@gmail.com',
                'phone' => '0389873097',
                'password' => bcrypt('123456789'),
            ]
        ]);

    }
}
