<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSaldoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nomeStatusSaldo = [
            ['nome' => 'entrada'],
            ['nome' => 'saída'],
        ];

        DB::table('status_saldo')->insert($nomeStatusSaldo);
    }
}
