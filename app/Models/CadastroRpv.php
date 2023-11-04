<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroRpv extends Model
{
    use HasFactory;

    protected $table = 'cadastro_rpv';

    protected $fillable = [
        'resumo',
        'valor',
        'observacao',
        'conteudo',
        'rpvId',
        'rpvPagamentoId',
    ];
}
