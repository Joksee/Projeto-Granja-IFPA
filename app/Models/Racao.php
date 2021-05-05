<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Racao extends Model
{
    //
    protected $fillable = ['nomeRacao','descricaoRacao','dataInicialRacao','dataFinalRacao','lote_id'];
}
