<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'code_article' => 'L',
                'article' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_article' => 'C',
                'article' => 'Câbles',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_article' => 'O',
                'article' => 'Ordinateurs',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_article' => 'Pc',
                'article' => 'Pc',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_article' => 'I',
                'article' => 'Imprimantes',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_article' => 'V',
                'article' => 'Variés',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
