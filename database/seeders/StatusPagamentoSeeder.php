<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nomePagamento = [
            ['nome' => 'Pago'],
            ['nome' => 'Não Pago'],
            ['nome' => 'Agendado'],
        ];

        DB::table('status_pagamento')->insert($nomePagamento);
    }
}
