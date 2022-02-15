<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PaysSeeder;
use Database\Seeders\ArticleSeeder;
use Database\Seeders\OperateurSeeder;
use Database\Seeders\FournisseurSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PaysSeeder::class,
            FournisseurSeeder::class,
            ArticleSeeder::class,
            OperateurSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
