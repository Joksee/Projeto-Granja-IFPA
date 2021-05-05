<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Financeiro extends Model
{
    //
    protected $fillable = ['mesFinanceiros', 'anoFinanceiros', 'saldoMesFinanceiros'];

    public function operacoes(){
        return $this->hasMany(Operacoes::class);
    }
}
