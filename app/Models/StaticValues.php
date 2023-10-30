<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticValues extends Model
{
    use HasFactory;
    protected $table = 'table_generica';
    protected $fillable = ['nome'];

}
