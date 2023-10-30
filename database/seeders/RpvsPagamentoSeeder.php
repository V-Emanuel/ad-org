<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RpvsPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nomes = [
            ['nome' => 'RPV Emitida'],
            ['nome' => 'Aguardando'],
            ['nome' => 'RPV Expedida'],
            ['nome' => 'RPV Depositada'],
        ];

        DB::table('rpvs_pagamento')->insert($nomes);
    }
}
