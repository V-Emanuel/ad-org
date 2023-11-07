<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dividas extends Model
{
    use HasFactory;

    protected $table = 'dividas';

    protected $fillable = [
        'nome',
        'valor',
        'observacao',
        'statusPagamentoId'
    ];
}
