<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operacoes extends Model
{
    //
    protected $fillable = ['valorOperacoes', 'tipoOperacoes','dataOperacoes', 'descricaoOperacoes', 
    'financeiro_id' ];
}
