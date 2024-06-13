<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'data_inicio',
        'data_prazo',
        'data_conclusao',
        'titulo',
        'descricao',
        'status',
        'tipo'
    ];
}
