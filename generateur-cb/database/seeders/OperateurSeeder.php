<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OperateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operateurs')->insert([
            [
                'code_operateur' => '1',
                'operateur' => 'Jean Baptiste',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_operateur' => '2',
                'operateur' => 'Eric',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_operateur' => '3',
                'operateur' => 'Hayk',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_operateur' => '4',
                'operateur' => 'Mohamed Ba',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_fournisseur' => '5',
                'fournisseur' => 'Modibo Togo',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_fournisseur' => '6',
                'fournisseur' => 'Papa Célestin',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
