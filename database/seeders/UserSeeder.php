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
            'name' => 'Josimar de Brito Silva - ADMIN',
            'email' => 'josimar_brito@hotmail.com',
            'password' => Hash::make('123456789'),
            'perfil' => 'admin',
        ]);

            DB::table('users')->insert([
            'name' => 'Guilherme Cleber do Nascimento',
            'email' => 'guilhermecleberjpa7@gmail.com',
            'password' => Hash::make('123456789'),
            'perfil' => 'admin',
        ]);

            DB::table('users')->insert([
            'name' => 'Ana Beatriz Barboza',
            'email' => 'beatrizbarboza@gmail.com',
            'password' => Hash::make('123456789'),
            'perfil' => 'admin',
            ]);

            DB::table('users')->insert([
            'name' => 'Josimar de Brito Silva 2 - PADRAO',
            'email' => 'josimar_brito2@hotmail.com',
            'password' => Hash::make('123456789'),
            'perfil' => 'padrao',
            ]);

            DB::table('users')->insert([
            'name' => 'Usuario Padrão - PADRAO',
            'email' => 'usuario@padrao.com',
            'password' => Hash::make('123456789'),
            'perfil' => 'padrao',
            ]);
        }
}
