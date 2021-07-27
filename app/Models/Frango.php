<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frango extends Model
{
    //
    protected $fillable = ['corFrangos', 'subespecieFrangos', 'sexoFrangos', 
        'quantFrangos','estadoFrangos', 'valorFrangos', 'lote_id'];
}
