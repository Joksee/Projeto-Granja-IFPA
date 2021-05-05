<?php

namespace App\Models;

use App\Models\Frango;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lote extends Model
{
    //
    protected $fillable = ['localLotes', 'pesoInicialLotes', 'pesoMedioLotes', 
        'valorPagoLotes', 'dataInicialLotes','dataFinalLotes', 'statusLotes'];

    public function frangos(){
        return $this->hasMany(Frango::class);
    }
    
    public function vacinas(){
        return $this->hasMany(Vacina::class);
    }

    public function racaos(){
        return $this->hasMany(Racao::class);
    }
    
    
}
