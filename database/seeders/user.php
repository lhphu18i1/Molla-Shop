<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Nguyễn Văn An', 'phone'=>'0388123456', 'email' => 'an@gmail.com', 'password' => bcrypt('12345678')],
            ['id' => 2, 'name' => 'Nguyễn Thị Nga','phone'=>'0388456789', 'email' => 'nga@gmail.com', 'password' => bcrypt('12345678')],
            ['id' => 3, 'name' => 'Nguyễn Thị Hoa', 'phone'=>'0388987456', 'email' => 'hoa@gmail.com', 'password' => bcrypt('12345678')],
        ]);
    }
}
