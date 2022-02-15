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
                'code_operateur' => '01',
                'operateur' => 'Jean Baptiste',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_operateur' => '02',
                'operateur' => 'Eric',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_operateur' => '03',
                'operateur' => 'Hay',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_operateur' => '04',
                'operateur' => 'Mohamed Ba',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_fournisseur' => '05',
                'fournisseur' => 'Modibo Togo',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_fournisseur' => '06',
                'fournisseur' => 'Papa Célestin',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
