<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FournisseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fournisseurs')->insert([
            [
                'code_fournisseur' => '01',
                'fournisseur' => 'SPF Justice',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_fournisseur' => '02',
                'fournisseur' => 'SPF Finance',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_fournisseur' => '03',
                'fournisseur' => 'SPF Economie',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_fournisseur' => '04',
                'fournisseur' => 'SPF Santé',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_fournisseur' => '05',
                'fournisseur' => 'SPF Intérieur',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_fournisseur' => '06',
                'fournisseur' => 'SPF Office des étrangers',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
