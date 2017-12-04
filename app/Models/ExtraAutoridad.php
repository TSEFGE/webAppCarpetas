<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraAutoridad extends Model
{
    protected $table = 'extra_autoridad';

    protected $fillable = [
        'id', 'idCarpeta', 'idVariablesPersona', 'antiguedad', 'rango', 'horarioLaboral', 'narracion',
    ];

    public function carpeta()
    {
        return $this->belongsTo('App\Models\Carpeta');
    }

    public function variablesPersona()
    {
        return $this->belongsTo('App\Models\VariablesPersona');
    }
}
