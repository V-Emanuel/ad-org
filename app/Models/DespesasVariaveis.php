<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DespesasVariaveis extends Model
{
    use HasFactory;

    protected $table = 'depesas_variaveis';

    protected $fillable = [
        'resumo',
        'valor',
        'observacao',
        'balanco',
        'tipoPagamentoId'
    ];
}
