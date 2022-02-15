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
        ]);
    }
}
