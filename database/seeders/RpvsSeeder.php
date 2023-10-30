<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RpvsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rpvs = [
            ['nome' => 'Sem implantação'],
            ['nome' => 'Aguardando Data'],
            ['nome' => 'RPV Expedida'],
            ['nome' => 'Sacar no RPV'],
            ['nome' => 'Já sacado'],
            ['nome' => 'Disponível para saque'],
        ];

        DB::table('rpvs')->insert($rpvs);
    }
}
