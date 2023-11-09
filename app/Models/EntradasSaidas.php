<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntradasSaidas extends Model
{
    use HasFactory;

    protected $table = 'entradas_saidas';

    protected $fillable = [
        'valorTotal',
        'observacao',
        'statusSaldoId',
    ];
}
