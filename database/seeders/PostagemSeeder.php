<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'user_id' => 1,
            'titulo' => 'Postagem 1',
            'descricao' => 'Descricao da postagem 1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'user_id' => 1,
            'titulo' => 'Postagem 2',
            'descricao' => 'Descricao da postagem 2',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 3,
            'user_id' => 1,
            'titulo' => 'Postagem 3',
            'descricao' => 'Descricao da postagem 3',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'user_id' => 1,
            'titulo' => 'Postagem 4',
            'descricao' => 'Descricao da postagem 4',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'user_id' => 1,
            'titulo' => 'Postagem 5',
            'descricao' => 'Descricao da postagem 5',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 3,
            'user_id' => 1,
            'titulo' => 'Postagem 6',
            'descricao' => 'Descricao da postagem 6',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'user_id' => 2,
            'titulo' => 'Postagem 7',
            'descricao' => 'Descricao da postagem 7',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'user_id' => 2,
            'titulo' => 'Postagem 8',
            'descricao' => 'Descricao da postagem 8',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 3,
            'user_id' => 2,
            'titulo' => 'Postagem 9',
            'descricao' => 'Descricao da postagem 9',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'user_id' => 2,
            'titulo' => 'Postagem 10',
            'descricao' => 'Descricao da postagem 10',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'user_id' => 2,
            'titulo' => 'Postagem 11',
            'descricao' => 'Descricao da postagem 11',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 3,
            'user_id' => 2,
            'titulo' => 'Postagem 12',
            'descricao' => 'Descricao da postagem 12',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
