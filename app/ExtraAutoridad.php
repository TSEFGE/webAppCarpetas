<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraAutoridad extends Model
{
    protected $table = 'extra_autoridad';

    protected $fillable = [
        'id', 'idCarpeta', 'idVariablesPersona', 'antiguedad', 'rango', 'horarioLaboral',
    ];
}
