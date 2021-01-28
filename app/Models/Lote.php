<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    //
    protected $fillable = ['localLotes', 'pesoInicialLotes', 'pesoMedioLotes', 
        'valorPagoLotes', 'dataInicialLotes'];
}
