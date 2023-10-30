<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposPagamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nomesPagamento = [
            ['nome' => 'Sem Pagamento'],
            ['nome' => 'Dinheiro'],
            ['nome' => 'Pix'],
            ['nome' => 'Débito'],
            ['nome' => 'Crédito'],
            ['nome' => 'Cheque'],
            ['nome' => 'Acordo'],
        ];

        DB::table('tipos_pagamento')->insert($nomesPagamento);
    }
}
