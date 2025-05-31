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
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Josimar de Brito Silva',
            'email' => 'josimar_brito@hotmail.com',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'Josimar de Brito Silva 2',
            'email' => 'josimar_brito2@hotmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
