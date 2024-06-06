<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'nama' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 1,
            ],
            [
                'nama' => 'bendahara',
                'email' => 'bendahara@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 2,
            ],
        ]);
    }
}
