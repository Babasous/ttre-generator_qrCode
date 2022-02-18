<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pays')->insert([
            [
                'code_pays' => 'BE',
                'pays' => 'Belgique',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'FR',
                'pays' => 'France',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'LU',
                'pays' => 'Luxembourg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'DE',
                'pays' => 'Allemagne',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'DK',
                'pays' => 'Danemark',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'BG',
                'pays' => 'Bulgarie',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'IE',
                'pays' => 'Irlande',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'EE',
                'pays' => 'Estonie',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'CH',
                'pays' => 'Suisse',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'UK',
                'pays' => 'Royaume Uni',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
