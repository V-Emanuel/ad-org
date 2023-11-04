<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DespesasFixas extends Model
{
    use HasFactory;

    protected $table = 'depesas_fixas';

    protected $fillable = [
        'resumo',
        'valor',
        'observacao',
        'balanco',
        'tipoPagamentoId'
    ];
}
