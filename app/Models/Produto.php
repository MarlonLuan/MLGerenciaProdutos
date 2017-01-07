<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'numero',
        'ativo',
        'categoria',
        'descricao'
    ];
    //protected $guarded = [];
}
